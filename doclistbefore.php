<?php session_start();
?>

<?php


  if($_SESSION['seclogin'] != "1")
  {
    // session_destroy();
    echo"you are out";
    echo"<script> window.open('home5.php','_self');</script>";
  }
  else
  {

 
   














 $locality;
	    	   	$specialist;

 /*Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password)*/
       $conn =new mysqli('localhost','root','','nexahealth');
	    if($conn->connect_error) die($conn->connect_error); 
 		$query3="select locality from search";
	    	    $check2=$conn->query($query3);
	    	   $ram= mysqli_num_rows($check2);
	    	  
	    	   while($row1=mysqli_fetch_array($check2,MYSQLI_NUM))
	    	   {
	    	   	$locality=$row1[0];

	    	   	break;
	    	   }

	    	   $query4="select speacialist from search";
	    	    $sql0 = mysqli_query($conn,$query4);

	    	    //$check3=$conn->query($query4);
	    	   //$ram= mysqli_num_rows($check3);
	    	   //$specialist;
	    	   while($row2=mysqli_fetch_array($sql0))
	    	   {
	    	   	$specialist=$row2['speacialist'];
	    	   	break;
	    	   }
	    	  





	 $query2="select loc_id from kochi where locality='$locality'";
	    	    $check=$conn->query($query2);
	    	   //$ram= mysqli_num_rows($check);
	    	   $p;
	    	   while($row=mysqli_fetch_array($check,MYSQLI_NUM))
	    	   {
	    	   	$p=$row[0];
	    	   }
echo"<form id='hi' action='doclistbefore.php' method='post'>";
  $query0 = "select * from doctor where loc_id='$p' and active='1'and specialist='$specialist'";
       $sql0 =$conn->query($query0);
	   //$row=mysqli_fetch_array($sql0);
	    $row2=$sql0->num_rows;
	    echo"$row2";
    if($row2>0){
   echo"<script> window.open('doctlist.php','_self');</script>";
    }
    else{
    	 $query12="delete from search where '1'";
	    	   $sql3 = mysqli_query($conn,$query12);

    	echo"<script> window.open('sorry.php','_self');</script>";
    }
}
    ?>