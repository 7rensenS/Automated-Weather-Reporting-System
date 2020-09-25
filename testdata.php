<?php
include('dbconnect.php');
header('Content-Type: text/csv; charset=utf-8');
      header('Content-Disposition: attachment; filename=testdata.csv');
       $output = fopen("php://output", "w");
     fputcsv($output, array('pid','prstring'));
         $query = "select *  from parameter";
         $result = mysql_query($query, $con);
         while($row = mysql_fetch_array($result))
         {
              fputcsv($output,array($row['pid'],$row['prstring']));
             
         }
      fclose($output);

?>