<?php
session_start();
@include 'component/config.php';

if (isset($_POST['add_to_wishlist'])){

        if (isset($_SESSION["loggedInUserName"])) {
            $username = $_SESSION["loggedInUserName"];
            $product_id = $_POST['vendor_id'];
            $product_category = $_POST['category'];
            $product_name = $_POST['vendor_name'];
            $product_price = $_POST['price'];
            $product_image = $_POST['image'];

            $select_wishlist = mysqli_query($conn, "SELECT * FROM `wishlist` WHERE name = '$product_name' AND username='$username' ");

            if (mysqli_num_rows($select_wishlist) > 0) {
                $_SESSION["Msg"] = $product_name . " already added to wishlist successfully";
                header("Location: index.php#vendor");
            } else {
                $insert_wishlist = mysqli_query($conn, "INSERT INTO `wishlist` (username, pid, category, name, price, image) VALUES ('" . mysqli_real_escape_string($conn, $username) . "', '$product_id', '$product_category', '$product_name', '$product_price', '$product_image')");
               
               
                $_SESSION["Msg"] = $product_name . " added to wishlist successfully";
                header("Location: index.php#vendor");
            }
        } else {
            echo '<script>
                    var r = confirm("Please login first to add to wishlist.");
                    if (r == true) {
                        window.location.href = "account2.php";
                    } else {
                        // do nothing
                    }
                  </script>';
        }
    } else {
        // handle invalid action value
    }
?>
