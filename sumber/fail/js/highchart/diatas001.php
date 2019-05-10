<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="Amin Ledang">
<title><?php
echo $namafail = basename($_SERVER['PHP_SELF']);//Returns The Current PHP File Name
$iconFA['home2'] = '<i class="fa fa-home fa-2x" aria-hidden="true"></i>';
$iconFA['video'] = '<i class="fas fa-video"></i>';
$iconFA['search'] = '<i class="fas fa-search"></i>';
$iconFA['User'] = '<i class="fas fa-user"></i>';
$iconFA['Barcode'] = '<i class="fas fa-barcode"></i>';
$iconFA['Filter'] = '<i class="fas fa-filter"></i>';
$iconFA['Stats'] = '<i class="fas fa-chart-bar"></i>';
$iconFA['Ask'] = '<i class="fas fa-question-circle"></i>';
$iconFA['Power'] = '<i class="fas fa-power-off"></i>';
$nav = 'class="dropdown-toggle" data-toggle="dropdown"';
?></title>
<!-- Bootstrap core CSS -->
<link href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<!-- //////////////////////////////////////////////////////////////////////////////////// -->
<nav class="navbar navbar-expand-lg navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
	<a class="navbar-brand" href="#">
		<?php echo $iconFA['video'] ?></a>
	<a class="navbar-brand" href="#">
		<i class="fa fa-times fa-2x" aria-hidden="true"></i>Keluar</a>

	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
	aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>

<!-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ -->
<form class="mx-2 my-auto d-inline w-50" action="#" method="POST">
<div class="input-group">
	<div class="input-group-btn">
		<a class="btn btn-info"><?php echo $iconFA['search'] ?></a>
	</div>
	<input type="hidden" name="namajadual" value="syarikat">
	<input type="text" name="jika[cari][1]" placeholder="Cari Apa" class="form-control" />
	<input type="hidden" name="susun" value="nama ASC">
</div>
</form><!-- / class="form-inline" -->
<!-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ -->

	<div class="collapse navbar-collapse" id="navbarCollapse">
		<ul class="navbar-nav mr-auto">
		<li class="nav-item"><a class="nav-link" href="#">Home</a></li>
		<li class="nav-item"><a class="nav-link" href="#">Link</a></li>
		<!-- li class="nav-item"><a class="nav-link disabled" href="#">Disabled</a></li -->
		<li class="nav-item dropdown">
			<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
			data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Laporan 1</a>
			<div class="dropdown-menu" aria-labelledby="navbarDropdown">
				<a class="dropdown-item" href="3-first-scan-frond-number.html">Frond Number</a>
				<a class="dropdown-item" href="4-first-scan-frond-angle.html">Frond Angle</a>
				<a class="dropdown-item" href="5-first-scan-crown-pixel.html">Crown Pixel</a>
				<a class="dropdown-item" href="6-first-scan-canopy200.html">Canopy200</a>
				<a class="dropdown-item" href="7-first-scan-canopy850.html">Canopy850</a>
				<div class="dropdown-divider"></div>
				<a class="dropdown-item" href="#">Something else here</a>
			</div>
		</li>
		<li class="nav-item dropdown">
			<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
			data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Laporan 2</a>
			<div class="dropdown-menu" aria-labelledby="navbarDropdown">
				<a class="dropdown-item" href="3-first-scan-frond-number.php">Frond Number</a>
				<a class="dropdown-item" href="4-first-scan-frond-angle.php">Frond Angle</a>
				<a class="dropdown-item" href="5-first-scan-crown-pixel.php">Crown Pixel</a>
				<a class="dropdown-item" href="6-first-scan-canopy200.php">Canopy200</a>
				<a class="dropdown-item" href="7-first-scan-canopy850.php">Canopy850</a>
				<div class="dropdown-divider"></div>
				<a class="dropdown-item" href="#">Something else here</a>
			</div>
		</li>
		</ul>

	<!-- ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ --
		<ul class="nav navbar-nav navbar-right">
		<li class="dropdown">
			<a <?php echo $nav ?> href="#"><?=$iconFA['User']?>Staf
			<b class="caret"></b></a>
			<ul class="dropdown-menu">
			<li><a href="#"><?=$iconFA['User']?>Profile</a></li>
			<li class="divider"></li>
			<li><a href="#"><?=$iconFA['Barcode']?>Tambah Kes</a></li>
			<li><a href="#"><?=$iconFA['Barcode']?>Semak Barcode</a></li>
			<li><a href="#"><?=$iconFA['Barcode']?>Hantar Kes</a></li>
			<li><a href="#"><?=$iconFA['Barcode']?>Terima Di Prosesan</a></li>
			<li class="divider"></li>
			<li><a href="#"><?=$iconFA['Power']?>Keluar</a></li>
			</ul>
		</li>
		<li class="dropdown">
			<a <?php echo $nav ?> href="#">
				<?=$iconFA['Filter']?>Cari
			<b class="caret"></b></a>
			<ul class="dropdown-menu">
			<li><a href="#"><?=$iconFA['Filter']?>MSIC</a></li>
			<li><a href="#"><?=$iconFA['Filter']?>PRODUK</a></li>
			<li><a href="#"><?=$iconFA['Filter']?>LOKALITI JOHOR</a></li>
			<li><a href="#"><?=$iconFA['Filter']?>LOKALITI MALAYSIA</a></li>
			<li><a href="#"><?=$iconFA['Filter']?>Prosesan</a></li>
			</ul>
		</li>
		<li class="dropdown">
			<a <?php echo $nav ?> href="#">
				<?=$iconFA['Stats']?>Laporan
			<b class="caret"></b></a>
			<ul class="dropdown-menu">
			<li><a href="#">Laporan Bulanan</a></li>
			<li><a href="#">Laporan Sukuan</a></li>
			</ul>
		</li>
		<li class="dropdown">
			<a <?php echo $nav ?> href="#">
				<?=$iconFA['Ask']?>Bantuan
			<b class="caret"></b></a>
			<ul class="dropdown-menu">
			<li><a href="#">Sistem</a></li>
			<li><a href="#">Forum</a></li>
			<li><a href="#">Email</a></li>
			</ul>
		</li>
		</ul>
		<!-- ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ -->
	</div>
</nav>
<br>
<!-- //////////////////////////////////////////////////////////////////////////////////// -->