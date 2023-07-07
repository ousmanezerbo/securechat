<?php 
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: users.php");
  }
?>

<?php include_once "header.php"; ?>
<body>
  <div class="wrapper">
    <section class="form signup">
      <header>SecureChat</header>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="name-details">
          <div class="field input">
            <label>Prénom</label>
            <input type="text" name="prenom" placeholder="Prénom" required>
          </div>
          <div class="field input">
            <label>Nom</label>
            <input type="text" name="nom" placeholder="Nom" required>
          </div>
        </div>
        <div class="field input">
          <label>Adresse Email</label>
          <input type="text" name="email" placeholder="Entrez votre email" required>
        </div>
        <div class="field input">
          <label>Mot de passe</label>
          <input type="password" name="password" placeholder="Entrez un nouveau mot de passe" required>
          <i class="fas fa-eye"></i>
        </div>
        <div class="field image">
          <label>Choisir une image</label>
          <input type="file" name="image" accept="image/x-png,image/gif,image/jpeg,image/jpg" required>
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="Continuer">
        </div>
      </form>
      <div class="link">Déja inscrit? <a href="login.php">Se connecter</a></div>
    </section>
  </div>

  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/signup.js"></script>

</body>
</html>
