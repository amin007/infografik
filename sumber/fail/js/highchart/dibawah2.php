<!-- //////////////////////////////////////////////////////////////////////////////////// -->
<?php
define('URL', '../../../utama/highchart/7.1.1/code/');
echo '<hr>url = ' . URL . '<hr>';
?>
<script src="<?php echo URL ?>highcharts.js"></script>
<script src="<?php echo URL ?>modules/data.js"></script>
<script src="<?php echo URL ?>modules/exporting.js"></script>
<script src="<?php echo URL ?>modules/export-data.js"></script>
<script type="text/javascript">
	Highcharts.chart('container', {
	data: { table: 'datatable' },
	chart: { type: 'column' },
	title: { text: 'Data tarik dari HTML table dalam halaman ini'  },
	yAxis: {
		allowDecimals: false,
		title: { text: 'Tree_ID' }
	},
	tooltip: {
		formatter: function () {
			return '<b>' + this.series.name + '</b><br/>' +
			this.point.y + ' ' + this.point.name.toLowerCase();
		}
	}
});
</script>
</body>
</html>
