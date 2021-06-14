<?php
$Err = "";
session_start();
if($_SESSION['logged'] == true){
?>
    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
        <title>ღეგღისთღათიონ</title>

    </head>
    <body>
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="https://www.101domain.com/images/flags/large/SITE.png" alt="" width="30" height="24"
                     class="d-inline-block align-text-top">
                <?php

                    echo "
                    <div class='dropdown'>
                      <a class='btn btn-secondary dropdown-toggle' style='padding: 3px 2rem 3px 2rem' href='#' role='button' id='dropdownMenuLink' data-bs-toggle='dropdown' aria-expanded='false'>
                        " .  $_SESSION['firstname'] . "
                      </a>
                        <ul class='dropdown-menu' aria-labelledby='dropdownMenuLink'>
                            <li><a class='dropdown-item text-danger' href='logout.php'>Logout</a></li>
                            <li><a class='dropdown-item text-primary btn disabled' href='dashboard.php'>Dashboard</a></li>   
                        </ul>
                    </div>";

}else{
    header('Location: index.php');
}
?>
            </a>
        </div>
    </nav>

<?php
if($_SESSION['verificated'] == 'guide'){
    echo "<p class='text-danger' style='text-align: center'> თქვენი ექაუნთი არ არის ვერიფიცირებული. </p>";
}
echo "<p class='text-danger'> $Err </p>";
?>