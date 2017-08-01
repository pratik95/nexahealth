<?php



session_start();
?>




<?php
$p=$_SESSION['secloginnext'];

  echo"<html><style>
       	   div{
              background-color:	 #52527a;

              padding-top: 50px;
              padding-right: 0px;
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
  	        <div><h1 style='color: #660033;' >MESSAGE</h1>
  	         <h2 style='color:black;'>your User Id is =$p<p2 style='color:red;'>(For Signup Remember this User-id )</p2>
</h2>
  	         <h2 style='color:black;'>your Request for SignUp is Completed Successfully </h2>
  	         <h2 style='color:red;'>You Can Try For SignUp After 24 Hours </h2>
             <p style='color:#26004d;font-size:30px;'><b> GO TO HOME CLICK HERE<span style='color:green'><a href='home5.php'>HOME</a> </span></b></p>

           </div>
  	         <h1 style='color:#660033;'><marquee>Thanks  Registering With Us </marquee></h1>

  	           	       </div></body></html>";


?>






