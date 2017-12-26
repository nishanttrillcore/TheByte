<?php
session_start();
$mqw=$_SESSION["usersession"];
mysql_connect("localhost","root","");
     mysql_select_db("dbbyte");
     $resultsess=mysql_query("select * from userdetails where email='$mqw'");
      $rowsess=mysql_fetch_array($resultsess);
	  $sidd=$rowsess["sessionid"];
if($_SESSION["usersession"]=="" )
{
	?>
	<script type="text/javascript">
	window.location="index.php";
	</script>
	<?php
}
elseif($_SESSION["usersid"]==$rowsess["sessionid"]){
	$lc=$_SESSION["usersession"];
	mysql_connect("localhost","root","");
     mysql_select_db("dbbyte");
     $result=mysql_query("select * from userdetails where email='$lc'");
      $row=mysql_fetch_array($result);	
	if($row["access"]=="1"){
		$tval=$_SESSION["usersession"];
        $userbro="1";	
	}
	else if($row["access"]=="12"){
		$tval=$_SESSION["usersession"];
        $userbro="12";
	}
	else if($row["access"]=="11"){
		$tval=$_SESSION["usersession"];
        $userbro="11";
	}
	else if($row["access"]=="13"){
		$tval=$_SESSION["usersession"];
        $userbro="13";
	}
	elseif($row["access"]=="14"){
		$tval=$_SESSION["usersession"];
	 	 $userbro="14";
		}
		
}
else{
	session_destroy();
	?>
	<script type="text/javascript">
	window.location="index.php";
	</script>
<?php }
?><!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  
  img {
	  
	
    opacity:0.9;
    border-radius: 5px 5px 0 0;
}
</style>
  </head>
<body>

<div class="jumbotron text-center">
  
  <?php
  echo"<h1>$sidd</h1>";
   $tl=rand(1,100);
   echo"<h1>$t1</h1>";
   ($t=rand(10000,100677665));
   echo"<h1>a".$t."</h1>";
   echo"<h2>$userbro</h2>";
   
  ?>
  <p>Resize this responsive page to see the effect!</p> 
</div>
  
<div class="container">
  <div class="row">
  <div class="col-sm-4">
      <div class="card">
  <img src="https://www.w3schools.com/css/img_fjords.jpg" alt="Avatar" style="width:100%">
  <div class="container">
    <h2><b>Jane Doe</b></h2> 
    <p>Interior Designer</p> 
    <button>Register</button>
  </div>
</div>
    </div>
    <div class="col-sm-4">
      <div class="card">
  <img src="https://www.w3schools.com/css/img_fjords.jpg" alt="Avatar" style="width:100%">
  <div class="container">
    <h2><b>Jane Doe</b></h2> 
    <p>Interior Designer</p> 
    <button>Register</button>
  </div>
</div>
    </div>
    <div class="col-sm-4">
      <div class="card">
  <img src="/thebyte/images/a.jpg" alt="Avatar" style="width:100%">
  <div class="container">
    <h2><b>Jane Doe</b></h2> 
    <p>Interior Designer</p> 
    <button>Register</button>
  </div>
</div></div>
    
    <div class="col-sm-4">
      <div class="card">
  <img src="https://www.w3schools.com/css/img_fjords.jpg" alt="Avatar" style="width:100%">
  <div class="container">
    <h2><b>Jane Doe</b></h2> 
    <p>Interior Designer</p> 
    <button>Register</button>
  </div>
</div></div>
  </div>
</div>

</body>
</html>
