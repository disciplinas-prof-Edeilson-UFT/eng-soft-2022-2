<?php

use src\controllers\UserController;

require_once 'vendor/autoload.php';


?>
<html>
<head>
<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">
	<title>Cadastro</title>
	<link rel="stylesheet" type="text/css" href="./views/css/open-iconic-bootstrap.css">
	<link rel="stylesheet" href="./views/css/bootstrap.css">
    <link rel = "stylesheet" href = "./views/css/Login.css">
   
</head>
<body>

    <div class="container">
    
        <img src = "https://uploaddeimagens.com.br/images/004/064/618/thumb/user.png?1666047148">

        <form method = "POST">
            <input type = "nome" placeholder = "nome">
            <input type = "cpf" placeholder = "cpf">
	    <input type="hidden" name="opcao" value="cadastro">
            <input type="submit" name="enviar" value="Enviar" class="btn btn-outline-secondary btn-lg btn-block mb-5">
        </form>
    </div>
</body>
</html>
