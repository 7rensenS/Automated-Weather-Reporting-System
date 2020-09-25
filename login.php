<?php include('header.php'); ?>
		<h4>Home Page</h4>
		  
		    <center>
			<h1>Registration</h1>

			<a href='userform.php'>user Registration</a><br>
			<a href='stationform.php'>station Registration</a><br>
			<a href='scientistform.php'>scientist Registration</a><br>

		    </center>
		
		
      <form action="check.php" method="post">
		<table>
		  <tr><td>
			<?php
				$msg="";
				if(isset($_GET['msg']))
				if($_GET['msg'])
					$msg=$_GET['msg'];
				if($msg=="Invalid Username or Password" || $msg=="You have not logged yet"|| $msg=="Your are not privilleged for this activity")
				echo "<font color=red >".$msg."</font>";
			?>
		</td></tr>
		
			<tr><td>e-Mail</td><td><input name=email></td></tr>
			<tr><td>password</td><td><input type=password name=password></td></tr>
			<tr><td><input type=submit value='Login'></td><td></td></tr>
		</table>
	  </form>
	<?php include('footer.php'); ?>