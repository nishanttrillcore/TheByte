<?php
session_start();
$mqw=$_SESSION["usersession"];
mysql_connect("localhost","root","");
     mysql_select_db("dbbyte");
     $resultsess=mysql_query("select * from userdetails where email='$mqw'");
      $rowsess=mysql_fetch_array($resultsess);	
   
if($_SESSION["usersession"]=="" ){
	
	?>
	<script type="text/javascript">
	window.location="index.php";
	</script>
<?php 
}
elseif($_SESSION["usersid"]==$rowsess["sessionid"]){
	$sessstodel=$rowsess["sessionid"];
	$lc=$_SESSION["usersession"];
	mysql_connect("localhost","root","");
     mysql_select_db("dbbyte");
     $result=mysql_query("select * from userdetails where email='$lc'");
      $row=mysql_fetch_array($result);	
	if($row["access"]=="1"){
		$tval=$_SESSION["usersession"];
        ?>
	<script type="text/javascript">
	window.location="developer.php";
	</script>
	   <?php	
	}
	else if($row["access"]=="12"){
		$tval=$_SESSION["usersession"];
        ?>
	<script type="text/javascript">
	window.location="incharge.php";
	</script>
	   <?php
	}
	else if($row["access"]=="11"){
		$tval=$_SESSION["usersession"];
        ?>
	<script type="text/javascript">
	window.location="hodpanel.php";
	</script>
	   <?php
	}
	else if($row["access"]=="13"){
		$tval=$_SESSION["usersession"];
        ?>
	<script type="text/javascript">
	window.location="coordinator.php";
	</script>
	   <?php
	}
	elseif($row["access"]=="14"){
		$tval=$_SESSION["usersession"];
	 	}
}
else{
	session_destroy();
	?>
	<script type="text/javascript">
	window.location="index.php";
	</script>
<?php }
?>
<!DOCTYPE html>
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
<style>
.ty{
height=100%;}
</style>
<script>
function setURL(url){
    document.getElementById('iframe').data = url;
}
</script>
</head>

<body id="page-top">

    <!-- Navigation -->
    <nav id="mainNav" class="navbar fixed-top navbar-toggleable-md navbar-inverse bg-inverse" >
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarExample" aria-controls="navbarExample" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#">The Byte | Student Panel</a>
        <div class="collapse navbar-collapse" id="navbarExample">
            <ul class="sidebar-nav navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="javascript:setURL('/thebyte/students/stindex.php');" target=container-fluid><i class="fa fa-fw fa-institution"></i> HOME</a>
                </li>
				<li class="nav-item">
                    <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti"><i class="fa fa-fw fa-street-view"></i> Events</a>
                    <ul class="sidebar-second-level collapse" id="collapseMulti">
                        <li>
                            <a href="javascript:setURL('/thebyte/students/stlatestevent.php');">Latest Events</a>
                        </li>
                        <li>
                            <a href="javascript:setURL('/thebyte/students/eventregistered.php');">Event Registered</a>
                        </li>
                        <li>
                            <a class="nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti2">Payment</a>
                            <ul class="sidebar-third-level collapse" id="collapseMulti2">
                                <li>
                                    <a href="javascript:setURL('/thebyte/students/pendpay.php');">Pending Payment</a>
                                </li>
                                <li>
                                    <a href="javascript:setURL('/thebyte/students/approvedpay.php');">Approved Payment</a>
                                </li>
                            </ul>
                        </li>
						<li>
                            <a href="#">Create Event</a>
                        </li>
                    </ul>
                </li>
				<li class="nav-item">
                    <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents"><i class="fa fa-fw fa-newspaper-o"></i> Byte Magazine</a>
                    <ul class="sidebar-second-level collapse" id="collapseComponents">
                        <li>
                            <a href="javascript:setURL('/thebyte/students/bytecontri.php');">Contribute</a>
                        </li>
						<li>
                            <a href="javascript:setURL('/thebyte/students/contrisuccess.php');">My Contribution</a>
                        </li>
                        <li>
                            <a href="javascript:setURL('/thebyte/students/bytecontri.php');">Read Magazine</a>
                        </li>
                        
            
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="javascript:setURL('/thebyte/students/certifica.php');"><i class="fa fa-fw fa-id-card-o"></i> Certificates</a>
                </li>
                
                
              
				<li class="nav-item">
                    <a class="nav-link" href="#"><i class="fa fa-fw fa-user-o"></i>Edit Profile</a>
                </li>
				<li class="nav-item">
				<hr color=white>
                    
    <p style="font-size:10px;color:gray; text-align:center;">Made with <i class="fa fa-heart"></i>  by <a href="http://www.trillcore.com" style="color:white;">TrillCORE Softwares</a></h6>
  
                </li>
            </ul>
			
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle mr-lg-2" href="#" id="messagesDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-fw fa-envelope"></i> <span class="hidden-lg-up">Messages <span class="badge badge-pill badge-primary">12 New</span></span>
                        <span class="new-indicator text-primary hidden-md-down"><i class="fa fa-fw fa-circle"></i><span class="number">12</span></span>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="messagesDropdown">
                        <h6 class="dropdown-header">New Messages:</h6>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">
                            <strong>David Miller</strong> <span class="small float-right text-muted">11:21 AM</span>
                            <div class="dropdown-message small">Hey there! This new version of SB Admin is pretty awesome! These messages clip off when they reach the end of the box so they don't overflow over to the sides!</div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">
                            <strong>Jane Smith</strong> <span class="small float-right text-muted">11:21 AM</span>
                            <div class="dropdown-message small">I was wondering if you could meet for an appointment at 3:00 instead of 4:00. Thanks!</div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">
                            <strong>John Doe</strong> <span class="small float-right text-muted">11:21 AM</span>
                            <div class="dropdown-message small">I've sent the final files over to you for review. When you're able to sign off of them let me know and we can discuss distribution.</div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item small" href="#">
                            View all messages
                        </a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle mr-lg-2" href="#" id="alertsDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-fw fa-bell"></i> <span class="hidden-lg-up">Alerts <span class="badge badge-pill badge-warning">6 New</span></span>
                        <span class="new-indicator text-warning hidden-md-down"><i class="fa fa-fw fa-circle"></i><span class="number">6</span></span>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="alertsDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
                <li class="nav-item">
                    <form class="form-inline my-2 my-lg-0 mr-lg-2">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search for...">
                            <span class="input-group-btn">
                        <button class="btn btn-primary" type="button"><i class="fa fa-search"></i></button>
                    </span>
                        </div>
                    </form>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="edituserdetails.php"><i class="fa fa-fw fa-sign-out"></i>	<?php
   echo"hi,".$tval."";
   
   ?></a>
                </li>
				<li class="nav-item">
                    <a class="nav-link" href="logout.php"><i class="fa fa-fw fa-sign-out"></i> Logout</a>
                </li>
            </ul>
        </div>
    </nav>
     
    <div class="content-wrapper py-3">
        <div class="container-fluid" width=100% style="overflow:auto;border:0px ridge orange   margin:0px;padding-top:30px;padding-left:0px;padding-right:0px;relative;top:0;left:0;bottom:0;right:0;  height: 100%;;display:block;height=100%;">
		     
             <object type="text/html" class=ty id=iframe data="/"   width=100% style=" display:block; height: 1100px; margin:0px;padding:0px;border:0px ridge orange" >
             </object>
			 
		</div>
      
    <!-- /.content-wrapper yahi rok-->
    
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
