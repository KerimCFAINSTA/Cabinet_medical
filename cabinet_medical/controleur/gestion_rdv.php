<h2> Gestion des Rendez vous</h2>
<?php
$unRdv = null;
if (isset($_GET['action']) && isset($_GET['idrdv'])) {
    $action = $_GET['action'];
    $idrdv = $_GET['idrdv'];
    switch ($action) {
        case "sup":
            deleteRdv($idrdv);
            break;
        case "edit":
            $laLigne = selectWhereRdv($idrdv);

            break;
    }
}
require_once("vue/vue_insert_rdv.php");
if (isset($_POST['Valider'])) {
    insertRdv($_POST);
    echo "<br> Insertion reussi du rendez-vous. ";
}
if (isset($_POST['Modifier'])) {
    updateRdv($_POST);
    header(("Location: index.php?page=4"));
}
$lesRdv = selectAllRdv();
require_once("vue/vue_select_rdv.php");
?>