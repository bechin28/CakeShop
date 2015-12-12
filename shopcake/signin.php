<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8" />
	<title>Sign In - Cake Delights Web Template</title>
	<link rel="stylesheet" type="text/css" href="css/style.css" />
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
            
		      <div id ="giohang"> <a href="giohang.php">Giỏ hàng <img src="images/logo-panier.gif"/>
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
		        <input type="text" id="search" maxlength="30" name ="sp_search"/>
		        <input type="submit" value="" id="searchbtn" name="tim" />
	          </form>
	        </div>
	      </div>
			<ul>
				  <li class="current"><a href="index.php">Trang chủ</a></li>
				<li><a href="flower_shop.php?mod=tonghop">The Flower Shop</a> </li>
				
                <li><a href="about.php">Giới thiệu</a></li>
				<li><a href="services.php">Khuyến mãi </a></li>
				<li><a href="blog.php">Blog</a></li>
                <li><a href="contact.php">Hướng dẫn đặt hàng</a></li>
			</ul>
		</div>
	</div>
	<div id="content">
		<div>
			<div id="account">
				<div>
                <?php include("dangnhap.php");?>
					<form action="signin.php" method="post">
						<span>Đăng nhập</span>
						<table>
							<tr>
								<td><label for="name"> Nhập Email</label></td>
								<td><input type="password" id="name" name= "tk"/></td>
							</tr>
							<tr>
								<td><label for="password">Mật khẩu</label></td>
								<td><input type="text" id="password" name="mk" /></td>
							</tr>
							<tr>
								<td></td>
								<td class="rememberme"><label for="rememberme"><input type="checkbox" id="rememberme" />Duy trì đăng nhập </label></td>
							</tr>
						</table>
						<input type="submit" value="Đăng nhập" class="submitbtn" name="dangnhap" />
                        <p style="margin-left:40px;margin-top:20px;font-weight:bold;">Bạn chưa có tài khoản?  <a href="signup.php">Đăng ký ngay </a></p>
					</form>
				</div>
			</div>
		</div>
	</div>
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