<?php
session_start();
?>








<?php


if($_SESSION['secloginnext'] =="0"){
   echo"<script> window.open('login.php','_self');</script>";

}
else
       {
			$specialistlocal1;
		    $docfirstname;
		    $doclastname;
		    $doccontact;
		    $docaddress;
		    $doccity;
		    $doclocality;
		    $docmaster;
		    $docbachelor;
		    $docemail;
		    $docexp;
		    $docplace;
		    $docotherdegree;
			$d=$_SESSION['secloginnext'];

			//echo"$d";
			$conn =new mysqli('localhost','root','','nexahealth');
			if($conn->connect_error) die($conn->connect_error); 
		  	$query11="select specialist from qualification WHERE user_id='$d'";
			$check12=$conn->query($query11);
		    while($row=mysqli_fetch_array($check12,MYSQLI_NUM))
			   {
			      $specialistlocal1=$row[0];
			    //echo"$specialistlocal";//from here we got the speacialistb
			    //break;
			   }
			 $query22="select first_name from $specialistlocal1  where user_id='$d'";
			    	    $check11=$conn->query($query22);
			    	   //$ram= mysqli_num_rows($check);
			    	   $p;
			    	   while($row=mysqli_fetch_array($check11,MYSQLI_NUM))
			    	   {
			    	   	$docfirstname=$row[0];
			    	   }

			 $query23="select last_name from $specialistlocal1  where user_id='$d'";
			    	    $check12=$conn->query($query23);
			    	   //$ram= mysqli_num_rows($check);
			    	   $p;
			    	   while($row=mysqli_fetch_array($check12,MYSQLI_NUM))
			    	   {
			    	   	$doclastname=$row[0];
			    	   }
			 $query33="select email_id from $specialistlocal1  where user_id='$d'";
			    	    $check22=$conn->query($query33);
			    	   //$ram= mysqli_num_rows($check);
			    	   $p;
			    	   while($row=mysqli_fetch_array($check22,MYSQLI_NUM))
			    	   {
			    	   	$docemail=$row[0];
			    	   }
			 $query24="select contact_no from $specialistlocal1  where user_id='$d'";
			    	    $check13=$conn->query($query24);
			    	   //$ram= mysqli_num_rows($check);
			    	   $p;
			    	   while($row=mysqli_fetch_array($check13,MYSQLI_NUM))
			    	   {
			    	   	$doccontact=$row[0];
			    	   }
			   $query25="select complete_address from address  where user_id='$d'";
			    	    $check14=$conn->query($query25);
			    	   //$ram= mysqli_num_rows($check);
			    	   $p;
			    	   while($row=mysqli_fetch_array($check14,MYSQLI_NUM))
			    	   {
			    	   	$docaddress=$row[0];
			    	   }
			   $query26="select city from address  where user_id='$d'";
			    	    $check15=$conn->query($query26);
			    	   //$ram= mysqli_num_rows($check);
			    	   $p;
			    	   while($row=mysqli_fetch_array($check15,MYSQLI_NUM))
			    	   {
			    	   	$doccity=$row[0];
			    	   }
			   $query27="select locality from address  where user_id='$d'";
			    	    $check16=$conn->query($query27);
			    	   //$ram= mysqli_num_rows($check);
			    	   $p;
			    	   while($row=mysqli_fetch_array($check16,MYSQLI_NUM))
			    	   {
			    	   	$doclocality=$row[0];
			    	   }

			  $query29="select master_degree from qualification where user_id='$d'";
			  			$check17=$conn->query($query29);
			  	while($row=mysqli_fetch_array($check17,MYSQLI_NUM))
			    	   {
			    	   	$docmaster=$row[0];
			    	   }	
			  $query29="select bachelor_degree from qualification  where user_id='$d'";
			    	    $check18=$conn->query($query29);
			    	   //$ram= mysqli_num_rows($check);
			    	   $p;
			    	   while($row=mysqli_fetch_array($check18,MYSQLI_NUM))
			    	   {
			    	   	$docbachelor=$row[0];
			    	   }
			
			    $query30="select others_degree from qualification  where user_id='$d'";
			    	    $check19=$conn->query($query30);
			    	   //$ram= mysqli_num_rows($check);
			    	   $p;
			    	   while($row=mysqli_fetch_array($check19,MYSQLI_NUM))
			    	   {
			    	   	$docotherdegree=$row[0];
			    	   }
			    	    //$docotherdegree;
			    $query40="select experience from experience  where user_id='$d'";
			    	    $check49=$conn->query($query40);
			    	   //$ram= mysqli_num_rows($check);
			    	   $p;
			    	   while($row=mysqli_fetch_array($check49,MYSQLI_NUM))
			    	   {
			    	   	$docexp=$row[0];
			    	   }
			    $query50="select work_place from experience  where user_id='$d'";
			    	    $check59=$conn->query($query50);
			    	   //$ram= mysqli_num_rows($check);
			    	   $p;
			    	   while($row=mysqli_fetch_array($check59,MYSQLI_NUM))
			    	   {
			    	   	$docplace=$row[0];
			    	   }	   	   	   
			 echo"<html>
			 <style>
			 	body{
			 		background-color:	 gray;
			 	}
			 	 #submit{
							 	
							 	width: 40%;
						    background-color: 	#6147FF;
						    color: white;
						    padding: 14px 20px;
						    
						    border: none;
						    border-radius: 4px;
						    cursor: pointer;

	 					}
	 					 #submit2{
							 	
							 	width: 10%;
						    background-color:  #632300;
						    color: white;
						    padding: 5px 5px;
						    
						    border: none;
						    border-radius: 4px;
						    cursor: pointer;

	 					}
	 					div{
	 						padding:0px 100px 100px 100px;
	 						backgroung-color:#a3a375;
							width:1250px;

							border:5px solid green;
							
							margin:0px 00px 00px 00px;

	 					}
			 </style>
			 	<body><div>
			 	<form id='hi' action='loginnext.php' method='post'>
			     <h1 style='color:#141452'>&nbsp&nbsp&nbsp&nbsp&nbsp Dr.&nbsp$docfirstname &nbsp$doclastname</h1>
			     	     <h3>&nbsp&nbsp&nbsp&nbsp&nbsp Specialist :-&nbsp&nbsp&nbsp&nbsp&nbsp $specialistlocal1</h3>

			     <h3>&nbsp&nbsp&nbsp&nbsp&nbsp ADDRESS :-</h3>
			     <p3 style='font-size:20px;'> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp city:-&nbsp&nbsp&nbsp&nbsp&nbsp $doccity</p3><br>

			    <p3 style='font-size:20px;'> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp locality:-&nbsp&nbsp&nbsp&nbsp&nbsp $doclocality</p3><br>
			    <p3 style='font-size:20px;'> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Permanent Adress:-&nbsp&nbsp&nbsp&nbsp&nbsp $docaddress</p3><br>
			    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input type='submit' id='submit2' name='sub1' value='Edit'>
			    <h3>&nbsp&nbsp&nbsp&nbsp&nbsp CONTACTS :-</h3>
			    <p3 style='font-size:20px;'> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp mob.no:-&nbsp&nbsp&nbsp&nbsp&nbsp $doccontact</p3><br>
			    <p3 style='font-size:20px;'> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp email.id:- $docemail</p3><br>
			    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input type='submit' id='submit2' name='sub2' value='Edit'>
			    <h3>&nbsp&nbsp&nbsp&nbsp&nbsp QUALIFICATION :-</h3>
			    <p3 style='font-size:20px;'> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Master Degree:-$docmaster</p3><br>
			    <p3 style='font-size:20px;'> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Bachelor Degree:-&nbsp&nbsp&nbsp&nbsp&nbsp $docbachelor</p3><br>
			 
			    <p3 style='font-size:20px;'> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Other Degree:-&nbsp&nbsp&nbsp&nbsp&nbsp $docotherdegree</p3><br>

			   &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input type='submit' id='submit2' name='sub3' value='Edit'><br>
			   			    <h3>&nbsp&nbsp&nbsp&nbsp&nbsp Work-Experience :-</h3>
			    <p3 style='font-size:20px;'> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Experience(in years):-&nbsp&nbsp&nbsp&nbsp&nbsp $docexp</p3><br>
			    <p3 style='font-size:20px;'> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Work Place:-&nbsp&nbsp&nbsp&nbsp&nbsp $docplace</p3><br>
			    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input type='submit' id='submit2' name='sub5' value='Edit'><br><br><br>
			      &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type='submit' id='submit' name='sub4' value='Logout'>
			    </div></body></html>";
     }
