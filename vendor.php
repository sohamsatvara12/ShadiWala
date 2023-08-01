
<?php
@include 'component/config.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ShadiWala-Vendor Details</title>

 
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/vendor.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <style>
        .reviews .review-slider .swiper-slide img{
    height: 10rem;
    width: 10rem;
    border-radius: 50%; 
    margin-left: 12rem;
}

/* Hear CSSS */
.fa-heart {
    color: #E72E77;
    -webkit-text-stroke: 1.5px rgb(255, 255, 255);
  }
  .heart1{
    color: white;
    animation-name: heart;
    animation-duration: 1s;
    animation-iteration-count: infinite;
    animation-timing-function: ease-in-out;
    display: inline-block;
  }
  
  .heart1 {
    animation-delay: 0.5s;
  }
  
  @keyframes heart {
    0% {
      transform: scale(1);
    }
    50% {
      transform: scale(1.2);
    }
    100% {
      transform: scale(1);
    }
  }

.header{
    position: fixed;
    top:0;left: 0;right: 0;
    z-index: 1000;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 1.5rem 5%;
    background: var(--orange);
    box-shadow: var(--box-shadow);
}

.header .logo{
    font-size: 2.5rem;
    font-weight: bolder;
    color: white;
    text-decoration: none;
}

.header .logo i{
    color: var(--orange);
}

.header .navbar a{
    font-size: 1.7rem;
    margin: 0 1rem;
    color:white; 
    text-decoration: none;  
}

.header .navbar a {
    position: relative;
    text-decoration: none;
  }
  
 .header  .navbar a::before {
    content: "";
    position: absolute;
    bottom: 0;
    left: 0;
    width: 0%;
    height: 3px;
    background-color: #fff;
    transition: width 0.3s ease-in-out;
  }
  
 .header  .navbar a:hover::before {
    width: 100%;
  }
  
  
.header .icons div{
    height: 4.5rem;
    width: 4.5rem;
    line-height: 4.5rem;
    line-height: 4.5rem;
    background: var(--orange);
    color: #fff;
    font-size: 2rem;
    margin-right: .3rem;
    text-align: center;

}

.header .icons :hover {
    background-color: #fff;
    color:var(--orange);
    border-radius: 50%;
    transition: background-color 0.3s ease-in-out, color 0.3s ease-in-out;
}


.header .icons a{
    font-size: 1.7rem;
    margin: 0 1rem;
    color: var(--black); 
    text-decoration: none;  
}

.header .icons a:hover{
color: var(--orange);
}

#menu-btn{
    display: none;
}

 .header .search-form{
    position: absolute;
    top: 110%;right: -110%;
    max-width: 50rem;
    height: 4.5rem;
    background: #fff;
    border-radius: .5rem;
    overflow: hidden;
    display: flex;
    align-items: center;
    box-shadow: var(--box-shadow);
}

.header .search-form.active{
    right: 1.3rem;
    transition: .4s linear;
}

.header .search-form input{
    /* position: absolute; */
    height: 100%;
    width: 100%;
    background: none;
    text-transform:none;
    font-size: 1.6rem;
    color: var(--black);
    padding: 0 1.5rem;
}

.header .search-form label{
    font-size: 2.2rem;
    padding-right: 1.5rem;
    color: var(--black);
    cursor: pointer;
}

.header .search-form label:hover{
    color: var(--orange);
} 

.header .shopping-cart{
        position: absolute;
        top: 110%;right: -110%;
        padding: 1rem;
        border-radius: .5rem;
        box-shadow: var(--box-shadow);
        width: 30rem;
        background: #fff;
    }
    .header .shopping-cart.active{
        right: 2rem;
        transition: .4s linear;
    }
    .header .shopping-cart .box{
        display: flex;
        align-items: center;
        gap:1rem;
        position: relative;
        margin: 1rem 0;

    }
    .header .shopping-cart .box img{
        height: 10rem;
    }

    .header .shopping-cart .box .fa-trash{
        font-size: 2rem;
        position: absolute;
        top:50%; right: 2rem;
        cursor: pointer;
        color: var(--light-color);
        transform: translateY(-50%);
    }
    .header .shopping-cart .box .fa-trash:hover{
        color: var(--orange);
    }
    .header .shopping-cart .box .content h3{
        color: var(--black);
        font-size: 1.7rem;
        padding-bottom: 1rem;
    }

.header .shopping-cart .box .content .quantity{
    padding-left: 1rem;
}

.header .shopping-cart .total{
    font-size: 2.5rem;
    padding: 1rem 0;
    text-align: center;
    color: var(--black);
}

