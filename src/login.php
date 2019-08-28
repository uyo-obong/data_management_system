<?php
session_start();
require_once "../inc/controller/session.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>Computer Science department - Students database</title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />

  <!-- CSS Files -->
  <link href="../assets/css/material.css" rel="stylesheet" />

</head>

<body class="login-page sidebar-collapse">

  <div class="page-header header-filter" style="background-image: url('../assets/img/bg7.jpg'); background-size: cover; background-position: top center;">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-6 ml-auto mr-auto">

          <div class="card">

            <h3 class="card-title text-center">Admin Login</h3>


            <form class="form" method="post" action="../inc/auth/login_request.php">
              <div class="card-body">
                <div class="input-group">
                  <input type="text" class="form-control" name="user_name" placeholder="User Name">
                </div>

                <div class="input-group">
                  <input type="password" class="form-control" name="password" placeholder="Password">
                </div>

                <div class="error-text">
                  <?php
                  if (array_key_exists('message', $_SESSION) && !empty($_SESSION['message']))
                    echo  $_SESSION["message"];

                  $session->TimeOut();
                  ?>

                </div>

                <div class="space-20"></div>

                <div class="form-group text-center">
                  <button type="submit" class="btn btn-primary">Login</button>
                </div>

              </div>
            </form>
          </div>
        </div>
      </div>
    </div>



  </div>
  <?php include "footer.php"; ?>