
<html>
<style>
input[type=submit] {
    width: 20%;
    background-color: #17202A;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

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
input[type=password], select {
    width: 30%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
v
select{
	width:300px; 
	height:30px;
}
textarea{
	width:300px;
	height:30px;
}

</style>

<body>
<div style="text-align:center;border:1px solid black;background-color:  #6F4E37;">
	<h1 style="color: #b30000">DOCTOR'S SIGNUP</h1>
</div>
<div style="padding:50px 50px 100px 100px;background-color:gray;">
	<div>
<form action="signup3.php" method="post">

  FIRST NAME :          <input type="text" name="first_name" required>
&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp &nbsp&nbsp&nbsp &nbsp&nbsp&nbsp &nbsp&nbsp&nbsp &nbsp&nbsp&nbsp &nbsp&nbsp&nbsp &nbsp&nbsp&nbsp &nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp 
  LAST NAME :   <input type="text" name="last_name"><br><br>
     CONTACT No:   <input type="text" name="contact" required>
&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp &nbsp&nbsp&nbsp &nbsp&nbsp&nbsp &nbsp&nbsp&nbsp &nbsp&nbsp&nbsp &nbsp&nbsp&nbsp &nbsp&nbsp&nbsp &nbsp <br><br>
Email-id:&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp &nbsp&nbsp&nbsp    <input type="email" name="email_id" required><br><br><br>






 <b>ADDRESS:</b><br>
 
		<label for="city" "height:200px" >Current City:&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp &nbsp&nbsp&nbsp </label>
		<select id="city" name="city" required>
			<option>--Select City--</option>
			<option>Kochi</option>
			<option>Bengaluru</option>
			<option>Mumbai</option>
			<option>Chennai</option>
		</select><br><br>
		<label for="locality">Current locality:&nbsp&nbsp&nbsp &nbsp</label>
		<select id="locality" name="locality">
			<option>--Select locality--</option>
			<option>Aluva Railway Station</option>
			<option>Cusat</option>
			<option>Ernakulam North</option>
			<option>Ernakulam Railway Station</option>
			<option>Edappally</option>
			<option>Fort Kochi</option>
			<option>HMT Junction</option>
			<option>Kadavanthra</option>
			<option>kakkanad</option>
			<option>Marine Drive</option>
			<option>M.G Road</option>
			<option>Mattancherry</option>
			<option>North Kalamessary</option>
			<option>Palarivattom</option>
			<option>South Kalamesary</option>
			<option>Vyttila</option>
			<option>Vypin</option>
		</select><br><br>
		Complete Address: <textarea row="60" column="200" name="complete_address"> </textarea><br><br><br>
     	<b>Educational Qualification:</b><br>
     	<label for="master_degree">Master Degree:</label>&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp &nbsp&nbsp
		<select id="master_degree" name="master_degree">
			<option>----</option>
			<option>Master Degree in Medicine and Surgery</option>
			<option>Master Degree in Brain and Behaviour Research</option>
			<option>Master in Medicine</option>
			<option>Master  in cardiovascular Medicine </option>
			<option>Master in Clinical Physiology - Cardiology (MSc)</option>
			<option>Masters In The Study And Treatment Of Pain</option>
			<option>MSc in Biomedical Sciences - Infection and Immunity</option>
			
		</select>
&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp
 University name:&nbsp&nbsp&nbsp &nbsp&nbsp<input type="text" name="master_university">
<br>
  


	<label for="bachelor_degree">Bachelor Degree:&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp</label>
		<select id="bachelor_degree" name="bachelor_degree">
			<option>----</option>

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

		</select>
&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp &nbsp&nbsp



		 University name:&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp<input type="text" name="bachelor_university">
<br><br>
  



		


		 Others(Degree if any): &nbsp      <textarea row="7" column= "90" name="others_degree"></textarea>
&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp &nbsp

		 <label for="specialist">Specialist Doctor&nbsp&nbsp&nbsp &nbsp&nbsp</label>
		<select id="specialist" name="specialist">
			<option>--Select Specialist--</option>
			<option>accident</option>
			<option value="cardiologist">cardiologist</option>
			<option>gynecologist</option>
			<option>neurologist</option>
			<option>Physician</option>
			<option>psychiatrist</option>
			<option>surgeon</option>
			<option>urologist</option>

		</select><br><br><br>
 

				<label for="experience">Experience&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp &nbsp&nbsp </label>
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


		</select>



	









&nbsp &nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp
   Mention  workplace <input type="text" name="work_place">
<br><br>
   USER-ID(login):&nbsp&nbsp   <input type="text" id="user_id" name="user_id">
&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	PASSWORD:&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp &nbsp   <input type="password" id = "password" name="password"><br><br>
RE-PASSWORD:&nbsp   <input type="password" name="re_password"><br><br>
<label for="security_question">Security Question:</label>
		<select id="security_question" name="security_question">
			<option>--questions--</option>

			<option>who is your chilhood hero</option>
			<option>who is your ideal</option>
			<option>whom you love most </option>
			<option>who is your favourite teacher</option>
			<option>your date of birth</option>
		
			
			<option></option>

		</select>
&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp &nbsp
  Your Answer:&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp &nbsp   <input type="text" name="security_ans"><br><br>
 
  <br>&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp 
  <input type="submit" name="sub" value="submit">&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp &nbsp&nbsp
  <input type="submit" name="sub" value="login"><br><br><br>
<h style="color:black;font-family:verdana;font-size:20px">NOTE:You should see that before signing up you must have already request for sign-up</h>

</form>
</div>
	</div>

<?php
if(isset($_POST['sub'])) {
	$firstname=$_POST['first_name'];
		$lastname=$_POST['last_name'];
		$contact=$_POST['contact'];
		$email=$_POST['email_id'];
		$city=$_POST['city'];
		$locality=$_POST['locality'];
		$completeadrr=$_POST['complete_address'];
		$master=$_POST['master_degree'];
		$bachelor=$_POST['bachelor_degree'];
		$master_university=$_POST['master_university'];
		$bachelor_university=$_POST['bachelor_university'];

		$specialist=$_POST['specialist'];
		$othersdegree=$_POST['others_degree'];
		$experience=$_POST['experience'];
		$workplace=$_POST['work_place'];
		$userid=$_POST['user_id'];
		$password=$_POST['password'];
		$repassword=$_POST['re_password'];
		$security=$_POST['security_question'];
		$ans=$_POST['security_ans'];
	    $p="0";
	    
	    if($userid!=""){
	    	if($security!='--questions--'){
	    	if($completeadrr!=""){
	    	if($password==$repassword){
	    		if($city=='Kochi'){
	    		if($specialist!='--Select Specialist--'){
	    		if($master=="----" and $master_university=='' or$master!="----" and $master_university!=''){

	    	   $conn =new mysqli('localhost','root','','nexahealth');
	    		if($conn->connect_error) die($conn->connect_error);

	            $query1="select permission from images where user_id='$userid'";
                $check1=$conn->query($query1);
          while($row=mysqli_fetch_array($check1,MYSQLI_NUM))
	    	   {
	    	   	$p=$row[0];
	    	   }

        if($p==0){
        	echo"<script>alert('you donot have permission to signup first take the by click the request for sign up button!!!')</script>";        
        }
        else{
        	        	
        	        $insert1="insert into login(user_id,password) values('$userid','$password')";
	     $result1=$conn->query($insert1);
	    // $result1 = mysql_query($insert1);
	    $query2="select loc_id from kochi where locality='$locality'";
	    	    $check=$conn->query($query2);
	    	   $ram= mysqli_num_rows($check);
	    	   // echo "$ram";
	    	   $p;
	    	   while($row=mysqli_fetch_array($check,MYSQLI_NUM))
	    	   {
	    	   	$p=$row[0];
	    	   }
	    	   //echo"$specialist";

	    	$insert01="insert into doctor(user_id, first_name, last_name, master_dergree, master_university, bachelor_degree, bachelor_university, experience, specialist, active,loc_id) values ('$userid','$firstname','$lastname','$master','$master_university','$bachelor','$bachelor_university','$experience','$specialist','0','$p')";
	    	$result00=$conn->query($insert01);
	    //$specialist = "cardiologist";
	    // $insert2="insert into cardiologist (user_id, first_name, last_name, email_id, contact_no, active, loc_id) values ('jbhjeh','jbhjvajhc', 'hbcjhvjc', 'akhchajc', '58852', '1', 'null')";
	    	    $insert2="insert into $specialist (user_id, first_name, last_name, email_id, contact_no, active, loc_id) values ('$userid','$firstname', '$lastname', '$email', '$contact', '0', '$p')";
	    $result2=$conn->query($insert2);

	    $insert3="insert into qualification(user_id, master_degree, master_university, bachelor_degree, bachelor_university, others_degree, specialist) VALUES ('$userid','$master','$master_university','$bachelor','$bachelor_university','$othersdegree','$specialist')";
         $result3=$conn->query($insert3);
         $insert4="insert into address(user_id, complete_address, city, locality) values ('$userid','$completeadrr','$city','$locality')";
         $result4=$conn->query($insert4);
         $insert5="insert into experience(user_id, experience, work_place) VALUES ('$userid','$experience','$workplace')";
         $result5=$conn->query($insert5);
         $insert6="insert into security(user_id, security_question, security_ans) values ('$userid','$security','$ans')";
         $result6=$conn->query($insert6);
	    if(!$result1 and !$result2 and !$result3 and !$result4 and !$result5 and !$result6 and !$result00)
	    	{
	    			echo "<script>alert('Account not created')</script>";
	    	}
	    	else{
	    		//echo "account created";
	    		        echo"<script> window.open('home5.php','_self')</script>";

	    			echo "<script>alert('Congrates!!!! Now you are the member of nexahealth')</script>";
	    	}	



        }

        

















    }//master dergree
        	 			  echo"<script>alert('you must provide the master dergree university name when you choose for master degree!!!!')</script>";

    }//specialist not null
    else{
    	 			  echo"<script>alert('You must choose an specialist')</script>";

    }

    }//site valid for kochi only
    else{
    	 echo"<script>alert('Sorry Our site Work Only Kochi!!!')</script>";

    }



       }//password not match
 		else{
 			  echo"<script>alert('password not match')</script>";

 		}
 	}//complete address neccessary
 	else{
 		 echo"<script>alert('complete address must required')</script>";

 	}
   }//security questins
    else{
    	       	echo"<script>alert('plz choose you security quetion')</script>";

    }
       }//userid null
       else{
       	echo"<script>alert('invalid userid')</script>";
       }
}











?>







































































































</body>
</html>