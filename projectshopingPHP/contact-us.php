<?php
//include 'init.php';
include 'config_dbase.php';
include 'include/smtpgmail.php';
include 'config.php';
$sql_contact="SELECT * FROM contact Where id='1'";
$exec_contact=mysql_query($sql_contact);
if($_POST['submit']=='continue')
{
$dvar['name']=$_Post['name'];
$dvar['textarea']=$_Post['textarea'];	
send_mail('testingecommerce3@gmail.com',"navjotnagra13@gmail.com",$dvar['name'],"enquiry",$dvar['textarea']);
}
?>
<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
<meta charset="UTF-8" />
<title>Contact Us - Polishop eCommerce HTML Template</title>
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
              <li><a href="about-us.php">About Us</a></li>
              <li><a href="delivery_info.php">Delivery Information</a></li>
              <li><a href="privacy.php">Privacy Policy</a></li>
             <!-- <li><a href="#">Terms &amp; Conditions</a></li>-->
              <li><a href="contact-us.php">Contact Us</a></li>
              <li><a href="sitemap.php">Site Map</a></li>
            </ul>
          </div>
        </div>
        <!--Bestsellers Part Start-->
      <?php include('include/header_left.php');?>
        <!--Bestsellers Part End-->
      </div>
      <!--Left End-->
      <!--Middle Part Start-->
      <div id="content">
        <!--Breadcrumb Part Start-->
        <div class="breadcrumb"> <a href="index-2.html">Home</a> » <a href="contact-us.html">Contact Us</a> </div>
        <!--Breadcrumb Part End-->
        <h1>Contact Us</h1>
        <h2>Our Location</h2>
        <div class="contact-info">
        <?php $i=0;while($fetch_contact=mysql_fetch_assoc($exec_contact))   {?>
          <div class="content">
            <div class="left">
              <h4><b>Address:</b></h4>
              <p><?php  echo $fetch_contact['address'] ?></p>
            </div>
            <div class="right">
              <h4><b>Telephone:</b></h4>
              <?php  echo $fetch_contact['phoneno'] ?><br>
            
            </div>
             <div class="right">
              <h4><b>Fax:</b></h4>
              <?php  echo $fetch_contact['fax'] ?><br>
              <br>
            </div>
          </div>
        </div>
        <?php $i++;  }?>
        <h2>Contact Form</h2>
        <div class="content"> <b>First Name:</b><br>
        <form action="contact-us.php" method="post">
          <input class="large-field" type="text" value="<?php echo $dvar['name']; ?>" name="name">
          <br>
          <br>
          <b>E-Mail Address:</b><br>
          <input class="large-field" type="text" value="testingecommerce3@gmail.com" name="email">
          <br>
          <br>
          <b>Enquiry:</b><br>
          <textarea style="width: 98%;" name="textarea" rows="10" cols="40" value="" name="enquiry"><?php echo $dvar['textarea']; ?></textarea>
        </div>
        <div class="buttons">
          <div class="right">
            <input type="submit" name="submit" class="button" value="Continue">
          </div>
          </form>
        </div>
      </div>
      <!--Middle Part End-->
      <div class="clear"></div>
    </div>
  </div>
  <!--Footer Part Start-->
 <?php include('include/footer.php');?>
  <!--Footer Part End-->
</div>
</body>
</html>