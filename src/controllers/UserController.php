<?php

namespace src\controllers;

require_once 'vendor/autoload.php';

class UserController
{
    public function cadastro(){
        $cadastro=new UserModel();

        $cadastro->cadastro();
    }
}

