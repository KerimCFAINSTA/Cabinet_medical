<h3> Ajout d'un medecin </h3>

<form method="post">
    <table>
        <tr>
            <td>Prescription</td>
            <td> <input type="text" name="prescription" value="<?php if ($uneOrdonnance != null) echo $uneOrdonnance['prescription'] ?>"></td>
        </tr>
        <tr>
            <td>Date Ordonnance</td>
            <td> <input type="date" name="dateordonnance" value="<?php if ($uneOrdonnance != null) echo $uneOrdonnance['dateordonnance'] ?>"></td>
        </tr>
        <tr>
            <td> <input type="reset" name="Annuler" value="Annuler"> </td>
            <td> <input type="submit" <?php if ($uneOrdonnance != null) {
                                            echo 'name="Modifier" value="modifier"';
                                        } else {
                                            echo  'name="Valider" value="Valider"';
                                        } ?>> </td>
    </table>
    <?php
    if ($uneOrdonnance != null) {
        echo "<input type ='hidden' name='idordonnance' value ='" . $uneOrdonnance['idordonnance'] . "'>";
    }
    ?>
</form>