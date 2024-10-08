<?php
require_once 'app/models/CategoryModel.php';

class CategoryController {
    public function index() {
        $categoryModel = new CategoryModel();
        $categories = $categoryModel->getAllCategories();
        require_once 'app/views/category/index.php';
    }

    public function create() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST['name'];

            $categoryModel = new CategoryModel();
            $categoryModel->createCategory($name);

            header('Location: index.php?controller=CategoryController&action=index');
            exit;
        }
        require_once 'app/views/category/create.php';
    }

    public function edit($id) {
        $categoryModel = new CategoryModel();
        $category = $categoryModel->getCategoryById($id);

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST['name'];

            $categoryModel->updateCategory($id, $name);

            header('Location: index.php?controller=CategoryController&action=index');
            exit;
        }
        require_once 'app/views/category/edit.php';
    }

    public function delete($id) {
        $categoryModel = new CategoryModel();
        $categoryModel->deleteCategory($id);
        header('Location: index.php?controller=CategoryController&action=index');
        exit;
    }
}
?>
