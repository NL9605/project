<?php
class CustomerModel {
    private $conn;

    public function __construct() {
        require 'app/configs/database.php';
        $this->conn = $conn;
    }

    public function getAllCustomers() {
        $stmt = $this->conn->query('SELECT * FROM customers');
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getCustomerById($id) {
        $stmt = $this->conn->prepare('SELECT * FROM customers WHERE id = :id');
        $stmt->execute(['id' => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function createCustomer($first_name, $last_name, $email, $phone, $address) {
        $stmt = $this->conn->prepare('INSERT INTO customers (first_name, last_name, email, phone, address) VALUES (:first_name, :last_name, :email, :phone, :address)');
        return $stmt->execute([
            'first_name' => $first_name,
            'last_name' => $last_name,
            'email' => $email,
            'phone' => $phone,
            'address' => $address
        ]);
    }

    public function updateCustomer($id, $first_name, $last_name, $email, $phone, $address) {
        $stmt = $this->conn->prepare('UPDATE customers SET first_name = :first_name, last_name = :last_name, email = :email, phone = :phone, address = :address WHERE id = :id');
        return $stmt->execute([
            'id' => $id,
            'first_name' => $first_name,
            'last_name' => $last_name,
            'email' => $email,
            'phone' => $phone,
            'address' => $address
        ]);
    }

    public function deleteCustomer($id) {
        $stmt = $this->conn->prepare('DELETE FROM customers WHERE id = :id');
        return $stmt->execute(['id' => $id]);
    }
}
?>
