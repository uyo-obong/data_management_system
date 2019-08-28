<?php

session_start();
require_once "../config.php";
require_once "../controller/session.php";

class Auth
{

    public function __construct()
    {
        $con = new Server;
        $this->link = $con->queryConnection();
    }


    public function login($userName, $password)
    {


        if (isset($userName)) {

            $name = stripslashes($userName);

            $name = mysqli_real_escape_string($this->link, $name);

            $pass = stripslashes($password);

            $pass = mysqli_real_escape_string($this->link, $pass);

            $query = "SELECT * FROM admins WHERE username='$name'";

            $result = mysqli_query($this->link, $query);

            $confirmDetails = mysqli_num_rows($result);

            if ($confirmDetails !== 0) {

                while ($row = mysqli_fetch_assoc($result)) {
                    $username = $row["username"];
                    $password = $row["pass"];

                    if ($name ==  $username && md5($pass) == $password) {

                        $_SESSION['loggedin'] = TRUE;
                        $_SESSION['name'] = $username;
                        $_SESSION['id'] = $row['id'];
                        header("Location: /FPUCOM/index.php");
                    } else {
                        $_SESSION['message'] = "Oopz! Invalid Username or Password";
                        header("Location: /FPUCOM/src/login.php");
                    }
                }
            } else {
                $_SESSION['message'] = "Oopz! Invalid Username or Password";
                header("Location: /FPUCOM/src/login.php");
            }
        }
    }
}
