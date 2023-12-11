<?php
    session_start();
    if(isset($_SESSION['username'])){
?>          
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Event Organization System</title>
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/jpg" href="images/logos.png">
    
    <!-- bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- font-awesome -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- google font -->
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700,800' rel='stylesheet' type='text/css'>
    <!-- custom -->
    <link rel="stylesheet" href="css/style.css">
    <!-- jQuery -->
    <script src="../code.jquery.com/jquery-1.11.1.min.js"></script>
    
</head>
<body data-spy="scroll" data-offset="50" data-target=".navbar-collapse">
    <button class="smoothScroll" onclick="topFunction()" style="background-color:#31708f;" id="myBtn" title="Go to top">
        <i class="fa fa-angle-double-up"></i>
    </button>

    <!--Start Header-->
    <header id="header">
        <div id="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-sm-7 hidden-xs top-info">
                        <span>
                            <i class="fa fa-phone"></i>+91 9898989898</span>&nbsp;&nbsp;|&nbsp;
                        <span>
                            <i class="fa fa-envelope"></i>contact@eventmanagement.com </span>
                    </div>
                </div>
            </div>
        </div>
        <!-- start tagline bar -->
        <div id="logo-bar" class="clearfix" style="margin-bottom: -5px;margin-top: -12px;">
            <div class="container">
                <div class="row">
                    <div style="margin-top: -25px;margin-bottom: 25px">
                        <center>
                            <h2 class="logo-head">
                                <strong>Welcome to Event Organization System</strong>
                            </h2>
                        </center>
                    </div>
                </div>
            </div>
        </div>
        <!-- end tagline bar -->

        <!-- start navigation -->
        <div class="navbar navbar-default navbar-static-top container" role="navigation" style="margin-bottom: -110px;">
            <div class="row">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li style="background: #0094d0;">
                            <a href="admin_dashboard.php">HOME</a>
                        </li>
                        <li>
                            <a href="view_customers.php" class="smoothScroll">VIEW CUSTOMERS</a>
                        </li>
                        <li>
                            <a href="view_organizers.php" class="smoothScroll">VIEW ORGANIZERS</a>
                        </li>
                        <li>
                            <a href="view_customerReq.php" class="smoothScroll">VIEW CUSTOMER'S REQUEST</a>
                        </li>
                        <li>
                            <a href="view_organizerReq.php" class="smoothScroll">VIEW ORGANIZER'S REQUEST</a>
                        </li>
                        <li>
                            <a href="admin_logout.php" class="smoothScroll">LOGOUT</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- end navigation -->
    </header>
    <!-- end header -->
    
    <!-- start admin home -->
    <div class="container" style="margin-top: 150px;">
        <div class="row">
            <div class="col-lg-6">
                <img class="homeImg" src="images/slider/events1.jpeg" alt="Slide 1" width="500px" />
            </div>
            <div class="col-lg-6">
                <h2 style="padding-top:50px;padding-left:25%;"><?php echo "Welcome ".$_SESSION['username']; ?></h2>
            </div>
        </div>
    </div>
    <!-- end admin home -->

    <script src="js/jquery.js"></script>
    <!-- bootstrap -->
    <script src="js/bootstrap.min.js"></script>

</body>
</html>
<?php
    }
    else{
        header('Location: index.php');
    }
?>