<?php
include 'connexion.php';
if (
    !empty($_POST['ID'])
    && !empty($_POST['EMPLOYEE_ID'])
    && !empty($_POST['USERNAME'])
    && !empty($_POST['PASSWORD'])
) {

$sql = "INSERT INTO utilisateur(ID,EMPLOYEE_ID, USERNAME, PASSWORD)
        VALUES(?, ?, ?, ?)";
    $req = $connexion->prepare($sql);
    
    $req->execute(array(
        $_POST['ID'],
        $_POST['EMPLOYEE_ID'],
        $_POST['USERNAME'],
        $_POST['PASSWORD']
    ));
    
    if ( $req->rowCount()!=0) {
        $_SESSION['message']['text'] = "UTILISATEUR ajouté avec succès";
        $_SESSION['message']['type'] = "success";
    }else {
        $_SESSION['message']['text'] = "Une erreur s'est produite lors de l'ajout de l'utilisateur";
        $_SESSION['message']['type'] = "danger";
    }

} else {
    $_SESSION['message']['text'] ="Une information obligatoire non rensignée";
    $_SESSION['message']['type'] = "danger";
}

header('Location: ../vue/Utilisateur.php');