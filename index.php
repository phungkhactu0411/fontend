<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
	
	<title>Đồng hồ giá rẻ</title>
	
</head>
<body>
	<div class="wrapper">
	<div id="header"><img src="images/unnamed.jpg" width="1000px" height="334px"></div>
		<?php
			session_start();
			include("admincp/config/config.php");
			include("pages/menu.php");
			include("pages/main.php");
			include("pages/footer.php");
		?>

	</div>
</body>
</html>