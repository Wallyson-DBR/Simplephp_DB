<?php
include_once 'controllers/ClienteController.php';

$action = isset($_GET['action']) ? $_GET['action'] : 'index';
$controller = new ClienteController();

switch ($action) {
    case 'create':
        $controller->create();
        break;
    case 'edit':
        $id = isset($_GET['id']) ? $_GET['id'] : 0;
        $controller->edit($id);
        break;
    case 'delete':
        $id = isset($_GET['id']) ? $_GET['id'] : 0;
        $controller->delete($id);
        break;
    default:
        $controller->index();
        break;
}
?>