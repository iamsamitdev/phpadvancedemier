<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fruit Report</title>
    <link rel="stylesheet" href="vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
</head>

<body>

    <div class="jumbotron">
        <h1 class="display-6 text-center">Fruit Report</h1>
    </div>

    <div class="container-fluid">
        <div id="fruitchart" style="width:100%; height:600px;"></div>
    </div>

    <script src="vendor/frameworks/jquery/jquery.min.js"></script>
    <script src="vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="Highcharts/code/highcharts.js"></script>
    <script src="Highcharts/code/modules/exporting.js"></script>
    <script src="Highcharts/code/modules/export-data.js"></script>

    <script>
        $(function() {
            var options = {
                chart: {
                    renderTo: "fruitchart",
                    type: "areaspline"
                },
                title: {
                    text: 'Fruit Stock'
                },
                xAxis: {
                    categories: ['Green Apple', 'Banana', 'Oranges', 'Mango']
                },
                yAxis: {
                    title: {
                        text: 'Fruit number'
                    }
                },
                series: [{}]
            };

            $.getJSON('data.php', function(data) {
                options.series[0].data = data;
                var chart = new Highcharts.Chart(options);
            });
        });
    </script>
</body>