.header .shopping-cart .btn{
    display: block;
    text-align: center;
    margin: 1rem;

}

/* Account Box of Logged in users */

.header .account-page{
    position: absolute;
    top: 110%;right: -110%;
    padding: 1rem;
    border-radius: .5rem;
    box-shadow: var(--box-shadow);
    width: 20rem;
    background: #fff;
    
}


.header .account-page img{
    border-radius: 50%;
    margin-left: 2.7rem;
}
  
.header .account-page.active{
    right: 11rem;
    transition: .4s linear;
}


.header .account-page .vertical-container {
   
    display: flex;
    flex-direction: column;
  }
  .header .account-page .vertical-container .info {
    display: flex;
    align-items: center;
    margin-bottom: 10px;
    font-size: 1.7rem;
  }

  .header .account-page .vertical-container .info .text:hover{
    color: #E72E77;
  }
  .header .account-page .vertical-container .info i {
    margin-right: 10px;
  }


    </style>

</head>

<body>
    <!-- Footer -->
    <?php include 'component/header.php'; ?>


    <script>
        const menuIcon = document.getElementById('menu-bar');
        const navbar = document.querySelector('.navbar');

        menuIcon.addEventListener('click', () => {
            navbar.classList.toggle('change');
            if (navbar.classList.contains('change')) {
                navbar.style.display = 'block';
            } else {
                navbar.style.display = 'none';
            }
        });
    </script>

