<!doctype html>
@extends('admin.admin')
@section('content')
<html lang="en">
  <head>
   
    <div class="container">
    <div class="row">
        <div class="col-md-10 offset-md-1">
            <div class="panel panel-default">
                <div class="panel-heading">Statistiques</div>
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
    var barChartData = {
        labels: year,
        datasets: [{
            label: 'Perscriptions',
            backgroundColor: "#0B9ED9",
            data: user
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
                        borderWidth: 5,
                        borderColor: '#021859',
                        borderSkipped: 'bottom'
                    }
                },
                responsive: true,
                title: {
                    
                    display: true,
                    text: 'Perscriptions Par Mois'
                }
            }
        });
    };
</script>
  </body>
</html>
@phpsection