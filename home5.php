<?php session_start();
?>

<html>
<head>
<link type="text/css" rel="stylesheet" href="mystyle.css"/>
<form action="home5.php" method="post">

</head>
 <style>
body {
    
    background: url(images6.jpg) no-repeat center center fixed; 
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;

  }


select{
	width:200px;
	height:28px;

	margin-top: 00px;
    margin-bottom: 00px;
    margin-right: 2px;
    margin-left: 5px;
background: rgba(0,0,0,0.3);
    color:#fff;
    text-shadow:0 1px 0 rgba(0,0,0,0.4);
    padding-left: 1.5px
}
input[type=submit] {
    width: 7em;  height: 2em;
    background: rgba(0,0,0,0.3);
    color:#fff;
    text-shadow:0 1px 0 rgba(0,0,0,0.4);
}
#footer{
 position:fixed;
 bottom:0;
 left:0;
 color:red;
}

</style>

<body>


	<div id="menu" style="width:100%;padding:25px 10px 80px 0px;">
<ul style="text-align:center;">

<h style="font-size:450%;font-family:verdana;color:red;">NEXAHEALTH</h>

<li><a >DOCTORS ZONE</a>
<ul>
<li><a href="login.php">LOGIN</a></li>
<li><a href="rule1.php">Request for signup</a></li>
<li><a href="checkstatus.php">Registration status</a></li>

</ul></li>
<li><a href="help1.html">HELP</a></li>
<li><a href="about3.html">ABOUT US</a></li>
<li><a href="firstaid.html">FIRST AID</a></li>
<li><a href="home5.php">HOME</a></li>


</div>
</div>
	<h1 style="color:#ff00ff;font-size:85px;font-family:italic;" ><b><marquee>Health is not valued till &nbsp;sickness &nbsp;comes</marquee></b></h1>


<div style="height:100px;width:100px;padding:0px 200px 30px 0px; ">
  
</div>
</div>

	<form>
		<label for="city"><b> &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;Current City</b>:</label>
		
		<select id="city" name="city">
			<option>--Select City--</option>
			<option>Kochi</option>
			<option>Bengaluru</option>
			<option>Mumbai</option>
			<option>Chennai</option>
		</select>
		<label for="locality"><b> &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; Current Locality</b>:</label>
		<select id="locality" name="locality">
			<option>Select Locality</option>
			<option>Aluva Railway Station</option>
			<option>Cusat</option>
			<option>Ernakulam North</option>
			<option>Ernakulam Railway Station</option>
			<option>Edappally</option>
			<option>Fort Kochi</option>
			<option>HMT Junction</option>
			<option>Kadavanthra</option>
			<option>kakkanad</option>
			<option>Marine Drive</option>
			<option>M.G Road</option>
			<option>Mattancherry</option>
			<option>North Kalamessary</option>
			<option>Palarivattom</option>
			<option>South Kalamesary</option>
			<option>Vyttila</option>
			<option>Vypin</option>
		</select>
<label for="specialist"><b> &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;Specialist Doctor</b></label>
			<select id="specialist" name="specialist">
			<option>--Select Specialist--</option>
			<option>accident</option>
			<option value="cardiologist">cardiologist</option>
			<option>gynecologist</option>
			<option>neurologist</option>
			<option>Physician</option>
			<option>psychiatrist</option>
			<option>surgeon</option>
			<option>urologist</option>

		</select>

<label><b><input type="submit" name="submit" value="Search"></b></label>
<div style="height:10px;width:10px;padding:10px 20px 3px 0px; ">

</div>
<div align="centre" style="font-size:30px;font-family: cursive
;width:100%;padding:10px 0px 10px 1px;">
	<h1 style="color:red;"> <marquee scrollamount="11"><b>Never wait in line, ever again.Get well. Online or at Clinic.contact your doctor  24*7.</b></marquee></div>
 <div style="background:white; height:40px;width:1350px;">
 </div>


<div style="background:white; height:300px;width:1350px;">

		
		<image src="im5.jpg" > &nbsp;&nbsp;&nbsp; &nbsp;
		<image src="im6.jpg" > &nbsp;&nbsp;&nbsp; &nbsp;
		
		<image src="im3.jpg" >
		</div>
		
		
	</form>
	<div style="background:white; height:50px;width:1350px;">
	</div>


</body>
<div id="footer">
	&copy:Copywrite the NEXAHEALTH.com
</div>
</html>










<?php

	$_SESSION['seclogin'] ="0";
//$_SESSION['seclocality'] = $_POST['specialist'];
	
if(isset($_POST['submit']))
{
	$city=$_POST['city'];   	$loc=$_POST['locality'];
		$specia=$_POST['specialist'];
		if($city=='Kochi'){
			if($specia!="--Select Specialist--"){
				if($loc!="Select Locality"){
		$_SESSION['seclogin'] = "1";
		
		$conn =new mysqli('localhost','root','','nexahealth');
	    if($conn->connect_error) die($conn->connect_error);	    
        
       $query1="insert into search(locality, speacialist) values('$loc','$specia')";
       $result=$conn->query($query1);
       if(!$result){
       	echo"<script>alert('data not inserted')</script>";
       }

       else{
       	

        echo"<script> window.open('doclistbefore.php','_self');</script>";
       }
   }
   else{
   	echo"<script>alert('City Required !!!')</script>";
   }
   }//specialist must choose
   else{
   	    	       	echo"<script>alert('Specialist Required !!!')</script>";

   }
    }//site only for kochi
    else{
    	       	echo"<script>alert('Soory our Site Works Only For Kochi!!')</script>";

    }
  }
?>



