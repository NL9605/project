<?php
require_once 'app/models/OrderModel.php';

class OrderController {
    public function index() {
        $orderModel = new OrderModel();
        $orders = $orderModel->getAllOrders();
        require_once 'app/views/order/index.php';
    }

    public function create() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $customer_id = $_POST['customer_id'];
            $total = $_POST['total'];

            $orderModel = new OrderModel();
            $orderModel->createOrder($customer_id, $total);

            header('Location: index.php?controller=OrderController&action=index');
            exit;
        }
        require_once 'app/views/order/create.php';
    }

    public function edit($id) {
        $orderModel = new OrderModel();
        $order = $orderModel->getOrderById($id);

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $customer_id = $_POST['customer_id'];
            $total = $_POST['total'];

            $orderModel->updateOrder($id, $customer_id, $total);

            header('Location: index.php?controller=OrderController&action=index');
            exit;
        }
        require_once 'app/views/order/edit.php';
    }

    public function delete($id) {
        $orderModel = new OrderModel();
        $orderModel->deleteOrder($id);
        header('Location: index.php?controller=OrderController&action=index');
        exit;
    }
}
?>
