<?php
@include 'component/config.php';
?>

<header class="header">
<a href="index.php#home" class="logo"><i class="fas fa-shopping-basket"></i>ShadiWala.c<i class="fas fa-heart heart1" style="color:red;"></i>m</a>

    <nav class="navbar">
        <a href="index.php#home">home</a>
        <a href="index.php#features">features</a>
        <a href="index.php#vendorcategory">Vendors</a>
        <a href="index.php#venue">Venues</a>
        <a href="index.php#invite">E-invites</a>
        <a href="index.php#reviews">Reviews</a>
        <a href="index.php#blogs">Blogs</a>
        <a href="index.php#team">About Us</a>



        <?php if (isset($_SESSION["loggedInUserRole"]) && $_SESSION["loggedInUserRole"] == "admin") : ?>
            <a href="user_section.php">Admin Panel</a>
        <?php endif; ?>

    </nav>

    <div class="icons">
        <div class="fas fa-bars" id="menu-btn"></div>
        <script>
            let navbar = document.querySelector('.navbar');

            document.querySelector('#menu-btn').onclick = () => {
                navbar.classList.toggle('active');
                searchForm.classList.remove('active');
                shoppingCart.classList.remove('active');
                loginForm.classList.remove('active');
                accountPage.classList.remove('active');
            }
        </script>

    
        <div class="fas fa-search" id="search-btn"></div>

        <?php

        if (isset($_SESSION["loggedInUser"])) :
            $username = $_SESSION["loggedInUserName"];
        ?>
            <?php

            $select_rows = mysqli_query($conn, "SELECT * FROM `wishlist` WHERE username = '" . mysqli_real_escape_string($conn, $_SESSION["loggedInUserName"]) . "'");
            $select_rows_again = mysqli_query($conn, "SELECT * FROM `wishlist` WHERE username = '" . mysqli_real_escape_string($conn, $_SESSION["loggedInUserName"]) . "'");
            $row_count = mysqli_num_rows($select_rows_again);

            ?>

            <!-- <div class="fas fa-shopping-cart" id="cart-btn"><?php echo $row_count; ?></div> -->

            <script>
                var cartBtn = document.getElementById("cart-btn");
                cartBtn.addEventListener("click", function() {
                    window.location.href = "index.php";
                });
            </script>

            <?php

            $select_rows2 = mysqli_query($conn, "SELECT * FROM `wishlist` WHERE username = '" . mysqli_real_escape_string($conn, $_SESSION["loggedInUserName"]) . "'");
            $select_rows_again2 = mysqli_query($conn, "SELECT * FROM `wishlist` WHERE username = '" . mysqli_real_escape_string($conn, $_SESSION["loggedInUserName"]) . "'");
            $row_count2 = mysqli_num_rows($select_rows_again2);

            ?>
            <div class="fas fa-heart" id="wishlist-btn"><?php echo $row_count2; ?></div>

            <script>
                var wishlistBtn = document.getElementById("wishlist-btn");
                wishlistBtn.addEventListener("click", function() {
                    window.location.href = "my_wishlist.php";
                });
            </script>

            <div class="fas fa-user" id="account-info-btn"></div>

            <!-- Signout  -->

            <div class="fas fa-sign-out-alt" id="logout-btn"></a></div>

            <form id="logout-form" action="user_db_control.php" method="POST" style="display:none;">
                <button type="submit" name="logout">Logout</button>
            </form>

            <script>
                var logoutBtn = document.getElementById("logout-btn");
                logoutBtn.addEventListener("click", function() {
                    var logoutForm = document.getElementById("logout-form");
                    logoutForm.querySelector("button[type='submit']").click();
                });
            </script>

        <?php else : ?>

          
            <div class="fas fa-heart" id="wishlist-btn"></div>

            <div class="fas fa-sign-in-alt" id="login-btn"> <a href="account.php"></a></div>
            <script>
                var loginBtn = document.getElementById("login-btn");
                loginBtn.addEventListener("click", function() {
                    window.location.href = "account.php";
                });
            </script>

        <?php endif; ?>
    </div>

    <!-- Login First -->

    <div class="shopping-cart">
        <a href="account2.php" class="btn">Login First</a>

    </div>

    <!-- Search Box  -->
    <form action="#" class="search-form">
        <input type="search" id="search-box" placeholder="search here...">
        <label for="search-box" class="fas fa-search"></label>
    </form>

    <!-- Accunt Page for Logged in User -->

    <div class="account-page">
        <div class="box">

            <div class="vertical-container">

                <div class="info">
                    <i class="fas fa-user"></i>
                    <div class="text" id="my_orders">My Profile</div>
                </div>

                <div class="info">
                    <i class="fas fa-heart"></i>
                    <div class="text" id="my_wishlist">My Wishlist</div>
                </div>

                <script>
                    var myWishlist = document.getElementById("my_wishlist");
                    myWishlist.addEventListener("click", function() {
                        window.location.href = "my_wishlist.php";
                    });
                </script>

                <?php if ($_SESSION["loggedInUserRole"] == "admin") { ?>
                    <div class="info">
                        <i class="fas fa-users"></i>
                        <div class="text" id="user_section">User Section</div>
                    </div>

                    <script>
                        var userSection = document.getElementById("user_section");
                        userSection.addEventListener("click", function() {
                            window.location.href = "user_section.php";
                        });
                    </script>
                <?php } ?>


                <div class="info">
                    <i class="fas fa-cube"></i>
                    <div class="text" id="my_orders">My Orders</div>
                </div>

                <div class="info">
                    <i class="fas fa-certificate"></i>
                    <div class="text">My Memberships</div>
                </div>
                <div class="info">
                    <i class="fas fa-check-square"></i>
                    <div class="text">My Checklist</div>
                </div>

                <div class="info">
                    <i class="fas fa-envelope-open-text"></i>
                    <div class="text">E-invites</div>
                </div>

            </div>
        </div>

</header>