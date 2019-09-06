<?php
require_once('../config.php');
require_once(DBAPI);
include(HEADER_TEMPLATE);
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.register {
  margin: auto;
  width: 50%;
  padding: 30px;
}
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: white;
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container#alo {
  padding: 16px;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
</style>
</head>
<body>
<br>
<br>
<br>
<form method="POST" action="cadastrar.php">
  <div class="container" >
    <h1>Registrar</h1>
    <p>Preencha o formulário para criar uma conta</p>
    <hr>

    <label for="email"><b>Email</b></label>
    <input name="login" placeholder="Enter Username" type="text" value="">

    <label for="psw"><b>Password</b></label>
    <input name="senha" placeholder="Enter password" type="password">

    <hr>
    <p>Ao criar uma conta você concorda com nossos <a href="#">Termos e Privacidade</a>.</p>

    <input type="submit" class="btn btn-primary btn-lg btn-block login-button" value="Registrar-se" id="cadastrar" name="cadastrar">
  </div>
</form>
</body>
</html>
<?php include(FOOTER_TEMPLATE); ?>
