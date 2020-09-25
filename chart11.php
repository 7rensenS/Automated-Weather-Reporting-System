
<?php 
//index.php
include('dbconnect.php');
 $query = "SELECT * FROM sciparameter";  
 $result = mysql_query($query,$con);
$chart_data = '';
while($row = mysql_fetch_array($result))
{
 $chart_data .= "{ place:'".$row["place"]."', temparature:".$row["temparature"].", moisture:".$row["moisture"].", humidity:".$row["humidity"]."}, ";
}
$chart_data = substr($chart_data, 0, -2);
?>

<!DOCTYPE html>
<html>
 <head>
  <title>Weather Data </title>
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
  
 </head>
 <body>
  <br /><br />
  <div class="container" style="width:900px;">
   <h2 align="center">Current weather</h2>
  
   <br /><br />
   <div id="chart"></div>
  </div>
 </body>
</html>

<script>
Morris.Bar({
 element : 'chart',
 data:[<?php echo $chart_data; ?>],
 xkey:'place',
 ykeys:['moisture', 'temparature', 'humidity'],
 labels:['moisture', 'temparature', 'humidity'],
 hideHover:'auto',
 stacked:true
});
</script>
