<?PHP

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Sebastian C.V.</title>
		<link rel="stylesheet" type="css/text" href="./css/base.css">
		<link rel="stylesheet" type="css/text" href="./css/bootstrap.css">
		<script type="javascript/text" href="./js/jquery-1.11.3.js"></script>
		<script type="javascript/text" href="./js/base.js"></script>
		<script type="javascript/text" href="./js/bootstrao.js"></script>
		<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
	<body>
		<header class="center-block header-img">
				<div class="header-pic"><img src="./img/hv.JPG" class="hv-img img-responsive"></div>
		</header>
		<div id="dBanner"></div>
		<nav class="navbar navbar-default center-block">
			<div class="container">
				<div class="row">
					<ul id="uMenu" class="nav navbar-nav">
						<li><a href="#">Home</a></li>
						<li><a href="#">Experience</a></li>
						<li><a href="#">About Me</a></li>
						<li><a href="#">Hobbies</a></li>
						<li><a href="#">I'm Recommended by...</a></li>
						<li><a href="#">Make a Offer</a></li>
					</div>
				</ul>
			</div>
		</nav>
		<main>
			<br><br>
			<?PHP 
				include './php/build.php';
			?>
		</main>
	</body>
</html>