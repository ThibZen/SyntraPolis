<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin page</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href={{ URL::asset('/css/ionicons.css') }}>
    <link rel="stylesheet" type="text/css" href={{ URL::asset('/css/AdminLTE.css') }}>
    <link rel="stylesheet" type="text/css" href={{ URL::asset('/css/skins/skin-red.css') }}>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-red sidebar-mini">
<div class="wrapper">

    <!-- Main Header -->
    <header class="main-header">

        <!-- Logo -->
        <a href="{{route('admin')}}" class="logo">
            <span class="logo-mini"><b>S</b>P</span>
            <span class="logo-lg"><b>Syntra</b>Polis</span>
        </a>

        <nav class="navbar navbar-static-top" role="navigation">
        <a class="logout" href="{{route('logout')}}"> Logout </a>
        <a class="home" href="{{route('home')}}"> Home </a>
        </nav>
    </header>
    <aside class="main-sidebar">

        <section class="sidebar">

            <ul class="sidebar-menu" data-widget="tree">
                <li class="header">ADMIN</li>
                <li class="">
                    <a href='{{route('data')}}'><i class="fa fa-link"></i> <span>View data</span></a>
                </li>
                <li>
                    <a href='{{route('insertform')}}'><i class="fa fa-link"></i> <span>Insert movie</span></a>
                </li>

            </ul>
        </section>
    </aside>

    <div class="content-wrapper">
        <section class="content container-fluid">
            @yield('content')
        </section>
    </div>

    <footer class="main-footer">
        <div class="pull-right hidden-xs">
        </div>
        <strong>{{ date('Y') }} <a href="/">SyntraPolis</a>.</strong> All rights reserved.
    </footer>

</div>


<!-- REQUIRED JS SCRIPTS -->


<link rel="javascript" href={{ URL::asset('../vendor/almasaeed2010/adminlte/bower_components/jquery/dist/jquery.js') }}>
<link rel="javascript" href={{ URL::asset('../vendor/almasaeed2010/adminlte/bower_components/bootstrap/dist/js/bootstrap.js') }}>
<link rel="javascript" href={{ URL::asset('../vendor/almasaeed2010/adminlte/dist/js/adminlte.js') }}>

</body>
</html>