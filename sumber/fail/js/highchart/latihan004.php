<?php include 'diatas.php'; ?>

<div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>

<table id="datatable">
<thead><tr><th></th><th>TreeID</th></tr></thead><tbody>
	<tr><th>ID 74</th><td>91169</td></tr>
	<tr><th>ID 83</th><td>87621</td></tr>
	<tr><th>ID 84</th><td>82545</td></tr>
	<tr><th>ID 136</th><td>84372</td></tr>
	<tr><th>ID 312</th><td>82990</td></tr>
	<tr><th>ID 313</th><td>89709</td></tr>
	<tr><th>ID 314</th><td>90411</td></tr>
	<tr><th>ID 319</th><td>90149</td></tr>
	<tr><th>ID 320</th><td>82272</td></tr>
	<tr><th>ID 321</th><td>80439</td></tr>
	<tr><th>ID 62</th><td>91523</td></tr>
	<tr><th>ID 73</th><td>88355</td></tr>
	<tr><th>ID 81</th><td>87043</td></tr>
	<tr><th>ID 82</th><td>87083</td></tr>
	<tr><th>ID 95</th><td>75375</td></tr>
	<tr><th>ID 112</th><td>84021</td></tr>
	<tr><th>ID 122</th><td>91080</td></tr>
	<tr><th>ID 1213</th><td>88296</td></tr>
	<tr><th>ID 1214</th><td>86306</td></tr>
	<tr><th>ID 1218</th><td>82770</td></tr>
	<tr><th>ID 126</th><td>55519</td></tr>
	<tr><th>ID 134</th><td>62624</td></tr>
	<tr><th>ID 143</th><td>55074</td></tr>
	<tr><th>ID 145</th><td>60717</td></tr>
	<tr><th>ID 149</th><td>64540</td></tr>
	<tr><th>ID 219</th><td>75458</td></tr>
	<tr><th>ID 612</th><td>74916</td></tr>
	<tr><th>ID 821</th><td>55134</td></tr>
	<tr><th>ID 1018</th><td>81727</td></tr>
	<tr><th>ID 1416</th><td>67713</td></tr>
	<tr><th>ID 43</th><td>42429</td></tr>
	<tr><th>ID 44</th><td>77564</td></tr>
	<tr><th>ID 72</th><td>56945</td></tr>
	<tr><th>ID 135</th><td>61662</td></tr>
	<tr><th>ID 138</th><td>63213</td></tr>
	<tr><th>ID 144</th><td>75529</td></tr>
	<tr><th>ID 413</th><td>66991</td></tr>
	<tr><th>ID 1310</th><td>72277</td></tr>
	<tr><th>ID 1412</th><td>72063</td></tr>
	<tr><th>ID 1415</th><td>67078</td></tr></tbody>
</table>

<?php include 'dibawah.php'; ?>
<script type="text/javascript">
Highcharts.chart('container', 
{
	data: { table: 'datatable' },
	chart: { type: 'column' },
	title: { text: 'First scan - Crown Pixel'  },
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
