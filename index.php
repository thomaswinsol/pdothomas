<?php
error_reporting(E_ALL);
ini_set('display_errors',1);
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
require_once 'includes/User.php';

if ($_SERVER['REQUEST_METHOD']=='POST'){
    $user = new User;
    $user->login($_POST['login'], $_POST['wachtwoord']);
}
?>

<html>
    
    <head>
       <title>Login</title> 
    </head>
    
    <body>
        <h1>Inloggen</h1>
        <form method="post" action="#">
            <input type="text" name="login">
            <input type="password" name="wachtwoord">
            <input type="submit" value="Inloggen">
        </form>
    </body>
</html>
