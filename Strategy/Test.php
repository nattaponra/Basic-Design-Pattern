<?php

require_once 'User.php';

    $user = User::Instance();
    $user->setFirstName("Nattapon");
    $user->setLastName("Rakthong");

    echo $user->getFirstName();
    echo $user->getLastName();