<html>

<style>
input[type=submit] {
    width: 30%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 100px ;
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
input[type=password], select {
    width: 30%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
.btn-login{
	 width: 30%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 100px ;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;


}	
#butt{
	width: 30%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 100px ;
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
	width:820px;
	height:35px;
}

</style>

<body>




<div style="text-align:center;border:1px solid black;background-color:  #9999ff;">
	<h1 style="color: #b30000">FORGOT PASSWORD</h1>
</div>
<div style="padding:50px 50px 100px 100px;background-color:cyan;">
	<div>
<form action="forgotpass.php" method="post">

   USER-ID(login):   <input type="text" id="user_id" name="user_id"><br><br><br>

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
  Your Answer:   <input type="text" name="security_ans"><br><br><br>
	PASSWORD:   <input type="password" id = "password" name="password"><br><br><br>
RE-PASSWORD:   <input type="password" name="re_password"><br><br><br>
 

<br>
 
  <input type="submit" name="sub" value="SUBMIT">
  <input id="butt" type="button" name="login" onclick="red()" value="LOGIN" >

  <input id="butt" type="button" name="signup" onclick="blue()" value="SIGNUP" ><br>

</form>
</div>
	</div>










</body>
</html>
<script>
function red()
{
	window.open("login.php","_self");
}
function blue()
{
	window.open("signup.php","_self");
}

</script>









<?php
	if(isset($_POST['sub'])){

		$userid1=$_POST['user_id'];
		$password1=$_POST['password'];
		$repassword1=$_POST['re_password'];
		$security1=$_POST['security_question'];
		$ans1=$_POST['security_ans'];
		  if($password1==$repassword1)
            {

			 $conn =new mysqli('localhost','root','','nexahealth');
			 if($conn->connect_error) die($conn->connect_error);
			 $query1="select * from login WHERE user_id='$userid1'";
	         $check=$conn->query($query1);
				$row=$check->num_rows;
				if($row>0)
				{
				  $query2="select security_question from security where user_id='$userid1'";
	    	      $check=$conn->query($query2);
	    	       $ram= mysqli_num_rows($check);
	    	      // echo "$ram";
	    	      $qn;
	    	      while($row=mysqli_fetch_array($check,MYSQLI_NUM))
	    	      {
	    	   	    $qn=$row[0];
	    	      }
	    	      if($security1==$qn){
	    	      	  $query3="select security_ans from security where user_id='$userid1'";
	    	          $check=$conn->query($query3);
	    	       	  $ram= mysqli_num_rows($check);
	    	      		// echo "$ram";
	    	          $an;
	    	          while($row=mysqli_fetch_array($check,MYSQLI_NUM))
	    	          {
	    	   	        $an=$row[0];
	    	          }
	    	          if($ans1==$an){
	    	          	$query3="update login set password='$password1' where user_id='$userid1'";
	    	          	$check3=$conn->query($query3);	
	    	   			echo "<script>alert('your password is updated plz go to login page!!!!! ')</script>";
	

	    	          }
	    	          else{
	    	          	echo"<script>alert('your ans not match')</script>";
	    	          }



	    	      }
	    	      else{
	    	         echo"<script>alert('your security question doesnot match with our data base')</script>";	
	    	      }


				}
				else{
					echo"<script>alert('this user id not exist...plz signup first!!!!!')</script>";

				}


	        }
	        else{
	        	echo"<script>alert('your entered password not match')</script>";
	        }





}
?>