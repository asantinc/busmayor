<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Busmayor, El Bierzo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="../assets/css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
    </style>
    <link href="../assets/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="../assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
  
    
   <!-- <script src="/assets/js/inicio.js" type="text/javascript"></script> -->
    
    </head>
  
  <body>

    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="#">Busmayor</a>
          <div class="nav-collapse">
            <ul class="nav">
             <li <?= $page == 'inicio' ? ' class="active"' : '' ?>><a href="/">Inicio</a></li>
             <li <?= $page == 'agric' ? ' class="active"' : '' ?>><a href="/agricultura">Agricultura</a></li>
              <li <?= $page == 'ganad' ? ' class="active"' : '' ?>><a href="/ganaderia">Ganader&iacutea</a></li>
              <li <?= $page == 'galeria' ? ' class="active"' : '' ?>><a href="/galeria">Galer&iacutea</a></li>
              <li <?= $page == 'contacto' ? ' class="active"' : '' ?>><a href="/contacto">Contacto</a></li>
              
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>
