<?php
  session_start();

  include 'inc/functions.php';

  if (isUserConnected()) {
    header('Location: index.php');
    exit();
  }

  include 'inc/header.tpl.php';
  include 'inc/login.tpl.php';
  include 'inc/footer.tpl.php';

    
     