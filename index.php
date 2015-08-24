<?PHP
$idPag='';
if(isset($_GET['idPag']))
{
	switch ($_GET['idPag'])
	{
	case 'ini':
		$idPag='ini';
		break;
	case 'exp':
		$idPag='exp';
		break;
	case 'mi':
		$idPag='mi';
		break;
	case 'hob':
		$idPag='hob';
		break;
	case 'rec':
		$idPag='rec';
		break;
	case 'ofe':
		$idPag='ofe';
		break;
	default:
		$idPag='build';
	}
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Sebastian C.V.</title>
		<link rel="stylesheet" type="css/text" href="./css/base.css">
		<link rel="stylesheet" type="css/text" href="./css/bootstrap.css">
		<script type="javascript/text" href="./js/jquery-1.11.3.js"></script>
		<script type="javascript/text" href="./js/base.js"></script>
		<script type="javascript/text" href="./js/bootstrap.js"></script>
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
					<ul id="uMenu" class="nav navbar-nav center-block">
						<li><a href="index.php?idPag=ini">Inicio</a></li>
						<li><a href="index.php?idPag=exp">Experiencia</a></li>
						<li><a href="index.php?idPag=mi">Sobre Mi</a></li>
						<li><a href="index.php?idPag=hob">Hobbies</a></li>
						<li><a href="index.php?idPag=rec">Recomendado por...</a></li>
						<li><a href="index.php?idPag=ofe">Haz una Oferta</a></li>
					</div>
				</ul>
			</div>
		</nav>
		<main class="container">
			<div class="row">
				<div class="col-md-10 col-sm-10 col-md-offset1 col-sm-offset-1">
					<br><br>
					<?PHP 
						switch ($idPag)
						{
							case 'ini':
								include './php/inicio.php';
								break;
							case 'exp':
								include './php/experiencia.php';
								break;
							case 'mi':
								include './php/sobremi.php';
								break;
							case 'hob':
								include './php/hobbies.php';
								break;
							case 'rec':
								include './php/recomendaciones.php';
								break;
							case 'ofe':
								include './php/oferta.php';
								break;
							default:
								include './php/build.php';
							
						}							
					?>
				</div>
			</div>
		</main>
	</body>
</html>