?>
<?php
$specialistlocal;
if(isset($_POST['sub4'])){
	echo"hello";
  $_SESSION['secloginnext'] ="0";
  $query3="select specialist from qualification WHERE user_id='$d'";
					$check2=$conn->query($query3);
					$ram= mysqli_num_rows($check2);
					while($row=mysqli_fetch_array($check2,MYSQLI_NUM))
	    	   {
	    	   		//echo"da";
	    	   	$specialistlocal=$row[0];
	    	   		break;
	    	   }

    		$query41="update doctor set active ='0' where user_id='$d'";	
	    	   	$check31=$conn->query($query41);
	    	   		        		
    				
	    	   	$query4="update $specialistlocal set active ='0' where user_id='$d'";	
	    	   	$check3=$conn->query($query4);
	    	   
	    	   	
  echo"<script> window.open('login.php','_self');</script>";

 
}
if(isset($_POST['sub1'])){
	$_SESSION['secloginnext'] =$d;
  echo"<script> window.open('updateaddress.php','_self');</script>";	
}
if(isset($_POST['sub2'])){
	$_SESSION['secloginnext'] =$d;
  echo"<script> window.open('updatecontact.php','_self');</script>";	
}
if(isset($_POST['sub3'])){
	$_SESSION['secloginnext'] =$d;
  echo"<script> window.open('updatequalification.php','_self');</script>";	
}
if(isset($_POST['sub5'])){
	$_SESSION['secloginnext'] =$d;
  echo"<script> window.open('updateexp.php','_self');</script>";	
}



?>