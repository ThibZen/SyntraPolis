<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin page</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" type="text/css" href={{ URL::asset('../vendor/almasaeed2010/adminlte/bower_components/bootstrap/dist/css/bootstrap.min.css') }}>
    <link rel="stylesheet" type="text/css" href={{ URL::asset('../vendor/almasaeed2010/adminlte/bower_components/Ionicons/css/ionicons.min.css') }}>
    <link rel="stylesheet" type="text/css" href={{ URL::asset('../vendor/almasaeed2010/adminlte/bower_components/font-awesome/css/font-awesome.min.css') }}>
    <link rel="stylesheet" type="text/css" href={{ URL::asset('../vendor/almasaeed2010/adminlte/dist/css/AdminLTE.min.css') }}>
    <link rel="stylesheet" type="text/css" href={{ URL::asset('../vendor/almasaeed2010/adminlte/dist/css/skins/skin-blue.css') }}>

    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    <!-- Main Header -->
    <header class="main-header">

        <!-- Logo -->
        <a href="index2.html" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>A</b>LT</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>Admin</b>LTE</span>
        </a>

        <!-- Header Navbar -->
        <nav class="navbar navbar-static-top" role="navigation">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>
        </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">

        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">

            <!-- Sidebar user panel (optional) -->
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info">
                    <p>Username Admin</p>
                    <!-- Status -->
                    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                </div>
            </div>

            <!-- /.search form -->

            <!-- Sidebar Menu -->
            <ul class="sidebar-menu" data-widget="tree">
                <li class="header">ADMIN</li>
                <!-- Optionally, you can add icons to the links -->
                <li class="active">
                    <a href='admin.movies.index'><i class="fa fa-link"></i> <span>Insert movie</span></a>
                </li>
                <li>
                    <a href=""><i class="fa fa-link"></i> <span>View/edit/delete</span></a>
                </li>

              </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="#">Link in level 2</a></li>
                        <li><a href="#">Link in level 2</a></li>
                    </ul>
                </li>
            </ul>
            <!-- /.sidebar-menu -->
        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Movie insert form
            </h1>
        </section>

        <!-- Main content -->
        <section class="content container-fluid">

            @include('includes.insertform')
            @inject('display','App\Http\Controllers\DBController')
            {{$display->showData()}}
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Main Footer -->
    <footer class="main-footer">
        <!-- To the right -->
        <div class="pull-right hidden-xs">
            {{--Anything you want--}}
        </div>
        <!-- Default to the left -->
        <strong>{{ date('Y') }} <a href="/">SyntraPolis</a>.</strong> All rights reserved.
    </footer>

</div>


<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 3 -->
<link rel="javascript" href={{ URL::asset('../vendor/almasaeed2010/adminlte/bower_components/jquery/dist/jquery.js') }}>
<!-- Bootstrap 3.3.7 -->
<link rel="javascript" href={{ URL::asset('../vendor/almasaeed2010/adminlte/bower_components/bootstrap/dist/js/bootstrap.js') }}>
<!-- AdminLTE App -->
<link rel="javascript" href={{ URL::asset('../vendor/almasaeed2010/adminlte/dist/js/adminlte.js') }}>

</body>
</html>