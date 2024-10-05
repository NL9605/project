<?php
require_once 'app/models/CustomerModel.php';

class CustomerController {
    public function index() {
        $customerModel = new CustomerModel();
        $customers = $customerModel->getAllCustomers();
        require_once 'app/views/customer/index.php';
    }

    public function create() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $first_name = $_POST['first_name'];
            $last_name = $_POST['last_name'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $address = $_POST['address'];

            $customerModel = new CustomerModel();
            $customerModel->createCustomer($first_name, $last_name, $email, $phone, $address);

            header('Location: index.php?controller=CustomerController&action=index');
            exit;
        }
        require_once 'app/views/customer/create.php';
    }

    public function edit($id) {
        $customerModel = new CustomerModel();
        $customer = $customerModel->getCustomerById($id);

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $first_name = $_POST['first_name'];
            $last_name = $_POST['last_name'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $address = $_POST['address'];

            $customerModel->updateCustomer($id, $first_name, $last_name, $email, $phone, $address);

            header('Location: index.php?controller=CustomerController&action=index');
            exit;
        }
        require_once 'app/views/customer/edit.php';
    }

    public function delete($id) {
        $customerModel = new CustomerModel();
        $customerModel->deleteCustomer($id);
        header('Location: index.php?controller=CustomerController&action=index');
        exit;
    }
}
?>
