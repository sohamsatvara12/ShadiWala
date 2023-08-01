<?php
include 'component/config.php';
session_start();

if (isset($_POST['remove_from_wishlist'])) {
   if (isset($_SESSION["loggedInUserName"])) {
      $id = $_POST['id'];
      $delete_wishlist = mysqli_query($conn, "DELETE FROM `wishlist` WHERE id = '" . mysqli_real_escape_string($conn, $id) . "' AND username='" . mysqli_real_escape_string($conn, $_SESSION["loggedInUserName"]) . "'");
      if ($delete_wishlist) {
         $message[] = 'Product removed from wishlist successfully';
      } else {
         $message[] = 'Error removing product from wishlist';
      }
   } else {
      echo '<script>
              var r = confirm("Please login first to place an order.");
              if (r == true) {
                  window.location.href = "account2.php";
              } else {
                  // do nothing
              }
            </script>';
   }
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>ShadiWala-My Wishlist</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
   <link rel="stylesheet" href="css/style.css">


   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
   <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

</head>

<body>

   <?php include 'component/msg.php'; ?>
   <!-- Header  -->
   <?php include 'component/header.php'; ?>

   <!-- Cart  -->

   <div class="container">
      <section class="shopping-cart">
      <h1 class="heading" style="margin-bottom: 2rem;">My<span>wishlist</span></h1>

         <table>
            <thead>
               <tr>
                  <th>Category</th>
                  <th>Name</th>
                  <th>Price</th>
                  <th>Image</th>
                  <th>Move To Cart</th>
                  <th>Delete</th>
               </tr>
            </thead>
            <tbody>
               <?php
               $select_wishlist = mysqli_query($conn, "SELECT * FROM `wishlist` WHERE username = '" . mysqli_real_escape_string($conn, $_SESSION["loggedInUserName"]) . "'");
               if (mysqli_num_rows($select_wishlist) > 0) {
                  while ($fetch_wishlist = mysqli_fetch_assoc($select_wishlist)) {
                    
               ?>
                     <tr>
                        <td><?php echo $fetch_wishlist['category']; ?></td>
                        <td><?php echo $fetch_wishlist['name']; ?></td>
                        <td>&#8377; <?php echo $fetch_wishlist['price']; ?></td>
                        <td><img src="<?php echo $fetch_wishlist['image']; ?>" height="100" alt=""></td>
                        <td>
                           <button type="submit" name="add_to_cart" class="option-btn"> More Details</button>
                        </td>

                        <script>
                           document.addEventListener('DOMContentLoaded', function() {
                              var moreDetailsBtns = document.querySelectorAll('button[name="add_to_cart"]');
                              if (moreDetailsBtns) {
                                 moreDetailsBtns.forEach(function(btn) {
                                    btn.addEventListener('click', function() {
                                       window.location.href = 'vendor.php';
                                    });
                                 });
                              }
                           });
                        </script>

                        <td>
                           <form method="post" action="">
                              <input type="hidden" name="id" value="<?php echo $fetch_wishlist['id']; ?>">
                              <button type="submit" name="remove_from_wishlist" class="option-btn" style="background-color:var(--red);">Delete</button>
                           </form>
                        </td>
                     </tr>
               <?php
                  }
               } else {
                  echo "<tr><td colspan='6'>No records found</td></tr>";
               }
               ?>
            </tbody>
         </table>

         <!-- Script -->
         <div class="checkout-btn">
            <a href="index.php" class="option-btn" style="margin-top: 0;background-color:var(--blue);">Continue Exproring</a>
         </div>
      </section>
   </div>

   <!-- Footer  -->
   <?php include 'component/footer.php'; ?>

</body>
<script src="js/script.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

</html>