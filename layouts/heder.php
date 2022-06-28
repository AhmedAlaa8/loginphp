<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <title>Hello my name is Ahmed alaa</title>

  <style>
    .asas {
      /* margin-top: 10em;
  margin-left: 29%;
  border-style: dotted; 
  width: 35%;
  padding:50px
  border: rgb(57, 54, 236) dotted 1px; */
    }
  </style>


</head>

<body>
  <div>

    <nav class="navbar navbar-light bg-light">
      <form class="container-fluid justify-content-start">
        <button class="btn btn-outline-success me-2" class="dropdown-item" type="button"><a class="text-decoration-none" href="./index.php">Home</a></button>

        <?php

        if (!isset($_SESSION['email'])) {
        ?>
          <button class="btn btn-sm btn-outline-secondary" class="dropdown-item" type="button"><a class="text-decoration-none" href="./login.php">login</a></button>

        <?php
        }


        ?>


        <?php

        if (isset($_SESSION['email'])) {
        ?>
          <button class="btn btn-sm btn-outline-secondary" style="margin-left: 1em;" class="dropdown-item" type="button"><a class="text-decoration-none" href="./logout.php">logout</a></button>

        <?php
        }


        ?>
      </form>
    </nav>

  </div>