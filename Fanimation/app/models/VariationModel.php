<?php
class VariationModel {
    private $conn;

    public function __construct() {
        require 'app/configs/database.php';
        $this->conn = $conn;
    }

    public function getAllVariations() {
        $stmt = $this->conn->query('SELECT * FROM variations');
        return $stmt->fetchAll();
    }

    public function getVariationById($id) {
        $stmt = $this->conn->prepare('SELECT * FROM variations WHERE id = :id');
        $stmt->execute(['id' => $id]);
        return $stmt->fetch();
    }

    public function createVariation($variation_name) {
        $stmt = $this->conn->prepare('INSERT INTO variations (variation_name) VALUES (:variation_name)');
        return $stmt->execute(['variation_name' => $variation_name]);
    }

    public function updateVariation($id, $variation_name) {
        $stmt = $this->conn->prepare('UPDATE variations SET variation_name = :variation_name WHERE id = :id');
        return $stmt->execute([
            'id' => $id,
            'variation_name' => $variation_name
        ]);
    }

    public function deleteVariation($id) {
        $stmt = $this->conn->prepare('DELETE FROM variations WHERE id = :id');
        return $stmt->execute(['id' => $id]);
    }
}
?>
