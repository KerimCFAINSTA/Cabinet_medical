<h3>Liste des medecins</h3>
<table border="1">
    <tr>
        <td>Prescription</td>
        <td>Dateordonnance</td>
        <td>Operations</td>
    </tr>
    <?php
    foreach ($lesOrdonnances as $uneOrdonnance) {
        echo "<tr>";
        echo "<td>" . $uneOrdonnance['prescription'] . "</td>";
        echo "<td>" . $uneOrdonnance['dateordonnance'] . "</td>";
        echo "<td>";
        echo "<a href='index.php?page=5&action=sup&idordonnance=" . $uneOrdonnance['idordonnance'] . "'><img src='images/supprimer.png' height='50' witdh='50'> </a>";

        echo "<a href='index.php?page=5&action=edit&idordonnance=" . $uneOrdonnance['idordonnance'] . "'><img src='images/editer.png' height='50' witdh='50'> </a>";

        echo "</td>";
        echo "</tr>";
    }

    ?>
</table>