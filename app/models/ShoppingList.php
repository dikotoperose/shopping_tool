<?php
require __DIR__ . '/../../databases/db_connection.php';

class ShoppingList
{

    public static function getAll()
    {
        $db = new Database();
        $conn = $db->getConnection();

        $query = 'SELECT id, item FROM shoppinglist ORDER BY created_at DESC';
        $stmt = $conn->prepare($query);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function getById($id)
    {
        $db = new Database();
        $conn = $db->getConnection();

        $query = 'SELECT id, item FROM shoppinglist WHERE id =' . $id  . ' ORDER BY created_at DESC';
        $stmt = $conn->prepare($query);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

}
