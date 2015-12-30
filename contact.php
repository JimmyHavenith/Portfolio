<?php
  session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Jimmy Havenith | Contact</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/main.css" media="screen" title="no title" charset="utf-8">
    <link href='https://fonts.googleapis.com/css?family=Lato:300' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Condensed' rel='stylesheet' type='text/css'>
  </head>
  <body>
    <section class="pageContact">
      <div class="entete">
        <a href="index.html">
          <img class="logoPetit" src="img/LOGO.png" width="80" height="69" alt="Logo personnel de Jimmy Havenith"/>
        </a>
        <h1>Travaillons ensemble.</h1>
        <h2>J'accepte actuellement toutes formes de projets</h2>
      </div>
      <div class="formulaire">
        <?php if(array_key_exists('errors', $_SESSION)): ?>
          <div class="alert-danger">
            <?= implode('<br>', $_SESSION['errors']); ?>
          </div>
        <?php endif; ?>
        <?php if(array_key_exists('success', $_SESSION)): ?>
          <div class="alert-success">
            J'ai bien reçu votre email, je vous répondrais dés que possible !
          </div>
        <?php endif; ?>
        <form class="formContact" action="post_contact.php" method="post">
          <div class="form-group">
            <label for="inputname">Nom</label>
            <input type="text" name="name" id="inputname" value="<?= isset($_SESSION['inputs']['name']) ? $_SESSION['inputs']['name'] : ''; ?>">
          </div>
          <div class="form-group">
            <label for="inputemail">Email</label>
            <input type="text" name="email" id="inputemail" value="<?= isset($_SESSION['inputs']['email']) ? $_SESSION['inputs']['email'] : ''; ?>">
          </div>
          <div class="form-group">
            <label for="inputmessage">Message</label>
            <textarea id="inputmessage" name="message" rows="8" cols="40"><?= isset($_SESSION['inputs']['message']) ? $_SESSION['inputs']['message'] : ''; ?></textarea>
          </div>
          <div class="form-group">
            <button type="submit" class="btnSubmit">Envoyer</button>
          </div>
        </form>
      </div>
    </section>
  </body>
</html>

<?php
unset($_SESSION['inputs']);
unset($_SESSION['success']);
unset($_SESSION['errors']);
?>
