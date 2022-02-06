<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Quixlab - Bootstrap Admin Dashboard Template by Themefisher.com</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <!-- Custom Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    
    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
          <?php
            include("header.php");
        ?>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
          <?php
                include("sidebar.php");
            ?>
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">

            <div class="row page-titles mx-0">
                <div class="col p-md-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Home</a></li>
                    </ol>
                </div>
            </div>
            <!-- row -->

            <div class="container-fluid">

                <!-- row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Contextual badges</h4>
                                <div class="bootstrap-badge"><span class="badge badge-primary">Primary</span> <span class="badge badge-secondary">Secondary</span> <span class="badge badge-success">Success</span> <span class="badge badge-danger">Danger</span> <span class="badge badge-warning">Warning</span>
                                    <span class="badge badge-info">Info</span> <span class="badge badge-light">Light</span> <span class="badge badge-dark">Dark</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Pill badges</h4>
                                <div class="bootstrap-badge"><span class="badge badge-pill badge-primary">Primary</span> <span class="badge badge-pill badge-secondary">Secondary</span> <span class="badge badge-pill badge-success">Success</span> <span class="badge badge-pill badge-danger">Danger</span>
                                    <span class="badge badge-pill badge-warning">Warning</span> <span class="badge badge-pill badge-info">Info</span> <span class="badge badge-pill badge-light">Light</span> <span class="badge badge-pill badge-dark">Dark</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Links badges</h4>
                                <div class="bootstrap-badge"><a href="#" class="badge badge-primary">Primary</a> <a href="#" class="badge badge-secondary">Secondary</a> <a href="#" class="badge badge-success">Success</a> <a href="#" class="badge badge-danger">Danger</a> <a href="#"
                                        class="badge badge-warning">Warning</a>
                                    <a href="#" class="badge badge-info">Info</a> <a href="#" class="badge badge-light">Light</a> <a href="#" class="badge badge-dark">Dark</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Contextual label</h4>
                                <div class="bootstrap-label"><span class="label label-primary">Primary</span> <span class="label label-secondary">Secondary</span> <span class="label label-success">Success</span> <span class="label label-danger">Danger</span> <span class="label label-warning">Warning</span>
                                    <span class="label label-info">Info</span> <span class="label label-light">Light</span> <span class="label label-dark">Dark</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Pill label</h4>
                                <div class="bootstrap-label"><span class="label label-pill label-primary">Primary</span> <span class="label label-pill label-secondary">Secondary</span> <span class="label label-pill label-success">Success</span> <span class="label label-pill label-danger">Danger</span>
                                    <span class="label label-pill label-warning">Warning</span> <span class="label label-pill label-info">Info</span> <span class="label label-pill label-light">Light</span> <span class="label label-pill label-dark">Dark</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Links badges</h4>
                                <div class="bootstrap-label"><a href="#" class="label label-primary">Primary</a> <a href="#" class="label label-secondary">Secondary</a> <a href="#" class="label label-success">Success</a> <a href="#" class="label label-danger">Danger</a> <a href="#"
                                        class="label label-warning">Warning</a>
                                    <a href="#" class="label label-info">Info</a> <a href="#" class="label label-light">Light</a> <a href="#" class="label label-dark">Dark</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #/ container -->
        </div>
        <!--**********************************
            Content body end
        ***********************************-->
        
        
        <!--**********************************
            Footer start
        ***********************************-->
         <?php
            include("footer.php");
        ?>
        <!--**********************************
            Footer end
        ***********************************-->
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <script src="plugins/common/common.min.js"></script>
    <script src="js/custom.min.js"></script>
    <script src="js/settings.js"></script>
    <script src="js/gleek.js"></script>
    <script src="js/styleSwitcher.js"></script>

</body>

</html>