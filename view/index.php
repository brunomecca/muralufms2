<!DOCTYPE html>
<html>
<head>
  <title>Mural UFMS</title>
  <link rel="stylesheet" type="text/css" href="../static/css/bootstrap.min.css" />
  <link rel="stylesheet" type="text/css" href="../static/css/style.css" />
  <link rel="icon" type="image/png" href="img/mural-ufms.png">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css"/>
  <script src="../static/js/jquery.js"></script>
    <script src="../static/js/bootstrap.min.js"></script>
</head>
<body>
<header>
<!-- navbar-->
<nav class="navbar navbar-inverse navbar-default">
  <div class="container">

    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">
        MURAL UFMS
      </a><!-- navbar-brand-->
    </div><!-- container-->

    <ul class="nav navbar-nav navbar-right">
    	<?php

        if($controller->usuario == True){
          echo "<li><a href='index.php?pg=login'><span class='glyphicon glyphicon-log-in'></span> Login</a></li>";
        }
        else
        {
          echo "<li><a href='#'>Bem vindo, ". $_SESSION['nome'] . "</a></li>
          <li><a href='index.php?pg=mensagem'><span class='glyphicon glyphicon-envelope'></span> Enviar Mensagem</a></li>
          <li><a href='index.php?pg=sair'>Sair</a></li>";
        }
      ?>
	</ul><!-- list -->
  </div><!-- container-->
</nav><!-- navbar -->
</header>

<footer>
  <div class="row">
    <div class="col-md-12">

      <div class='text-center'>

        ©Copyright Mural UFMS 

          <script>

            Date();

          </script>

        All rights reserved.

    </div>
  </div>
</footer>
</body>
</html>
