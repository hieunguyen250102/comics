<?php
require_once './db/comics.php';
require_once './db/connection.php';
$dataLocation = getAllComics();
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Magnetic - Stunning Responsive HTML5/CSS3 Photography Wensite Template</title>
	<meta charset="utf-8">
	<meta name="author" content="pixelhint.com">
	<meta name="description" content="Magnetic is a stunning responsive HTML5/CSS3 photography/portfolio website template" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
</head>

<body class="preloading">
	<div class="load">
		<img src="./img/loading.gif">
	</div>
	<?php require_once './header.php' ?>
	<section class="main clearfix">
		
	</section>
	<!-- end main -->
	<script src="./js/loading.js"></script>
</body>

</html>