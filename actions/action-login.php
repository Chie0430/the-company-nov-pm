<?php
    include "../classes/User.php";

    # Create an object
    $user = new User;

    $user->login($_POST); //$_POST -- hold the data coming from the registration form
?>