<?php
include 'login.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="./style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style = "background : #fff;">
    <div id="content"> 
<a href="dashboard.php?deconnexion=true"><span>Deconnexion</span></a>
<?php
session_start();
if(isset($_GET['deconnexion'])){
    if($_GET['deconnexion']==true){
        session_unset();
        header("location:login.php");
    }
}
elseif($_SESSION['username'] !== ""){
    $user = $_SESSION['username'];
    echo "<script type='text/javascript'> document.location = 'login.php';</script> " ;
}
?>
    </div>
</body>
</html>