<?php
require 'Item.php';
class ItemController {
    private $db;
    private $item;

    public function __construct($db) {
        $this->db = $db;
       $this->item = new Item($db);
    }

    public function getAllItems($request, $response, $args) {
        $query = "SELECT * FROM items";
        $stmt = $this->db->query($query);
        $items = $stmt->fetchAll(PDO::FETCH_OBJ);

        return $response->withJson($items);
    }

    public function getItemById($request, $response, $args) {
        // Implement logic to retrieve a specific item by ID
    }
    public function createItem($request, $response) {
        // Implement logic to create a new item
    }
    public function updateItem($request, $response, $args) {
        // Implement logic to update an existing item
    }
    public function deleteItem($request, $response, $args) {
        // Implement logic to delete an item
    }
}
?>