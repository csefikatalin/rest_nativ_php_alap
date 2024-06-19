
<?php
/* https://clouddevs.com/php/developing-a-restful-api/ */
require '../vendor/autoload.php'; // Include Slim framework
// Include the database connection file
require 'database.php';

// Include the Item and ItemController files
require 'ItemController.php'; 

// Create and configure Slim app
$config = ['settings' => [
    'addContentLengthHeader' => false,
    'displayErrorDetails' => true, // Turn on error details
]];
$app = new \Slim\App($config);

// Define app routes
$app->get('/hello/{name}', function ($request, $response, $args) {
    return $response->write("Hello " . $args['name']);
});


// Create a new instance of the ItemController with the database connection
$itemController = new ItemController($db); // Itt a $db változó a database.php-ból származik

$app->get('/items', [$itemController, 'getAllItems']);
$app->get('/items/{id}', [$itemController, 'getItemById']);
$app->post('/items', [$itemController, 'createItem']);
$app->put('/items/{id}', [$itemController, 'updateItem']);
$app->delete('/items/{id}', [$itemController, 'deleteItem']);

$app->run();  
?>