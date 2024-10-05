<?php
class ProductModel {
    private $conn;

    public function __construct() {
        require 'app/configs/database.php';
        $this->conn = $conn;
    }

    public function getAllProducts() {
        $stmt = $this->conn->query('SELECT * FROM products');
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getProductById($id) {
        $stmt = $this->conn->prepare('SELECT * FROM products WHERE id = :id');
        $stmt->execute(['id' => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function createProduct($name, $description, $price, $stock, $category_id, $size_id, $image) {
        $stmt = $this->conn->prepare('INSERT INTO products (name, description, price, stock, category_id, size_id, image) VALUES (:name, :description, :price, :stock, :category_id, :size_id, :image)');
        if ($stmt->execute([
            'name' => $name,
            'description' => $description,
            'price' => $price,
            'stock' => $stock,
            'category_id' => $category_id,
            'size_id' => $size_id,
            'image' => $image
        ])) {
            return true;
        } else {
            echo "Error in SQL execution: " . implode(", ", $stmt->errorInfo()); // Debug output
            return false; // Failure
        }
    }

    public function updateProduct($id, $name, $description, $price, $stock, $category_id, $size_id, $image) {
        $stmt = $this->conn->prepare('UPDATE products SET name = :name, description = :description, price = :price, stock = :stock, category_id = :category_id, size_id = :size_id, image = :image WHERE id = :id');
        return $stmt->execute([
            'id' => $id,
            'name' => $name,
            'description' => $description,
            'price' => $price,
            'stock' => $stock,
            'category_id' => $category_id,
            'size_id' => $size_id,
            'image' => $image
        ]);
    }

    public function deleteProduct($id) {
        $stmt = $this->conn->prepare('DELETE FROM products WHERE id = :id');
        return $stmt->execute(['id' => $id]);
    }
}
?>
