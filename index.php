<?php
require __DIR__ . '/app/controllers/ShoppingListController.php';

$controller = new ShoppingListController();

// Check whether the action variable is set or not

if (isset($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'index';
}

/*
|--------------------------------------------------------------------------
| Routes
|--------------------------------------------------------------------------
|
| Here is where you can register routes for your application. These
| routes are request the appropriate controller
|
*/

switch ($action) {
    case 'index':
        $controller->index();
        break;
    case 'create':
        $controller->create();
        break;
    case 'store':
        $controller->store();
        break;
    case 'edit':
        $controller->edit();
        break;
    case 'update':
        $controller->update();
        break;
    case 'delete':
        $controller->delete();
        break;
    default:
        $controller->index();
}
