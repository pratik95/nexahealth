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
select{
	width:40%;
	height:30px;
}
textarea{
	width:50%;
	height:35px;
}
</style>

<form action="updateexp.php" method="post">
	<div>
	<label for="experience">Experience </label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		<select id="experience" name="experience">
			<option>--Select EXPERIENCE(in years)--</option>
			<option>1</option>
			<option>2</option>
			<option>3</option>
			<option>4</option>
			<option>5</option>
			<option>6</option>
			<option>7</option>
			<option>8</option>
			<option>9</option>
			<option>10</option>
			<option>11</option>
			<option>12</option>
			<option>13</option>
			<option>14</option>
			<option>15</option>
			<option>16</option>
			<option>17</option>
			<option>18</option>
			<option>19</option>
				<option>20</option>
				<option>21</option>
			<option>22</option>
			<option>23</option>
			<option>24</option>
			<option>25</option>
			<option>26</option>
			<option>27</option>
			<option>28</option>
			<option>29</option>
			<option>30</option>
<option>31</option>
			<option>32</option>
			<option>33</option>
			<option>34</option>
			<option>35</option>
			<option>36</option>
			<option>37</option>
			<option>38</option>
			<option>39</option>
			<option>40</option>


<option></option>


		</select><br>



	











   Mention your workplace <input type="text" name="work_place">
<br><br><br>
 &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="submit" name="sub" value="update">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<br>
</div>
 </form>

 </html>












<?php
if(isset($_POST['sub'])){
	if($_SESSION['secloginnext'] != "0"){
	$userid=$_SESSION['secloginnext'];
	$workplace=$_POST['work_place'];
	$exp=$_POST['experience'];
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
	$query4="update experience set experience ='$exp' where user_id='$userid'";	
	$check3=$conn->query($query4);
	$query5="update experience set work_place ='$workplace' where user_id='$userid'";	
	$check4=$conn->query($query5);
	if(!$check3 and !$check4){
		echo"<script>alert('Updation Failed!!!!!!!')</script>";
	}
	else{
				echo"<script>alert('Your Experience Details Updated!!!!!!!')</script>";


	}

}
}










?>