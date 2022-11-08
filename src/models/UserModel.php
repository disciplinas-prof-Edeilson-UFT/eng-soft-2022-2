<?php

namespace src\models;

require_once 'vendor/autoload.php';

class UserModel
{
    public function cadastro(){
        $cadastro=new UserData();

        $cadastro->cadastro();
    }
}

