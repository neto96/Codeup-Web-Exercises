<?php
session_start();
require_once 'functions.php';
$username = inputHas('username') ? htmlspecialchars(strip_tags(inputGet('username'))) : '';
$password = inputHas('password') ? htmlspecialchars(strip_tags(inputGet('password'))) : '';

if (($username == 'guest') && ($password == 'password')) {
    $_SESSION['logged_in_user'] = session_id();
    header('Location: authorized.php');
    exit;
} elseif (($username !== 'guest' && $username !== '') || ($password !== 'password' && $password !== '')) {
    $message = "Login failed, please try again";
    $image = "/img/doh.gif";
}

if (isset($_SESSION['logged_in_user'])) {
    header('Location: authorized.php');
    exit;
}
?>
<!doctype html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <title>Document</title>
    <style>
        body {
            background-image: url("/img/bwbrick.jpg");
        }
        .col-md-4 {
            margin-top: 10%;
        }
    </style>
</head>
<body>
<div class="col-md-4 col-md-offset-4">
    <div class="login-panel panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Please Sign In</h3>
        </div>
        <div class="panel-body">
            <?php if (isset($message)) : ?>
            <div class="alert alert-danger" role="alert">
                <h1><?= escape($message); ?></h1>
            </div>
            <?php endif; ?>
            <form method="POST" role="form">
                <fieldset>
                    <div class="form-group">
                        <input class="form-control" placeholder="Username" name="username" type="username" autofocus="">
                    </div>
                    <div class="form-group">
                        <input class="form-control" placeholder="Password" name="password" type="password" value="">
                    </div>
                    <input type="submit" name="submit" id="submit" value="Login" class="btn btn-primary pull-right">
                </fieldset>
            </form>
            <?php if (isset($image)) : ?>
            <img src="<?= escape($image); ?>" class="col-md-6 col-md-offset-3">
            <?php endif; ?>
        </div>
    </div>
</div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</body>
</html>
