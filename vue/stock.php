<?php
// Connexion à la base de données (remplacez les informations par celles de votre base de données)
$nom_serveur = "localhost";
$utilisateur = "root";
$motpass = "";
$mom_base_de_donne = "gestion_stock";

$connexion = new mysqli($nom_serveur, $utilisateur, $motpass, $mom_base_de_donne);

// Vérification de la connexion
if ($connexion->connect_error) {
    die("La connexion a échoué : " . $connexion->connect_error);
}

// Requête pour récupérer les informations sur les articles
$sql = "SELECT id, nom_article, quantite FROM stocks_articles";
$result = $connexion->query($sql);

if ($result->num_rows > 0) {
    echo "<table>";
    echo "<tr><th>ID</th><th>Nom de l'article</th><th>Quantité en stock</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["nom_article"] . "</td>";
        echo "<td>" . $row["quantite"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "Aucun article trouvé dans le stock.";
}

$connexion->close();
?>
