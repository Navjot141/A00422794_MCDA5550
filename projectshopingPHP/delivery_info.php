<?php   
include 'config_dbase.php';
include 'config.php';
?>



<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
<meta charset="UTF-8" />
<title>Delivery information - Polishop eCommerce HTML Template</title>
<?php include('include/head.php');?>
</head>
<body>
<div class="wrapper-box">
  <div class="main-wrapper">
    <!--Header Part Start-->
<?php include('include/header.php');?>
    <!--Header Part End-->
    <div id="container">
      <!--Left Part-->
      <div id="column-left">
        <div class="box">
          <div class="box-heading">Information</div>
          <div class="box-content">
            <ul class="list-item">
              <li><a href="about_us.php">About Us</a></li>
              <li><a href="delivery_information.php">Delivery Information</a></li>
              <li><a href="privacy.php">Privacy Policy</a></li>
              <!--<li><a href="#">Terms &amp; Conditions</a></li>-->
              <li><a href="contact-us.php">Contact Us</a></li>
              <li><a href="sitemap.php">Site Map</a></li>
            </ul>
          </div>
        </div>
        <div class="box">
          <div class="box-heading">Bestsellers</div>
          <div class="box-content">
            <div class="box-product">
              <div class="flexslider">
                <ul class="slides">
                  <li>
                    <div class="slide-inner">
                      <div class="image"><a href="product.php"><img src="image/product/sony_vaio_1-45x45.jpg" alt="Friendly Jewelry" /></a></div>
                      <div class="name"><a href="product.php">Friendly Jewelry</a></div>
                      <div class="price">$1,177.00</div>
                      <div class="clear"></div>
                    </div>
                  </li>
                  <li>
                    <div class="slide-inner">
                      <div class="image"><a href="product.php"><img src="image/product/apple_cinema_30-45x45.jpg" alt="Apple Cinema 30&quot;" /></a></div>
                      <div class="name"><a href="product.php">Apple Cinema 30&quot;</a></div>
                      <div class="price"><span class="price-old">$119.50</span> <span class="price-new">$107.75</span></div>
                      <div class="clear"></div>
                    </div>
                  </li>
                  <li>
                    <div class="slide-inner">
                      <div class="image"><a href="product.php"><img src="image/product/ipod_classic_1-45x45.jpg" alt="iPad Classic" /></a></div>
                      <div class="name"><a href="product.php">iPad Classic</a></div>
                      <div class="price">$119.50</div>
                      <div class="clear"></div>
                    </div>
                  </li>
                  <li>
                    <div class="slide-inner">
                      <div class="image"><a href="product.php"><img src="image/product/lotto-sports-shoes-white-45x45.jpg" alt="Lotto Sports Shoes" /></a></div>
                      <div class="name"><a href="product.php">Lotto Sports Shoes</a></div>
                      <div class="price">$589.50</div>
                      <div class="clear"></div>
                    </div>
                  </li>
                  <li>
                    <div class="slide-inner">
                      <div class="image"><a href="product.php"><img src="image/product/Jeep-Casual-Shoes-45x45.jpg" alt="Jeep-Casual-Shoes" /></a></div>
                      <div class="name"><a href="product.php">Jeep-Casual-Shoes</a></div>
                      <div class="price">$131.25</div>
                      <div class="clear"></div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--Left End-->
      <!--Middle Part Start-->

      <div id="content">
         <?php 
		$sql_delivery="select * from about_us where status='1' AND  id='7'";
		$exec_delivery=mysql_query($sql_delivery);

		 while($fetch=mysql_fetch_assoc($exec_delivery))  {
		 ?>
        <!--Breadcrumb Part Start-->
        <div class="breadcrumb"><a href="index-2.php">Home</a> » <a href="about-us.php"><?php echo $fetch['title']?></a></div>
        <!--Breadcrumb Part End-->
        <h1><?php echo $fetch['title']?></h1>
       <p> <?php echo $fetch['description']?></p>
      </div>
      <?php   } ?>
      <!--Middle Part End-->
      <div class="clear"></div>
    </div>
  </div>
 <?php include('include/footer.php');?>
  <!--Footer Part End-->
</div>
</body>
</html>