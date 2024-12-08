<h3> Ajout d'un rendez vous</h3>

<form method="post">
    <table>
        <tr>
            <td> Date RDV </td>
            <td> <input type="date" name="daterdv" value="<?php if ($unRdv != null) echo $unRdv['daterdv'] ?>"></td>
        </tr>
        <tr>
            <td>Heure RDV</td>
            <td><input type="time" name="heurerdv" value="<?php if ($unRdv != null) echo $unRdv['heurerdv'] ?>"></td>
        </tr>
        <tr>
            <td>Libelle</td>
            <td><input type="text" name="libelle" value="<?php if ($unRdv != null) echo $unRdv['libelle'] ?>"></td>
        </tr>
        <tr>
            <td>Patient</td>
            <td><input type="text" name="idpatient" value="<?php if ($unRdv != null) echo $unRdv['patient'] ?>"></td>
        </tr>
        <tr>
            <td>Medecin</td>
            <td><input type="text" name="idmedecin" value="<?php if ($unRdv != null) echo $unRdv['medecin'] ?>"></td>
        </tr>
        <tr>
            <td> <input type="reset" name="Annuler" value="Anuller"></td>
            <td> <input type="submit" <?php if ($unRdv != null) {
                                            echo 'name ="Modifier" value="Modifier" ';
                                        } else {
                                            echo 'name ="Valider" value="Valider"';
                                        } ?>></td>
        </tr>
    </table>
    <?php
    if ($unRdv != null) {
        echo "<input type ='hidden' name='idrdv' value ='" . $unRdv['idrdv'] . "'>";
    }
    ?>
</form>