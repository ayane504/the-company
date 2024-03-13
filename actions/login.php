<?php 

include "../classes/User.php";

// Creat an obj
$user = new User;

// Call the method
$user->login($_POST);

// $_POST - holds the data from the form views > index.php which is login page
/*
    $_POST['user_name'];
    $_POST['password'];
*/

?>