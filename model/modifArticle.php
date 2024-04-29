<?php
include 'connexion.php';

// Vérification des champs obligatoires
if (
    !empty($_POST['nom_article'])
    && !empty($_POST['categorie'])
    && !empty($_POST['quantite'])
    && !empty($_POST['prix_unitaire'])
    && !empty($_POST['date_fabrication'])
    && !empty($_POST['date_expiration'])
    && !empty($_POST['id'])
) {
    // Mise à jour de l'article
    $sql = "UPDATE article SET nom_article=?, categorie=?, quantite=?, prix_unitaire=?, 
            date_fabrication=?, date_expiration=? WHERE id=?";
    $req = $connexion->prepare($sql);
    
    $req->execute(array(
        $_POST['nom_article'],
        $_POST['categorie'],
        $_POST['quantite'],
        $_POST['prix_unitaire'],
        $_POST['date_fabrication'],
        $_POST['date_expiration'],
        $_POST['id']
    ));

    // Vérification du succès de la mise à jour
    if ($req->rowCount() != 0) {
        $_SESSION['message']['text'] = "Article modifié avec succès";
        $_SESSION['message']['type'] = "success";
    } else {
        $_SESSION['message']['text'] = "Rien n'a été modifié";
        $_SESSION['message']['type'] = "Avertissement";
    }
} else {
    $_SESSION['message']['text'] = "Une information obligatoire n'est pas renseignée";
    $_SESSION['message']['type'] = "danger";
}

// Redirection vers la page des articles
header('Location: ../vue/article.php');
?>
