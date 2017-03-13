<!DOCTYPE html>
<html>
    <head>
        <!-- Metas -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
        <!-- Para el Mapa -->
        <!-- scripting -->
        <!--<script src="main/js/maptooltip.js"></script>-->
        
        <!-- Mapbox -->
       <!-- 
        <script src='https://api.mapbox.com/mapbox-gl-js/v0.33.0/mapbox-gl.js'></script>
        <link href='https://api.mapbox.com/mapbox-gl-js/v0.33.0/mapbox-gl.css' rel='stylesheet' />
        -->
        <script src="bootstrap/js/vendor/bootstrap.min.js"></script>
        <script src="bootstrap/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
        <script src='https://api.mapbox.com/mapbox-gl-js/v0.25.1/mapbox-gl.js'></script>
        <!--stylesheets-->
        <link rel="stylesheet" href="main/css/main.css">
        <link rel="stylesheet" href="main/css/popup.css">
        <link rel="stylesheet" href="main/css/button.css">
        <link rel="stylesheet" href="main/css/map.css">
        <link rel="stylesheet" href="main/css/navbar.css">
        <link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <link href='https://api.mapbox.com/mapbox-gl-js/v0.25.1/mapbox-gl.css' rel='stylesheet' />

        <!--fonts & icons-->
        <link href="https://fonts.googleapis.com/css?family=Didact+Gothic|Josefin+Sans|Raleway|Roboto" rel="stylesheet">
        <link rel="stylesheet" href="main/css/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="main/css/font-awesome/css/font-awesome.css">
        <!-- End para el mapa -->
        
        
        <!-- Para el Slider -->
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
       <!--  <link href="/public/jquery-ui/jquery-ui.css" rel="stylesheet"> -->
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
       <!-- <link rel="stylesheet" href="/resources/demos/style.css"> -->
        

  <style>
      #custom-handle {
        width: 3em;
        height: 1.6em;
        top: 50%;
        margin-top: -.8em;
        text-align: center;
        line-height: 1.6em;
      }

      .sliderpos{
        margin-left: 11%;
        width: 98.5%;
      }

      #filtros-mapa{
          margin-left: 54%;
      }

  </style>

    <!-- Slider -->
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <!-- Fin Slider -->
        
        
        <title>
            @yield('title')
            
        </title>
            
    </head>
    
    <body>
        @yield('content')
        
    </body>
    
</html>