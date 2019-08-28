<?php


require_once "admin_seeder.php";
require_once "table_migrations.php";


class DataBase
{
    private $server; //Db host
    private $username; // Db username
    private $password; // Db password
    private $dbname; // Db name
    public $link; 

    /**
     * construct method
     *
     * @param mixed $server
     * @param mixed $username
     * @param mixed $password
     * @param mixed $dbname
     */
    public function __construct($server, $username, $password, $dbname)
    {
        $this->server = $server;
        $this->username = $username;
        $this->password = $password;
        $this->dbname = $dbname;
    }


    /**
     * Create connection for the database
     *
     * @return void
     */
    public function dbConnect()
    {
        // Create connection
        $this->link = new mysqli($this->server, $this->username,  $this->password, $this->dbname);

        $table = $this->tableMigrations();

        // Create superadmin login once the table has been created
        if ($table)
            $this->seeder();

        // Check connection
        if (mysqli_connect_error()) {
            echo mysqli_connect_error();
        }

        return $this->link;
    }

    /**
     * Create table if it doesn't have
     *
     * @return void
     */
    public function tableMigrations()
    {

        $table = new Table;

        for ($query = 0; $query <= 1; $query++) {
            $query = $this->link->query($table->admins());
            $query = $this->link->query($table->students());
            break;
        }

        return $query;
    }

    /**
     * Seed the superadmin login details
     *
     * @return void
     */
    public function seeder()
    {
        $seeder = new Seeder;

        return $this->link->query($seeder->superAdmin());
    }
}
