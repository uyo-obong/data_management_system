<?php
session_start();
require_once '../config.php';

class Project
{

    public function __construct()
    {
        $con = new Server;
        $this->link = $con->queryConnection();
    }

    
    public function createNewProject($firstName, $middleName, $lastName, $regNumber,                                         $defenceYear, $projectTopic, $seminarTopic)
    {

        $data = mysqli_query($this->link, "INSERT INTO students (first_name, middle_name, last_name, reg_number, defence_year, project_topic, seminar_topic) VALUES ('$firstName', '$middleName', '$lastName', '$regNumber', '$defenceYear', '$projectTopic', '$seminarTopic')");

        return $data;
    }

    public function updateProject($firstName, $middleName, $lastName, $regNumber,                                         $defenceYear, $projectTopic, $seminarTopic,                                           $studentId)
    {
       
        $update = mysqli_query($this->link, "UPDATE students SET first_name='$firstName', middle_name='$middleName', last_name='$lastName', reg_number='$regNumber', defence_year='$defenceYear', project_topic='$projectTopic', seminar_topic='$seminarTopic' WHERE id='$studentId' ");

        return $update;
    }
}
