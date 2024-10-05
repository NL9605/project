<?php
require_once 'app/models/VariationModel.php';

class VariationController {
    public function index() {
        $variationModel = new VariationModel();
        $variations = $variationModel->getAllVariations();
        require_once 'app/views/variation/index.php';
    }

    public function create() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $variation_name = $_POST['variation_name'];

            $variationModel = new VariationModel();
            $variationModel->createVariation($variation_name);

            header('Location: index.php?controller=VariationController&action=index');
            exit;
        }
        require_once 'app/views/variation/create.php';
    }

    public function edit($id) {
        $variationModel = new VariationModel();
        $variation = $variationModel->getVariationById($id);

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $variation_name = $_POST['variation_name'];

            $variationModel->updateVariation($id, $variation_name);

            header('Location: index.php?controller=VariationController&action=index');
            exit;
        }
        require_once 'app/views/variation/edit.php';
    }

    public function delete($id) {
        $variationModel = new VariationModel();
        $variationModel->deleteVariation($id);
        header('Location: index.php?controller=VariationController&action=index');
        exit;
    }
}
?>
