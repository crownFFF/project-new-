<?php include_once('./connections/conn_db.php') ?>
<?php include_once('./php/buildNavigation.php') ?>
<?php (!isset($_SESSION) ? session_start() : ""); ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <?php include_once('./php/head.php') ?>
</head>

<body>

  <!-- BGC -->
  <?php include_once('./php/BGI.php') ?>

  <!-- cursor -->
  <?php include_once('./php/cursor.php') ?>

  <!-- Parallax -->
  <?php //include_once('./php/Parallax.php') ?>


  <!-- gotopButton -->
  <?php include_once('./php/gotopButton.php') ?>


  <!-- header -->
  <header class="header">
    <?php include_once('./php/navbar.php') ?>
  </header>

  <!-- carousel -->
  <section id="carousel">
    <?php //include_once('./php/carousel.php') 
    ?>
  </section>


  <!-- smallnav -->
  <section id="smallnav">
    <?php //include_once('./php/smallnav.php') ?>
  </section>
  <!-- smallnav_list -->
  <section id="smallnav_list">
    <?php //include_once('./php/smallnav_list.php') ?>
  </section>

  <!-- breadcrumb_list -->
  <section class="breadcrumb_list">
    <?php include_once('./php/breadcrumb_list.php') ?>
  </section>

  <!-- card -->
  <section id="card__pruoduce">
    <?php //include_once('./php/card__pruoduce.php') ?>
    <?php include_once('./php/good__content.php') ?>
  </section>

  <!-- footer -->
  <section class="footer">
    <?php include_once('./php/footer.php') ?>
  </section>

  <!-- footer_animate -->
  <?php include_once('./php/footer_animate.php') ?>

  </section>

  <?php include_once('./php/JS.php') ?>


</body>

</html>