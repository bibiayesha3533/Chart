<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {
        'packages':['geochart'],
      });
      google.charts.setOnLoadCallback(drawRegionsMap);

      function drawRegionsMap() {
        var data = google.visualization.arrayToDataTable([
          ['Country', 'Popularity'],
          ['denmark', 200],
          ['Turkey', 300],
          ['United States', 300],
          ['South Africa', 1000],
          ['Brazil', 400],
          ['Canada', 1500],
          ['Egypt', 600],
          ['India', 800],
	  ['Japan', 90],
          ['kuwait', 800]
        ]);

        var options = {
	title:'Map'
		};

        var chart = new google.visualization.GeoChart(document.getElementById('regions_div'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="regions_div" style="width: 900px; height: 500px;"></div>
  </body>
</html>
