
<?php  

include('dbconnect.php');
 $query = "SELECT moisture, place FROM sciparameter";  
 $result = mysql_query($query,$con);
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Achuu OOduNNUUUUU</title>  
           <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>  
           <script type="text/javascript">  
           google.charts.load('current', {'packages':['corechart']});  
           google.charts.setOnLoadCallback(drawChart);  
           function drawChart()  
           {  
                var data = google.visualization.arrayToDataTable([  
                          ['Gender', 'Number'],  
                          <?php  
                        
							  while($row = mysql_fetch_array($result))
                          {  
                               echo "['".$row["place"]."', ".$row["moisture"]."],";  
                          }  
                          ?>  
                     ]);  
                var options = {  
                      title: 'Rainfall info',  
                      is3D:true,  
                      pieHole: 0.4  
                     };  
                var chart = new google.visualization.ColumnChart(document.getElementById('columnchart_values'));  
                chart.draw(data, options);  
           }  
           </script>  
		  
		    
      </head>  
      <body>  
           <br /><br />  
           <div style="width:900px;">  
                <h3 align="center">Rainfall information</h3>  
                <br />  
                <div id="columnchart_values" style="width: 300px; height: 300px;"></div>  
			
           </div>  
