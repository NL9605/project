<?php
require_once 'app/models/UserModel.php';

class UserController {
    public function index() {
        $userModel = new UserModel();
        $users = $userModel->getAllUsers();
        require_once 'app/views/user/index.php';
    }

    public function create() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_POST['username'];
            $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
            $role = $_POST['role'];

            $userModel = new UserModel();
            $userModel->createUser($username, $password, $role);

            header('Location: index.php?controller=UserController&action=index');
            exit;
        }
        require_once 'app/views/user/create.php';
    }

    public function edit($id) {
        $userModel = new UserModel();
        $user = $userModel->getUserById($id);

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_POST['username'];
            $role = $_POST['role'];

            $userModel->updateUser($id, $username, $role);

            header('Location: index.php?controller=UserController&action=index');
            exit;
        }
        require_once 'app/views/user/edit.php';
    }

    public function delete($id) {
        $userModel = new UserModel();
        $userModel->deleteUser($id);
        header('Location: index.php?controller=UserController&action=index');
        exit;
    }

    public function login() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Perform login logic (authentication)
            $username = $_POST['username'];
            $password = $_POST['password'];

            $userModel = new UserModel();
            $user = $userModel->getUserByUsername($username);

            if ($user && password_verify($password, $user['password'])) {
                // Start session and redirect to dashboard
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['role'] = $user['role'];
                header('Location: index.php?controller=DashboardController&action=index'); // Redirect to dashboard
                exit;
            } else {
                $error = "Invalid username or password.";
            }
        }
        require_once 'app/views/user/login.php'; // Show login view
    }
}
?>
