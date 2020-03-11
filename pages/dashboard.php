<?php 
session_start();
if(!isset($_SESSION["admin"])){header("Location: http://localhost:8080/MelliniumComputer/pages/ed9eee4c247fee6711a6e41d3dfe8bcd.php");} ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <link rel="shortcut icon" href="../images/favicon_1.ico">

        <title>Moltran - Responsive Admin Dashboard Template</title>

        <!-- Base Css Files -->
        <link href="../css/bootstrap.min.css" rel="stylesheet" />

        <!-- Font Icons -->
        <link href="../asset/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
        <link href="../asset/ionicon/css/ionicons.min.css" rel="stylesheet" />
        <link href="../css/material-design-iconic-font.min.css" rel="stylesheet">

        <!-- animate css -->
        <link href="../css/animate.css" rel="stylesheet" />

        <!-- Waves-effect -->
        <link href="../css/waves-effect.css" rel="stylesheet">

        <!-- sweet alerts -->
        <link href="../asset/sweet-alert/sweet-alert.min.css" rel="stylesheet">

        <!-- Custom Files -->
        <link href="../css/helper.css" rel="stylesheet" type="text/css" />
        <link href="../css/style.css" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.../js2/1.3.0/respond.min.js"></script>
        <![endif]-->

        <script src="../js2/modernizr.min.js"></script>
        
    </head>



    <body class="fixed-left">
        
        <!-- Begin page -->
        <div id="wrapper">
        
            <!-- Top Bar Start -->
            <div class="topbar">
                <!-- LOGO -->
                <div class="topbar-left">
                    <div class="text-center">
                        <a href="dashboard.php" class="logo"><i class="md md-terrain"></i> <span>Moltran </span></a>
                    </div>
                </div>
                <!-- Button mobile view to collapse sidebar menu -->
                <?php $path=$_SERVER["DOCUMENT_ROOT"]."/MelliniumComputer/pages/"; include($path."header.php");?>

            </div>
            <!-- Top Bar End -->


            <!-- ========== Left Sidebar Start ========== -->

            <?php $path=$_SERVER["DOCUMENT_ROOT"]."/MelliniumComputer/pages/"; include($path."menu_dashboard.php");?>
            <!-- Left Sidebar End --> 



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->                      
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container ">

                        <!-- Page-Title -->
                        <div class="row">
                            <div class="col-sm-12">
                                <h4 class="pull-left page-title">Welcome !</h4>
                                <ol class="breadcrumb pull-right">
                                    <li><a href="#">MelliniumComputer</a></li>
                                    <li class="active">Dashboard</li>
                                </ol>
                            </div>
                        </div>

                        <!-- Start Widget -->
                        <div class="row" >
                            <div class="col-md-6 col-sm-6 col-lg-3">
                                <div class="mini-stat clearfix bx-shadow">
                                    <span class="mini-stat-icon bg-info"><i class="ion-social-usd"></i></span>
                                    <div class="mini-stat-info text-right text-muted">
                                        <span id="nbrart"></span>
                                        Nombre d'article
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-lg-3">
                                <div class="mini-stat clearfix bx-shadow">
                                    <span class="mini-stat-icon bg-purple"><i class="ion-ios7-cart"></i></span>
                                    <div class="mini-stat-info text-right text-muted">
                                        <span  id="vendu"></span>
                                        Nombre d'article vendu
                                    </div>

                                </div>
                            </div>
                            
                            <div class="col-md-6 col-sm-6 col-lg-3">
                                <div class="mini-stat clearfix bx-shadow">
                                    <span class="mini-stat-icon bg-success"><i class="ion-eye"></i></span>
                                    <div class="mini-stat-info text-right text-muted">
                                        <span id="nonvendu"></span>
                                        Nombre d'article non vendu
                                    </div>
                                </div>
                            </div>

                            <!-- <div class="col-md-6 col-sm-6 col-lg-3">
                                <div class="mini-stat clearfix bx-shadow">
                                    <span class="mini-stat-icon bg-primary"><i class="ion-android-contacts"></i></span>
                                    <div class="mini-stat-info text-right text-muted">
                                        <span class="counter">5210</span>
                                        New Users
                                    </div>
                                </div>
                            </div> -->
                        </div> 
                        <!-- End row-->



                        <div class="row">


                            <!-- CHAT -->



                            <!-- TODO -->

                        </div> <!-- end row -->

                    </div> <!-- container -->
                               
                </div> <!-- content -->

                <footer class="footer text-right">
                MelliniumComputer 2020
                </footer>

            </div>
            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->



        </div>
        <!-- END wrapper -->


    
        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="../js2/jquery.min.js"></script>
        <script src="../js2/bootstrap.min.js"></script>
        <script src="../js2/waves.js"></script>
        <script src="../js2/wow.min.js"></script>
        <script src="../js2/jquery.nicescroll.js" type="text/javascript"></script>
        <script src="../js2/jquery.scrollTo.min.js"></script>
        <script src="../asset/chat/moment-2.2.1.js"></script>
        <script src="../asset/jquery-sparkline/jquery.sparkline.min.js"></script>
        <script src="../asset/jquery-detectmobile/detect.js"></script>
        <script src="../asset/fastclick/fastclick.js"></script>
        <script src="../asset/jquery-slimscroll/jquery.slimscroll.js"></script>
        <script src="../asset/jquery-blockui/jquery.blockUI.js"></script>

        <!-- sweet alerts -->
        <script src="../asset/sweet-alert/sweet-alert.min.js"></script>
        <script src="../asset/sweet-alert/sweet-alert.init.js"></script>

        <!-- flot Chart -->
        <script src="../asset/flot-chart/jquery.flot.js"></script>
        <script src="../asset/flot-chart/jquery.flot.time.js"></script>
        <script src="../asset/flot-chart/jquery.flot.tooltip.min.js"></script>
        <script src="../asset/flot-chart/jquery.flot.resize.js"></script>
        <script src="../asset/flot-chart/jquery.flot.pie.js"></script>
        <script src="../asset/flot-chart/jquery.flot.selection.js"></script>
        <script src="../asset/flot-chart/jquery.flot.stack.js"></script>
        <script src="../asset/flot-chart/jquery.flot.crosshair.js"></script>

        <!-- Counter-up -->
        <script src="../asset/counterup/waypoints.min.js" type="text/javascript"></script>
        <script src="../asset/counterup/jquery.counterup.min.js" type="text/javascript"></script>
        
        <!-- CUSTOM JS -->
        <script src="../js2/jquery.app.js"></script>

        <!-- Dashboard -->
        <!-- <script src="../js2/jquery.dashboard.js"></script> -->

        <script src="../js/dashboard.js"></script>
        


    
    </body>
</html>