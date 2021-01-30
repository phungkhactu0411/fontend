<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="wrapper">
	<div id="header"><img src="image/RoyalCity_2018.jpg" width="1000px" height="334px"></div>
    <?php

	$sql_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
	$query_danhmuc = mysqli_query($mysqli,$sql_danhmuc);
	
	    		
?>
<?php
	if(isset($_GET['dangxuat'])&&$_GET['dangxuat']==1){
		unset($_SESSION['dangky']);
	} 
?>
<div class="menu">
			<ul class="list_menu">
				<li><a href="index.php">Trang chủ</a></li>
				<?php 
				while($row_danhmuc = mysqli_fetch_array($query_danhmuc)){
				?>
				
				<?php
				} 
				?>
				<li><a href="index.php?quanly=giohang">Giỏ hàng</a></li>
				<?php
				if(isset($_SESSION['dangky'])){ 

				?>
				<li><a href="index.php?dangxuat=1">Đăng xuất</a></li>
				<li><a href="index.php?quanly=thaydoimatkhau">Thay đổi mật khẩu</a></li>
				<?php
				}else{ 
				?>
				<li><a href="index.php?quanly=dangky">Đăng ký</a></li>
				<?php
				} 
				?>
                <li><a href="index.php?quanly=dangnhap">Đăng nhập</li>
				

				<li><a href="index.php?quanly=tintuc">Tin tức</a></li>
				<li><a href="index.php?quanly=lienhe">Liên hệ</a></li>
				
					
				
			</ul>
			<p>
				<form action="index.php?quanly=timkiem" method="POST">
					<input type="text" placeholder="Tìm kiếm sản phẩm..." name="tukhoa"  style="height:20px">
					<input type="submit" name="timkiem" value="Tìm kiếm" style="height:20px">
				</form>
			</p>
		</div>
        	<div class="main">
			<div class="sidebar">
				<ul class="list_sidebar">
					<?php
	
						$sql_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
						$query_danhmuc = mysqli_query($mysqli,$sql_danhmuc);
						while($row = mysqli_fetch_array($query_danhmuc)){
						    		
					?>
					<li><a href="index.php?quanly=danhmucsanpham&id=<?php echo $row['id_danhmuc'] ?>"><?php echo $row['tendanhmuc'] ?></a></li>
					<?php

					} 
					?>
					
				</ul>
			</div>
	<div class="maincontent">
				<?php
				if(isset($_GET['quanly'])){
					$tam = $_GET['quanly'];
				}else{
					$tam = '';
				}
				if($tam=='danhmucsanpham'){
					include("main/danhmuc.php");
				}elseif($tam=='giohang'){
					include("main/giohang.php");
				}elseif($tam=='tintuc'){
					include("main/tintuc.php");
				}elseif($tam=='lienhe'){
					include("main/lienhe.php");
				}elseif($tam=='sanpham'){
					include("main/sanpham.php");	
				}elseif($tam=='dangky'){
					include("main/dangky.php");
				}elseif($tam=='thanhtoan'){
					include("main/thanhtoan.php");
				}elseif($tam=='dangnhap'){
					include("main/dangnhap.php");
				}elseif($tam=='timkiem'){
					include("main/timkiem.php");
				}elseif($tam=='camon'){
					include("main/camon.php");
				}elseif($tam=='thaydoimatkhau'){
					include("main/thaydoimatkhau.php");
				}else{
					include("main/index.php");
				}
				?>
			</div>
	</div>
	<div class="clear"></div>
		<div class="footer">
			<p class="footer_copyright">Copyright by TUTIEN developer 2021</p>
		</div>
	</div>
</body>
</html>