<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Report with hightchart</title>
    <link rel="stylesheet" href="vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
</head>

<body>

    <div class="jumbotron">
        <h1 class="display-6 text-center">Report with HightChart</h1>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div id="container1" style="width:100%; height:400px;"></div>
            </div>
            <div class="col-md-6">
                <div id="container2" style="width:100%; height:400px;"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div id="container3" style="width:100%; height:400px;"></div>
            </div>
            <div class="col-md-6">
                <div id="container4" style="width:100%; height:400px;"></div>
            </div>
        </div>
    </div>

    <script src="vendor/frameworks/jquery/jquery.min.js"></script>
    <script src="vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="Highcharts/code/highcharts.js"></script>
    <script src="Highcharts/code/modules/exporting.js"></script>
    <script src="Highcharts/code/modules/export-data.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Bar Chart
            var myChart = Highcharts.chart('container1', {
                chart: {
                    type: 'bar'
                },
                title: {
                    text: 'Fruit Consumption'
                },
                xAxis: {
                    categories: ['Apples', 'Bananas', 'Oranges', 'Mango']
                },
                yAxis: {
                    title: {
                        text: 'Fruit eaten'
                    }
                },
                series: [{
                    name: 'Jane',
                    data: [1, 0, 4, 6]
                }, {
                    name: 'John',
                    data: [5, 7, 3, 2]
                }]
            });

            // Line Chart
            var myChart = Highcharts.chart('container2', {
                chart: {
                    type: 'spline'
                },
                title: {
                    text: 'Fruit Consumption'
                },
                xAxis: {
                    categories: ['Apples', 'Bananas', 'Oranges', 'Mango', 'Melon']
                },
                yAxis: {
                    title: {
                        text: 'Fruit eaten'
                    }
                },
                series: [{
                    name: 'Jane',
                    data: [1, 0, 4, 7, 9]
                }, {
                    name: 'John',
                    data: [5, 7, 3, 4, 10]
                }]
            });

            // Pie Chart
            var myChart = Highcharts.chart('container3', {
                chart: {
                    type: 'pie'
                },
                title: {
                    text: 'Fruit Consumption'
                },
                xAxis: {
                    categories: ['Apples', 'Bananas', 'Oranges']
                },
                yAxis: {
                    title: {
                        text: 'Fruit eaten'
                    }
                },
                series: [{
                    name: 'Jane',
                    data: [1, 0, 4]
                }, {
                    name: 'John',
                    data: [5, 7, 3]
                }]
            });

            // Area Chart
            var myChart = Highcharts.chart('container4', {
                chart: {
                    type: 'area'
                },
                title: {
                    text: 'Fruit Consumption'
                },
                xAxis: {
                    categories: ['Apples', 'Bananas', 'Oranges']
                },
                yAxis: {
                    title: {
                        text: 'Fruit eaten'
                    }
                },
                series: [{
                    name: 'Jane',
                    data: [1, 0, 4]
                }, {
                    name: 'John',
                    data: [5, 7, 3]
                }]
            });
        });
    </script>
</body>

</html>