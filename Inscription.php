<?php
$db  = new mysqli ("localhost","root","","monprojet");
      if(isset($_POST['sub'])){
        if (!empty($_POST['nomcomplet']) and !empty($_POST['email']) and !empty($_POST['mdp'])){
          $nom = ($_POST['nomcomplet']);
          $email =($_POST['email']);
          $md = ($_POST['mdp']);
          $sq = "INSERT INTO utilisateurs VALUES ('$nom','$email','$md')";
  
    
          $res = $db->query($sq);
          }else{
        echo"veillez remplir";
      }
    }   
?>
<div class="container">
  <link href="style 2.css" rel="stylesheet">
      <!--Data or Content-->
      <div class="box-1">
          <div class="content-holder">
              <h2>S'inscrire</h2>
             
              
              
          </div>
      </div>

      
      <!--Forms-->
      <div class="box-2">
          <div class="login-form-container">
           <form method="post" action="">
            <img src="./PHO6fec33cc-8004-11e6-9c43-d957f3b3814a-805x453-modified.webp" alt="image de fond" class="background-img">
              <h1>Inscription</h1>
              <input type="text" placeholder="Nom Complet" name="nomcomplet" class="input-field">
          <br><br>
          <input type="email" placeholder="Email" name="email" class="input-field">
          <br><br>
          <input type="password" placeholder="Mot de Passe"name="mdp" class="input-field">
          <br><br>
          
          <form method="post" action="">
          <button class="signup-button" type="submit"name="sub">S'inscrire</button>
          </form>
          </div>




      </div>