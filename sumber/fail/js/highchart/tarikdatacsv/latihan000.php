<?php include '../diatas.php' ?>

<!-- x. Add the container -->
<div id="container" style="width: 800px; height: 400px; margin: 0 auto"></div>

<!-- ////////////////////////////////////////////////////////////////////////////////////////////// -->
<!-- script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.min.js"></script -->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<?php include '../dibawah.php';
?>
<!-- ////////////////////////////////////////////////////////////////////////////////////////////// -->
<!-- 2. Add the JavaScript to initialize the chart on document ready -->
<script type="text/javascript">
$(document).ready(function() {

/*
Load the data from the CSV file. This is the contents of the file:

Apples,Pears,Oranges,Bananas,Plums
John,8,4,6,5
Jane,3,4,2,3
Joe,86,76,79,77
Janet,3,16,13,15

*/
$.get('data/data.csv', function(csv)
{
	$('#container').highcharts({
		chart: { type: 'column'},
		data: { csv: csv} ,
		title: {
			text: 'Fruit Consumption'
		},
		yAxis: {
			title: {
				text: 'Units'
			}
		}
	});
});


});
</script>
<!-- ////////////////////////////////////////////////////////////////////////////////////////////// -->
</body>
</html>