<h1 class="heading" style="margin-top: 10rem;">Vendor<span>Details</span></h1>

    <section class="text-gray-600 body-font" style="margin-top: -150px;">
        <div class="container mx-auto flex px-5 py-24 items-center justify-center flex-col">
            <img class="lg:w-2/6 md:w-3/6 w-5/6 mb-10 object-cover object-center rounded" alt="shero" src="images/vendorhome.jpg">
            <div class="text-center lg:w-2/3 w-full">

                <p style="color:black;font-size: 20px;">The Shadi Vibes (Formerly known as Rich Monkey Events)</p>
                <p style="color:black;margin-top: 5px;"><i class="fas fa-map-marker-alt"></i> Vastrapur, Ahmedabad <a href="#" style="text-decoration: underline;">View on map</a></p><br>

                <button><a href="#review" style="padding: 10px 10px;background-color: rgb(84, 221, 107); font-size: 15px;color: black;">Rating:
                        4.9</a></button>
                <p style="color:black; margin-top: 10px;"> (based on 46 reviews)</p>
            </div>

            <div class="flex justify-center">
                <button class="ml-4 inline-flex text-white-700  border-0 py-5 px-9 focus:outline-none  rounded text-lg"><a href="#vendors"><i class="fas fa-info-circle" style="padding-right: 10px;"></i>vendor-details</a></button>
                <button class="ml-4 inline-flex text-white-700  border-0 py-5 px-9 focus:outline-none  rounded text-lg"><a href="#pricing"><i class="fas fa-rupee-sign" style="padding-right: 10px;"></i>Pricing</a></button>
                <button class="ml-4 inline-flex text-white-700  border-0 py-5 px-9 focus:outline-none  rounded text-lg"><a href="#photos"><i class="far fa-images" style="padding-right: 10px;"></i>Photos</a></button>
                <button class="ml-4 inline-flex text-white-700  border-0 py-5 px-9 focus:outline-none  rounded text-lg"><a href="#reviews"><i class="fas fa-pencil-alt" style="padding-right: 10px;"></i>Review</a></button>
                <button class="ml-4 inline-flex text-white-700  border-0 py-5 px-9 focus:outline-none  rounded text-lg"><a href="#vendorcontact"><i class="fas fa-address-book" style="padding-right: 10px;"></i>Contact Details</a></button>
                <button class="ml-4 inline-flex text-white-700  border-0 py-5 px-9 focus:outline-none  rounded text-lg" id="wishlistbutton"><a href="#wishlist"><i class="fas fa-heart" style="padding-right: 10px;color:white;"></i> Add to
                        Wishlist</a></button>
            </div>
        </div>
        </div>
    </section>


    <!------------------------Vendor Details-------------------->
    <section class="vendors" id="vendors">
        <div class="title">
            <h1 class="flex items-center">
                <span><i class="fas fa-info-circle" style="padding-right: 10px;"></i></span>
                Vendor Details
            </h1>
        </div>

        <div class="vendors-row">
            <div class="vendors-col" style="background-color:rgb(93, 174, 228);">
                <i class="fas fa-users"></i>
                <h2>Been on WedMeGood Since</h2>
                <p style="font-size: 14px;">4 years 11 months</p>
            </div>
            <div class="vendors-col" style="background-color:rgb(240, 238, 122)">
                <i class="fas fa-calendar-alt"></i>
                <h2>Experience</h2>
                <p style="font-size: 14px;">2016</p>
            </div>

            <div class="vendors-col" style="background-color:rgb(82, 212, 126)">
                <i class="fas fa-rupee-sign"></i>
                <h2>Budget</h2>
                <p style="font-size: 14px;">2.5- 4 Lakh</p>
            </div>
            <div class="vendors-col" style="background-color:rgb(246,184,150)">
                <i class="fas fa-money-bill"></i>
                <h2>Fee Structure</h2>
                <p style="font-size: 14px;">We charge a Fixed Fee for Planning</p>
            </div>
            <div class="vendors-col" style="background-color:rgb(146, 199, 116)">
                <i class="fas fa-map-marker-alt"></i>
                <h2>Which key cities have you planned weddings in previously?</h2>
                <p style="font-size: 14px;">Gujrat, Rajsthan, Goa, Himachal Pradesh</p>
            </div>
            <div class="vendors-col" style="background-color:rgb(228, 124, 231)">
                <i class="fas fa-home"></i>
                <h2>Decor Policy</h2>
                <p style="font-size: 14px;">Inhouse & outside decorators</p>
            </div>
        </div>
    </section>

    <!------------------------Pricing Details-------------------->
    <section class="pricing" id="pricing">

        <div class="title">
            <h1 class="flex items-center">
                <span><i class="fas fa-rupee-sign" style="padding-right: 10px;"></i></span>
                Pricing
            </h1>
        </div>
        <div class="pricing-row">
            <div class="pricing-col" style="background-color:rgb(32, 223, 139); height: 460px;">
                <h2><i class="fas fa-gem" style="margin-right: 15px;"></i>Premium</h2>
                <ul style="list-style:none;padding-left:0;">

                    <li style="font-size: 15px;color: black;"><i class="fas fa-check" style="padding: 5px 5px 5px 5px; margin-right: 5px;"></i>Venue and vendor referrals and coordination (unlimited)</li>
                    <li style="font-size: 15px;color: black;"><i class="fas fa-check" style="padding: 5px 5px 5px 5px; margin-right: 5px;"></i>Budget creation and management</li>
                    <li style="font-size: 15px;color: black;"><i class="fas fa-check" style="padding: 5px 5px 5px 5px; margin-right: 5px;margin-top:5px;"></i>Timeline creation and management</li>
                    <li style="font-size: 15px;color: black;"><i class="fas fa-check" style="padding: 5px 5px 5px 5px; margin-right: 5px;margin-top:5px;"></i>Wedding day coordination (up to 12 hours)</li>
                    <li style="font-size: 15px;color: black;"><i class="fas fa-check" style="padding: 5px 5px 5px 5px; margin-right: 5px;"></i>Rehearsal dinner coordination</li>
                    <li style="font-size: 15px;color: black;margin-top:5px;"><i class="fas fa-check" style="padding: 5px 5px 5px 5px; margin-right: 5px;"></i>Bridal party styling and coordination</li>
                    <li style="font-size: 15px;color: black;"><i class="fas fa-rupee-sign" style="padding: 5px 8px 5px 8px; margin-right: 5px;"></i>Price: Rs. 5000</li>
                </ul>
            </div>


            <div class="pricing-col" style="background-color:rgb(55, 227, 240); height: 460px;">
                <h2><i class="fas fa-star" style="margin-right: 15px;"></i>Standard</h2>
                <ul style="list-style:none;padding-left:0;">

                    <li style="font-size: 15px;color: black;"><i class="fas fa-check" style="padding: 5px 5px 5px 5px; margin-right: 5px;"></i>Vendor referrals and coordination (max 5)</li>
                    <li style="font-size: 15px;color: black;"><i class="fas fa-check" style="padding: 5px 5px 5px 5px; margin-right: 5px;"></i>Budget creation and management</li>
                    <li style="font-size: 15px;color: black;"><i class="fas fa-check" style="padding: 5px 5px 5px 5px; margin-right: 5px;margin-top:5px;"></i>Timeline creation and management</li>
                    <li style="font-size: 15px;color: black;"><i class="fas fa-check" style="padding: 5px 5px 5px 5px; margin-right: 5px;margin-top:5px;"></i>Wedding day coordination (up to 10 hours)</li>
                    <li style="font-size: 15px;color: black;"><i class="fas fa-check" style="padding: 5px 5px 5px 5px; margin-right: 5px;"></i>Rehearsal dinner coordination</li>
                    <li style="font-size: 15px;color: black;margin-top:5px;"><i class="fas fa-times" style="padding: 5px 8px 5px 8px; margin-right: 5px;"></i>Bridal party styling and coordination</li>
                    <li style="font-size: 15px;color: black;"><i class="fas fa-rupee-sign" style="padding: 5px 8px 5px 8px; margin-right: 5px;"></i>Price: Rs. 2500</li>
                </ul>
            </div>

            <div class="pricing-col" style="background-color:rgb(241, 232, 97); height: 460px;">
                <h2><i class="fas fa-hand-holding-usd" style="margin-right: 15px;"></i>Basic</h2>
                <ul style="list-style:none;padding-left:0;">

                    <li style="font-size: 15px;color: black;"><i class="fas fa-check" style="padding: 5px 5px 5px 5px; margin-right: 5px;"></i>Vendor referrals and coordination (max 3)</li>
                    <li style="font-size: 15px;color: black;"><i class="fas fa-check" style="padding: 5px 5px 5px 5px; margin-right: 5px;"></i>Budget creation and management</li>
                    <li style="font-size: 15px;color: black;"><i class="fas fa-check" style="padding: 5px 5px 5px 5px; margin-right: 5px;margin-top:5px;"></i>Timeline creation and management</li>
                    <li style="font-size: 15px;color: black;"><i class="fas fa-check" style="padding: 5px 5px 5px 5px; margin-right: 5px;margin-top:5px;"></i>Wedding day coordination (up to 8 hours)</li>
                    <li style="font-size: 15px;color: black;"><i class="fas fa-times" style="padding: 5px 8px 5px 8px; margin-right: 5px;"></i>Rehearsal dinner coordination</li>
                    <li style="font-size: 15px;color: black;margin-top:5px;"><i class="fas fa-times" style="padding: 5px 8px 5px 8px; margin-right: 5px;"></i>Bridal party styling and coordination</li>
                    <li style="font-size: 15px;color: black;"><i class="fas fa-rupee-sign" style="padding: 5px 8px 5px 8px; margin-right: 5px;"></i>Price: Rs. 1500</li>
                </ul>
            </div>



        </div>
    </section>


    <!------------------Photos Section------------------>
    <section class="photos" id="photos">
        <div class="title">
            <h1 class="flex items-center">
                <span><i class="far fa-images" style="padding-right: 10px;"></i></span>
                Photos
            </h1>
        </div>
        <div class="photos-row">
            <!-- <div class="invitation-box">
                <img src="vendor1.jpg" alt="">
            </div> -->
            <div class="photos-box">
                <img src="images/vendorphoto/vendor10.jpg" alt="">
            </div>
            <div class="photos-box">
                <img src="images/vendorphoto/vendor3.jpg" alt="">
            </div>
            <div class="photos-box">
                <img src="images/vendorphoto/vendor2.jpg" alt="">
            </div>
            <div class="photos-box">
                <img src="images/vendorphoto/vendor5.jpg" alt="">
            </div>
            <div class="photos-box">
                <img src="images/vendorphoto/vendor6.jpg" alt="">
            </div>
            <div class="photos-box">
                <img src="images/vendorphoto/vendor7.jpg" alt="">
            </div>
            <div class="photos-box">
                <img src="images/vendorphoto/vendor8.jpg" alt="">
            </div>
            <div class="photos-box">
                <img src="images/vendorphoto/vendor9.jpg" alt="">
            </div>

        </div>
    </section>

    <!-- Review -->
    <?php include 'component/reviews.php'; ?>

    <!-- Contact Details -->
    <section class="vendorcontact" id="vendorcontact">

        <div class="title">
            <h1 style="margin-bottom: 5px;"><span><i class="fas fa-address-book" style="padding-right: 10px;"></i></span>Contact Us</h1>
        </div>

        <div class="vendorcontactcontainer">
            <div class="social">
                <i class="fab fa-facebook"></i>
                <i class="fab fa-instagram"></i>
                <i class="fab fa-linkedin"></i>
                <i class="fab fa-twitter"></i>
                <i class="fab fa-pinterest"></i>
            </div>
        </div>
        </div>
    </section>

    <!-- Footer -->
    <?php include 'component/footer.php'; ?>
</body>
<script>
    let menu = document.querySelector('#menu-bar');
    let head = document.querySelector('.head .navbar');

    menu.onclick = () => {
        head.classList.toggle('active');
    };

    window.onscroll = () => {
        head.classList.remove('active');
        if (window.scrollY > 60) {
            document.querySelector('#menu-bar').classList.add('active');
        } else {
            document.querySelector('#menu-bar').classList.remove('active');
        }
    };
</script>
<script src="js/script.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

</html>