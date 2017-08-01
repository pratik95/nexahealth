<?php
 session_start();
?>
<html>
<style>
input[type=text], select {
    width: 30%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type=email], select {
    width: 30%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type=submit] {
    width: 20%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}
select{
	width:300px;
	height:30px;
}
textarea{
	width:50%;
	height:35px;
}
div{
	backgroung-color:#a3a375;
	width:400px;
	border:5px solid green;
	padding:25px;
	margin:50px 130px 100px 350px;

}

</style>
<form action="updatequalification.php" method="post">
	<div>
<b>Educational Qualification:</b><br><br>
     	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp<label for="master_degree">Master Degree:</label>
		<select id="master_degree" name="master_degree">
			<option>--MASTER DEGREE--</option>
			<option>Master Degree in Medicine and Surgery</option>
			<option>Master Degree in Brain and Behaviour Research</option>
			<option>Master in Medicine</option>
			<option>Master  in cardiovascular Medicine </option>
			<option>Master in Clinical Physiology - Cardiology (MSc)</option>
			<option>Masters In The Study And Treatment Of Pain</option>
			<option>MSc in Biomedical Sciences - Infection and Immunity</option>
			
		</select><br><br>
			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp
		 University name <input type="text" name="master_university">
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 
	<label for="bachelor_degree">Bachelor Degree:</label>
		<select id="bachelor_degree" name="bachelor_degree">
			<option>--BACHELOR DEGREE--</option>

<option>Bachelor of Medicine & Bachelor of Surgery (MBBS) </option>
			<option>Bachelor in Neuroscience</option>
			<option>Pre-Health / Pre-Medical Sciences </option>
			<option>Bachelor of Medicine and Surgery</option>
			<option>Degree In Medicine</option>
			<option>Bachelor in Medical Technology</option>
			<option>Bachelor of Medical Science</option>
			<option>Bachelor of Physiotherapy</option>
			<option>Bachelor of Health Science/Bachelor of Applied Science (Osteopathy)</option>
			<option></option>

		</select><br><br><br>
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp
 




		 University name <input type="text" name="bachelor_university">

	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp

		
		Others(Degree if any):        <textarea row="10" column= "200" name="others_degree"></textarea><br><br>
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
 <input type="submit" name="sub" value="Update"><br>
</div>
 </form>
 </html>




















<?php
if(isset($_POST['sub'])){
	if($_SESSION['secloginnext'] != "0"){
	$userid=$_SESSION['secloginnext'];
	$master=$_POST['master_degree'];
	$bachelor=$_POST['bachelor_degree'];
	$specialistlocal;
	$othersdegree=$_POST['others_degree'];
    $master_university=$_POST['master_university'];
	$bachelor_university=$_POST['bachelor_university'];

	$conn =new mysqli('localhost','root','','nexahealth');
	if($conn->connect_error) die($conn->connect_error); 
	$query44="update doctor set master_dergree = '$master' ,master_university=' $master_university' ,bachelor_degree='$bachelor' ,bachelor_university=' $bachelor_university' where user_id='$userid'";	$query4="update qualification set master_degree ='$master' where user_id='$userid'";	
	$check34=$conn->query($query44);
	$query5="update qualification set bachelor_degree ='$bachelor' where user_id='$userid'";	
	$check4=$conn->query($query5);
	$query6="update qualification set master_university =' $master_university' where user_id='$userid'";	
	$check5=$conn->query($query6);
	$query6="update qualification set bachelor_university =' $bachelor_university' where user_id='$userid'";	
	$check5=$conn->query($query6);

	$query7="update qualification set others_degree ='$othersdegree' where user_id='$userid'";	
	$check6=$conn->query($query7);
	if(!$check34 and!$check3 and !$check4 and !$check5){
		echo"<script>alert('Updation Failed!!!!!!!')</script>";
	}
	else{
				echo"<script>alert('Your Qualification Details Updated!!!!!!!')</script>";


	}

}
}










?>