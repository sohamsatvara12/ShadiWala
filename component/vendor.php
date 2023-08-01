<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        .wishlist-button {
            color: white;
            padding-bottom: .5rem;
        }


        .wishlist-button:hover {
            cursor: pointer;
            color:#E72E77;
        }

      
    </style>

</head>

<body>

    <section class="vendor" id="vendor">
        <h1 class="heading" style="margin-bottom: 2rem;">Featured<span> Vendors</span></h1>
        <div class="vendor-list">

            <div class="vendor-row">
                <div class="rate">4.5&nbsp;<i class="fa fa-star" aria-hidden="true"></i></div>
                <img src="images/vendor/im1.jpg" alt="img">
                <h2>Beauty tales by komal rai</h2>
                <p>Bridal Makeup</p>
                <h3><a href="vendor.php" class="price-button">&#8377; 20,000 onwards</a></h3>
                <form action="component/add_to_wishlist.php" method="post" style="margin-top:1rem;">
                    <input type="hidden" name="vendor_id" value="1">
                    <input type="hidden" name="vendor_name" value="Beauty tales by komal rai">
                    <input type="hidden" name="category" value="Bridal Makeup">
                    <input type="hidden" name="price" value="20000">
                    <input type="hidden" name="image" value="images/vendor/im1.jpg">
                    <h3><button type="submit" name="add_to_wishlist" class="wishlist-button">Add to Wishlist</button></h3>
                </form>
            </div>

            <div class="vendor-row">
                <div class="rate">4.2&nbsp;<i class="fa fa-star" aria-hidden="true"></i></div>
                <img src="images/vendor/im2.jpg" alt="img">
                <h2>Flinters Management</h2>
                <p>Wedding Planner</p>
                <h3><a href="vendor.php" class="price-button">&#8377; 2.5-4 Lakh</a></h3>
                <form action="component/add_to_wishlist.php" method="post" style="margin-top:1rem;">
                    <input type="hidden" name="vendor_id" value="2">
                    <input type="hidden" name="vendor_name" value="Flinters Management">
                    <input type="hidden" name="category" value="Wedding Planner">
                    <input type="hidden" name="price" value="250000">
                    <input type="hidden" name="image" value="images/vendor/im2.jpg">
                    <h3><button type="submit" name="add_to_wishlist" class="wishlist-button">Add to Wishlist</button></h3>
                </form>
            </div>

            <div class="vendor-row">
                <div class="rate">5.0&nbsp;<i class="fa fa-star" aria-hidden="true"></i></div>
                <img src="images/vendor/im3.jpg" alt="img">
                <h2>Wedding Mela</h2>
                <p>Wedding Decorators</p>
                <h3><a href="vendor.php" class="price-button">&#8377; 80,0000 onwards</a></h3>
                <form action="component/add_to_wishlist.php" method="post" style="margin-top:1rem;">
                    <input type="hidden" name="vendor_id" value="3">
                    <input type="hidden" name="vendor_name" value="Wedding Mela">
                    <input type="hidden" name="category" value="Wedding Decorators">
                    <input type="hidden" name="price" value="800000">
                    <input type="hidden" name="image" value="images/vendor/im3.jpg">
                    <h3><button type="submit" name="add_to_wishlist" class="wishlist-button">Add to Wishlist</button></h3>
                </form>
            </div>

            <div class="vendor-row">
                <div class="rate">4.1&nbsp;<i class="fa fa-star" aria-hidden="true"></i></div>
                <img src="images/vendor/im4.jpg" alt="img">
                <h2>SeventhHeaven</h2>
                <p>Wedding Decorators-Rental Only</p>
                <h3><a href="vendor.php" class="price-button">&#8377; 80,000 onwards</a></h3>
                <form action="component/add_to_wishlist.php" method="post" style="margin-top:1rem;">
                    <input type="hidden" name="vendor_id" value="4">
                    <input type="hidden" name="vendor_name" value="SeventhHeaven">
                    <input type="hidden" name="category" value="Wedding Decorators-Rental Only">
                    <input type="hidden" name="price" value="80000">
                    <input type="hidden" name="image" value="images/vendor/im4.jpg">
                    <h3><button type="submit" name="add_to_wishlist" class="wishlist-button">Add to Wishlist</button></h3>
                </form>
            </div>


            <div class="vendor-row">
                <div class="rate">4.3&nbsp;<i class="fa fa-star" aria-hidden="true"></i></div>
                <img src="images/vendor/im5.jpg" alt="img">
                <h2>Wedding Mela 2</h2>
                <p>Wedding Decorators</p>
                <h3><a href="vendor.php" class="price-button">&#8377; 80,000 - 20,00,000</a></h3>
                <form action="component/add_to_wishlist.php" method="post" style="margin-top:1rem;">
                    <input type="hidden" name="vendor_id" value="5">
                    <input type="hidden" name="vendor_name" value="Wedding Mela 2">
                    <input type="hidden" name="category" value="Wedding Decorators">
                    <input type="hidden" name="price" value="80000">
                    <input type="hidden" name="image" value="images/vendor/im5.jpg">
                    <h3><button type="submit" name="add_to_wishlist" class="wishlist-button">Add to Wishlist</button></h3>
                </form>
            </div>

            <div class="vendor-row">
                <div class="rate">4.0&nbsp;<i class="fa fa-star" aria-hidden="true"></i></div>
                <img src="images/vendor/im6.jpg" alt="img">
                <h2>Wedding Mela 3</h2>
                <p>Wedding Decorators</p>
                <h3><a href="vendor.php" class="price-button">&#8377; 1,80,000</a></h3>
                <form action="component/add_to_wishlist.php" method="post" style="margin-top:1rem;">
                    <input type="hidden" name="vendor_id" value="6">
                    <input type="hidden" name="vendor_name" value="Wedding Mela 3">
                    <input type="hidden" name="category" value="Wedding Decorators">
                    <input type="hidden" name="price" value="180000">
                    <input type="hidden" name="image" value="images/vendor/im6.jpg">
                    <h3><button type="submit" name="add_to_wishlist" class="wishlist-button">Add to Wishlist</button></h3>
                </form>
            </div>


            <!-- Repeat the above vendor row structure for other vendors -->

        </div>
    </section>


</body>

</html>