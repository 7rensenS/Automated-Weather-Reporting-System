<?php include('header.php'); ?>
		<h4>Home Page</h4>
			<form>
		
      <form action=check.php method=post>
		<table>
		
			<tr><td>e-Mail</td><td><input name=username value="@gmail.com"><?php if(isset($_GET['msg'])) echo "<font color=red>$_GET[msg]</font>"; ?></td></tr>
		    <tr><td>password</td><td><input name=password></td></tr>
			<tr><td><input type=submit name=btn value='Login'></td><td></td></tr>
			<tr><td>
			<?php
     $msg="";
    
     if($_GET['msg'])
     $msg=$_GET['msg'];
     if($msg=="Invalid Username or Password" || $msg=="You have not logged yet"|| $msg=="Your are not privilleged for this activity")
     echo "<font color=red >".$msg."</font>";
    
     ?>
	 </td></tr>

		</table>
	  </form>
<?php include('footer.php'); ?>