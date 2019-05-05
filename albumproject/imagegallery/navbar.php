<?php include "../functions/init.php" ?>
 <?php include "navbar.css"; ?>

  <div class="topnav">
  <a  href="../imagegallery/index.php">Home</a>
  <a href="../atisproject/index.php">Check Guests</a>
  <a href="">About Us</a>
 <div class="topnav-right">
  <a href="../logout.php">Log Out:  <?php echo $_SESSION['email'] ?></a>
</div>
</div>