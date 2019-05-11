<?php
//include '../diatas.php';
include '../diatas001.php';
?>

<!-- x. Add the container -->
<div id="container" style="width: 1000px; height: 500px; margin: 0 auto"></div>

<!-- ////////////////////////////////////////////////////////////////////////////////////////////// -->
<!-- script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.min.js"></script -->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<?php include '../dibawah.php';
?>
<!-- ////////////////////////////////////////////////////////////////////////////////////////////// -->
<!-- 2. Add the JavaScript to initialize the chart on document ready -->
<script type="text/javascript">
$(document).ready(function() {

	$.get('data/first-scan-canopy850.csv', function(csv)
	{
		$('#container').highcharts({
			chart: { type: 'column'},
			data: { csv: csv} ,
			title: {
				text: 'Canopy 850cm'
			},
			yAxis: {
				allowDecimals: false,
				title: { text: '' }
			},
			plotOptions: {
				series: {
					borderWidth: 0,
					dataLabels: {
						enabled: true,
						format: '{point.y}'
					}
				}
			},
		});
	});

});
</script>
<!-- ////////////////////////////////////////////////////////////////////////////////////////////// -->
</body>
</html>