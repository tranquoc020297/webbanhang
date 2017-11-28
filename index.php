<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="source/css/slider.css">
<link rel="stylesheet" href="source/css/index.css">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Thế Giới Xe Ô TÔ</title>
</head>
<body>
	<header>
		<?php
			include('page/header.php');
		?>
	</header>	
	
	<section style="min-height:350px;">		
		<?php
			if(isset($_GET['detail'])):
				include('page/detail.php');
			elseif(isset($_GET['type'])):
				include('page/type.php');

			elseif(isset($_GET['sign'])):
				include('page/signup.php');

			elseif(isset($_GET['login'])):
				include('page/login.php');

			elseif(isset($_GET['cart'])):
				include('page/cart.php');
			else:
				include('page/home.php');
			endif;
		?>
	</section>
	<div id="myFooter">
		<?php
			include('page/footer.php');
		?>
	</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" ></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" ></script>
<script src="source/js/slider.js"></script>
</body>
</html>