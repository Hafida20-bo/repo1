
@extends('admin.admin')
@section('content')
<!doctype html>
<html lang="en">
  <head>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <style type="text/css">
        .box{
            width:200px;
            margin:0 auto;
        }
    </style>
    <div class="container">
    <div class="row">
        <div class="col-md-10 offset-md-1">
            <div class="panel panel-default">
                <div class="panel-heading">Nombre Des RDV et Perscriptions Par Mois</div>
                <div class="panel-body">
                    <canvas id="canvas" height="250" width="600"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
<script>
    var year = <?php echo $year; ?>;
    var user = <?php echo $user; ?>;
    var user1 = <?php echo $user1; ?>;
    var barChartData = {
        labels: year,
        datasets: [{
            label: 'Rdv',
            backgroundColor: "blue",
            data: user,




        },{
            label: 'Perscription',
            backgroundColor: "yellow",
            data: user1,

            


        }]
    };


    window.onload = function() {
        var ctx = document.getElementById("canvas").getContext("2d");
        window.myBar = new Chart(ctx, {
            type: 'bar',
            data: barChartData,
            options: {
                elements: {
                    rectangle: {
                        borderWidth: 2,
                        borderColor: 'white',
                        borderSkipped: 'bottom'
                    }

                },
                responsive: true,
                title: {
                    display: true,
                    text: ''
                }
            }
        });
    };
</script>

<div class="container" style="margin-top: 50px;">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Graphique circulaire, pour le mois précédent, représentant les nombres des RDV par médecin</h3>
                    </div>
                    <div class="panel-body" align="center">
                        <div id="pie_chart" style="width:750px; height:450px;">

                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        var analytics = <?php echo $medecin; ?>

        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart()
        {
            var data = google.visualization.arrayToDataTable(analytics);
            var options = {
                title : ''
            };
            var chart = new google.visualization.PieChart(document.getElementById('pie_chart'));
            chart.draw(data, options);
        }
    </script>
  </body>
</html>





@endsection