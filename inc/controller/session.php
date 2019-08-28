<?php

class CustomSession
{

    public function TimeOut()
    {
        // set timeout period in seconds
        $inactive = 9;
        // check to see if $_SESSION['message'] is set
        if (array_key_exists('message', $_SESSION) && !empty($_SESSION['message'])) {
            $sessionLife = time() - is_numeric($_SESSION["message"]);
            if ($sessionLife >= $inactive) {
                unset($_SESSION["message"]);
            }
        }
    }
}

$session = new CustomSession;
