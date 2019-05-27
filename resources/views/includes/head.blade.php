<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="keywords" content="SyntraPolis,Syntra,Full Stack Developer, Films">
    <meta name="description" content="Welcome to SyntraPolis">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href={{ URL::asset('/css/content.css') }}>
    @yield('extra-css')
    <title>SyntraPolis - @yield('title')</title>
</head>