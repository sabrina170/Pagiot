<?php



$totalVisitors = 883000;

$newVsReturningVisitorsDataPoints = array(
    array("y" => 519960, "name" => "New Visitors", "color" => "#E7823A"),
    array("y" => 363040, "name" => "Returning Visitors", "color" => "#546BC1")
);

$newVisitorsDataPoints = array(
    array("x" => 1420050600000, "y" => 33000),
    array("x" => 1422729000000, "y" => 35960),
    array("x" => 1425148200000, "y" => 42160),
    array("x" => 1427826600000, "y" => 42240),
    array("x" => 1430418600000, "y" => 43200),
    array("x" => 1433097000000, "y" => 40600),
    array("x" => 1435689000000, "y" => 42560),
    array("x" => 1438367400000, "y" => 44280),
    array("x" => 1441045800000, "y" => 44800),
    array("x" => 1443637800000, "y" => 48720),
    array("x" => 1446316200000, "y" => 50840),
    array("x" => 1448908200000, "y" => 51600)
);

$returningVisitorsDataPoints = array(
    array("x" => 1420050600000, "y" => 22000),
    array("x" => 1422729000000, "y" => 26040),
    array("x" => 1425148200000, "y" => 25840),
    array("x" => 1427826600000, "y" => 23760),
    array("x" => 1430418600000, "y" => 28800),
    array("x" => 1433097000000, "y" => 29400),
    array("x" => 1435689000000, "y" => 33440),
    array("x" => 1438367400000, "y" => 37720),
    array("x" => 1441045800000, "y" => 35200),
    array("x" => 1443637800000, "y" => 35280),
    array("x" => 1446316200000, "y" => 31160),
    array("x" => 1448908200000, "y" => 34400)
);

?>
<?php include('header.php') ?>

