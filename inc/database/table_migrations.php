<?php

class Table
{

    /**
     * Admin table
     *
     * @return void
     */
    public function admins()
    {
        $admins = "CREATE TABLE admins (
        id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        username VARCHAR(30) NOT NULL,
        pass VARCHAR(250) NOT NULL,
        created_at TIMESTAMP,
        updated_at TIMESTAMP
        )";

        return $admins;
    }

    /**
     * Students table
     *
     * @return void
     */
    public function students()
    {
        // sql to create table
        $students = "CREATE TABLE students (
        id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        first_name VARCHAR(30) NOT NULL,
        middle_name VARCHAR(30) NOT NULL,
        last_name VARCHAR(30) NOT NULL,
        reg_number VARCHAR(80) NOT NULL,
        defence_year VARCHAR(30) NOT NULL,
        project_topic VARCHAR(250) NOT NULL,
        seminar_topic VARCHAR(250) NOT NULL,
        created_at TIMESTAMP,
        updated_at TIMESTAMP
        )";

        return $students;
    }

     
}
