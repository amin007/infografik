<?php include 'diatas.php'; ?>

<div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>

<table id="datatable">
<thead><tr><th></th><th>TreeID and 850cm</th></tr></thead><tbody>
	<tr><th>ID 74</th><td>66242</td></tr>
	<tr><th>ID 83</th><td>15565</td></tr>
	<tr><th>ID 84</th><td>147008</td></tr>
	<tr><th>ID 136</th><td>170280</td></tr>
	<tr><th>ID 312</th><td>41882</td></tr>
	<tr><th>ID 313</th><td>162108</td></tr>
	<tr><th>ID 314</th><td>61244</td></tr>
	<tr><th>ID 319</th><td>80265</td></tr>
	<tr><th>ID 320</th><td>54196</td></tr>
	<tr><th>ID 321</th><td>66407</td></tr>
	<tr><th>ID 62</th><td>186261</td></tr>
	<tr><th>ID 73</th><td>40585</td></tr>
	<tr><th>ID 81</th><td>149681</td></tr>
	<tr><th>ID 82</th><td>132687</td></tr>
	<tr><th>ID 95</th><td>240772</td></tr>
	<tr><th>ID 112</th><td>131958</td></tr>
	<tr><th>ID 122</th><td>255911</td></tr>
	<tr><th>ID 1213</th><td>171886</td></tr>
	<tr><th>ID 1214</th><td>117320</td></tr>
	<tr><th>ID 1218</th><td>48030</td></tr>
	<tr><th>ID 126</th><td>55220</td></tr>
	<tr><th>ID 134</th><td>133475</td></tr>
	<tr><th>ID 143</th><td>141530</td></tr>
	<tr><th>ID 145</th><td>327289</td></tr>
	<tr><th>ID 149</th><td>160584</td></tr>
	<tr><th>ID 219</th><td>75172</td></tr>
	<tr><th>ID 612</th><td>316915</td></tr>
	<tr><th>ID 821</th><td>371784</td></tr>
	<tr><th>ID 1018</th><td>451742</td></tr>
	<tr><th>ID 1416</th><td>411279</td></tr>
	<tr><th>ID 43</th><td>226890</td></tr>
	<tr><th>ID 44</th><td>45109</td></tr>
	<tr><th>ID 72</th><td>30982</td></tr>
	<tr><th>ID 135</th><td>168755</td></tr>
	<tr><th>ID 138</th><td>182621</td></tr>
	<tr><th>ID 144</th><td>168263</td></tr>
	<tr><th>ID 413</th><td>255988</td></tr>
	<tr><th>ID 1310</th><td>517101</td></tr>
	<tr><th>ID 1412</th><td>508446</td></tr>
	<tr><th>ID 1415</th><td>135266</td></tr>
</tbody>
</table>

<?php include 'dibawah.php'; ?>
<script type="text/javascript">
Highcharts.chart('container', 
{
	data: { table: 'datatable' },
	chart: { type: 'column' },
	title: { text: 'First scan - Canopy850cm' },
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
