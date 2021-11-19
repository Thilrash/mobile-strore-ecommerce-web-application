<?php
// fetch product data
class Product {
    public $db = null;

    public function __construct(DBController $db) {
        if(!isset($db->con)) return null;
        $this->db = $db;
    }

    // fetch product - get method
    public function getData($table = 'product') {
        $result = $this->db->con->query("SELECT * FROM {$table}");
        $resultArray = array();
        while($item = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            $resultArray[] = $item;
        }
        return $resultArray;
    }
}
?>