<script>
    window.onload = function() {

        var totalVisitors = <?php echo $totalVisitors ?>;
        var visitorsData = {
            "New vs Returning Visitors": [{
                click: visitorsChartDrilldownHandler,
                cursor: "pointer",
                explodeOnClick: false,
                innerRadius: "75%",
                legendMarkerType: "square",
                name: "New vs Returning Visitors",
                radius: "100%",
                showInLegend: true,
                startAngle: 90,
                type: "doughnut",
                dataPoints: <?php echo json_encode($newVsReturningVisitorsDataPoints, JSON_NUMERIC_CHECK); ?>
            }],
            "New Visitors": [{
                color: "#E7823A",
                name: "New Visitors",
                type: "column",
                xValueType: "dateTime",
                dataPoints: <?php echo json_encode($newVisitorsDataPoints, JSON_NUMERIC_CHECK); ?>
            }],
            "Returning Visitors": [{
                color: "#546BC1",
                name: "Returning Visitors",
                type: "column",
                xValueType: "dateTime",
                dataPoints: <?php echo json_encode($returningVisitorsDataPoints, JSON_NUMERIC_CHECK); ?>
            }]
        };
        var visitorsData2 = {
            "New vs Returning Visitors": [{
                click: visitorsChartDrilldownHandler,
                cursor: "pointer",
                explodeOnClick: false,
                innerRadius: "75%",
                legendMarkerType: "square",
                name: "New vs Returning Visitors",
                radius: "100%",
                showInLegend: true,
                startAngle: 90,
                type: "doughnut",
                dataPoints: <?php echo json_encode($newVsReturningVisitorsDataPoints, JSON_NUMERIC_CHECK); ?>
            }],
            "New Visitors": [{
                color: "#E7823A",
                name: "New Visitors",
                type: "column",
                xValueType: "dateTime",
                dataPoints: <?php echo json_encode($newVisitorsDataPoints, JSON_NUMERIC_CHECK); ?>
            }],
            "Returning Visitors": [{
                color: "#546BC1",
                name: "Returning Visitors",
                type: "column",
                xValueType: "dateTime",
                dataPoints: <?php echo json_encode($returningVisitorsDataPoints, JSON_NUMERIC_CHECK); ?>
            }]
        };

        var visitorsData3 = {
            "New vs Returning Visitors": [{
                click: visitorsChartDrilldownHandler,
                cursor: "pointer",
                explodeOnClick: false,
                innerRadius: "75%",
                legendMarkerType: "square",
                name: "New vs Returning Visitors",
                radius: "100%",
                showInLegend: true,
                startAngle: 90,
                type: "doughnut",
                dataPoints: <?php echo json_encode($newVsReturningVisitorsDataPoints, JSON_NUMERIC_CHECK); ?>
            }],
            "New Visitors": [{
                color: "#E7823A",
                name: "New Visitors",
                type: "column",
                xValueType: "dateTime",
                dataPoints: <?php echo json_encode($newVisitorsDataPoints, JSON_NUMERIC_CHECK); ?>
            }],
            "Returning Visitors": [{
                color: "#546BC1",
                name: "Returning Visitors",
                type: "column",
                xValueType: "dateTime",
                dataPoints: <?php echo json_encode($returningVisitorsDataPoints, JSON_NUMERIC_CHECK); ?>
            }]
        };

        var newVSReturningVisitorsOptions = {
            animationEnabled: true,
            theme: "light2",
            title: {
                text: ""
            },
            subtitles: [{
                text: "",
                backgroundColor: "#2eacd1",
                fontSize: 16,
                fontColor: "white",
                padding: 5
            }],
            legend: {
                fontFamily: "calibri",
                fontSize: 14,
                itemTextFormatter: function(e) {
                    return e.dataPoint.name + ": " + Math.round(e.dataPoint.y / totalVisitors * 100) + "%";
                }
            },
            data: []
        };

        var visitorsDrilldownedChartOptions = {
            animationEnabled: true,
            theme: "light2",
            axisX: {
                labelFontColor: "#717171",
                lineColor: "#a2a2a2",
                tickColor: "#a2a2a2"
            },
            axisY: {
                gridThickness: 0,
                includeZero: false,
                labelFontColor: "#717171",
                lineColor: "#a2a2a2",
                tickColor: "#a2a2a2",
                lineThickness: 1
            },
            data: []
        };

        var chart = new CanvasJS.Chart("chartContainer", newVSReturningVisitorsOptions);
        chart.options.data = visitorsData["New vs Returning Visitors"];
        chart.render();

        function visitorsChartDrilldownHandler(e) {
            chart = new CanvasJS.Chart("chartContainer", visitorsDrilldownedChartOptions);
            chart.options.data = visitorsData[e.dataPoint.name];
            chart.options.title = {
                text: e.dataPoint.name
            }
            chart.render();
            $("#backButton").toggleClass("invisible");
        }

        $("#backButton2").click(function() {
            $(this).toggleClass("invisible");
            chart = new CanvasJS.Chart("chartContainer2", newVSReturningVisitorsOptions);
            chart.options.data = visitorsData["New vs Returning Visitors"];
            chart.render();
        });


        var chart = new CanvasJS.Chart("chartContainer2", newVSReturningVisitorsOptions);
        chart.options.data = visitorsData2["New vs Returning Visitors"];
        chart.render();

        function visitorsChartDrilldownHandler(e) {
            chart = new CanvasJS.Chart("chartContainer2", visitorsDrilldownedChartOptions);
            chart.options.data = visitorsData2[e.dataPoint.name];
            chart.options.title = {
                text: e.dataPoint.name
            }
            chart.render();
            $("#backButton2").toggleClass("invisible");
        }

        $("#backButton2").click(function() {
            $(this).toggleClass("invisible");
            chart = new CanvasJS.Chart("chartContainer2", newVSReturningVisitorsOptions);
            chart.options.data = visitorsData2["New vs Returning Visitors"];
            chart.render();
        });



        var chart = new CanvasJS.Chart("chartContainer3", newVSReturningVisitorsOptions);
        chart.options.data = visitorsData3["New vs Returning Visitors"];
        chart.render();

        function visitorsChartDrilldownHandler(e) {
            chart = new CanvasJS.Chart("chartContainer3", visitorsDrilldownedChartOptions);
            chart.options.data = visitorsData3[e.dataPoint.name];
            chart.options.title = {
                text: e.dataPoint.name
            }
            chart.render();
            $("#backButton3").toggleClass("invisible");
        }

        $("#backButton3").click(function() {
            $(this).toggleClass("invisible");
            chart = new CanvasJS.Chart("chartContainer3", newVSReturningVisitorsOptions);
            chart.options.data = visitorsData3["New vs Returning Visitors"];
            chart.render();
        });


    }
