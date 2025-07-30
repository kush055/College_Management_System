
<?php
 

$link=mysqli_connect("localhost","root","");
   mysqli_select_db($link,"mentoring");

$test=array();
$count=0;

   $res=mysqli_query($link,"select * from attandencegraph");
   while($row=mysqli_fetch_array($res))
    {
     $test[$count]["label"]=$row["label"];
     $test[$count]["y"]=$row["amount"];
     $count=$count+1;



 }

 
?>
<!DOCTYPE HTML>
<html>
<head>
<script>
window.onload = function() {
 
var chart = new CanvasJS.Chart("chartContainer", {
    animationEnabled: true,
    theme: "dark8",
    title:{
        
    },
    axisY: {
        
    },
    data: [{
        type: "column",
        yValueFormatString: "#,##0.## present",
        dataPoints: <?php echo json_encode($test, JSON_NUMERIC_CHECK); ?>
    }]
});
chart.render();
 
}
</script>
</head>
<body>
<div id="chartContainer" style="height: 370px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>
</html> 