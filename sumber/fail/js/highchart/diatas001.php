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
	<a class="navbar-brand" href="#">Carousel</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
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
		<li class="nav-item"><a class="nav-link disabled" href="#">Disabled</a></li>
		</ul>

	<!-- ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ -->
		<ul class="nav navbar-nav navbar-right">
		<li class="dropdown">
			<a <?php echo $nav ?> href="#"><?=$iconFA['User']?>Staf
			<b class="caret"></b></a>
			<ul class="dropdown-menu">
			<li><a href="#">
				<?=$iconFA['User']?>Profile <?=$pengguna?>
			</a></li>
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