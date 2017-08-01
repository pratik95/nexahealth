<?php
$msg="";
//$image;
if(isset($_POST['upload'])){
	$target = "images/".basename($_FILES['image']['name']);

  $db=mysqli_connect("localhost","root","","nexahealth");


	/*$conn =new mysqli('localhost','root','','photo');
	if($conn->connect_error) die($conn->connect_error);*/
	$image=$_FILES['image']['name'];
	$text=$_POST['user_id'];
	$sql="insert into images(user_id,image,permission) values('$text','$image','0')";
	mysqli_query($db, $sql);
	/*$query1="insert into image(images, text) values('$image','$text')";
    $check=$conn->query($query1);*/
    if(move_uploaded_file($_FILES['image']['tmp_name'], $target)){
    	$msg= "image uploadede success";
    }else{
    	$msg="there was a problem";
    }

}


?>


<html>
<head>
	<title>Image upload </title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div id="content">
		<form method="post" action ="index.php" enctype="multipart/form-data">
			SELECT YOUR USER-ID:<input type="header"name="user_id"value="user">

						<div> 
				<input type="file"name="image">
			</div>
			<div>


</div>
<div>
	<input type="submit" name="upload" value="UpLoad image">
</div>
</form>
</div>
</body>
</html>
