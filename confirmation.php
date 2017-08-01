<?php
session_start();
?>
<?php

  $docfirstname;
  $doclastname;
  $doccity;
  $doclocality;
  $docaddress;
  $doccontact;
  $specialistlocal1;
echo"<form action='confirmation.php' method='post'>";
  if($_SESSION['secuser'] == "0")
  {
  	 echo"you are out";
    echo"<script> window.open('doctlist.php','_self');</script>";
  }
  else{
  	$d=$_SESSION['secuser'];
  	$conn =new mysqli('localhost','root','','nexahealth');
	    if($conn->connect_error) die($conn->connect_error); 
  	$query11="select specialist from qualification WHERE user_id='$d'";
	$check12=$conn->query($query11);
    while($row=mysqli_fetch_array($check12,MYSQLI_NUM))
	   {
	      $specialistlocal1=$row[0];
	    //echo"$specialistlocal";//from here we got the speacialistb
	    break;
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
  	//echo"else part";
  	//echo"$d";
  	echo"<html><style>
  	   div{
              background-color:	 #52527a;

              padding-top: 50px;
              padding-right: 30px;
              padding-bottom: 50px;
              padding-left: 380px;

  			}
  	   #submit{
	 	   
	 	   width: 30%;
    	 	   background-color:  #4d0000
;
    		   color: white;
    		   padding: 14px 20px;
    
    		   border: none;
    		   border-radius: 4px;
    		   cursor: pointer;

	 	}




  	        </style><body>
  	        <div><h1 style='color: #660033;' >CONFIRMATION MESSAGE</h1>
  	         <h2 style='color:black;'>your emergency booking with Dr. $docfirstname  $doclastname is confirmed</h2>
  	         <h3 style='color:black;'>You can contact him/her on(you must contact him before going to their adress):-   $doccontact</h3>

  	         <h2 style='color:black;'>The Address Of Doctor is:</h2>
  	         <h3 style='color:white;'>&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbspCity:&nbsp &nbsp $doccity</h3>
  	         <h3 style='color:white;'> &nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbspLocality:&nbsp &nbsp $doclocality</h3>
  	         <h3 style='color:white;'>&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbspComplete address:&nbsp &nbsp $docaddress</h3>
  	         <h2>FOR ROUTE YOU CAN CLICK HERE:-<br>&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp<input type='submit' id='submit' name='submit' value='click me!!'></h2>
  	       </div>
  	         <h1 style='color:red;'><marquee>Thanks for Contacting Us ,WE Are Happy to Help You.</marquee></h1></body></html>";
  }



?>

  <?php
   if(isset($_POST['submit']))
{
	echo"<script> window.open('mapf.html','_blank')</script>";

}

  ?>