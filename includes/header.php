<?php
     include 'includes/dbconfig.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Author: Jake Strow     Class/section: CIT351-01 -->
    <!-- REQUIRED meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Boostrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
    <title>
        <?php
            echo "$title";
        ?>
    </title>
</head>
 <body data-spy="scroll" data-target="#navScrollspy">
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-dark">
      <a class="navbar-brand" href="index.php">Simple Guides to AWS</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mr-auto" id="navScrollspy">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="gettingStarted.php">Getting Started</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="services.php">AWS Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="guides.php">Guides</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="faq.php">FAQ</a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <a class="nav-link" href="https://aws.amazon.com/" target="_blank"><i class="fab fa-aws fa-lg text-warning"></i></a>
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </nav>