<?php 
include 'config_dbase.php';
$main_id=$_REQUEST['main_id'];
$sub_id=$_REQUEST['sub_id'];
?>
<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
<meta charset="UTF-8" />
<title>Category(List) - Polishop eCommerce HTML Template</title>
<?php include"include/head.php" ?>
</head>
<body>
<div class="wrapper-box">
  <div class="main-wrapper">
    <!--Header Part Start-->
    <?php include"include/header.php" ?>
    <!--Header Part End-->
    <div id="container">
      <div id="column-left">
        <!--Category Start -->
            <?php include"include/header_left.php" ?>
        <script type="text/javascript" src="js/jquery.dcjqaccordion.js"></script>
        <!--Category End -->
        <!--Refine Search Start-->
        
        <!--Refine Search End-->
        <!--Latest Product Start-->
        <div class="box">
          <div class="box-heading">Latest</div>
          <div class="box-content">
            <div class="box-product">
              <div class="flexslider">
                <ul class="slides">
                  <?Php
				$countid="";
				 $sql_LATEST="select product.*,product_image.image from product inner join product_image on
				 product.id=product_image.product_id where product.status='1' order by time DESC LIMIT 0,10";
					$exec_LATEST=mysql_query($sql_LATEST);
					while($fetch_LATEST=mysql_fetch_assoc($exec_LATEST)) 
					{
					if($countid!=$fetch_LATEST['id'])	
					{
					?>
                  <li>
                    <div class="slide-inner">
                      <div class="image" style="width:45px; height:45px;"><a href="product.php?prod_id=<?php echo $fetch_LATEST['id'];?>&sub_id=<?Php echo $fetch_LATEST['subcategory']?>"><img src="uploadimage/<?php echo $fetch_LATEST['image'];?>" alt="Friendly Jewelry" height="45px" width="45px"/></a></div>
                      <div class="name"><a href="product.php?prod_id=<?php echo $fetch_LATEST['id'];?>&sub_id=<?Php echo $fetch_LATEST['subcategory']?>">
                      <?Php echo $fetch_LATEST['name']?>
                      </a></div>
                      <div class="price"><?php echo $fetch_LATEST['price'];?></div>
                      <div class="clear"></div>
                    </div>
                  </li>
                  <?Php
					}
					$countid=$fetch_LATEST['id'];
					}
				  ?>
                 <!-- <li>
                    <div class="slide-inner">
                      <div class="image"><a href="product.html"><img src="image/product/apple_cinema_30-45x45.jpg" alt="Apple Cinema 30&quot;" /></a></div>
                      <div class="name"><a href="product.html">Apple Cinema 30&quot;</a></div>
                      <div class="price"><span class="price-old">$119.50</span> <span class="price-new">$107.75</span></div>
                      <div class="clear"></div>
                    </div>
                  </li>
                  <li>
                    <div class="slide-inner">
                      <div class="image"><a href="product.html"><img src="image/product/ipod_classic_1-45x45.jpg" alt="iPad Classic" /></a></div>
                      <div class="name"><a href="product.html">iPad Classic</a></div>
                      <div class="price">$119.50</div>
                      <div class="clear"></div>
                    </div>
                  </li>
                  <li>
                    <div class="slide-inner">
                      <div class="image"><a href="product.html"><img src="image/product/lotto-sports-shoes-white-45x45.jpg" alt="Lotto Sports Shoes" /></a></div>
                      <div class="name"><a href="product.html">Lotto Sports Shoes</a></div>
                      <div class="price">$589.50</div>
                      <div class="clear"></div>
                    </div>
                  </li>
                  <li>
                    <div class="slide-inner">
                      <div class="image"><a href="product.html"><img src="image/product/Jeep-Casual-Shoes-45x45.jpg" alt="Jeep-Casual-Shoes" /></a></div>
                      <div class="name"><a href="product.html">Jeep-Casual-Shoes</a></div>
                      <div class="price">$131.25</div>
                      <div class="clear"></div>
                    </div>
                  </li>-->
                </ul>
              </div>
            </div>
          </div>
        </div>
        <!--Latest Product End-->
        <!--Banner Start-->
        <div class="banner">
          <div><a href="#"><img src="image/product/small-banner1-220x350.jpg" alt="banner" title="banner" /></a></div>
        </div>
        <!--Banner End-->
      </div>
      <!--Middle Part Start-->
      <div id="content">
       <?Php
		 if(isset($_REQUEST['main_id']) and isset($_REQUEST['sub_id']))
		 {   
		    $sql="select * from category where id='$main_id'"; 
			$sql1="select * from subcategory where id='$sub_id'";
			$data=mysql_query($sql);
			$fetch=mysql_fetch_assoc($data);
			$data1=mysql_query($sql1);
			$fetch1=mysql_fetch_assoc($data1);
			//print_r($fetch);
		 
		?>
        <!--Breadcrumb Part Start-->
        <div class="breadcrumb"> <a href="index.php">Home</a> &raquo; <a href="category.php?main_id=<?php echo $main_id;?>"><?php echo $fetch['name'];?></a>&raquo; <a href="category.php?main_id=<?php echo $main_id;?>&sub_id=<?php echo $sub_id;?>"><?php echo $fetch1['name'];?></a></div>
        <!--Breadcrumb Part End-->
        <h1><?php echo $fetch['name'];?>&raquo;<?php echo $fetch1['name'];?></h1>
         <?php 
		}
		else
		{
		 $sql="select * from category where id='$main_id'"; 
		$data=mysql_query($sql);
		$fetch=mysql_fetch_assoc($data);
		?>

        <!--Breadcrumb Part Start-->
        <div class="breadcrumb"> <a href="index.php">Home</a> &raquo; <a href="category.php?main_id=<?php echo $main_id;?>"><?php echo $fetch['name'];?></a></div>
        <!--Breadcrumb Part End-->
        <h1><?php echo $fetch['name'];?></h1>
        <?php 
		}
		?>
        <div class="product-filter">
          <?php
	   if(isset($_REQUEST['main_id']) and isset($_REQUEST['sub_id']))
	   {  
	   ?>
          <div class="display"><b>Display:</b> <a href="category.php?main_id=<?php echo $main_id;?>&sub_id=<?php echo $sub_id;?>" class="grid-icon">Grid</a><span class="list1-icon">List</span> </div>
            <?php  
	   }
	   else
	   {
	  ?>
       <div class="display"><b>Display:</b> <a href="category.php?main_id=<?php echo $main_id;?>" class="grid-icon">Grid</a><span class="list1-icon">List</span> </div>
           <?php  }?>  
          <div class="limit"><b>Show:</b>
            <select >
              <option value="15" selected="selected">15</option>
              <option value="25">25</option>
              <option value="50">50</option>
              <option value="75">75</option>
              <option value="100">100</option>
            </select>
          </div>
          <div class="sort"><b>Sort By:</b>
            <select>
              <option value="" selected="selected">Default</option>
              <option value="">Name (A - Z)</option>
              <option value="">Name (Z - A)</option>
              <option value="">Price (Low &gt; High)</option>
              <option value="">Price (High &gt; Low)</option>
              <option value="">Rating (Highest)</option>
              <option value="">Rating (Lowest)</option>
              <option value="">Model (A - Z)</option>
              <option value="">Model (Z - A)</option>
            </select>
          </div>
        </div>
       <!-- <div class="product-compare"><a href="#" id="compare-total">Product Compare (0)</a></div>-->
        <!--Product List Start-->
        <div class="product-list">
         <?php
	   if(isset($_REQUEST['main_id']) and isset($_REQUEST['sub_id']))
	   {  $counter='';
	    
	   
			$sql1="select  product.*,product_image.image from  product inner join  product_image on product.id=product_image.product_id where  product.status='1' and product.subcategory='$sub_id'";
			$data1=mysql_query($sql1);
			while($fetch1=mysql_fetch_assoc($data1))
			{
			if($counter!=$fetch1['id'])	
			{
				
		?>
          <div>
            <div class="left">
              <div class="image" style="height:162px; width:162px;"><a href="product.php?prod_id=<?php echo $fetch1['id'];?>&sub_id=<?php echo $sub_id;?>"><img src="uploadimage/<?php echo $fetch1['image']?>" title="Apple Cinema 30&quot;" alt="Apple Cinema 30&quot;" height="162px" width="162px"/></a></div>
            <div class="name"><a href="product.php?prod_id=<?php echo $fetch1['id'];?>&sub_id=<?php echo $sub_id;?>"><?php echo $fetch1['name'];?></a></div>
            <div class="description"><?php echo $fetch1['description'];?></div>
               <div class="price"><span class="price-new"><?php echo $fetch1['price'];?></span> <br />
             </div>
              <div class="rating"><img src="image/stars-4.png" alt="Based on 1 reviews." /></div>
              <div class="cart">
            <a href="category-list.php?do=addtocart&pid=<?php echo $fetch1['id']?>&main_id=<?php echo $main_id;?>&sub_id=<?Php echo $sub_id;?>">  <input type="button" value="Add to Cart" class="button"/></a>
            
              
              </div>
            </div>
          </div>
        
            <?php
				}
				$counter=$fetch1['id'];
			}
			
	   }
	   else
	   {
		   $sql="select id from  subcategory where category ='$main_id'";
			$data=mysql_query($sql);
			$counter="";
			//$fetch=mysql_fetch_assoc($data);
			while($fetch=mysql_fetch_assoc($data))
			{
			$subid=$fetch['id'];
			$sql1="select  product.*,product_image.image from  product inner join  product_image on product.id=product_image.product_id where product.status='1' and product.subcategory='$subid'";
			$data1=mysql_query($sql1);
			while($fetch1=mysql_fetch_assoc($data1))
			{
				if($counter!=$fetch1['id'])	
				{
		?>
        <div>
            <div class="left">
              <div class="image" style="height:162px; width:162px;"><a href="product.php?prod_id=<?php echo $fetch1['id'];?>&sub_id=<?php echo $fetch['id'];?>"><img src="uploadimage/<?php echo $fetch1['image']?>" title="Apple Cinema 30&quot;" alt="Apple Cinema 30&quot;" height="162px" width="162px"/></a></div>
            <div class="name"><a href="product.php?prod_id=<?php echo $fetch1['id'];?>&sub_id=<?php echo $fetch['id'];?>"><?php echo $fetch1['name'];?></a></div>
            <div class="description"><?php echo $fetch1['description'];?></div>
            <div class="price"><span class="price-new"><?php echo $fetch1['price'];?></span> <br />
             </div>
         
              <div class="rating"><img src="image/stars-4.png" alt="Based on 1 reviews." /></div>
              <div class="cart">
           <a href="category-list.php?do=addtocart&pid=<?php echo $fetch1['id'];?>&main_id=<?php echo $main_id;?>"><input type="button" value="Add to Cart" class="button" /></a>
               
              </div>
            </div>
          </div>
            <?php
				}
				$counter=$fetch1['id'];
			}
			}  
	   }
		 
		  ?>
          
       
        </div>
        <!--Product List End-->
        <!--Pagination Part Start-->
        <div class="pagination">
          <div class="links"> <b>1</b> <a href="#">2</a> <a href="#">&gt;</a> <a href="#">&gt;|</a></div>
          <div class="results">Showing 1 to 15 of 16 (2 Pages)</div>
        </div>
        <!--Pagination Part End-->
      </div>
      <!--Middle Part End-->
      <div class="clear"></div>
    </div>
  </div>
  <!--Footer Part Start-->
  <?php include"include/footer.php" ?>
  <!--Footer Part End-->
</div>
</body>
</html>