<?php
$servername = "localhost"; // Nom du serveur MySQL en local
$username = "root"; // Nom d'utilisateur MySQL
$password = ""; // Mot de passe MySQL
$dbname = "monprojet"; // Nom de la base de données MySQL

// Connexion à la base de données
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Vérification des erreurs de connexion
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "SELECT * FROM parts";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles.css">
    <link rel="stylesheet" href="./styl.css">
    <title>Annonces</title>
</head>
<body>
    <section >

        <div class="contenair">
            <header class="navbar">
            
                <div class="logo">
                    <img src="./image/img.png" width="80px"/>
                </div>
                <div class="search" >
                    <input id="searchbar" onkeyup="search_animal()" type="text"
                          name="search" placeholder="Search ...">
                          <input id="searchbar" onkeyup="search_animal()" type="text"
                          name="search" placeholder="Ville">
                </div>
                
                <nav>
                    <ul>
                        <li><a href="Accueil.html">Accueil</a></li>
                        <li><a href="biens.html">Mes Biens</a></li>
                        <!-- <li><a href="offres.html">Offres</a></li> -->
                        <li><a href="contact.html">Contact</a></li>
                        <li><a href="profile.html">Profile</a></li>
                        
                    </ul>
                   
                </nav>
                
               <button>Connexion</button>
               <button>Inscription</button>
                
             
            </header>
        </section>
    <div class="contenair">
        <h2>Les annonces</h2>
        <?php
          if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<div class='blog'>";
                echo "<a href='' class='blog-titre'>Le Numéro de part : " . $row["NumeroPart"] . "</a>";
                echo "<small class='blog-publication-date'>La surface : " . $row["surface"] . "</small>";
                echo "<p class='blog-author'>Le vendeur : " . $row["nomvendeur"] . "</p>";
                echo "</div>";
            }
          }
        ?>
    </div>
       
    
</body>
</html>