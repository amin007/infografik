<?php include 'diatas.php'; ?>

<div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>

<table id="datatable">
<thead><tr><th id="tajuk1">ID</th><th id="tajuk2">TreeID</th></tr></thead>
<tbody>
	<tr><th>ID 74</th><td>18</td></tr>
	<tr><th>ID 83</th><td>17</td></tr>
	<tr><th>ID 84</th><td>15</td></tr>
	<tr><th>ID 136</th><td>14</td></tr>
	<tr><th>ID 312</th><td>17</td></tr>
	<tr><th>ID 313</th><td>16</td></tr>
	<tr><th>ID 314</th><td>18</td></tr>
	<tr><th>ID 319</th><td>20</td></tr>
	<tr><th>ID 320</th><td>20</td></tr>
	<tr><th>ID 321</th><td>18</td></tr>
	<tr><th>ID 62</th><td>20</td></tr>
	<tr><th>ID 73</th><td>19</td></tr>
	<tr><th>ID 81</th><td>25</td></tr>
	<tr><th>ID 82</th><td>18</td></tr>
	<tr><th>ID 95</th><td>23</td></tr>
	<tr><th>ID 112</th><td>21</td></tr>
	<tr><th>ID 122</th><td>20</td></tr>
	<tr><th>ID 1213</th><td>20</td></tr>
	<tr><th>ID 1214</th><td>20</td></tr>
	<tr><th>ID 1218</th><td>19</td></tr>
	<tr><th>ID 126</th><td>34</td></tr>
	<tr><th>ID 134</th><td>31</td></tr>
	<tr><th>ID 143</th><td>31</td></tr>
	<tr><th>ID 145</th><td>34</td></tr>
	<tr><th>ID 149</th><td>26</td></tr>
	<tr><th>ID 219</th><td>25</td></tr>
	<tr><th>ID 612</th><td>34</td></tr>
	<tr><th>ID 821</th><td>35</td></tr>
	<tr><th>ID 1018</th><td>26</td></tr>
	<tr><th>ID 1416</th><td>37</td></tr>
	<tr><th>ID 43</th><td>46</td></tr>
	<tr><th>ID 44</th><td>48</td></tr>
	<tr><th>ID 72</th><td>53</td></tr>
	<tr><th>ID 135</th><td>41</td></tr>
	<tr><th>ID 138</th><td>29</td></tr>
	<tr><th>ID 144</th><td>46</td></tr>
	<tr><th>ID 413</th><td>39</td></tr>
	<tr><th>ID 1310</th><td>34</td></tr>
	<tr><th>ID 1412</th><td>34</td></tr>
	<tr><th>ID 1415</th><td>27</td></tr>
</tbody>
</table>

<?php include 'dibawah.php'; ?>
<script type="text/javascript">
Highcharts.chart('container', 
{
	data: { table: 'datatable' },
	chart: { type: 'column' },
	title: { text: 'TreeID and Angle'  },
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
			return '<i>' + this.series.name + '</i><br/>' +
			this.point.y + ' ' + this.point.name.toLowerCase();
		}
	}
});
</script>
</body>
</html>
