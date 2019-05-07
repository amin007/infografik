<?php
#---------------------------------------------------------------------------------------------------
function bersih($papar)
{
	# lepas lari aksara khas dalam SQL
	//$papar = mysql_real_escape_string($papar);
	# buang ruang kosong (atau aksara lain) dari mula & akhir
	$papar = trim($papar);

	return $papar;
}
#---------------------------------------------------------------------------------------------------
function bersih2X($papar)
{
	# buang ruang kosong (atau aksara lain) dari mula & akhir
	$papar = trim($papar);
	# https://stackoverflow.com/questions/1176904/php-how-to-remove-all-non-printable-characters-in-a-string
	$papar = preg_replace('/[\x00-\x1F\x7F-\xFF]/', '', $papar);
	$papar = preg_replace('/[\x00-\x1F\x7F-\xFF]/', '', $papar);
	$papar = preg_replace('/[\x00-\x1F\x7F]/', '', $papar);
	$papar = preg_replace('/[\x00-\x1F\x7F]/u', '', $papar);
	$papar = preg_replace('/[\x00-\x1F\x7F\xA0]/u', '', $papar);

	return $papar;
}
#---------------------------------------------------------------------------------------------------
function bersihGET($papar)
{
	# bersih untuk $_GET sahaja
	$paparHTML = filter_input(INPUT_GET, $papar, FILTER_SANITIZE_SPECIAL_CHARS);
	$paparURL = filter_input(INPUT_GET, $papar, FILTER_SANITIZE_ENCODED);
	//$papar = filter_var($_GET[$papar], FILTER_SANITIZE_URL);
	//echo "You have searched for $paparHTML.\n";
	//echo "<a href='?search=$paparURL'>Search again.</a>";

    //return $papar;
    return $paparHTML;
}
#---------------------------------------------------------------------------------------------------
function bukafail($path = 'test.csv', $field = ';', $row = 0)
{
	$myTable = basename($path, '.csv');

	if (($handle = fopen($path, 'r')) !== FALSE)
	{
		while (($data = fgetcsv($handle, 12000, $field)) !== FALSE)
		{
			$num = count($data); //echo "<p> $num fields in line $row: \n";
			$dataFields = '';

			for ($c=0; $c < $num; $c++)
			{
				//echo "<hr>/*$c*/" . $data[$c] . "| $row";
				if($row == 0):
					$medan[] = bersih2X($data[$c]);
				else:
					$dataFields .= ($data[$c] == null) ?
						"null," : "'" . $data[$c] . "',";
				endif;
			}

			if($row != 0)
				$datas[$row] = bersih2X(substr($dataFields,0,-1));

			$row++;
			//echo '</p>';
		}

		fclose($handle);
	}

	return array($myTable, $medan, $datas);
}
#---------------------------------------------------------------------------------------------------
function buatSql($jadual, $medan, $datas)
{
	//echo '<pre>$medan:'; print_r($medan); echo '</pre>';
	//echo '<pre>$field:'; print_r($field); echo '</pre>';
	//echo '<pre>$datas:'; print_r($datas); echo '</pre>';

	# create sql
	$sql_query = '';
	/*CREATE TABLE Persons (
		PersonID int,
		LastName varchar(255),
		FirstName varchar(255),
		Address varchar(255),
		City varchar(255),
		poskod int(20) NULL DEFAULT 0
		ALTER TABLE `mk_kp334_be2016_analisia_v2` CHANGE NoBatch NoBatch varchar(12);
	);
	ALTER TABLE `mk_kp334_be2016_analisia_v2` CHANGE newss newss varchar(12);
	ALTER TABLE `mk_kp334_be2016_analisia_v2` CHANGE `F000` `F000` varchar(10);
	ALTER TABLE `mk_kp334_be2016_analisia_v1` CHANGE F0002 F0002 varchar(20);
	ALTER TABLE `mk_kp334_be2016_analisia_v1` CHANGE F0021 F0021 varchar(12);
	ALTER TABLE `mk_kp334_be2016_analisia_v1` CHANGE F0026 F0026 varchar(12);
	*/
	list($myTable, $type) = explode(".", $jadual);
	$sql_query .= " CREATE TABLE `$myTable`\r(";
	$sql_query .= "\r `" . implode("` int(20) NULL DEFAULT 0,\r `", $medan);
	$sql_query .= "` int(20) NULL DEFAULT 0\r";
	$sql_query .= "); \r\r";//*/

	# insert sql
	$sql_query .= " INSERT INTO `$myTable`(";
	$sql_query .= "`" . implode("`,`", $medan) . "`";
	$sql_query .= ") VALUES";
	$sql_query .= "\r (" . implode("),\r (", $datas) . ")";//*/

	echo '<pre>'; print_r($sql_query); echo '</pre>';
}
#---------------------------------------------------------------------------------------------------
$path = ''; # lokasi fail csv
$field = "\t"; # aksara antara data2 dalam fail csv
list($myTable, $medan, $datas) = bukafail($path, $field, $row = 0);
buatSql($myTable, $medan, $datas);//*/