<h3> Ajout d'un medecin </h3>

<form method="post">
    <table>
        <tr>
            <td>Nom</td>
            <td> <input type="text" name="nom" value="<?php if ($unMedecin != null) echo $unMedecin['nom'] ?>"></td>
        </tr>
        <tr>
            <td>Specialite</td>
            <td> <input type="text" name="specialite" value="<?php if ($unMedecin != null) echo $unMedecin['specialite'] ?>"></td>
        </tr>
        <tr>
            <td>Email</td>
            <td> <input type="text" name="email" value="<?php if ($unMedecin != null) echo $unMedecin['email'] ?>"></td>
        </tr>
        <tr>
            <td>Telephone</td>
            <td> <input type="text" name="telephone" value="<?php if ($unMedecin != null) echo $unMedecin['telephone'] ?>"></td>
        </tr>
        <tr>
            <td> <input type="reset" name="Annuler" value="Annuler"> </td>
            <td> <input type="submit" <?php if ($unMedecin != null) {
                                            echo 'name="Modifier" value="modifier"';
                                        } else {
                                            echo  'name="Valider" value="Valider"';
                                        } ?>> </td>
    </table>
    <?php
    if ($unMedecin != null) {
        echo "<input type ='hidden' name='idmedecin' value ='" . $unMedecin['idmedecin'] . "'>";
    }
    ?>
</form>