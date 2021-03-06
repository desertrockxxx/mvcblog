<!DOCTYPE html>
<head>
	<meta charset="UTF-8">
	<title>Mr. Uta's Blog</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" type="text/javascript"></script>
</head>
<body>
<div class="container">
<header>
<nav class="navbar navbar-default ">
    <!-- Titel und Schalter werden für eine bessere mobile Ansicht zusammengefasst -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Navigation ein-/ausblenden</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo $_SERVER['PHP_SELF'] ;?>">Mr. Uta's Blog</a>
    </div>

    <!-- Alle Navigationslinks, Formulare und anderer Inhalt werden hier zusammengefasst und können dann ein- und ausgeblendet werden -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <!--<li class="active"><a href="index.php">Home <span class="sr-only">(aktuell)</span></a></li>-->
        <li><a href="index.php?aktion=add&save=true">Neuen Blog hinzufügen</a></li>
      </ul>
    
      <ul class="nav navbar-nav navbar-right">
        <li><a href="admin/login.php">Login</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
</nav>
</header>