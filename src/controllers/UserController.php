<?php

namespace src\controllers;

use src\models\UserModel;

require_once 'vendor/autoload.php';

class UserController
{
    public function cadastro_user(){
        if(isset($_POST['opcao'])){
            if($_POST['opcao'] == 'cadastro'){
                $nome_usuario = $_POST['nome'];
                $cpf_usuario = $_POST['cpf'];
                $cadastro=new UserModel();
                $cadastro->cadastro_usuario($nome_usuario, $cpf_usuario);
            }
        }
        
    }
}

