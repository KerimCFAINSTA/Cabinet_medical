<h3>Liste des patients</h3>
<table border="1">
    <tr>
        <td>Nom</td>
        <td>Prenom</td>
        <td>Datenaissance</td>
        <td>Adresse</td>
        <td>Email</td>
        <td>Telephone</td>
        <td> Operations</td>
    </tr>
    <?php
    foreach ($lesPatients as $unPatient) {
        echo "<tr>";
        echo "<td>" . $unPatient['nom'] . "</td>";
        echo "<td>" . $unPatient['prenom'] . "</td>";
        echo "<td>" . $unPatient['datenaissance'] . "</td>";
        echo "<td>" . $unPatient['adresse'] . "</td>";
        echo "<td>" . $unPatient['email'] . "</td>";
        echo "<td>" . $unPatient['telephone'] . "</td>";
        echo "<td>";
        echo "<a href='index.php?page=2&action=sup&idpatient=" . $unPatient['idpatient'] . "'><img src='images/supprimer.png' height='50' witdh='50'> </a>";

        echo "<a href='index.php?page=2&action=edit&idpatient=" . $unPatient['idpatient'] . "'><img src='images/editer.png' height='50' witdh='50'> </a>";

        echo "</td>";
        echo "</tr>";
    }
    ?>
</table>