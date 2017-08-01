<?php

session_start();




?>











<html>
<head>
    <title>Image upload </title>
    <link rel="stylesheet" type="text/css" href="style6.css">
</head>
<body>
    <div id="content">
        <form method="post" action ="request.php" enctype="multipart/form-data">
            SELECT  USER-ID:<input type="header"name="user_id">

                        <div> 
                <input type="file"name="image">
            </div>
            <div>


</div>
<div>
    <input type="submit" name="upload" value="Submit Your Degree">
</div>
</form>
</div>
</body>
</html>










<?php
$msg="";

$_SESSION['laststep'] =" ";
if(isset($_POST['upload'])){
    $user_id=$_POST['user_id']; 
 $db=mysqli_connect("localhost","root","","nexahealth");
  $conn =new mysqli('localhost','root','','nexahealth');
        if($conn->connect_error) die($conn->connect_error);     
$query1="select * from images where user_id='$user_id'";
    $check=$conn->query($query1);
    $row=$check->num_rows;
    if($row>0){
        echo "<script>alert('This User id Is Already Taken !!!!! ')</script>";

    }

  else{
//$image;

    $target = "images/".basename($_FILES['image']['name']);

  //$db=mysqli_connect("localhost","root","","nexahealth");


    /*$conn =new mysqli('localhost','root','','photo');
    if($conn->connect_error) die($conn->connect_error);*/
    $image=$_FILES['image']['name'];
  
    $sql="insert into images(user_id,image,permission) values('$user_id','$image','0')";
    mysqli_query($db, $sql);
    /*$query1="insert into image(images, text) values('$image','$text')";
    $check=$conn->query($query1);*/
  $_SESSION['secloginnext'] ="$user_id";

    if(move_uploaded_file($_FILES['image']['tmp_name'], $target)){
        $msg= "image uploadede success";
    }else{
        $msg="there was a problem";
    }
        echo"<script> window.open('laststep.php','_blank')</script>";



}
}


?>
