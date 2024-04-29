<?php
include 'entete.php';

if (!empty($_GET['ID'])) {
    $utilisateur = getutilisateur($_GET['ID']);
}

?>
<div class="home-content">
    <div class="overview-boxes">
        <div class="box">
            <form action=" <?= !empty($_GET['ID']) ?  "../model/modifUtilisateur.php" : "../model/ajoutUtilisateur.php" ?>" method="post">
                <label for="ID">ID</label>
                <input value="<?= !empty($_GET['ID']) ?  $utilisateur['ID'] : "" ?>" type="text" name="ID" id="ID" placeholder="Veuillez saisir l'ID">
                <input value="<?= !empty($_GET['ID']) ?  $utilisateur['ID'] : "" ?>" type="hidden" name="ID" id="ID" >
                
                <label for="EMPLOYEE_ID">EMPLOYEE_ID</label>
                <input value="<?= !empty($_GET['ID']) ?  $utilisateur['EMPLOYEE_ID'] : "" ?>" type="text" name="EMPLOYEE_ID" id="EMPLOYEE_ID" placeholder="Veuillez saisir l'EMPLOYEE_ID">

                <label for="USERNAME">USERNAME</label>
                <input value="<?= !empty($_GET['ID']) ?  $utilisateur['USERNAME'] : "" ?>" type="text" name="USERNAME" id="USERNAME" placeholder="Veuillez saisir le USERNAME">
                
                <label for="PASSEWORD">PASSWORD</label>
                <input value="<?= !empty($_GET['ID']) ?  $utilisateur['PASSWORD'] : "" ?>" type="text" name="PASSWORD" id="PASSEWORD" placeholder="Veuillez saisir lE PASSEWORD">

                <button type="submit">Valider</button>

                <?php
                if (!empty($_SESSION['message']['text'])) {
                ?>
                    <div class="alert <?= $_SESSION['message']['type'] ?>">
                        <?= $_SESSION['message']['text'] ?>
                    </div>
                <?php
                }
                ?>
            </form>

        </div>
        <div class="box">
            <table class="mtable">
                <tr>
                    <th>ID</th>
                    <th>EMPLOYEE_ID</th>
                    <th>USERNAME</th>
                    <th>PASSWORD</th>
                    <th>Action</th>
                </tr>
                <?php
                $utilisateur = getutilisateur();
                
                if (!empty($utilisateur) && is_array($utilisateur)) {
                    foreach ($utilisateur as $key => $value) {
                ?>
                        <tr>
                            <td><?= $value['ID'] ?></td>
                            <td><?= $value['EMPLOYEE_ID'] ?></td>
                            <td><?= $value['USERNAME'] ?></td>
                            <td><?= $value['PASSWORD'] ?></td>
                            <td><a href="?ID=<?= $value['ID'] ?>"><i class='bx bx-edit-alt'></i></a></td>
                        </tr>
                <?php

                    }
                }
                ?>
            </table>
        </div>
    </div>

</div>
</section>

<?php
include 'pied.php';
?>