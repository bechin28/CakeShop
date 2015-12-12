<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8" />
	<title>The Flower Shop</title>
	<link href="css/style.css" rel="stylesheet" type="text/css" />

     <script type="text/javascript" src="js/snow.js"></script>
	<!--[if IE 8]>
		<link rel="stylesheet" type="text/css" href="css/ie8.css" />
	<![endif]-->
	<!--[if IE 7]>
		<link rel="stylesheet" type="text/css" href="css/ie7.css" />
	<![endif]-->
	<!--[if IE 6]>
		<link rel="stylesheet" type="text/css" href="css/ie6.css" />
	<![endif]-->
</head>
<body>
	<div id="header">
		<div>
		  <div>
		    <div id="logo"> <a href="index.php"><img src="images/logo.gif" width="350px" height="110px" alt="Logo"/></a> </div>
		    <div>
		      <div id ="giohang"> <a href="giohang.php">Giỏ hàng <img src="images/sanpham/logo-panier.gif"/></a>
              <?php session_start(); 
			  
			  if(isset($_SESSION["username"]))
			  {
				  ?>
				    </a> <a href="#">Tài khoản</a>
               <a href="dangxuat.php" class="last">Đăng xuất</a> 
			 <?php
			  }
			  else
			  {
			  ?>
              </a> <a href="signup.php">Đăng ký</a>
               <a href="signin.php" class="last">Đăng nhập</a> 
               <?php
			  }
			  ?>
               </div>
               
		      <form action="flower_shop.php?mod=timkiem" method="post">
		        <input type="text" id="search" maxlength="30" name ="sp_search"  placeholder="Nhập tên sản phẩm cần tìm !"/>
		        <input type="submit" value="" id="searchbtn" name="tim" />
	          </form>
				</div>
			</div>
			<ul >
				  <li class="current"><a href="index.php">Trang chủ</a></li>
				<li><a href="flower_shop.php?mod=tonghop">The Flower Shop</a> </li>
				
                <li><a href="about.php">Giới thiệu</a></li>
				<li><a href="services.php">Khuyến mãi </a></li>
				<li><a href="blog.php">Blog</a></li>
                <li><a href="contact.php">Hướng dẫn đặt hàng</a></li>
			</ul>
			<div id="section">
				<ul>
							<?php
            try{
                    $pdh = new PDO("mysql:host=localhost; dbname=cakeshop"  , "root"  , ""  );
                    $pdh->query("  set names 'utf8'"  );
                        }
            catch(Exception $e){
                    echo $e->getMessage(); exit;
            }
            
            $stm = $pdh->query("  select * from loai"  );
            //echo "  Số dòng:"  . $stm->rowCount();
            $rows1 =$stm->fetchAll(PDO::FETCH_ASSOC);
            //print_r($rows1);
            foreach($rows1 as $k=>$v)
            {
            ?><li class="selected"><a href="product.php?id=<?php echo $v["maloai"];?>&name=<?php echo $v["tenloai"];?>"><?php echo $v["tenloai"];?></a></li>
            <?php
            }
            ?>
				</ul>
				<a href="#"> <img name="myimage" src="images/show/image1.jpg" /></a>
               
   
		  </div>
		</div>
	</div>
	<div id="content"><div>
			<h1>Sản phẩm mới</h1>
			<ul>
            
            <?php
			$stm = $pdh->query("  select * from sanpham order by rand() limit 0, 10 "  );

	$rows1 =$stm->fetchAll(PDO::FETCH_ASSOC);
			foreach($rows1 as $k=>$v)
			
			{
				
			
				
				?>
            	
				<li>
					<div id="b_pro" >
						<div id=product>
							<h2><a href="chitiet_sp.php? mod=capnhat&id=<?php echo $v["masp"];?>&maloai=<?php echo $v["maloai"];?>"><?php echo  $v["tensp"];?></a></h2>
							<p><?php echo $v["mota"];?></p>
                            <h3><?php echo "Giá :" .number_format($v["gia"],0,0,'.')." VNĐ ";?></h3>
							<a href="chitiet_sp.php? mod=capnhat&id=<?php echo $v["masp"];?>&maloai=<?php echo $v["maloai"];?>" class="view">Đặt hàng</a>
						</div>
                        
				<a href="chitiet_sp.php? mod=capnhat&id=<?php echo $v["masp"];?>&maloai=<?php echo $v["maloai"];?>"><img src="images/<?php echo $v["hinh"];?>"  			                width="180px" height="180px"  alt="Image" /></a>
                        
				  </div>
                   
                    	 	
			  </li>
           <?php
			}
		   ?>  
				
	  </ul>
