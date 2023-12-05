<?php
    include "../classes/User.php";

    $user = new User;

    $user->store($_POST); //$_POST -- hold the data coming from the registration form
?>