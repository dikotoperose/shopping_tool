<!DOCTYPE html>
<html>
   <head>
      <title>Edit ShoppingList</title>
      <link rel="stylesheet" href="./resources/css/bootstrap.min.css">
      <link rel="stylesheet" href="./resources/css/style.css">
   </head>
   <body>
      <main>
         <div class="shopping">
            <h2 class="shopping__title">Edit Shopping List</h2>
            <form action="index.php?action=update" method="post">
               <input type="hidden" name="id" value="<?php echo $shoppinglist['id']; ?>">
               <div class="row">
                  <div class="col-2"><label for="item">Shopping Item:</label></div>
                  <div class="col-6"><input type="text" class="form-control" id="item" name="item" value="<?php echo $shoppinglist['item']; ?>" required></div>
                  <div class="col-4"><button class=" btn btn-go" type="submit">Edit</button>
                     <a class="btn btn-edit" href="index.php">Cancel</a>
                  </div>
               </div>
            </form>
         </div>
      </main>
   </body>
</html>