<!-- https://clouddevs.com/php/developing-a-restful-api/ -->
php
<?php
require 'vendor/autoload.php'; // Include Slim framework
// Include the database connection file
require 'config/database.php';

// Include the Item and ItemController files

require 'controllers/ItemController.php'; 

// Create and configure Slim app
$config = ['settings' => [
    'addContentLengthHeader' => false,
]];
$app = new \Slim\App($config);

// Define app routes
$app->get('/hello/{name}', function ($request, $response, $args) {
    return $response->write("Hello " . $args['name']);
});

$app->get('/items', 'ItemController:getAllItems');
$app->get('/items/{id}', 'ItemController:getItemById');
$app->post('/items', 'ItemController:createItem');
$app->put('/items/{id}', 'ItemController:updateItem');
$app->delete('/items/{id}', 'ItemController:deleteItem');

$app->run();  

// Create a new instance of the ItemController with the database connection
/* $itemController = new ItemController($db);

$app->get('/items', [$itemController, 'getAllItems']);
$app->get('/items/{id}', [$itemController, 'getItemById']);
$app->post('/items', [$itemController, 'createItem']);
$app->put('/items/{id}', [$itemController, 'updateItem']);
$app->delete('/items/{id}', [$itemController, 'deleteItem']);

$app->run();  */
?>