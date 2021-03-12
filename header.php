<?php
function print_header($css) {
  echo <<<_HTML
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Studenote</title>
  <link rel="stylesheet" href="css/$css.css" />
</head>

<body>

<nav class="navbar navbar-expand-md text-dark bg-light sticky-top py-4">
    <div class="container">

      <!--   Navbar brand    -->
      <a href="index.php" class=" navbar-brand text-dark text-uppercase">Study note</a>


      <!--  Navbar toggler  -->
      
      <span class="navbar-toggler"  data-bs-toggle="collapse" data-bs-target="#menu" aria-controls="menu" aria-expanded="false" aria-label="Toggle navigation">
      <img src="./node_modules/bootstrap-icons/icons/list.svg" alt="List Navbar">
      </span>



      <!--Options to be toggled -->

      <div class="collapse navbar-collapse justify-content-end" id="menu">
        <ul class="navbar-nav">
          <li class="nav-item btn"> <a href="auth.php?login" class="text-reset"> Login</a></li>
          <li class="nav-item"> <a href="auth.php" class="btn btn-primary mx-3 d-block mx-auto"> Signup</a></li>
        </ul>
      </div>
    </div>
  </nav>
_HTML;
}