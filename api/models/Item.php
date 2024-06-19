php
<?php
class Item {
    private $db;
    private $table = 'items';

    public function __construct($db) {
        $this->db = $db;
    }

    // Add methods for CRUD operations here
    public function getAll() {
        $query = "SELECT * FROM " . $this->table;
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>