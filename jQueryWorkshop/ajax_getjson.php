<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>jQuery get JSON</title>
    <link rel="stylesheet" href="vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
</head>

<body>

    <table class="table table-bordered">
        <thead>
            <tr class="bg-primary text-light">
                <th>id</th>
                <th>code</th>
                <th>name</th>
                <th>name_eng</th>
                <th>geo_id</th>
            </tr>
        </thead>
        <tbody>

        </tbody>
    </table>

    <script src="vendor/frameworks/jquery/jquery.min.js"></script>
    <script src="vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>
    <script>
        $(function() {
            $.getJSON("province_json.php", function(data) {
                //console.log(data);
                var trstring = "";
                $.each(data, function(key, val) {
                    //console.log(val.province_name);
                    trstring += "<tr>" +
                        "<td>" + val.province_id + "</td>" +
                        "<td>" + val.province_code + "</td>" +
                        "<td>" + val.province_name + "</td>" +
                        "<td>" + val.province_name_eng + "</td>" +
                        "<th>" + val.geo_id + "</th>" +
                        "</tr>";
                });
                $('table tbody').html(trstring);
            });
        });
    </script>
</body>

</html>