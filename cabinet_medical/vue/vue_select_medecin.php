<h3>Liste des medecins</h3>
<table border="1">
    <tr>
        <td>Nom</td>
        <td>Specialite</td>
        <td>Email</td>
        <td>Telephone</td>
        <td>Operations</td>
    </tr>
    <?php
    foreach ($lesMedecins as $unMedecin) {
        echo "<tr>";
        echo "<td>" . $unMedecin['nom'] . "</td>";
        echo "<td>" . $unMedecin['specialite'] . "</td>";
        echo "<td>" . $unMedecin['email'] . "</td>";
        echo "<td>" . $unMedecin['telephone'] . "</td>";
        echo "<td>";
        echo "<a href='index.php?page=3&action=sup&idmedecin=" . $unMedecin['idmedecin'] . "'><img src='images/supprimer.png' height='50' witdh='50'> </a>";

        echo "<a href='index.php?page=3&action=edit&idmedecin=" . $unMedecin['idmedecin'] . "'><img src='images/editer.png' height='50' witdh='50'> </a>";

        echo "</td>";
        echo "</tr>";
    }

    ?>
</table>