<html>
    <head>
      <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
      <script type="text/javascript">
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
          var data = google.visualization.arrayToDataTable([
            ['Year', 'Sales', 'Expenses'],
            ['2004',  1000,      400],
            ['2005',  1170,      460],
            ['2006',  660,       1120],
            ['2007',  1030,      540]
          ]);

          var options = {
            title: 'Company Performance',
            curveType: 'function',
            legend: { position: 'bottom' },
            colors: ['#65451F', '#F8F0E5'],
            backgroundColor: {
                    fill: '#A4988A',
                },
          };

          var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

          chart.draw(data, options);
        }
      </script>
    </head>
    <body>
      <div id="curve_chart" style=" height: 400px"></div>
    </body>
  </html>
