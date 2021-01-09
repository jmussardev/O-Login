<?php 
session_start();

include 'inc/functions.php';
include  'inc\data\users.php';

//Si on voulait aller plus loin, on pourrait vérifier que chaque donnée est présente
// - username
// - password
if(!empty($_POST)) {
    // Récupération des infos envoyées par le formulaire
    $username = isset($_POST['username']) ? $_POST['username'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';

    // Est-ce-que l'utilisateur existe ?
    if (array_key_exists($username, $users)) {
 
        // Est ce que le mot de passe est correct ?
        if (password_verify($password,$users[$username]['pass'] )) {
            // Je suis identifié
            $_SESSION['flashMessage'] = "Identification réussi";
            //On connecte l'utilisateur (on place ses données en SESSION)
            $_SESSION['connectedUser'] = $users[$username]['data'];
            //On rajoute le nom de l'utilisateur
            $_SESSION['connectedUser']['username'] = $username;
         
            header('Location: index.php');
            exit();
        }  
    } else {
        echo "cet utilisateur n'existe pas";
    }
}   