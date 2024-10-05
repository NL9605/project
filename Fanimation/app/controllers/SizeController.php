<?php
require_once 'app/models/SizeModel.php';

class SizeController {
    public function index() {
        $sizeModel = new SizeModel();
        $sizes = $sizeModel->getAllSizes();
        require_once 'app/views/size/index.php';
    }

    public function create() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $size_name = $_POST['size_name'];

            $sizeModel = new SizeModel();
            $sizeModel->createSize($size_name);

            header('Location: index.php?controller=SizeController&action=index');
            exit;
        }
        require_once 'app/views/size/create.php';
    }

    public function edit($id) {
        $sizeModel = new SizeModel();
        $size = $sizeModel->getSizeById($id);

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $size_name = $_POST['size_name'];

            $sizeModel->updateSize($id, $size_name);

            header('Location: index.php?controller=SizeController&action=index');
            exit;
        }
        require_once 'app/views/size/edit.php';
    }

    public function delete($id) {
        $sizeModel = new SizeModel();
        $sizeModel->deleteSize($id);
        header('Location: index.php?controller=SizeController&action=index');
        exit;
    }
}
?>
