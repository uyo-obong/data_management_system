<?php
// if (session_id() === "") { session_start(); }
require_once "env.php";
require_once "database/connection.php";


class Server
{

    protected $link;

    /**
     * Query db connection
     *
     * @return void
     */
    public function queryConnection()
    {
        $this->link = new DataBase(DB_SERVER, DB_USER, DB_PASS, DB_DATABASE);
        return $this->link->dbConnect();
    }
}