</script>
<style>
    #backButton {
        border-radius: 4px;
        padding: 8px;
        border: none;
        font-size: 16px;
        background-color: #2eacd1;
        color: white;
        position: absolute;
        top: 10px;
        right: 10px;
        cursor: pointer;
    }

    #backButton2 {
        border-radius: 4px;
        padding: 8px;
        border: none;
        font-size: 16px;
        background-color: #2eacd1;
        color: white;
        position: absolute;
        top: 10px;
        right: 10px;
        cursor: pointer;
    }

    #backButton3 {
        border-radius: 4px;
        padding: 8px;
        border: none;
        font-size: 16px;
        background-color: #2eacd1;
        color: white;
        position: absolute;
        top: 10px;
        right: 10px;
        cursor: pointer;
    }

    .invisible {
        display: none;
    }
</style>

<!-- <div class="container">
    <div id="chartContainer" style="height: 370px; width: 100%;"></div>
    <button class="btn invisible" id="backButton">&lt; Atras</button>

</div> -->

<div class="container mb-4">
    <br><br>
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
            <div class="card">

                <div class="card-body">
                <div id="chartContainer" style="">
                <canvas id="myChart" width="400" height="400"></canvas>
                </div>
                    <button class="btn invisible" id="backButton">&lt; Atras</button>

                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
            <canvas id="myChart2" width="400" height="400"></canvas>
                <button class="btn invisible" id="backButton2">&lt; Atras</button>
                <div class="card-body">

                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
            <canvas id="myChart3" width="400" height="400"></canvas>
                <button class="btn invisible" id="backButton3">&lt; Atras</button>
                <div class="card-body">

                </div>
            </div>
        </div>

    </div>

    <section>
        <br>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <button class="btn btn-primary me-md-2" type="button" onclick="muestra1();">Gráfica</button>
        </div>
        <table class="table caption-top" id="class3">

            <caption>
                POWER MODULE STATUS HISTORY
            </caption>

            <thead>
                <tr>
                    <th scope=" col">#</th>
                    <th scope="col">First</th>
                    <th scope="col" style="color: red;">Last</th>
                    <th scope="col">Handle</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td style="color: red;">Otto</td>
                    <td>@mdo</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td style="color: red;">Thornton</td>
                    <td>@fat</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Larry</td>
                    <td style="color: red;">the Bird</td>
                    <td>@twitter</td>
                </tr>
            </tbody>
        </table>
    </section>
</div>


<?php include('footer.php') ?>

<script>
var ctx = document.getElementById('myChart').getContext('2d');
var ctx2 = document.getElementById('myChart2').getContext('2d');
var ctx3 = document.getElementById('myChart3').getContext('2d');

var myChart = new Chart(ctx, {
    type: 'doughnut',
    data: {
        labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
        datasets: [{
            label: '# of Votes',
            data: [12, 19, 3, 5, 2, 3],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});

var myChart2 = new Chart(ctx2, {
    type: 'doughnut',
    data: {
        labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
        datasets: [{
            label: '# of Votes',
            data: [12, 19, 3, 5, 2, 3],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});

var myChart3 = new Chart(ctx3, {
    type: 'doughnut',
    data: {
        labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
        datasets: [{
            label: '# of Votes',
            data: [12, 19, 3, 5, 2, 3],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});

</script>