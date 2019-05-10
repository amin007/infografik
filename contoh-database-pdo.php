<?php
#---------------------------------------------------------------------------------------------------
# 1. laporan tahap kesilapan kod PHP
error_reporting(E_ALL);
#---------------------------------------------------------------------------------------------------
# 2. isytiharkan zon masa => Asia/Kuala Lumpur
date_default_timezone_set('Asia/Kuala_Lumpur');
#---------------------------------------------------------------------------------------------------
require 'tatarajah.php';
#---------------------------------------------------------------------------------------------------
function semakPembolehubah($senarai,$jadual,$p='0')
{
	echo '<pre>$' . $jadual . '=><br>';
	if($p == '0') print_r($senarai);
	if($p == '1') var_export($senarai);
	if($p == '2') var_dump($senarai);
	echo '</pre><hr>';//*/
	//$this->semakPembolehubah($ujian,'ujian',0);
	#http://php.net/manual/en/function.var-export.php
	#http://php.net/manual/en/function.print-r.php
}
#---------------------------------------------------------------------------------------------------
spl_autoload_register(function ($namaClass)
{
	# buat pecahan tatasusunan $namaClass
	$class = explode('\\', $namaClass); //print_r($class) . '<br>';
	# semak kewujudan class
	//echo '<hr>nama class:' . $class[count($class)-1] . ' | ';
	$cariFail = GetMatchingFiles(GetContents('Aplikasi/Kelas'),$class[count($class)-1] . '.php');
	# jika fail wujud, masukkan
	foreach($cariFail as $kitabApa)
	{	//echo '$kitabApa->' . $kitabApa . '<br>';
		if (file_exists($kitabApa)) require $kitabApa;
		//else echo 'tidak jumpa daa<br>';
	}//*/
});
#---------------------------------------------------------------------------------------------------
	function panggilKhas02($p1,$p2=null)
	{
		//echo '<hr>Nama class :' . __METHOD__ . '()<hr>';
		# Set pembolehubah utama
		list($jadual, $medan, $carian, $susun) =
			$this->tanya->susunPembolehubah($p1,$p2);
		$this->papar->bentukJadual02[$p2] = $this->tanya->//cariSql
			cariSemuaData
			($jadual, $medan, $carian, $susun);
		# Set pembolehubah untuk Papar
		$this->kandunganPaparan($p1, $p2);
	}
#---------------------------------------------------------------------------------------------------
	function paparSenarai($senarai)
	{
		?><h1> Ini Template Biasa </h1><?php
		echo "\n";
		foreach ($senarai as $myTable => $row)
		{
			if ( count($row)==0 ) echo '';
			else
			{
				$tajukjadual = '<span class="badge badge-success">' . $myTable . '</span>'
				. "\r" . '<span class="badge">' . count($row) . '</span>';
				echo "\n";
				paparJadual($tajukjadual,$row);
			} // if ( count($row)==0 )
		}
	}
#---------------------------------------------------------------------------------------------------
	function paparJadual($tajukjadual,$row)
	{
		?><!-- Jadual <?php echo $myTable ?> ########################################### -->
	<table class="excel" id="example">
	<?php echo '<caption>'. $tajukjadual . '</caption>' . "\n";
	$printed_headers = false; # mula bina jadual
	#-----------------------------------------------------------------
	for ($kira=0; $kira < count($row); $kira++)
	{
		if ( !$printed_headers ) # papar tajuk medan sekali sahaja:
		{
			?><thead><tr><?php
			foreach ( array_keys($row[$kira]) as $tajuk )
			{
				?><th><?php echo $tajuk ?></th><?php
			}
			?></tr></thead><tbody>
	<?php	$printed_headers = true;
		}
	# papar data $row ------------------------------------------------
	?><tr><?php
		foreach ( $row[$kira] as $key=>$data )
		{
			echo ($key=='Tree_ID') ?
				'<th>ID ' . $data . '</th>'
				: '<td>' . $data . '</td>';
		}
		?></tr>
	<?php
	}#-----------------------------------------------------------------
	?></tbody></table>
	<!-- Jadual <?php echo $myTable ?> ########################################### -->
<?php
	}
#---------------------------------------------------------------------------------------------------
## mula panggil koding
$tanya = new \Aplikasi\Kitab\Tanya();
$jadual = 'data01'; $medan = 'Tree_ID,Fronds_no';
$carian = $susun = null;
$senarai['data01'] = $tanya->//cariSql
	cariSemuaData
	($jadual, $medan, $carian, $susun);
//semakPembolehubah($hasil,'hasil');
paparSenarai($senarai);