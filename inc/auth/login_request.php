<?php

require_once "login_core.php";


class AuthRequest
{

    public function __construct()
    {
        $this->userName = $_POST['user_name'];
        $this->password = $_POST['password'];
    }

    public function loginRequest()
    {
        $login = new Auth;
        $request = $login->login($this->userName, $this->password);
        return $request;
    }
}

$auth = new AuthRequest;
$auth->loginRequest();

