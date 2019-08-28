<?php
include "inc/config.php";


class View
{
    public function __construct()
    {
        $con = new Server;
        $this->link = $con->queryConnection();
    }

    public function listProject()
    {
        $query = "SELECT * FROM students ORDER BY created_at DESC";
        $result = mysqli_query($this->link, $query);

        return $result;
    }

    public function fullName($row)
    {

        $fullName = $row['last_name'] . ', ' . $row['first_name'] . ' ' . $row['middle_name'];

        return $fullName;
    }
}

$view = new View;
$result = $view->listProject();

