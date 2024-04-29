
<?php
include 'entete.php';
?><?php 
session_start();
if(isset($_POST['username']) && isset($_POST['password']))
{
$db_host="localhost";
$db_user="root";
$db_password="";
$db_name="gestion_stock";

$db = mysqli_connect($db_host,$db_user,$db_password,$db_name) or die('could not connect to database');


// if(isset($_POST['username']) && $_POST['password']){
    
    $uname=$_POST['username'];
    $password=$_POST['password'];
    
   // $sql="select * from utilisateur where USERNAME='".$uname."'AND PASSWORD='".$password."' ";
   // $exec_requete = mysqli_query($db, $sql);
    $sql="select * from admin where ADMINNAME='".$uname."'AND PASSWORD='".$password."' ";
    $exec_requete = mysqli_query($db, $sql);
    //   $reponse = mysqli_fetch_array($exec_requete);
    //   $count = $reponse['count(*)'];
$num_ligne= mysqli_num_rows(  $exec_requete );
    
    if($num_ligne>0){
       $_SESSION['username']= $_POST['username'];
         echo "<script type='text/javascript'> document.location = 'dashboard.php';</script> " ;
    
    } /*else {
        $_SESSION['adminname']= $_POST['adminname'];
        echo "<script type='text/javascript'> document.location = 'dashboard2.php';</script> " ;
     }*/
       exit();
   /* else{
        echo "<script type='text/javascript'> document.location = 'login.php';</script> " ;
        exit();
    }*/
        
}
?>
// $username = mysqli_real_escape_string($db,htmlspecialchars($_POST['username']));
// $password = mysqli_real_escape_string($db,htmlspecialchars($_POST['password']));
// if($username !== "" && $password !== ""){
    
//     $requete="SELECT count(*) FROM utilisateur where User='".$username."'AND Pass='".$password."'";
//     $exec_requete = mysqli_query($db, $requete);
//     $reponse = mysqli_fetch_array($exec_requete);
//     $count = $reponse['count(*)'];
//     if($count != 0) // nom d'utilisateur et mot de passe correcte
//     {
//         $_SESSION['username']= $username ;
//         header('Location :dashboard.php');
//     }
//     else{
//         header('Location :login.php?erreur=1');
//     }
   
        
// }
// else{
//     header('Location :login.php?erreur=2');
// }
// 
// else{
//     header('Location :login.php');
// }
mysqli_close($db); //fermer la connexion
?>