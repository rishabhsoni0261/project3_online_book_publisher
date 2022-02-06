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
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Bar Color 1</h4>
                                <div class="text-center"><span class="bar-colours-1">5,3,9,6,5,9,7,3,5,2</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Bar Color 2</h4>
                                <div class="text-center"><span class="bar-colours-2">5,3,2,-1,-3,-2,2,3,5,2</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Bar Color 3</h4>
                                <div class="text-center"><span class="bar-colours-3">0,-3,-6,-4,-5,-4,-7,-3,-5,-2</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Pie Color</h4>
                                <div class="text-center"><span class="pie-colours-2">5,3,9,6,5</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Attributes</h4>
                                <div class="text-center row">
                                    <div class="col-lg-2"><span class="data-attr" data-peity='{ "fill": ["#13DAFE", "#eeeeee"],    "innerRadius": 10, "radius": 40 }'>1/7</span>
                                    </div>
                                    <div class="col-lg-2"><span class="data-attr" data-peity='{ "fill": ["#6164C1", "#eeeeee"], "innerRadius": 14, "radius": 36 }'>2/7</span>
                                    </div>
                                    <div class="col-lg-2"><span class="data-attr" data-peity='{ "fill": ["#F96262", "#eeeeee"], "innerRadius": 16, "radius": 32 }'>3/7</span>
                                    </div>
                                    <div class="col-lg-2"><span class="data-attr" data-peity='{ "fill": ["#99D683", "#eeeeee"],  "innerRadius": 18, "radius": 28 }'>4/7</span>
                                    </div>
                                    <div class="col-lg-2"><span class="data-attr" data-peity='{ "fill": ["#FFCA4A", "#eeeeee"],   "innerRadius": 20, "radius": 24 }'>5/7</span>
                                    </div>
                                    <div class="col-lg-2"><span class="data-attr" data-peity='{ "fill": ["indigo", "#eeeeee"], "innerRadius": 18, "radius": 20 }'>6/7</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Bar Chart</h4>
                                <div class="text-center"><span class="bar" data-peity='{ "fill": ["#13DAFE", "#6164C1"]}'>6,2,8,4,3,8,1,3,6,5,9,2,8,1,4,8,9,8,2,1</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Bar Chart</h4>
                                <div class="text-center"><span class="bar" data-peity='{ "fill": ["#F96262", "#f2f2f2"]}'>6,2,8,4,-3,8,1,-3,6,-5,9,2,-8,1,4,8,9,8,2,1</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Bar Chart</h4>
                                <div class="text-center"><span class="bar" data-peity='{ "fill": ["#99D683", "#4C5667"]}'>6,2,8,4,3,8,1,3,6,5,9,2,8,1,4,8,9,8,2,1</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Line Chart</h4>
                                <div class="text-center"><span class="peity-line" data-width="100%">6,2,8,4,3,8,1,3,6,5,9,2,8,1,4,8,9,8,2,1</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Line Chart</h4>
                                <div class="text-center"><span class="peity-line" data-width="100%">6,2,8,4,-3,8,1,-3,6,-5,9,2,-8,1,4,8,9,8,2,1</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Line Chart</h4>
                                <div class="text-center"><span class="peity-line" data-width="100%">6,2,8,4,3,8,1,3,6,5,9,2,8,1,4,8,9,8,2,1</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Pie 1</h4>
                                <div class="text-center"><span class="pie" data-peity='{ "fill": ["#f00", "#f2f2f2"]}'>5/8</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Pie 2</h4>
                                <div class="text-center"><span class="pie" data-peity='{ "fill": ["#6164C1", "#f2f2f2"]}'>250/650</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Pie 3</h4>
                                <div class="text-center"><span class="pie" data-peity='{ "fill": ["#F96262", "#f2f2f2"]}'>0.52/1.561</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Pie 4</h4>
                                <div class="text-center"><span class="pie" data-peity='{ "fill": ["#99D683", "#f2f2f2"]}'>1,4</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Pie 5</h4>
                                <div class="text-center"><span class="pie" data-peity='{ "fill": ["#FFCA4A", "#f2f2f2"]}'>226,134</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Pie 6</h4>
                                <div class="text-center"><span class="pie" data-peity='{ "fill": ["#4C5667", "#f2f2f2"]}'>0.52,1.041</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Donut 1</h4>
                                <div class="text-center"><span class="donut" data-peity='{ "fill": ["#f00", "#f2f2f2"]}'>5/8</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Donut 2</h4>
                                <div class="text-center"><span class="donut" data-peity='{ "fill": ["#6164C1", "#f2f2f2"]}'>250/650</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Donut 3</h4>
                                <div class="text-center"><span class="donut" data-peity='{ "fill": ["#F96262", "#f2f2f2"]}'>0.52/1.561</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Donut 4</h4>
                                <div class="text-center"><span class="donut" data-peity='{ "fill": ["#99D683", "#f2f2f2"]}'>1,4</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Donut 5</h4>
                                <div class="text-center"><span class="donut" data-peity='{ "fill": ["#FFCA4A", "#f2f2f2"]}'>226,134</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Donut 6</h4>
                                <div class="text-center"><span class="donut" data-peity='{ "fill": ["#4C5667", "#f2f2f2"]}'>0.52,1.041</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Live Update</h4>
                                <div class="text-center"><span class="updating-chart">5,3,9,6,5,9,7,3,5,2,5,3,9,6,5,9,7,3,5,2</span>
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

    <script src="./plugins/peity/jquery.peity.min.js"></script>
    <script src="./js/plugins-init/peitychart.init.js"></script>

</body>

</html>