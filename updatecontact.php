<?php
 session_start();
?>
<html>
<style>
input[type=text], select {
    width: 50%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type=email], select {
    width: 50%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type=submit] {
    width: 30%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}
div{
	backgroung-color:#a3a375;
	width:400px;
	border:5px solid green;
	padding:25px;
	margin:50px 130px 100px 350px;

}
</style>

<form action="updatecontact.php" method="post">
	<div>
  CONTACT No:   <input type="text" name="contact"id="contact" placeholder="12345-6789"required><br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
Email-id:   <input type="email" name="email_id" required><br><br><br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
 <input type="submit" name="sub value="Update">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<br>
</div>
 </form>

 </html>












<?php
if(isset($_POST['sub'])){
	if($_SESSION['secloginnext'] != "0"){
	$userid=$_SESSION['secloginnext'];
	$contact=$_POST['contact'];
	$email=$_POST['email_id'];
	$specialistlocal;
	$conn =new mysqli('localhost','root','','nexahealth');
	if($conn->connect_error) die($conn->connect_error); 
	$query11="select specialist from qualification WHERE user_id='$userid'";
	$check12=$conn->query($query11);
	while($row=mysqli_fetch_array($check12,MYSQLI_NUM))
		{
			$specialistlocal=$row[0];
			    //echo"$specialistlocal";//from here we got the speacialistb
			    //break;
		}
	$query4="update $specialistlocal set contact_no ='$contact' where user_id='$userid'";	
	$check3=$conn->query($query4);
	$query5="update $specialistlocal set email_id ='$email' where user_id='$userid'";	
	$check4=$conn->query($query5);
	if(!$check3 and !$check4){
		echo"<script>alert('Updation Failed!!!!!!!')</script>";
	}
	else{
				echo"<script>alert('Your Contact Updated!!!!!!!')</script>";


	}

}
}










?>