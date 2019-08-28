<?php
if (!isset($_SESSION)) {
    session_start();
}
?>
<html>

<head>
    <title>Computer Science department - Students database</title>

    <!--Data Tables -->
    <link href="assets/plugins/bootstrap-datatable/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css">
    <link href="assets/plugins/bootstrap-datatable/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="assets/css/material.css" type="text/css">
</head>

<body class="index-page sidebar-collapse">
    <nav class="navbar navbar-transparent navbar-color-on-scroll fixed-top navbar-expand-lg" color-on-scroll="100" id="sectionsNav">
        <div class="container">
            <div class="navbar-translate">
                <a class="navbar-brand" href="https://demos.creative-tim.com/material-kit/index.html">
                    <img src="assets/img/fpu/fpu-logo.png" width="50" height="50" alt="Computer Science">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="navbar-toggler-icon"></span>
                    <span class="navbar-toggler-icon"></span>
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto">
                    <li class="dropdown nav-item">
                        <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                            <?php echo "Hi! " . $_SESSION['name']; ?>
                        </a>
                        <div class="dropdown-menu dropdown-with-icons">
                            <a href="index.php" class="dropdown-item">
                                Project Defence
                            </a>

                            <a href="seminar.php" class="dropdown-item">
                                Seminar Defence
                            </a>

                            <a href="inc/auth/logout.php" class="dropdown-item">
                                Sign Out
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="page-header header-filter clear-filter purple-filter" data-parallax="true" style="background-image: url('./assets/img/fpu/fpu-el.jpeg');">
        <!-- <div class="container">
            <div class="row">
                <div class="col-md-8 ml-auto mr-auto">
                    <div class="brand">
                        <h1>COMPUTER SCIENCE DEP.</h1>
                        <h3>Students Database For Saving Project Topics.</h3>
                    </div>
                </div>
            </div>
        </div> -->
    </div>

    <!-- All Page Linking Here -->
    <?php 
    include_once "create_student_project.php";
    ?>