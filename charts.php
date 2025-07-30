<?php
 $con = mysqli_connect("localhost","root","","mentoring");
 if($con){
  echo "connected";
 }
 ?>
<html>
  
   
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          c

        var options = {
          title: 'My Daily Activities'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
        <?php
          $sql = "SELECT * FROM  charts";
          $fire = mysqli_query($con,$sql);
          while ($result = mysqli_fetch_assoc($fire)){
            echo"['".$result['student']."',".$result['contribution']."],";
          }
         ?>
  </head>
  <body>
    <div id="piechart" style="width: 900px; height: 500px;"></div>
  </body>
</html>

  