</div></div>
         <div id="kc"></div>
        
          
	<div id="footer">
		<div class="home">
			<div>
				<div class="aside">
					<div class="signup">
						<div>
							<b>The <span>Flower</span> shop </b>
							<a href="signin.php">Sign up for free</a>
							<p>để đặt hàng tại Website của cửa hàng</p>
						</div>
					</div>
					<div class="connect">
						<span>Kết nối với chúng tôi</span>
						<ul>
							<li><a href="http://facebook.com" target="_blank" class="facebook">Facebook</a></li>
							<li><a href="http://twitter.com" target="_blank" class="twitter">Twitter</a></li>
							<li><a href="#" class="subscribe">Subscribe</a></li>
							<li><a href="http://www.flickr.com" target="_blank" class="flicker">Flicker</a></li>
						</ul>
					</div>
				</div>
				<div class="section">
					<div>
						<div>
							<h3><a href="product.php">Thế giới bánh ngọt</a></h3>
							<p>Thỏa thích lựa chọn cho mình và người thân những chiếc bánh thơm ngon, mới lạ.The Flower Shop tự hào mang tới cho khách hàng những sản phẩm chất lượng cùng với giá cả phải chăng.Đặc biệt khi trở thành khách hàng thân thiết của The Flower Shop bạn sẽ nhận được những ưu đãi hấp dẫn. </p>
						</div>
					</div>
				</div>
			</div>
	  </div>
		<div id="featured">
			<ul>
				<li class="first">
					<a href="#"><img src="images/fruit-cake.jpg" alt="Image" /></a>
					<h2><a href="#">Làm bánh tart trái cây</a></h2>
					<p>Bánh tart trái cây bao gồm 3 phần, phần sweet pastry, phần crème pâtissière và phần trái cây. Tùy sở thích mà bạn có thể chọn loại trái cây ...<a href="#" class="readmore">Xem tiếp</a></p>
				</li>
				<li>
					<a href="#"><img src="images/italian.jpg" alt="Image" /></a>
					<h2><a href="#">Thực đơn hàng ngày : Trổ tài làm món ý</a></h2>
					<p>Nếu bạn vẫn thường xuyên phải đi mua những chai xốt bò băm để làm món mỳ Ý thì với cách nấu xốt ...<a href="#" class="readmore">Xem tiếp</a></p>
				</li>
				<li>
					<a href="#"><img src="images/fruit.jpg" alt="Image" /></a>
					<h2><a href="#">Các loại cái cây giúp giảm cân hiệu quả</a></h2>
					<p>Không còn lo lắng chuyện mỡ thừa quá nhiều ,để vừa đẹp da vừa có cơ thể như mơ ước, bạn nêu ăn nhiều loại hoa quả dưới đây<a href="#" class="readmore">Xem tiếp</a></p>
				</li>
				<li>
					<a href="#"><img src="images/desserts.jpg" alt="Image" /></a>
					<h2><a href="#">Tráng miệng cho mỗi bữa ăn</a></h2>
					<p>Các công thức, hướng dẫn làm các món khai vị, món tráng miệng hay và chọn lọc làm bữa cơm của gia ...<a href="#" class="readmore">Xem tiếp</a></p>
				</li>
			</ul>
		</div>
		<div id="navigation">
			<div>
				<ul>
					<li class="first"><a href="#">trợ giúp</a></li>
					<li><a href="#">giới thiệu</a></li>
					<li><a href="#">liên hệ cửa hàng</a></li>
					<li><a href="#">the Flower shop</a></li>
					<li><a href="#">hướng dẫn mua hàng</a></li>
                    <li><a href="#">trang chủ</a></li>
				</ul>
				<p>Copyright &copy; 2015 The Flower Shop design by Hoa & Ngọc</p>
		  </div>
		</div>
</div>
</body>
</html>