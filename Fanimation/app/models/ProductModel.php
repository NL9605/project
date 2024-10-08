<?php
class ProductModel {
    private $conn;

    public function __construct() {
        require 'app/configs/database.php';
        $this->conn = $conn;
    }

    public function getAllProducts() {
        $stmt = $this->conn->query('
        SELECT p.*, c.name AS category_name, s.size_name 
        FROM products p
        LEFT JOIN categories c ON p.category_id = c.id
        LEFT JOIN sizes s ON p.size_id = s.id
    ');
        return $stmt->fetchAll();
    }

    public function getProductById($id) {
        $stmt = $this->conn->prepare('SELECT * FROM products WHERE id = :id');
        $stmt->execute(['id' => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function createProduct($name, $description, $price, $stock, $category_id, $size_id, $color, $image) {
        $stmt = $this->conn->prepare('INSERT INTO products (name, description, price, stock, category_id, size_id, color, image) VALUES (:name, :description, :price, :stock, :category_id, :size_id, :color, :image)');
        return $stmt->execute([
            'name' => $name,
            'description' => $description,
            'price' => $price,
            'stock' => $stock,
            'category_id' => $category_id,
            'size_id' => $size_id,
            'color' => $color,
            'image' => $image
        ]);
    }

    public function updateProduct($id, $name, $description, $price, $stock, $category_id, $size_id, $color, $image) {
        $stmt = $this->conn->prepare('UPDATE products SET name = :name, description = :description, price = :price, stock = :stock, category_id = :category_id, size_id = :size_id, color = :color, image = :image WHERE id = :id');
        return $stmt->execute([
            'id' => $id,
            'name' => $name,
            'description' => $description,
            'price' => $price,
            'stock' => $stock,
            'category_id' => $category_id,
            'size_id' => $size_id,
            'color' => $color,
            'image' => $image
        ]);
    }

    public function deleteProduct($id) {
        $stmt = $this->conn->prepare('DELETE FROM products WHERE id = :id');
        return $stmt->execute(['id' => $id]);
    }

    public function categoryExists($category_id) {
        $stmt = $this->conn->prepare('SELECT COUNT(*) FROM categories WHERE id = :id');
        $stmt->execute(['id' => $category_id]);
        return $stmt->fetchColumn() > 0;
    }

    public function sizeExists($size_id) {
        $stmt = $this->conn->prepare('SELECT COUNT(*) FROM sizes WHERE id = :id');
        $stmt->execute(['id' => $size_id]);
        return $stmt->fetchColumn() > 0;
    }
}
?>