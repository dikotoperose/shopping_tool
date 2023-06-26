<!DOCTYPE html>
<html>
   <head>
      <title>Shopping List</title>
      <link rel="stylesheet" href="./resources/css/bootstrap.min.css">
      <link rel="stylesheet" href="./resources/css/style.css">
   </head>
   <body>
      <main>
         <div class="shopping">
         <h2 class="shopping__title">Shopping List</h2>
         <a class="btn btn-add" href="index.php?action=create">Add Shopping Items</a>
         <table class="table">
            <tr>
               <th>Item</th>
               <th>Action</th>
            </tr>
            <?php foreach ($item as $shoppinglist) : ?>
            <tr>
               <td>
                  <ul class="shopping__checklist">
                     <li class="shopping__item">
                        <input type="checkbox" id="butter" class="shopping__check" />
                        <label for="butter" class="shopping__label"><?php echo $shoppinglist['item']; ?></label>
                     </li>
                  </ul>
               </td>
               <td>
                  <a class="btn btn-edit" href="index.php?action=edit&id=<?php echo $shoppinglist['id']; ?>">Edit</a>
                  <a  class="btn btn-delete" href="index.php?action=delete&id=<?php echo $shoppinglist['id']; ?>">Delete</a>
               </td>
            </tr>
            <?php endforeach; ?>
         </table>
         <script src="./resources/js/bootstrap.bundle.min.js"></script>
      </main>
   </body>
</html>