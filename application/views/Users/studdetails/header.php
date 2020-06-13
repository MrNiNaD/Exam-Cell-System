<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <style>
      /* .bk{
        background-color: 0;
        text-align: left;
        margin-top:50px;
        margin-left:50px;
      } */
      /* .footer {
         position: fixed;
         left: 0;
         bottom: 0;
         width: 100%;
         background-color: 0;
         color: black;
         text-align: center;
         font-family: "Comic Sans MS", cursive, sans-serif;
      } */
    </style>
    <title>Article List</title>
    <link href="<?= base_url("Assets/css/bootstrap.min.css")  ?>" rel="stylesheet">
    <?= link_tag("Assets/css/bootstrap.min.css") ?>
  </head>
  <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
          <a class="navbar-brand" href="index.php">AECS</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarColor01">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link" href="<?php echo base_url('index.php') ?>">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('Welcome/slogin1') ?>">Student Login</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('Welcome/alogin') ?>">Admin Login</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('Welcome/stlogin') ?>">Staff Login</a>
              </li>
            </li>

            </ul>

          </div>
        </nav>
