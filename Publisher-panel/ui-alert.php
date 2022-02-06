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
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Alerts</h4>
                                <div class="card-content">
                                    <div class="alert alert-primary">This is a primary alert—check it out!</div>
                                    <div class="alert alert-secondary">This is a secondary alert—check it out!</div>
                                    <div class="alert alert-success">This is a success alert—check it out!</div>
                                    <div class="alert alert-danger">This is a danger alert—check it out!</div>
                                    <div class="alert alert-warning">This is a warning alert—check it out!</div>
                                    <div class="alert alert-info">This is a info alert—check it out!</div>
                                    <div class="alert alert-light">This is a light alert—check it out!</div>
                                    <div class="alert alert-dark">This is a dark alert—check it out!</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Link color</h4>
                                <div class="card-content">
                                    <div class="alert alert-primary">This is a primary alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.</div>
                                    <div class="alert alert-secondary">This is a secondary alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.</div>
                                    <div class="alert alert-success">This is a success alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.</div>
                                    <div class="alert alert-danger">This is a danger alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.</div>
                                    <div class="alert alert-warning">This is a warning alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.</div>
                                    <div class="alert alert-info">This is a info alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.</div>
                                    <div class="alert alert-light">This is a light alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.</div>
                                    <div class="alert alert-dark">This is a dark alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Additional content</h4>
                                <div class="card-content">
                                    <div class="alert alert-success">
                                        <h4 class="alert-heading">Well done!</h4>
                                        <p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
                                        <hr>
                                        <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Dismissing</h4>
                                <div class="card-content">
                                    <div class="alert alert-primary alert-dismissible fade show">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>
                                        </button> <strong>Holy guacamole!</strong> You should check in on some of those fields below.</div>
                                    <div class="alert alert-danger alert-dismissible fade show">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>
                                        </button> <strong>Holy guacamole!</strong> You should check in on some of those fields below.</div>
                                    <div class="alert alert-warning alert-dismissible fade show">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>
                                        </button> <strong>Holy guacamole!</strong> You should check in on some of those fields below.</div>
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