<h2>Gestion des ordonnances</h2>
<?php
$uneOrdonnance = null;
if (isset($_GET['action']) && isset($_GET['idordonnance'])) {
    $action = $_GET['action'];
    $idordonnance = $_GET['idordonnance'];
    switch ($action) {
        case "sup":
            deleteOrdonnance($idordonnance);
            break;
        case "edit":
            $uneOrdonnance = selectAllOrdonnances($idordonnance);

            break;
    }
}
require_once("vue/vue_insert_ordonnance.php");
if (isset($_POST['Valider'])) {
    //insertion du medecin dans la table ligne
    insertOrdonnance($_POST);
    echo "<br> Insertion reussi de l'ordonnance.";
}
if (isset($_POST['Modifier'])) {
    updateOrdonnance($_POST);
    header(("Location: index.php?page=5"));
}
$lesOrdonnances = selectAllOrdonnances();
require_once("vue/vue_select_ordonnance.php");
?>