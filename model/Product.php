<?php

namespace Model;

class Product
{
    public static function getAllProducts()
    {
        $db = Database::getConnection();
        $sql = "SELECT * FROM products";
        $query = $db->query($sql);
        return $query->fetchAll(\PDO::FETCH_ASSOC);
    }
}



?>