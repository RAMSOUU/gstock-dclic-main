<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="../public/css/style.css" />
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width, initial-scale=1.0">
    <title>bienvenue chez C&K SANTE</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body >
    
<style>

        body {
            background-image: url('../public/images/sante_articleimage.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed; 
        }

        /* Add this style for the modal */
        .modal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1; /* Sit on top */
            padding-top: 100px; /* Location of the box */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgb(0,0,0); /* Fallback color */
            background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
        }

        /* Modal Content */
        .modal-content {
            background-color: #fefefe;
            margin: auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
        }

        /* The Close Button */
        .close {
            color: #aaaaaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: #000;
            text-decoration: none;
            cursor: pointer;
        }
        
</style>
       
   
        <h1><strong> BIENVENUE  A C&K SANTE</strong></h1>  
        <img src="../public/images/img4.jpg" alt="">
        <!-- Trigger/Open The Modal -->
       <h3><button id="myBtn">SE CONNECTER</button></h3>

        <!-- The Modal -->
        <div id="myModal" class="modal">

          <!-- Modal content -->
          <div class="modal-content">
            <span class="close">×</span>
            <form method="POST"  action="verification.php" >
            <div id="unique">
            <div class="aldo">
                <input type="text" class="form-control" name="username" placeholder="enter your username">

            </div>
            <div class="aldo">
                <input type="password" class="form-control" name="password" placeholder="enter your password">

            </div>
            <div class="rita">
                <button class="btn btn-success" id="submit" type="submit">valider</button>
            </div>
            <!--<div class="rita">
                <button class="btn btn-success" id="submit" type="button">annuler</button>
            </div>-->
        </div> 
        <?php 
         if(isset($_GET['erreur'])){
             $err = $_GET['erreur'];
             if($err==1 || $err==2)
             echo"<p style= 'color:red'> utilisateur ou mot de passe incorrect</p>";
     }
     ?>
            </form>  
          </div>

        </div>
        <script>
        // Get the modal
        var modal = document.getElementById("myModal");

        // Get the button that opens the modal
        var btn = document.getElementById("myBtn");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks the button, open the modal 
        btn.onclick = function() {
          modal.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
          modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
          if (event.target == modal) {
            modal.style.display = "none";
          }
        }
        </script>
</body>
</html>
