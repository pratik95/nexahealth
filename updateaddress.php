<?php
 session_start();
?>
<html>
<style>
input[type=text], select {
    width: 90%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type=email], select {
    width: 90%;
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
input[type=password], select {
    width: 30%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

select{
	width:40%;
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

<form action="updateaddress.php" method="post">
	<div>
   <b>Adress:</b><br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
 
		<label for="city" "height:200px" >Current City:</label>
		<select id="city" name="city" required>
			<option>--Select City--</option>
			<option>Kochi</option>
			<option>Bengaluru</option>
			<option>Mumbai</option>
			<option>Chennai</option>
		</select><br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		<label for="locality">Current locality:</label>
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
		</select><br><br><br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		 Complete Address: <br>    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp  <textarea row="10" column= "200" name="complete_address" ></textarea><br><br><br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
     	<input type="submit" name="sub" value="submit"><br>
     </div>
 </form>
 </html>


















<?php
if(isset($_POST['sub'])){
	if($_SESSION['secloginnext'] != "0"){
	$userid=$_SESSION['secloginnext'];
	$city=$_POST['city'];
	$locality=$_POST['locality'];

	$address=$_POST['complete_address'];
	$specialistlocal;
	if($city=="Kochi"){
		if($locality!='--Select locality--'){
			if($address!=''){


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
							$query2="select loc_id from kochi where locality='$locality'";
							    	    $check=$conn->query($query2);
							    	   //$ram= mysqli_num_rows($check);
							    	   // echo "$ram";
							    	   $p;
							    	   while($row=mysqli_fetch_array($check,MYSQLI_NUM))
							    	   {
							    	   	$p=$row[0];
							    	   }
							$query4="update $specialistlocal set loc_id ='$p' where user_id='$userid'";	
							$check3=$conn->query($query4);
							$query5="update address set locality ='$locality' where user_id='$userid'";	
							$check4=$conn->query($query5);
							$query6="update address set complete_address ='$address' where user_id='$userid'";	
							$check5=$conn->query($query6);
							$query7="update address set city ='$city' where user_id='$userid'";	
							$check6=$conn->query($query7);
							if(!$check3 and !$check4){
								echo"<script>alert('Updation Failed!!!!!!!')</script>";
							}
							else{
										echo"<script>alert('Your Address Updated!!!!!!!')</script>";


							     }

                        }
                        else{
                        	echo"<script>alert('plz enter the complete address!!!!!!!')</script>";

                        }
                 }else{
                 	echo"<script>alert('plz select locality!!!!!!!')</script>";

                   }
            }else{
            		echo"<script>alert('Sorry our site work for only Kochi!!!!!!!')</script>";

            }




	}
}






?>