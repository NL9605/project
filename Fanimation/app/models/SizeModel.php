<?php
class SizeModel {
    private $conn;

    public function __construct() {
        require 'app/configs/database.php';
        $this->conn = $conn;
    }

    public function getAllSizes() {
        $stmt = $this->conn->query('SELECT * FROM sizes');
        return $stmt->fetchAll();
    }

    public function getSizeById($id) {
        $stmt = $this->conn->prepare('SELECT * FROM sizes WHERE id = :id');
        $stmt->execute(['id' => $id]);
        return $stmt->fetch();
    }

    public function createSize($size_name) {
        $stmt = $this->conn->prepare('INSERT INTO sizes (size_name) VALUES (:size_name)');
        return $stmt->execute(['size_name' => $size_name]);
    }

    public function updateSize($id, $size_name) {
        $stmt = $this->conn->prepare('UPDATE sizes SET size_name = :size_name WHERE id = :id');
        return $stmt->execute([
            'id' => $id,
            'size_name' => $size_name
        ]);
    }

    public function deleteSize($id) {
        $stmt = $this->conn->prepare('DELETE FROM sizes WHERE id = :id');
        return $stmt->execute(['id' => $id]);
    }
}
?>
