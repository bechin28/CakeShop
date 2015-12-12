 <?php
try{
		$pdh = new PDO("mysql:host=localhost; dbname=cakeshop"  , "root"  , ""  );
		$pdh->query("  set names 'utf8'"  );
			}
catch(Exception $e){
		echo $e->getMessage(); exit;
}
?>
<?php
				
			if(isset($_POST["dangnhap"]))
		{
		
				$username = addslashes( $_POST['tk'] );
				$password = md5( addslashes( $_POST['mk'] ) );
			$stmt = $pdh->query(" select email,matkhau from khachhang where email='$username'  "  );
					$stmt->execute();
					$member =$stmt->fetchAll(PDO::FETCH_ASSOC);
					$n=$stmt->rowCount();
					$err=0;
						
						if($n<=0)
						{
							?>
						<script>alert ("Tài khoản không tồn tại !");</script>
						 <?php
						 $err++;
						 
						}
						foreach($member as $k=>$v)
						{
				
						if($password !=$v['matkhau'])
						{
							?>
							<script>alert ("Mật khẩu không đúng !");</script>
							 <?php
							 $err++;
						}
						}
				
					
					if($err==0)
					{
						
						$_SESSION["username"]=$username;
						?>
						<script>alert ("Đăng nhập thành công !");
						window.location="giohang.php";
                        </script>
                       
						 <?php
						 
					}
		
				
		
	}
?>