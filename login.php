<?php
 session_start();
?>
<!DOCTYPE html>
<head>
<title>Admin</title>
<meta charset="utf-8">
<link rel="stylesheet" href="style1.css" type="text/css"/>
</head>
<body>
<div class="container">
<img src="admin1.png"/>
<form method="post" action="login.php">
<div class="form-input">
<input type="text" placeholder="User Name" name="user_id">
</div><br>
<div class="form-input">
<input type="password" placeholder="Password" name="password">
</div>
<label>
<input type="checkbox" class="form1">Remember Me</label>
<a class="btn-login" href="forgotpass.php">forgot password?</a><br><br>
<input type="submit" name="login" value="submit">
       <a href="rule1.html"><button type="button" class="btn btn-success">sign-up</button></a>
      </form>
</div>
<footer>
<p> Powered by <a class="footer-text" >NEXA HEALTH</a></p>
</footer>















<?php
$_SESSION['secloginnext'] ="0";
	
if(isset($_POST['login'])){
	$userid=$_POST['user_id'];
	$password=$_POST['password'];
		$conn =new mysqli('localhost','root','','nexahealth');
	if($conn->connect_error) die($conn->connect_error);

   $query1="select * from login WHERE user_id='$userid'";
	$check=$conn->query($query1);
	$row=$check->num_rows;
		$specialistlocal;

   if($row>0){

     	$query2="select password from login WHERE user_id='$userid'";
		$check1=$conn->query($query2);
		$ram= mysqli_num_rows($check);
		
    	$pp;
	        while($row=mysqli_fetch_array($check1,MYSQLI_NUM))
	    	   {
	    	   		echo"da";
	    	   		$pp=$row[0];
	    	   		break;
	    	   }
	    	   if($pp==$password){
	    	   		$query3="select specialist from qualification WHERE user_id='$userid'";
					$check2=$conn->query($query3);
					$ram= mysqli_num_rows($check2);
					while($row=mysqli_fetch_array($check2,MYSQLI_NUM))
	    	   {
	    	   		//echo"da";
	    	   	$specialistlocal=$row[0];
	    	   		break;
	    	   }

    					        		
    				
	    	   	$query4="update $specialistlocal set active ='1' where user_id='$userid'";	
	    	   	$check3=$conn->query($query4);
	    	   	$query41="update doctor set active ='1' where user_id='$userid'";	
	    	   	$check31=$conn->query($query41);
	    	   	if(!$check3 and !$check31){	
	    	   		echo"some problem in update specialist in login.php page";
	    	
	    	   	}
	    	   	else{
	    	   		$_SESSION['secloginnext'] =$userid;

	    	   	//echo "<script>alert('Welcome To NexaHealth ')</script>";
	    	   	echo"<script> window.open('loginnext.php','_self')</script>";
	    	   	}

	    	   }
	    	   else{
	    	   		    			echo "<script>alert('password incorrect')</script>";

	    	   }
   }
   else{
   		    			echo "<script>alert('username not exist please sign up first')</script>";

   }

}








?>
</body>
</html>
