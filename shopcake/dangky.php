   <?php
try{
		$pdh = new PDO("mysql:host=localhost; dbname=cakeshop"  , "root"  , ""  );
		$pdh->query("  set names 'utf8'"  );
			}
catch(Exception $e){
		echo $e->getMessage(); exit;
}

 function postIndex($index, $value="")
{
	if (!isset($_POST[$index]))	return $value;
	return $_POST[$index];
}

$email 	= postIndex("email_name");
$ten 	= postIndex("khach");
$mk 	= postIndex("mk");
$r_mk =postIndex("r_mk");
$sdt =postIndex("dienthoai");
$diachi =postIndex("add");

	
	if(isset($_POST["dangky"]))
	{
		$err=0;
		if(!$email||!$ten||!$mk||!$r_mk||!$sdt||!$diachi)
		{
			?>
            <script>alert ("Vui lòng nhập đầy đủ thông tin !");</script>
            <?php
			$err++;
		}
		else
		{
			
			if(!preg_match("/^[0-9]*$/",$sdt)&& strlen($sdt)>15)
			{
				
				?>
           	 	<script>alert ("Số điện thoại của bạn không hợp lệ !");</script>
           		 <?php
				 $err++;
			}
			if($mk!=$r_mk)
			{
				?>
           	 	<script>alert (" Mật khẩu không trùng khớp !");</script>
           		 <?php
				 $err++;
			}
			if(strlen($mk)<6)
			{
				?>
           	 	<script>alert ("Mật khẩu phải có 6 ký tự trở lên !");</script>
           		 <?php
				 $err++;
			}
		}
		if($err==0)
		{
			  	$username = addslashes( $_POST['email_name'] );
				$password = md5( addslashes( $_POST['mk'] ) );
				$dienthoai = addslashes( $_POST['dienthoai'] );
				$address = addslashes( $_POST['add'] );
				$name= addslashes( $_POST['khach'] );
				$stmt = $pdh->query(" insert into khachhang (email,matkhau,tenkh,diachi,dienthoai) values ('$username','$password','$name','$address','$dienthoai') "  );
			
				$stmt->execute();
				

			?>
           	 	<script>alert ("Đăng ký thành công !");
				window.location="signin.php";
                </script>
           		 <?php
		}
	
	}

	

	?>
	

	
