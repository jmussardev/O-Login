<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>oLogin</title>
  <link rel="stylesheet" href="../css/reset.css">
  <link rel="stylesheet" href="../css/style.css">
  <!-- Décommentez la feuille de styles suivantes à vos risques et périls... -->
  <!-- <link rel="stylesheet" href="../css/f0f.css"> -->
</head>
<body>
  <div id="app">
    <header id="header">
      <h1 id="app-title"><a href="#">oLogin</a></h1>
      <nav id="nav">
        <a href="./">Accueil</a>
        <a href="#">À propos</a>
        <a href="#">FAQ</a>
        <a href="#">Contact</a>
        <?php if (isUserConnected()): ?>
             <a href="./profil.php">Profil</a>
             <a href="logout.php">Logout</a>
             Bonjour <?= $_SESSION['connectedUser']['username'];?>
        <?php else: ?>
             <a href="login.php">Login</a>
        <?php endif; ?>

      </nav>
    </header>

    <?php $flashMessage = getFlashMessage(); ?>
    <?php if (!empty($flashMessage)) : ?>
        <div id="flash-message"><?= $flashMessage ?></div>
    <?php endif; ?>