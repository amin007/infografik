<?php include 'diatas.php'; ?>

<div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>

<table id="datatable">
<thead><tr><th></th><th>TreeID</th></tr></thead><tbody>
	<tr><th>ID 74</th><td>10420</td></tr>
	<tr><th>ID 83</th><td>18321</td></tr>
	<tr><th>ID 84</th><td>10179</td></tr>
	<tr><th>ID 136</th><td>2626</td></tr>
	<tr><th>ID 312</th><td>11808</td></tr>
	<tr><th>ID 313</th><td>4763</td></tr>
	<tr><th>ID 314</th><td>49197</td></tr>
	<tr><th>ID 319</th><td>28287</td></tr>
	<tr><th>ID 320</th><td>28477</td></tr>
	<tr><th>ID 321</th><td>35626</td></tr>
	<tr><th>ID 62</th><td>2571</td></tr>
	<tr><th>ID 73</th><td>13262</td></tr>
	<tr><th>ID 81</th><td>10879</td></tr>
	<tr><th>ID 82</th><td>9392</td></tr>
	<tr><th>ID 95</th><td>25174</td></tr>
	<tr><th>ID 112</th><td>13575</td></tr>
	<tr><th>ID 122</th><td>21221</td></tr>
	<tr><th>ID 1213</th><td>11414</td></tr>
	<tr><th>ID 1214</th><td>4362</td></tr>
	<tr><th>ID 1218</th><td>19164</td></tr>
	<tr><th>ID 126</th><td>3073</td></tr>
	<tr><th>ID 134</th><td>19432</td></tr>
	<tr><th>ID 143</th><td>12309</td></tr>
	<tr><th>ID 145</th><td>19908</td></tr>
	<tr><th>ID 149</th><td>7199</td></tr>
	<tr><th>ID 219</th><td>9800</td></tr>
	<tr><th>ID 612</th><td>28347</td></tr>
	<tr><th>ID 821</th><td>39495</td></tr>
	<tr><th>ID 1018</th><td>43502</td></tr>
	<tr><th>ID 1416</th><td>35413</td></tr>
	<tr><th>ID 43</th><td>8683</td></tr>
	<tr><th>ID 44</th><td>25262</td></tr>
	<tr><th>ID 72</th><td>24727</td></tr>
	<tr><th>ID 135</th><td>60984</td></tr>
	<tr><th>ID 138</th><td>74513</td></tr>
	<tr><th>ID 144</th><td>29714</td></tr>
	<tr><th>ID 413</th><td>33240</td></tr>
	<tr><th>ID 1310</th><td>78013</td></tr>
	<tr><th>ID 1412</th><td>14151</td></tr>
	<tr><th>ID 1415</th><td>23954</td></tr>
</tbody>
</table>

<?php include 'dibawah.php'; ?>
<script type="text/javascript">
Highcharts.chart('container', 
{
	data: { table: 'datatable' },
	chart: { type: 'column' },
	title: { text: 'TreeID and 200cm' },
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
