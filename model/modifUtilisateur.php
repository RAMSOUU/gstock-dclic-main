<?php
include 'connexion.php';
if (
    !empty($_POST['ID'])
    && !empty($_POST['EMPLOYEE_ID'])
    && !empty($_POST['USERNAME'])
    && !empty($_POST['PASSWORD'])
) {

$sql = "UPDATE utilisateur SET ID?, EMPLOYEE_ID=?, USERNAME=?, PASSWORD=? WHERE ID=?";
    $req = $connexion->prepare($sql);
    
    $req->execute(array(
        $_POST['ID'],
        $_POST['EMPLOYEE_ID'],
        $_POST['USERNAME'],
        $_POST['PASSWORD'],
        
    ));
    
    if ( $req->rowCount()!=0) {
        $_SESSION['message']['text'] = "utilisateur modifié avec succès";
        $_SESSION['message']['type'] = "success";
    }else {
        $_SESSION['message']['text'] = "Rien a été modifié";
        $_SESSION['message']['type'] = "warning";
    }

} else {
    $_SESSION['message']['text'] ="Une information obligatoire non rensignée";
    $_SESSION['message']['type'] = "danger";
}

header('Location: ../vue/Utilisateur.php');