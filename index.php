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
  <title>ShadiWala-Home</title>
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
  <link rel="stylesheet" href="css/style.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>


</head>

<body>


  <?php include 'component/msg.php'; ?>
  <!--                   Header                       -->
  <?php include 'component/header.php'; ?>
  <!---------------------------Home--------------------->

  <?php include 'component/home.php'; ?>

  <!-- Features -->
  <?php include 'component/features.php'; ?>
  <!------------------------services-------------------->
  <?php include 'component/vendorcategory.php'; ?>
  <!-----------------------------vendor------------------->
  <?php include 'component/vendor.php'; ?>
  <!----------------------------venue Section-------------->
  <?php include 'component/venue.php'; ?>
  <!------------------E-invitation------------------>
  <?php include 'component/invite.php'; ?>

  <?php include 'component/reviews.php'; ?>


  <?php include 'component/blogs.php'; ?>
  <?php include 'component/team.php'; ?>
  <!--------------------------------------------footer section--------------------------->
  <?php include 'component/footer.php'; ?>



</body>
<script src="js/script.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

</html>