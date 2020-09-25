<?php include('header1.php'); ?>


		<h4>USER PAGE</h4>
<?php
session_start();
		//$email=$_SESSION['email'];
		//echo $email;
?>		
		<?php
		

		//Auto generate next id in the screen.

		//Query to get the highest value in table
		include('dbconnect.php');
		$sql="select max(sid) as mid from parameter";
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
			Place
			</td>
			<td>
			<input name=place>		
			</td>
		</tr>
		<tr>
			<td>
			temparature
			</td>
			<td>
					<select name=temparature>
					<option value="high">High</option>
					<option value="medium">Medium</option>
					<option value="low">Low</option>
					</select>
			</td>
		</tr>
		<tr>
			<td>
			humidity
			</td>
			<td>
					<select name=humidity>
					<option value="high">High</option>
					<option value="medium">Medium</option>
					<option value="low">Low</option>
					</select>
			</td>
		</tr>
		<tr>
			<td>
			windspeed
			</td>
			<td>
					<select name=windspeed>
					<option value="high">High</option>
					<option value="medium">Medium</option>
					<option value="low">Low</option>
					</select>
			</td>
		</tr>
		<tr>
			<td>
			moisture
			</td>
			<td>
					<select name=moisture>
					<option value="high">High</option>
					<option value="medium">Medium</option>
					<option value="low">Low</option>
					</select>
			</td>
		</tr>
		<tr>
			<td>
			<input type="submit" name="btn1" value="OK">		
			</td>
		</tr>
		</table>
		
	   </form>
	   <?php
		include('dbconnect.php');
		if(isset($_POST['btn1']))
		{
			$inputstring="t_".$_POST['temparature']." h_".$_POST['humidity']." w_".$_POST['windspeed']." m_".$_POST['moisture'];  
				
			$sql="insert into  parameter values('$_POST[id1]','$_POST[place]','$_POST[temparature]','$_POST[humidity]','$_POST[windspeed]','$_POST[moisture]','','$inputstring',0)";
			echo $sql;
			mysql_query($sql,$con);
			
			

		}
	   ?>
	   <form action=# method=post  enctype="multipart/form-data">
	   	<table>
			<tr>
			<td>
			Question?
			</td>
			<td>
				<textarea name="qu" rows="4" cols="50"></textarea>
			</td>
			</tr>
			<tr>
				<td><input type="submit" name="btn2" value="Ask"></td>
			</tr>
		</table>
	   </form>	
	   <div>   
			<form action=# method=post  enctype="multipart/form-data">
				<table>
					<tr>
						<th><font size=16>USER's DATA PREDICTION</font></th>
					</tr>
					<tr>
						<td><a href="testdata.php">Download CSV</a></td>
						<td></td></tr>
					<tr>
						<td><a href="upload.php">Upload CSV</a></td>
					</tr>
				</table>
			</form>	
		</div>
<?php
include('dbconnect.php');
if(isset($_POST['btn2']))
{
$sql="insert into  qatbl values('$email','$_POST[qu]','',0)";
echo $sql;
mysql_query($sql,$con);

}
?>
<?php
		include('dbconnect.php');
		if(isset($_POST['prbtn']))
		{
			$sql="select * from parameter where pid='".$id."' and email='".$email."'";
			echo $sql;
			mysql_query($sql,$con);
			while($row = mysql_fetch_array($sql))
				{
					$prval=$row['prvalue'];
				}
			if($prval==0)
			  echo "<font color=red >RAIN</font>";
			else if($prval==1)
				echo "<font color=red >WIND</font>";
			else 
				echo "<font color=red >SUNNY</font>";
		}
?>
<?php include('footer.php'); ?>