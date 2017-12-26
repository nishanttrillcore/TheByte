<?php
session_start();
if($_SESSION["usersession"]=="")
{
	?>
	<script type="text/javascript">
	window.location="index.php";
	</script>
	<?php
}
else{
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
?><!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="description" content="">
    <meta name="author" content="">
    <title>The Byte</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Plugin CSS -->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin.css" rel="stylesheet">

</head>

<body id="page-top">

    

    <div class="content-wrapper py-3">

        <div class="container-fluid">

            
          <?php
		 

		  echo"<h1>$userbro</h1>";
		  
		  
		  ?>
		  
          

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- /.content-wrapper -->

    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fa fa-chevron-up"></i>
    </a>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/tether/tether.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/sb-admin.min.js"></script>

</body>

</html>
