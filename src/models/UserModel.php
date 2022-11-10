<?php

namespace src\models;

use src\database\UsuarioData;

require_once 'vendor/autoload.php';

class UserModel
{
    public function cadastro_usuario($nome, $cpf){
        $cadastro=new UserData();
        $cadastro->cadastro($nome, $cpf);
    }
}

