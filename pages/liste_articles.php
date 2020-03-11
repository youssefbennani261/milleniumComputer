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
    <link href="../asset/notifications/notification.css" rel="stylesheet" />

    <!-- DataTables -->
    <link href="../asset/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
    <link href="../asset/sweet-alert/sweet-alert.min.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="../asset/dropify/css/dropify.min.css"> -->
<link rel="stylesheet" href="../asset/dropzone/dropzone.css">

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
                    <a href="dashboard.php" class="logo"><i class="md md-terrain"></i> <span>Melinium  </span></a>
                </div>
            </div>
            <!-- Button mobile view to collapse sidebar menu -->
            <?php $path=$_SERVER["DOCUMENT_ROOT"]."/MelliniumComputer/pages/"; include($path."header.php");?>

        </div>
        <!-- Top Bar End -->


        <!-- ========== Left Sidebar Start ========== -->

        <!--- Divider -->
        <?php $path=$_SERVER["DOCUMENT_ROOT"]."/MelliniumComputer/pages/"; include($path."menu_dashboard.php");?>


    </div>
    </div>
    <!-- Left Sidebar End -->



    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="content-page">
        <!-- Start content -->
        <div class="content">
            <div class="container">

                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <h4 class="pull-left page-title">Articles</h4>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <button type="button" id="ajouter"
                                    class="btn btn-success waves-effect waves-light m-b-5">Ajouter Article</button>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <table id="datatable" class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Designation</th>
                                                    <th>Description</th>
                                                    <th>vendue</th>
                                                    <th>prixU</th>
                                                    <th>estimation</th>
                                                    <th>Categorie</th>
                                                    <th>Details</th>
                                                    <th></th>
                                                    <th></th>
                                                </tr>
                                            </thead>

                                        </table>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div> <!-- End Row -->


            </div> <!-- container -->

        </div> <!-- content -->

        <footer class="footer text-right">
        Melinium Computer 2020
        </footer>

    </div>
    <!-- ============================================================== -->
    <!-- End Right content here -->
    <!-- ============================================================== -->


    <!-- Right Sidebar -->

    <!-- /Right-bar -->


    </div>
    <!-- END wrapper -->
    <div id="con-close-modal2" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title">L'ajout d'Article</h4>
                </div>
                <div class="modal-body" id="ajoutbody">
                    <form action="#"
      class="dropzone"
      id="fileup"></form>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="designation" class="control-label">Designation</label>
                                <input type="text" class="form-control" id="designation2" placeholder="Designation">
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="prix" class="control-label">Prix</label>
                                <input type="text" class="form-control" id="prix2" placeholder="Prix">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                                                <div class="col-md-10">
                                                <label class="col-md-2 control-label">Description</label>
                                                    <textarea class="form-control" rows="5" id="descrip2"></textarea>
                                                </div>
                                            </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="estim" class="control-label">Estimation</label>
                                <select class="form-control" id="estim2">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="categorie" class="control-label">Categorie</label>
                                <select class="form-control" id="categorie2">
                                    <option value="1">ordinateur</option>
                                    <option value="2">Accessoires informatiques</option>
                                    <option value="3">Périphériques externes stockage de données</option>
                                    <option value="4">Imprimantes et Scanners</option>
                                    <option value="5">Logiciels</option>
                                    <option value="6">Téléphone mobile</option>
                                    <option value="7">Accessoires téléphones portables</option>
                                    <option value="8">Tablette</option>
                                    <option value="9">accessoires pour tablette</option>
                                </select>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <a href="javascript:ajoutdetail()">Ajouter un detail</a><br><br>
                        </div>
                    </div>
                    <div id="details"></div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default waves-effect" data-dismiss="modal"
                        id="close">Close</button>
                    <button type="button" class="btn btn-info waves-effect waves-light" id="save2">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    <div id="con-close-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title">Modification d'Article</h4>
                </div>
                <div class="modal-body" id="mbody">
                <!-- <form action="#"
      class="dropzone"
      id="fileup2"></form> -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="designation" class="control-label">Designation</label>
                                <input type="text" class="form-control" id="designation" placeholder="Designation">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="Vendu" class="control-label">Vendu</label>
                                <select class="form-control" id="Vendu">
                                    <option value="0">Non Vendu</option>
                                    <option value="1">Vendu</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="prix" class="control-label">Prix</label>
                                <input type="text" class="form-control" id="prix" placeholder="Prix">
                            </div>
                        </div>
                        <div class="form-group">
                                                <div class="col-md-10">
                                                <label class="col-md-2 control-label">Description</label>
                                                    <textarea class="form-control" rows="5" id="descrip"></textarea>
                                                </div>
                                            </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="estim" class="control-label">Estimation</label>
                                <select class="form-control" id="estim">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="categorie" class="control-label">Categorie</label>
                                <select class="form-control" id="categorie">
                                    <option value="1">ordinateur</option>
                                    <option value="2">Accessoires informatiques</option>
                                    <option value="3">Périphériques externes stockage de données</option>
                                    <option value="4">Imprimantes et Scanners</option>
                                    <option value="5">Logiciels</option>
                                    <option value="6">Téléphone mobile</option>
                                    <option value="7">Accessoires téléphones portables</option>
                                    <option value="8">Tablette</option>
                                    <option value="9">accessoires pour tablette</option>
                                </select>
                            </div>
                        </div>

                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default waves-effect" data-dismiss="modal"
                        id="close">Close</button>
                    <button type="button" class="btn btn-info waves-effect waves-light" id="save">Save changes</button>
                </div>
            </div>
        </div>
    </div>
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
    <script src="../asset/jquery-detectmobile/detect.js"></script>
    <script src="../asset/fastclick/fastclick.js"></script>
    <script src="../asset/jquery-slimscroll/jquery.slimscroll.js"></script>
    <script src="../asset/jquery-blockui/jquery.blockUI.js"></script>


    <!-- CUSTOM JS -->
    <script src="../js2/jquery.app.js"></script>

    <script src="../asset/datatables/jquery.dataTables.min.js"></script>
    <script src="../asset/datatables/dataTables.bootstrap.js"></script>
    <script src="../assets/sweet-alert/sweet-alert.min.js"></script>
    <!-- <script src="../asset/dropify/js/dropify.min.js"></script> -->
    <script src="../asset/dropzone/dropzone.min.js"></script>

    <script src="../asset/notifications/notify.min.js"></script>
        <script src="../asset/notifications/notify-metro.js"></script>
        <script src="../asset/notifications/notifications.js"></script>
    <script src="../js/dashboard.js"></script>




</body>

</html>