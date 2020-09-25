<?php include('header1.php'); ?>

<?php
session_start();
?>
		<h4>SCIENTIST PAGE</h4>
		<?php
		include('dbconnect.php');
		$sql="select max(scid) as mid from sciparameter";
		$data=mysql_query($sql);
		$id=0;
		while($row=mysql_fetch_array($data))
		{
			 $id=$row['mid'];
		}
		$id=$id+1;
		echo $id;
		?>
		<form action=# method=post  enctype="multipart/form-data">
		
		<table>
		<tr>   
			<td>
				Id
			</td>
			<td>
				<input name=id disabled=disabled value="<?php echo $id ; ?>" pattern="[a-zA-Z]{2,10}" title="Enter only characters">
				<input type=hidden name=id1 value="<?php echo $id ; ?>" >
			</td>
		</tr>
		
		<tr>   
			<td>
				Pincode
			</td>
			<td>
				<input name=pincode  pattern="[0-9]{6}" title="Enter only numbers">
			</td>
		</tr>
		
		<tr>
			<td>
			Place
			</td>
			<td>
			<input name=place>		
			</td>
		</tr>
		<tr>
			<td>
			Temparature
			</td>
			<td>
					<input  name=temparature>
			</td>
		</tr>
		<tr>
			<td>
			Rainfall
			</td>
			<td>
					<input  name=rainfall>
			</td>
		</tr>
		<tr>
			<td>
			Pressure
			</td>
			<td>
					<input  name=pressure>
			</td>
		</tr>
		<tr>
			<td>
			Humidity
			</td>
			<td>
					<input  name=humidity>
			</td>
		</tr>
		<tr>
			<td>
			Windspeed
			</td>
			<td>
					<input  name=windspeed>
			</td>
		</tr>
		<tr>
			<td>
			Moisture
			</td>
			<td>
					<input  name=moisture>
			</td>
		</tr>
		
		<tr>
			<td>
			<input type="submit" name="btn1" value="OK">		
			</td>
		</tr>
		
		</table>
		<font size=20>
		<center><a href="userdata.php">User Data</a ></center>
		</font>
		<?php
		include('dbconnect.php');
		$con3=mysql_connect("localhost","root","");
		mysql_select_db("indianpincode",$con3);
		if(isset($_POST['btn1']))
		{
			$inputstring="t_".$_POST['temparature']." h_".$_POST['humidity']." w_".$_POST['windspeed']." m_".$_POST['moisture'];  
				
			$sql="insert into  sciparameter values('$_POST[id1]','$_POST[place]','$_POST[temparature]','$_POST[humidity]','$_POST[windspeed]','$_POST[moisture]','','$inputstring')";
			
			$sql1="insert into  pincode values('$_POST[id1]','$_POST[pincode]','$_POST[place]','$_POST[temparature]','$_POST[rainfall]','$_POST[pressure]','$_POST[humidity]','$_POST[windspeed]','$_POST[moisture]')";
			
			
			//echo $sql;
			mysql_query($sql,$con);
			mysql_query($sql1,$con3);
		}
	   ?>
	   </form>
	   

<?php include('footer.php'); ?>

