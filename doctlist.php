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
	    	   $query12="delete from search where '1'";
	    	   $sql3 = mysqli_query($conn,$query12);

	    	   	//echo"$specialist";





	 $query2="select loc_id from kochi where locality='$locality'";
	    	    $check=$conn->query($query2);
	    	   //$ram= mysqli_num_rows($check);
	    	   $p;
	    	   while($row=mysqli_fetch_array($check,MYSQLI_NUM))
	    	   {
	    	   	$p=$row[0];
	    	   }
echo"<form id='hi' action='doctlist.php' method='post'>";
  $query0 = "select * from doctor where loc_id='$p' and active='1'and specialist='$specialist'";
       $sql0 =$conn->query($query0);
	   //$row=mysqli_fetch_array($sql0);
	   
echo"<table>";
  echo"<tr>";
    echo"<th>First NAME</th>";
    echo"<th>Last NAME</th>";
    echo"<th>Master Degree</th>";
    echo"<th>University name</th>";
      echo"<th>bachelor Degree</th>";
    echo"<th>University name</th>";
echo"<th>Experience</th>";

    echo"<th>SELECT</th>";
          // echo"<th>AGE</th>";
     echo"</tr>";
     
        
    

	   while($row=mysqli_fetch_array($sql0))
	   {
		  echo"<tr>";
		      //echo"<td>".$row["user_id"]."</td>";

    echo"<td>"    .$row["first_name"]."</td>";
    echo"<td>".$row["last_name"]."</td>";
     echo"<td>".$row["master_dergree"]."</td>&nbsp&nbsp&nbsp";
      echo"<td>"  .$row["master_university"]."</td>";
       echo"<td>".$row["bachelor_degree"]."</td>&nbsp&nbsp&nbsp";
      echo"<td>"  .$row["bachelor_university"]."</td>";
        echo"<td>"  .$row["experience"]."</td>";
    echo"<td><input type='checkbox' name='name' value=".$row['user_id']."  ></td>";
          // echo"<td>$row[2]</td>"; 
		   echo"</tr>";







}

echo'</table>';
echo"<input type='submit' id='submit' name='submit' value='submit'>";

echo'</form>';

 	$_SESSION['secuser'] ="0";

if(isset($_POST['submit'])){
	echo"hello";

 if(isset($_POST['name']))
  {
	$p=$_POST['name'];
	echo"$p";
	$_SESSION['secuser'] = $p;
	echo"<script> window.open('confirmation.php','_self');</script>";

	echo"hi";
  }
}




}



?>
<html>
<head>
	<style>
	 #submit{
	 	margin-top: 500px;
	 	width: 30%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    
    border: none;
    border-radius: 4px;
    cursor: pointer;

	 }
	</style>
<body>
<form id="hi" action="doctlist.php" method="post">

</body></html>
