<?php
namespace Controller;

use Model\UsersModel;
use Widget\TokenGenerator;
/**
 * Login CONTROLLER
 * login only...

class Login extends Controller
{
    public function index(){
        $uObj = new UsersModel;
        $pwdHash = $uObj->getPwd($_JSON['user']);
        if (password_verify($_JSON['password'],$pwdHash)) {
           echo TokenGenerator::getToken();
        }
    }

    public function init()
    {
      
    }
}
*/