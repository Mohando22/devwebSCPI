
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
<?php

// Affichage des articles
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<div class='article'>";
        echo "<p>" . $row["NumeroPart"] . "</p>";
        echo "<p>" . $row["surface"] . "</p>";
        echo "<p>" . $row['nomvendeur'] . "</p>";
        echo "</div>";
    }
} else {
    echo "Aucun article trouvé.";
}
?>