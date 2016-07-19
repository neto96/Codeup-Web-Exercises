<?php
function clearSession()
{
    session_unset();
    session_regenerate_id(true);
}

session_start();

require_once 'functions.php';

if (inputHas('logout')){
    clearSession();
    header('Location: login.php');
}
