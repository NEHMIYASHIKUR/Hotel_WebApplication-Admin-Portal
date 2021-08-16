<?php

require_once('lib/database.php');
$database = new Database();

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel= "stylesheet" href="css/bootstrap.min.css">

    <title>Hotel Project</title>
  </head>
  <body">
  
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Hotel Website</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link enabled" href="home.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link enabled" href="add2.php" tabindex="-1" aria-disabled="true">Add a Hotel</a>
      </li>
    </ul>
  </div>
  
    <form class="form-inline" action="searchhotel.php" method="POST">
    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="searchinput">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
  </form>
  
           <a class="nav-link enabled" href="process.php?action=logout">LOG OUT <span class="sr-only">(current)</span></a>

  
</nav>

    <div class="container">
