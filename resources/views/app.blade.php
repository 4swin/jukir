<!DOCTYPE html>
<html lang="en">

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Social Parking">
        <meta name="author" content="Tukang Parkir">

        <title>Parkirin - Indonesia's Social Parking</title>

        <!-- Bootstrap Core CSS -->
        <link rel="stylesheet" type="text/css" href="{{ asset("css/bootstrap.min.css") }}">
        
        <!-- Custom CSS -->
        <link rel="stylesheet" type="text/css" href="{{ asset("css/stylish-portfolio.css") }}">

        <!-- Custom Fonts -->
        <link rel="stylesheet" type="text/css" href="{{ asset("font-awesome/css/font-awesome.min.css") }}">
        <link rel="stylesheet" type="text/css" href="{{ asset("http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic") }}">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        
        <script src="{{ asset("js/bootstrap.min.js") }}"></script>
    </head>
    <body>
        @yield('content')
    </body>
</html>