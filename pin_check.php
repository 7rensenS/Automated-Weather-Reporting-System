
<?php

$con=mysql_connect("localhost","root","");
	mysql_select_db("indianpincode",$con);
if(isset($_POST['name']))
{
$name=$_POST['name'];


$get="select * from pincode where pincode='$name' or place='$name' ";
$query=mysql_query($get,$con);
$row=mysql_num_rows($query);

if($row==0)
{
echo "<h2 style='color:black;' >
Weather are not providing delivery services at this Pincode: 
<span style='color:red;'>$name</span></h2>";
}
else{

?></div><?php
while($row1 = mysql_fetch_array($query)){
    $pincode = $row1['pincode'];
    $courier = $row1['place'];
    $cityname = $row1['temperature'];
    $statename = $row1['rainfall'];
   $statecode = $row1['pressure'];
     $status = $row1['humidity'];

    echo"   
        "
        
		   ?>  
		 
		   <div class="forecast-table" style="padding-top:150px;">
				<div class="container">
					<div class="forecast-container">
						<div class="today forecast">
							<div class="forecast-header">
								<div class="day">Monday</div>
								<div class="date">6 Oct</div>
							</div> <!-- .forecast-header -->
		   
		   <div class="forecast-content">
								<div class="location"><?php echo"$courier"?></div> <?php?>
								<div class="degree">
									<div class="num"><?php echo"$cityname"?><sup>o</sup>C</div>
									<div class="forecast-icon">
										<img src="images/icons/icon-1.svg" alt="" width=90>
									</div>	
									</div>
									<span><img src="images/icon-umberella.png" alt=""><?php echo"$statename"?>%</span>
								<span><img src="images/icon-wind.png" alt=""><?php echo"$statecode"?>km/h</span>
								<span><img src="images/icon-compass.png" alt=""><?php echo"$status"?></span>
								<span><img src="images/icon-compass.png" alt=""><?php echo"$pincode"?></span>
							</div>
							</div>
						<div class="forecast">
							<div class="forecast-header">
								<div class="day">Tuesday</div>
							</div> <!-- .forecast-header -->
							<div class="forecast-content">
								<div class="forecast-icon">
									<img src="images/icons/icon-3.svg" alt="" width=48>
								</div>
								<div class="degree">23<sup>o</sup>C</div>
								<small>18<sup>o</sup></small>
							</div>
						</div>
						<div class="forecast">
							<div class="forecast-header">
								<div class="day">Wednesday</div>
							</div> <!-- .forecast-header -->
							<div class="forecast-content">
								<div class="forecast-icon">
									<img src="images/icons/icon-5.svg" alt="" width=48>
								</div>
								<div class="degree">23<sup>o</sup>C</div>
								<small>18<sup>o</sup></small>
							</div>
						</div>
						<div class="forecast">
							<div class="forecast-header">
								<div class="day">Thursday</div>
							</div> <!-- .forecast-header -->
							<div class="forecast-content">
								<div class="forecast-icon">
									<img src="images/icons/icon-7.svg" alt="" width=48>
								</div>
								<div class="degree">23<sup>o</sup>C</div>
								<small>18<sup>o</sup></small>
							</div>
						</div>
						<div class="forecast">
							<div class="forecast-header">
								<div class="day">Friday</div>
							</div> <!-- .forecast-header -->
							<div class="forecast-content">
								<div class="forecast-icon">
									<img src="images/icons/icon-12.svg" alt="" width=48>
								</div>
								<div class="degree">23<sup>o</sup>C</div>
								<small>18<sup>o</sup></small>
							</div>
						</div>
						<div class="forecast">
							<div class="forecast-header">
								<div class="day">Saturday</div>
							</div> <!-- .forecast-header -->
							<div class="forecast-content">
								<div class="forecast-icon">
									<img src="images/icons/icon-13.svg" alt="" width=48>
								</div>
								<div class="degree">23<sup>o</sup>C</div>
								<small>18<sup>o</sup></small>
							</div>
						</div>
						<div class="forecast">
							<div class="forecast-header">
								<div class="day">Sunday</div>
							</div> <!-- .forecast-header -->
							<div class="forecast-content">
								<div class="forecast-icon">
									<img src="images/icons/icon-14.svg" alt="" width=48>
								</div>
								<div class="degree">23<sup>o</sup>C</div>
								<small>18<sup>o</sup></small>
							</div>
						</div>
					</div>
				</div>
			</div>
	
									<?php
          
     
          
        ;

}
}

}
?>

			