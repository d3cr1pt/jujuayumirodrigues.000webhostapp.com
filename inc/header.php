<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>CRUD com Bootstrap</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="<?php echo BASEURL; ?>js/jquery-3.3.1.min.js"></script>
        <script src="<?php echo BASEURL; ?>js/popper.min.js"></script>
        <script src="<?php echo BASEURL; ?>js/bootstrap.js"></script>
        <link rel="stylesheet" href="<?php echo BASEURL; ?>css/bootstrap.css">
        <style>
            body {
                padding-top: 50px;
                padding-bottom: 20px;
            }
        </style>
        <link rel="stylesheet" href="<?php echo BASEURL; ?>fonts/css/all.css">
        <script src="<?php echo BASEURL; ?>fonts/js/all.js"></script>
        <link rel="stylesheet" href="<?php echo BASEURL; ?>css/style.css">
        <script src="<?php echo BASEURL; ?>js/main.js"></script>
    </head>
    <body>
    <nav class="navbar navbar-expand-md navbar-light fixed-top bg-success" style="margin-bottom: 20px">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="<?php echo BASEURL; ?>">Início <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Produtos
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="<?php echo BASEURL; ?>produtos">Gerenciar produtos</a>
              <a class="dropdown-item" href="<?php echo BASEURL; ?>produtos/add.php">Adicionar produtos</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Clientes
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="<?php echo BASEURL; ?>customers">Gerenciar Clientes</a>
              <a class="dropdown-item" href="<?php echo BASEURL; ?>customers/add.php">Adicionar Cliente</a>
            </div>
          </li>
          </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li class="dropdown">	<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">
            Entrar<span class="caret"></span>
          </a>
                    <div class="dropdown-menu" id="formLogin" style="left: -25px; padding: 10px">
                        <div class="row">
                            <div class="container-fluid">
                                <form method="POST" action="<?php echo BASEURL; ?>login/logar.php">
                                    <div class="form-group">
                                        <label class="">Username</label>
                                        <input class="form-control" name="login" id="login" type="text">
                                    </div>
                                    <div class="form-group">
                                        <label class="">Password</label>
                                        <input class="form-control" name="senha" id="senha" type="password">
                                        <br class="">
                                    </div>
                                    <input type="submit" class="btn btn-success btn-sm" value="entrar" id="entrar" name="entrar">
                                </form>
                            </div>
                        </div>
                    </div>
                </li>
                <li><a href="<?php echo BASEURL; ?>login/cadastro.php">Registrar</a>
                </li>
            </ul>
      </div>
    </nav>
<main class="container" style="margin-top: 20px;">