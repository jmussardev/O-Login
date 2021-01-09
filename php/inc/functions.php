<?php 
include 'data/users.php';

function isUserConnected() {

    return isset($_SESSION['connectedUser']);
    
}

function getFlashMessage() {
    $flashMessage = isset($_SESSION['flashMessage']) ? $_SESSION['flashMessage'] : "";

    unset($_SESSION['flashMessage']);

    return $flashMessage;
}

function disconnectUser() {

session_unset();

header('Location:index.php'); 

exit();
}


function getUser($username) {
    return $users[$username]['data']; 
}

function connectUser() {
    return  $_SESSION['connectedUser'] = $users[$username]['data'];
}

function getConnectedUser() {
    return $_SESSION['connectedUser'] ;
}