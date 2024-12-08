<h3> Ajout d'un patient </h3>

<form method="post">
    <table>
        <tr>
            <td>Nom</td>
            <td> <input type="text" name="nom" value="<?php if ($unPatient != null) echo $unPatient['nom'] ?>"></td>
        </tr>
        <tr>
            <td>Prenom</td>
            <td> <input type="text" name="prenom" value="<?php if ($unPatient != null) echo $unPatient['prenom'] ?>"></td>
        </tr>
        <tr>
            <td>Datenaissance</td>
            <td> <input type="date" name="datenaissance" value="<?php if ($unPatient != null) echo $unPatient['datenaissance'] ?>"></td>
        </tr>
        <tr>
            <td>Adresse</td>
            <td> <input type="text" name="adresse" value="<?php if ($unPatient != null) echo $unPatient['adresse'] ?>"></td>
        </tr>
        <tr>
            <td>Email</td>
            <td> <input type="text" name="email" value="<?php if ($unPatient != null) echo $unPatient['email'] ?>"></td>
        </tr>
        <tr>
            <td>Telephone</td>
            <td> <input type="text" name="telephone" value="<?php if ($unPatient != null) echo $unPatient['telephone'] ?>"></td>
        </tr>
        <tr>
            <td> <input type="reset" name="Annuler" value="Annuler"> </td>
            <td> <input type="submit" <?php if ($unPatient != null) {
                                            echo 'name ="Modifier" value="Modifier" ';
                                        } else {
                                            echo 'name ="Valider" value="Valider"';
                                        } ?>></td>
        </tr>
    </table>
    <?php
    if ($unPatient != null) {
        echo "<input type ='hidden' name='idpatient' value ='" . $unPatient['idpatient'] . "'>";
    }
    ?>
</form>