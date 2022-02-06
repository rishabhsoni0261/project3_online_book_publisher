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
                                <h4 class="card-title">Basic Dropdown</h4>
                                <p class="text-muted">A dropdown menu is a toggleable menu that allows the user to choose one value from a predefined list</p>
                                <div class="basic-dropdown">
                                    <div class="dropdown">
                                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Dropdown button</button>
                                        <div class="dropdown-menu"><a class="dropdown-item" href="#">Link 1</a> <a class="dropdown-item" href="#">Link 2</a> <a class="dropdown-item" href="#">Link 3</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Dropdown Divider</h4>
                                <p class="text-muted">The <code>.dropdown-divider</code> class is used to separate links inside the dropdown menu with a thin horizontal border</p>
                                <div class="basic-dropdown">
                                    <div class="dropdown">
                                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Dropdown button</button>
                                        <div class="dropdown-menu"><a class="dropdown-item" href="#">Link 1</a> <a class="dropdown-item" href="#">Link 2</a> <a class="dropdown-item" href="#">Link 3</a>
                                            <div class="dropdown-divider"></div><a class="dropdown-item" href="#">Another link</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Dropdown Header</h4>
                                <p class="text-muted">The <code>.dropdown-header</code> class is used to add headers inside the dropdown menu</p>
                                <div class="basic-dropdown">
                                    <div class="dropdown">
                                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Dropdown button</button>
                                        <div class="dropdown-menu">
                                            <h5 class="dropdown-header">Dropdown header</h5><a class="dropdown-item" href="#">Link 1</a> <a class="dropdown-item" href="#">Link 2</a> <a class="dropdown-item" href="#">Link 3</a>
                                            <h5 class="dropdown-header">Dropdown header</h5><a class="dropdown-item" href="#">Another link</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Disable and Active items</h4>
                                <p class="text-muted">The <code>.dropdown-header</code> class is used to add headers inside the dropdown menu</p>
                                <div class="basic-dropdown">
                                    <div class="dropdown">
                                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Dropdown button</button>
                                        <div class="dropdown-menu"><a class="dropdown-item" href="#">Normal</a> <a class="dropdown-item active" href="#">Active</a> <a class="dropdown-item disabled" href="#">Disabled</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Align Right</h4>
                                <p class="text-muted">To right-align the dropdown, add the <code>.dropdown-menu-right</code> class to the element with .dropdown-menu</p>
                                <div class="basic-dropdown">
                                    <div class="dropdown">
                                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Dropdown button</button>
                                        <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#">Link 1</a> <a class="dropdown-item" href="#">Link 2</a> <a class="dropdown-item" href="#">Link 3</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Dropup</h4>
                                <p class="text-muted">The <code>.dropup</code> class makes the dropdown menu expand upwards instead of downwards</p>
                                <div class="basic-dropdown">
                                    <!-- Default dropup button -->
                                    <div class="btn-group dropup mb-2">
                                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Dropup</button>
                                        <div class="dropdown-menu"><a class="dropdown-item" href="#">Link 1</a> <a class="dropdown-item" href="#">Link 2</a> <a class="dropdown-item" href="#">Link 3</a>
                                        </div>
                                    </div>
                                    <!-- Split dropup button -->
                                    <div class="btn-group dropup mb-2">
                                        <button type="button" class="btn btn-primary">Split dropup</button>
                                        <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown"><span class="sr-only">Toggle Dropdown</span>
                                        </button>
                                        <div class="dropdown-menu"><a class="dropdown-item" href="#">Link 1</a> <a class="dropdown-item" href="#">Link 2</a> <a class="dropdown-item" href="#">Link 3</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Dropright</h4>
                                <p class="text-muted">Trigger dropdown menus at the right of the elements by adding <code>.dropright</code> to the parent element</p>
                                <div class="basic-dropdown">
                                    <!-- Default dropright button -->
                                    <div class="btn-group dropright mb-2">
                                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Dropright</button>
                                        <div class="dropdown-menu"><a class="dropdown-item" href="#">Link 1</a> <a class="dropdown-item" href="#">Link 2</a> <a class="dropdown-item" href="#">Link 3</a>
                                        </div>
                                    </div>
                                    <!-- Split dropright button -->
                                    <div class="btn-group dropright mb-2">
                                        <button type="button" class="btn btn-primary">Split dropright</button>
                                        <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown"><span class="sr-only">Toggle Dropright</span>
                                        </button>
                                        <div class="dropdown-menu"><a class="dropdown-item" href="#">Link 1</a> <a class="dropdown-item" href="#">Link 2</a> <a class="dropdown-item" href="#">Link 3</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Dropleft</h4>
                                <p class="text-muted">Trigger dropdown menus at the right of the elements by adding <code>.dropleft</code> to the parent element</p>
                                <div class="basic-dropdown">
                                    <!-- Default dropleft button -->
                                    <div class="btn-group dropleft mb-1">
                                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Dropleft</button>
                                        <div class="dropdown-menu"><a class="dropdown-item" href="#">Link 1</a> <a class="dropdown-item" href="#">Link 2</a> <a class="dropdown-item" href="#">Link 3</a>
                                        </div>
                                    </div>
                                    <!-- Split dropleft button -->
                                    <div class="btn-group mb-1">
                                        <div class="btn-group dropleft" role="group">
                                            <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown"><span class="sr-only">Toggle Dropleft</span>
                                            </button>
                                            <div class="dropdown-menu"><a class="dropdown-item" href="#">Link 1</a> <a class="dropdown-item" href="#">Link 2</a> <a class="dropdown-item" href="#">Link 3</a>
                                            </div>
                                        </div>
                                        <button type="button" class="btn btn-primary">Split dropleft</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Button Dropdowns</h4>
                                <div class="button-dropdown">
                                    <div class="btn-group mb-1">
                                        <button type="button" class="btn btn-primary">Primary</button>
                                        <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown"></button>
                                        <div class="dropdown-menu"><a class="dropdown-item" href="#">Action</a> <a class="dropdown-item" href="#">Another action</a> <a class="dropdown-item" href="#">Something else here</a>
                                            <div class="dropdown-divider"></div><a class="dropdown-item" href="#">Separated link</a>
                                        </div>
                                    </div>
                                    <div class="btn-group mb-1">
                                        <button type="button" class="btn btn-secondary">Secondary</button>
                                        <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown"></button>
                                        <div class="dropdown-menu"><a class="dropdown-item" href="#">Action</a> <a class="dropdown-item" href="#">Another action</a> <a class="dropdown-item" href="#">Something else here</a>
                                            <div class="dropdown-divider"></div><a class="dropdown-item" href="#">Separated link</a>
                                        </div>
                                    </div>
                                    <div class="btn-group mb-1">
                                        <button type="button" class="btn btn-success">Success</button>
                                        <button type="button" class="btn btn-success dropdown-toggle dropdown-toggle-split" data-toggle="dropdown"></button>
                                        <div class="dropdown-menu"><a class="dropdown-item" href="#">Action</a> <a class="dropdown-item" href="#">Another action</a> <a class="dropdown-item" href="#">Something else here</a>
                                            <div class="dropdown-divider"></div><a class="dropdown-item" href="#">Separated link</a>
                                        </div>
                                    </div>
                                    <div class="btn-group mb-1">
                                        <button type="button" class="btn btn-info">Info</button>
                                        <button type="button" class="btn btn-info dropdown-toggle dropdown-toggle-split" data-toggle="dropdown"></button>
                                        <div class="dropdown-menu"><a class="dropdown-item" href="#">Action</a> <a class="dropdown-item" href="#">Another action</a> <a class="dropdown-item" href="#">Something else here</a>
                                            <div class="dropdown-divider"></div><a class="dropdown-item" href="#">Separated link</a>
                                        </div>
                                    </div>
                                    <div class="btn-group mb-1">
                                        <button type="button" class="btn btn-warning">Warning</button>
                                        <button type="button" class="btn btn-warning dropdown-toggle dropdown-toggle-split" data-toggle="dropdown"></button>
                                        <div class="dropdown-menu"><a class="dropdown-item" href="#">Action</a> <a class="dropdown-item" href="#">Another action</a> <a class="dropdown-item" href="#">Something else here</a>
                                            <div class="dropdown-divider"></div><a class="dropdown-item" href="#">Separated link</a>
                                        </div>
                                    </div>
                                    <div class="btn-group mb-1">
                                        <button type="button" class="btn btn-danger">Danger</button>
                                        <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" data-toggle="dropdown"></button>
                                        <div class="dropdown-menu"><a class="dropdown-item" href="#">Action</a> <a class="dropdown-item" href="#">Another action</a> <a class="dropdown-item" href="#">Something else here</a>
                                            <div class="dropdown-divider"></div><a class="dropdown-item" href="#">Separated link</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Sizing</h4>
                                <p class="text-muted">Button dropdowns work with buttons of all sizes, including default and split dropdown buttons.</p>
                                <div class="dropdown-size">
                                    <!-- Large button groups (default and split) -->
                                    <div class="btn-group mb-1">
                                        <button class="btn btn-primary btn-lg dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Large button</button>
                                        <div class="dropdown-menu"><a class="dropdown-item" href="#">Action</a> <a class="dropdown-item" href="#">Another action</a> <a class="dropdown-item" href="#">Something else here</a>
                                            <div class="dropdown-divider"></div><a class="dropdown-item" href="#">Separated link</a>
                                        </div>
                                    </div>
                                    <div class="btn-group mb-1">
                                        <button class="btn btn-primary btn-lg" type="button">Large split button</button>
                                        <button type="button" class="btn btn-lg btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="sr-only">Toggle Dropdown</span>
                                        </button>
                                        <div class="dropdown-menu"><a class="dropdown-item" href="#">Action</a> <a class="dropdown-item" href="#">Another action</a> <a class="dropdown-item" href="#">Something else here</a>
                                            <div class="dropdown-divider"></div><a class="dropdown-item" href="#">Separated link</a>
                                        </div>
                                    </div>
                                    <!-- Small button groups (default and split) -->
                                    <div class="btn-group mb-1">
                                        <button class="btn btn-primary btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Small button</button>
                                        <div class="dropdown-menu"><a class="dropdown-item" href="#">Action</a> <a class="dropdown-item" href="#">Another action</a> <a class="dropdown-item" href="#">Something else here</a>
                                            <div class="dropdown-divider"></div><a class="dropdown-item" href="#">Separated link</a>
                                        </div>
                                    </div>
                                    <div class="btn-group mb-1">
                                        <button class="btn btn-primary btn-sm" type="button">Small split button</button>
                                        <button type="button" class="btn btn-sm btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="sr-only">Toggle Dropdown</span>
                                        </button>
                                        <div class="dropdown-menu"><a class="dropdown-item" href="#">Action</a> <a class="dropdown-item" href="#">Another action</a> <a class="dropdown-item" href="#">Something else here</a>
                                            <div class="dropdown-divider"></div><a class="dropdown-item" href="#">Separated link</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Custom style</h4>
                                <p class="text-muted">Use <code>.custom-dropdown</code> this class for this style</p>
                                <div class="row">
                                    <div class="col">
                                        <div class="dropdown custom-dropdown">
                                            <div data-toggle="dropdown">Last 7 days <i class="fa fa-angle-down m-l-5"></i>
                                            </div>
                                            <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#">Last 1 Month</a> <a class="dropdown-item" href="#">Last 6 Month</a> <a class="dropdown-item" href="#">Last 10 Month</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="dropdown custom-dropdown">
                                            <button type="button" class="btn btn-sm btn-outline-primary" data-toggle="dropdown">Last 7 days <i class="fa fa-angle-down m-l-5"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#">Last 1 Month</a> <a class="dropdown-item" href="#">Last 6 Month</a> <a class="dropdown-item" href="#">Last 10 Month</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="dropdown custom-dropdown">
                                            <button type="button" class="btn btn-sm btn-outline-primary" data-toggle="dropdown">Last 1 Hour <i class="fa fa-angle-down m-l-5"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#">Last 1 hour</a> <a class="dropdown-item" href="#">Last 2 hour</a> <a class="dropdown-item" href="#">Last 3 hour</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="dropdown custom-dropdown">
                                            <button type="button" class="btn btn-sm btn-primary" data-toggle="dropdown">Last 7 days <i class="fa fa-angle-down m-l-5"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#">Last 1 Month</a> <a class="dropdown-item" href="#">Last 6 Month</a> <a class="dropdown-item" href="#">Last 10 Month</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="dropdown custom-dropdown">
                                            <button type="button" class="btn btn-sm btn-primary" data-toggle="dropdown"><i class="ti-search m-r-5"></i> 3 AM <i class="fa fa-angle-down m-l-5"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#">6 AM</a> <a class="dropdown-item" href="#">9 AM</a> <a class="dropdown-item" href="#">12 AM</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="dropdown custom-dropdown">
                                            <button type="button" class="btn btn-sm btn-primary" data-toggle="dropdown"><i class="ti-calendar m-r-5"></i> March 20, 2018 &nbsp; To &nbsp;April 20, 2018 <i class="fa fa-angle-down m-l-5"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#">May 20, 2018 &nbsp; To &nbsp; June 20, 2018</a> <a class="dropdown-item" href="#">July 20, 2018 &nbsp; To &nbsp; August 20, 2018</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="dropdown custom-dropdown">
                                            <div data-toggle="dropdown"><i class="ti-more-alt"></i>
                                            </div>
                                            <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#">Option 1</a> <a class="dropdown-item" href="#">Option 2</a> <a class="dropdown-item" href="#">Option 3</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="dropdown custom-dropdown">
                                            <div data-toggle="dropdown"><i class="fa fa-ellipsis-v"></i>
                                            </div>
                                            <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#">Option 1</a> <a class="dropdown-item" href="#">Option 2</a> <a class="dropdown-item" href="#">Option 3</a>
                                            </div>
                                        </div>
                                    </div>
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