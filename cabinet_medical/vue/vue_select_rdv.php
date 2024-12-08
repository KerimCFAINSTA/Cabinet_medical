<h3>Liste des rendez-vous</h3>
<table border="1">
    <tr>
        <td> Date RDV </td>
        <td> Heure RDV</td>
        <td> Libelle </td>
        <td> Patient </td>
        <td> Medecin </td>
        <td> Operations </td>
    </tr>
    <?php
    foreach ($lesRdv as $unRdv) {
        echo "<tr>";
        echo "<td>" . $unRdv['daterdv'] . "</td>";
        echo "<td>" . $unRdv['heurerdv'] . "</td>";
        echo "<td>" . $unRdv['libelle'] . "</td>";
        echo "<td>" . $unRdv['idpatient'] . "</td>";
        echo "<td>" . $unRdv['idmedecin'] . "</td>";
        echo "<td>";
        echo "<a href='index.php?page=4&action=sup&idrdv=" . $unRdv['idrdv'] . "'><img src='images/supprimer.png' height='50' witdh='50'> </a>";

        echo "<a href='index.php?page=4&action=edit&idrdv=" . $unRdv['idrdv'] . "'><img src='images/editer.png' height='50' witdh='50'> </a>";

        echo "</td>";
        echo "</tr>";
    }
    ?>
</table>