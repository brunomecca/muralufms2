<!DOCTYPE html>
<html>
<head>
  <title>Mural UFMS</title>
  <link rel="stylesheet" type="text/css" href="static/css/bootstrap.min.css" />
  <link rel="stylesheet" type="text/css" href="static/css/style.css" />
  <link rel="icon" type="image/png" href="static/img/mural-ufms.png">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css"/>
  <script src="static/js/jquery.js"></script>
    <script src="static/js/bootstrap.min.js"></script>
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

        if(!isset($_SESSION['usuario'])){
          echo "<li><a href='?page=login'><span class='glyphicon glyphicon-log-in'></span> Login</a></li>";
        }
        else
        {
          if(isset($_SESSION) && $_SESSION['admin'] == True)
            echo "<li><a href='?page=admin'>Zona do ADM, " . $_SESSION['nome'] . "</a></li>";
          else
            echo "<li><a href='#'>Bem vindo, ". $_SESSION['nome'] . "</a></li>";
          echo "<li><a href='?page=mensagens'><span class='glyphicon glyphicon-envelope'></span> Enviar Mensagem</a></li>";
          echo "<li class=\"dropdown\">
          <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Painel <span class=\"caret\"></span></a>
          <ul div class=\"dropdown-menu menu-navbar\">";
            echo "<li><a href='?page=minhasmensagens'><span class = 'glyphicon glyphicon-envelope'></span> Minhas Mensagens </a></li>";
            echo "<li><a href='?page=minhasmensagens'><span class = 'glyphicon glyphicon-user'></span> Meus dados </a></li>";
            echo "<li><a href='?page=sair'><i class=\"fa fa-sign-out\" aria-hidden=\"true\"></i> Sair</a></li>";
          echo "</ul>";

        }
      ?>
	</ul><!-- list -->
  </div><!-- container-->
</nav><!-- navbar -->
</header>