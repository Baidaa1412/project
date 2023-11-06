<!DOCTYPE html>
<html>
<head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load("current", { packages: ["corechart"] });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var chartData = [
                ['City', 'Number of People'], // Column headers
                @foreach($cityData as $data)
                ["{{ $data->city}}", {{ $data->count }}], // Data rows
                @endforeach
            ];

            var data = google.visualization.arrayToDataTable(chartData);

            var options = {
                title: 'City',
                is3D: true,
                colors: ['#8D7B68', '#A4907C', '#C8B6A6', '#F1DEC9', '#C7B198', '#F8F0E5', '#999B84', '#EFD9D1', '#CEAB93', '#AAA492', '#999B84', '#99A98F'],
                backgroundColor: {
                    fill: '#A4988A',
                },
            };

            var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
            chart.draw(data, options);
        }
    </script>
</head>
<body>
    <div id="piechart_3d" style="width: 300px; height: 340px;"></div>
</body>
</html>
