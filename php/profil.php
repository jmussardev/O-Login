<?php
session_start();


include 'inc/functions.php';
include  'inc/data/users.php';

if(isUserConnected() == false) {
    header('Location: index.php');
}





include 'inc/header.tpl.php';
include 'inc/profil.tpl.php';
include 'inc/footer.tpl.php';