<?php
require (__DIR__ . '/../models/ShoppingList.php');

class ShoppingListController
{
    public function index()
    {
        /**
         * Display a listing of the created shopping items.
         */
        $item = ShoppingList::getAll();
        require (__DIR__ . '/../views/index.php');
    }

    public function create()
    {
        /**
         * Show the form for creating a new shopping item.
         */
        require (__DIR__ . '/../views/create.php');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {
        $db = new Database();
        $conn = $db->getConnection();
        
        $shoppinglist = new ShoppingList();
        $shoppinglist->item = $_POST['item'];
        
        $query = 'INSERT INTO shoppinglist (item) VALUES (:item)';
        $stmt = $conn->prepare($query);

        if ($stmt->execute([':item' => $shoppinglist->item])) {
            header('Location: index.php?action=index');
            exit;

        } else {
            // Handle the error
            echo "Insertion failed.";
        }
        

        return false;
        
    }

    public function edit()
    {
        $id = $_GET['id'];
        $shoppinglist = ShoppingList::getById($id);

        require (__DIR__ . '/../views/edit.php');
    }

    /**
     * Update the specified shopping item from storage.
     */
    public function update()
    {       
        $shoppinglist = new ShoppingList();
        $shoppinglist->id = $_POST['id'];
        $shoppinglist->item = $_POST['item'];

        $db = new Database();
        $conn = $db->getConnection();
    
        $query = 'UPDATE shoppinglist SET item = :item WHERE id = :id';
        $stmt = $conn->prepare($query);
        $stmt->bindValue(':item', $shoppinglist->item);
        $stmt->bindValue(':id', $shoppinglist->id);
    
        if ($stmt->execute()) {
            header('Location: index.php?action=index');
            exit;
        } else {
            // Handle the error
            echo "Update failed.";
        }
    }
    

    /**
     * Remove the specified shopping item from storage.
     */
    public function delete()
    {
        $db = new Database();
        $conn = $db->getConnection();
        $id = $_GET['id'];
        $query = 'DELETE FROM shoppinglist WHERE id = ' . $id;

        $stmt = $conn->prepare($query);
        if ($stmt->execute()) {
            header('Location: index.php?action=index');
            exit;
        } else {
            // Handle the error
            echo "Update failed.";
        }
    }
}
