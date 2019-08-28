<?php

class Seeder
{

    /**
     * Superadmin details
     *
     * @return void
     */
    public function superAdmin()
    {
        $pass = md5('computer');

        $admin = "INSERT INTO admins (username, pass)
        VALUES ('Admin', '$pass')";

        return $admin;
    }
}
