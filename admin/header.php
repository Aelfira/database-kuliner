<?php 
$url = 'http://localhost/database-kuliner';
session_start();
if(!isset($_SESSION['admin']))
{
    header('location: login.php');
}
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>ADMIN</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />

</head>
<body>
<div class="wrapper">
    <div class="sidebar" data-color="orange" data-image="assets/img/sidebar-5.jpg">

    <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->

        <div class="sidebar-wrapper">
            <div class="logo">
                <a href="<?= $url ?>/admin" class="simple-text">
                    ADMIN
                </a>
            </div>

            <ul class="nav">
                <li>
                    <a href="<?= $url ?>">
                        <p><i class="fa fa-dashboard"></i>
                        Dashboard</p>
                    </a>
                </li>
                <li>
                    <a href="data-kuliner.php">
                        <p><i class="fa fa-shopping-basket"></i>
                          Data Kuliner</p>
                    </a>
                </li>
                <li>
                    <a href="data-kategori.php">
                        <p><i class="fa fa-shopping-basket"></i>
                          Kategori</p>
                    </a>
                </li>
                <li>
                    <a href="data-admin.php">
                        <p><i class="fa fa-users"></i>
                        Data Admin</p>
                    </a>
                </li>
                <li>
                    <a href="data-user.php">
                        <p><i class="fa fa-user"></i>
                        Data User</p>
                    </a>
                </li>
                <li>
                    <a href="krisar.php">
                        <p><i class="fa fa-envelope"></i>
                        Kritik dan saran</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
<div class="main-panel">
    <nav class="navbar navbar-default navbar-fixed">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?= $url ?>/admin">Dashboard</a>
            </div>
            <div class="collapse navbar-collapse">

                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="logout.php">
                            <p>Log out</p>
                        </a>
                    </li>
                    <li class="separator hidden-lg hidden-md"></li>
                </ul>
            </div>
        </div>
    </nav>