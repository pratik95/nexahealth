<html>
<body>
	<style>
a:link{
	color:red;
	text-decoration: none;
}
a:visited {
    color: green;
    text-decoration: none;
}
a:hover {
    color: hotpink;
    text-decoration: none;
}
a:active {
    color: blue;
    text-decoration: none;
}
body {
    
    background: url(images3.jpg) no-repeat center center fixed; 
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;

  }
  </style>
<head><title>status</title>
<meta charset="utf-8">
<link rel="stylesheet" href="stylecheck.css" type="text/css"/>
</head>
<form action="checkstatus.php" method="post">
<div id="menu" style="width:100%;padding:25px 10px 80px 0px;">
<ul style="text-align:center;">

<h style="font-size:450%;font-family:verdana; color:red">NEXAHEALTH</h>

<li><a href="#">DOCTORS ZONE</a>
<ul>
<li><a href="login.php">LOGIN</a></li>
<li><a href="rule1.html">Register For Signup</a></li>
<li><a href="checkstatus.php">Registration status</a></li>
</li>
</ul>
<li><a href="help1.html">HELP</a></li>
<li><a href="about3.html">ABOUT US</a></li>
<li><a href="firstaid.html">FIRST AID</a></li>
<li><a href="home5.php">HOME</a></li>
<br><br>
	<h1>ENTER YOUR USERID TO CHECK STATUS OF YOUR REGISTRATION</h1>

<div class="container">
<form method="post" action="login.php">
<div class="form-input">
USERID:<input type="text" placeholder="User Name"  name="user_id">
</div><br>

<label>
<input type="submit" name="submit" value="submit">
      </form>
</div>
<footer>
<p> Powered by <a class="footer-text" >NEXA HEALTH</a></p>
</footer>


</body>
</html>
<?php
if(isset($_POST['submit'])){
  $userid=$_POST['user_id'];

           $conn =new mysqli('localhost','root','','nexahealth');
          if($conn->connect_error) die($conn->connect_error);

              $query1="select permission from images where user_id='$userid'";
                $check1=$conn->query($query1);
          while($row=mysqli_fetch_array($check1,MYSQLI_NUM))
           {
            $p=$row[0];
           }
           if($p==0){
                      echo"<script>alert('value is zero')</script>";        

           }
           else if($p==1){
                      echo"<script>alert('you have permission')</script>";        

           }
           else{
                      echo"<script>alert('your degree is fake')</script>";        

           }
}
?>