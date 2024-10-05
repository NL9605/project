<?php
class OrderModel {
    private $conn;

    public function __construct() {
        require 'app/configs/database.php';
        $this->conn = $conn;
    }

    public function getAllOrders() {
        $stmt = $this->conn->query('SELECT * FROM orders');
        return $stmt->fetchAll();
    }

    public function getOrderById($id) {
        $stmt = $this->conn->prepare('SELECT * FROM orders WHERE id = :id');
        $stmt->execute(['id' => $id]);
        return $stmt->fetch();
    }

    public function createOrder($customer_id, $total) {
        $stmt = $this->conn->prepare('INSERT INTO orders (customer_id, total) VALUES (:customer_id, :total)');
        return $stmt->execute([
            'customer_id' => $customer_id,
            'total' => $total
        ]);
    }

    public function updateOrder($id, $customer_id, $total) {
        $stmt = $this->conn->prepare('UPDATE orders SET customer_id = :customer_id, total = :total WHERE id = :id');
        return $stmt->execute([
            'id' => $id,
            'customer_id' => $customer_id,
            'total' => $total
        ]);
    }

    public function deleteOrder($id) {
        $stmt = $this->conn->prepare('DELETE FROM orders WHERE id = :id');
        return $stmt->execute(['id' => $id]);
    }
}
?>
