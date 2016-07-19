<?php
session_start();

if ($_SESSION['logged_in_user'] == false)
    header('Location: login.php');

?>
<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        body {
            background-image: url("/img/funky.gif");
            background-size: cover;
        }
    </style>
</head>
<body>
<div class="jumbotron">
    <div class="container">
        <h1 class="col-md-8 col-md-offset-4">AUTHORIZED</h1>
    </div>
</div>
<form method="POST" action="http://codeup.dev/logout.php">
    <button type="submit" name="logout" value="logout">Logout</button>
</form>
<img src="img/woohoo.gif" class="col-md-6 col-md-offset-3">
</body>
</html>