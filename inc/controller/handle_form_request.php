<?php
session_start();
require_once 'student_project_core.php';

class Request
{

    public function __construct()
    {
        // if (isset($_POST['submit']))
        $this->studentId    = $_POST['student_id'];
        $this->firstName    = ucfirst($_POST['first_name']);
        $this->middleName   = ucfirst($_POST['middle_name']);
        $this->lastName     = ucfirst($_POST['last_name']);
        $this->regNumber    = strtoupper($_POST['reg_number']);
        $this->defenceYear  = $_POST['defence_year'];
        $this->projectTopic = $_POST['project_topic'];
        $this->seminarTopic = $_POST['seminar_topic'];
    }

    public function createProject()
    {
        $project = new Project;
        $data = $project->createNewProject($this->firstName, $this->middleName, $this->lastName, $this->regNumber, $this->defenceYear, $this->projectTopic, $this->seminarTopic);

        return $data;
    }

    public function updateProject()
    {
        $project = new Project;
        $update = $project->updateProject($this->firstName, $this->middleName, $this->lastName, $this->regNumber, $this->defenceYear, $this->projectTopic, $this->seminarTopic, $this->studentId);

        return $update;
    }
}

$request = new Request;

if (isset($_POST["create"])) {
    $request->createProject();
    $_SESSION["message"] = "Student details has been created successfully!";
    header("Location: http://localhost/FPUCOM/index.php");
    exit;
}
$request->updateProject();
$_SESSION["message"] = "Student details has been Updated successfully!";
header("Location: http://localhost/FPUCOM/index.php");
exit;
