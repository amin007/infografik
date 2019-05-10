<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Highcharts Example</title>
<!-- ////////////////////////////////////////////////////////////////////////////////////////////// -->
<!-- 1. Add these JavaScript inclusions in the below of your page -->
<script src="../../../../utama/highchart/7.1.1/code/highcharts.js"></script>
<script src="../../../../utama/highchart/7.1.1/code/modules/data.js"></script>
<script src="../../../../utama/highchart/7.1.1/code/modules/exporting.js"></script>
<script src="../../../../utama/highchart/7.1.1/code/modules/export-data.js"></script>
<!-- ////////////////////////////////////////////////////////////////////////////////////////////// -->
<!-- 2. Add the JavaScript to initialize the chart on DOM loaded -->
<script>
document.addEventListener('DOMContentLoaded', function () {
/*
Load the data from the CSV file. This is the contents of the file:
     
Apples,Pears,Oranges,Bananas,Plums
John,8,4,6,5
Jane,3,4,2,3
Joe,86,76,79,77
Janet,3,16,13,15
*/ 
	Highcharts.chart('container',
	{
		chart: { type: 'column' },
		data: {
			/*csvURL: window.location.origin + '/data/data.csv'*/
			csvURL: 'data/data.csv'
		},
		title: {
		   text: 'Fruit Consumption'
		},
		yAxis: {
			title: { text: 'Units' }
		}
	});

});
</script>
<!-- ////////////////////////////////////////////////////////////////////////////////////////////// -->
</head>
<body>
<!-- x. Add the container -->
<div id="container" style="width: 800px; height: 400px; margin: 0 auto"></div>
</body>
</html>