<?php
session_start();

if($_SESSION["usersession"]=="")
{
	
}
else{
	?>
	<script type="text/javascript">
	window.location="main.php";
	</script>
	<?php
}
?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>CSE Event</title>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900'>
<link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Montserrat:400,700'>
<link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

      <link rel="stylesheet" href="css/stylel.css">

  
</head>

<body>
  
<div class="container">
  <div class="info">
    <h1>Student Login</h1><span>Made with <i class="fa fa-heart"></i> by <a href="http://www.trillcore.com">TrillCORE Softwares</a></span>
  </div>
</div>
<div class="form" >
  <div class="thumbnail"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/169963/hat.svg"/></div>
  <form class="register-form" name="form2"  action="" method="post">
    <input type="text" placeholder="Name" name="name"/>
	<input type="email" placeholder="Email" name="email"/>
	<input type="password" placeholder="Password" name="password"/>
	<input type="text" placeholder="Roll Number" name="rollno"/>
	<div >
	<label for="sel1" >Select Branch:</label>
	<select name="branch" placeholder=selectbranch class="form-control" id="sel1">
	 <option>CSE</option>
	 <option>IT</option>
	 <option>EC</option>
	 <option>ME</option>
	 <option>CE</option>
	 <option>EN</option>
	 <option>BT</option>
	</select>
	<label for="sel3">Select Coordinator:</label>
	<select name="coordinator" placeholder=selectbranch class="form-control" id="sel3">
	 <option>Shaili Agrawal</option>
	 <option>Atul Kumar</option>
	 <option>Neetish Singh</option>
	 <option>Teacher4</option>
	 <option>Teacher5</option>
	 <option>Teacher6</option>
	 <option>Teacher7</option>
	</select>
	
	<label for="sel2">Select Year:</label>
	<select name="year" placeholder=selectbranch class="form-control" id="sel2">
	 <option>Ist</option>
	 <option>IInd</option>
	 <option>IIIrd</option>
	 <option>IVth</option>
	 </select>
	</div> 
	<hr>
	<input type="text" name="phone" placeholder="Phone Number"/>
    
    <button type="submit" name="Signup">Create Account</button>
    <p class="message">Already registered? <a href="#">Sign In</a></p>
  </form>
  <form class="login-form" name="form1"  action="" method="post">
    <input type="text" type="email" class="form-control" id="email" name="email" placeholder="Enter email" />
    <input type="password" class="form-control"  name="password" id="pwd" placeholder="Enter password"/>
    <button type="submit" name="submit1">login</button>
    <p class="message">Not registered? <a href="#">Create an account</a></p>
  </form>
</div>
<?php
   if(isset($_POST["Signup"]))
   {
	   
$sa=$_POST['name']; 
$sb=$_POST['email'];
$sc=$_POST['password'];
$sd=$_POST['rollno'];
$se=$_POST['branch'];
$sf=$_POST['coordinator'];
$sg=$_POST['year'];
$sh=$_POST['phone'];
$si="14";   
$sj="0";
$sk="user";
($sid=rand(10000,100677665));
$ssid=$sid;
   if($sa==""||$sb==""||$sc==""||$sd==""||$sh=="")
{
	echo"fill all details";
}
else{
mysql_connect("localhost","root","");
mysql_select_db("dbbyte");
$querysgn="SELECT * FROM userdetails WHERE email='$n' And password='$q'";
$resultsgn=mysql_query($querysgn);
$con=mysql_num_rows($resultsgn);/*to check thenumber of data in whole database*/
if($con==0){
    	$query12="INSERT INTO userdetails (name,email,password,rollno,branch,coordinator,year,phone,access,approve,designation,sessionid) VALUES('$sa','$sb','$sc','$sd','$se','$sf','$sg','$sh','$si','$sj','$sk','$ssid')";
        mysql_query($query12);
		$_SESSION["usersession"]=$sb;
		$_SESSION["usersid"]=$sid;
		 ?>
		 <script type="text/javascript">
		 window.location="main.php";
		 </script>
		 <?php
		
}
else{
	echo"Users Exists";
}
	
}
   } 
?>
<?php
   if(isset($_POST["submit1"]))
   { mysql_connect("localhost","root","");
     mysql_select_db("dbbyte");
     
	 $result=mysql_query("select * from userdetails where email='$_POST[email]' && password='$_POST[password]'");
     while($row=mysql_fetch_array($result))	
	 {          ($susid=rand(10000,100677665));
                 $er=$susid;
		     	$querymo="UPDATE userdetails SET sessionid='$er' WHERE email='$_POST[email]'";
              mysql_query($querymo);
		 $_SESSION["usersession"]=$row["email"];
		 $_SESSION["usersid"]=$er;
		 ?>
		 <script type="text/javascript">
		 window.location="main.php";
		 </script>
		 <?php
		 
	 }
     	 
   }
   ?>  
  

  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/index.js"></script>

</body>
</html>
