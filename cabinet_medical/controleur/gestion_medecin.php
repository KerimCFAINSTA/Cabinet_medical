<h2>Gestion des medecins</h2>
<?php
$unMedecin = null;
if (isset($_GET['action']) && isset($_GET['idmedecin'])) {
    $action = $_GET['action'];
    $idmedecin = $_GET['idmedecin'];
    switch ($action) {
        case "sup":
            deleteMedecin($idmedecin);
            break;
        case "edit":
            $unMedecin = selectAllmedecins($idmedecin);

            break;
    }
}
require_once("vue/vue_insert_medecin.php");
if (isset($_POST['Valider'])) {
    //insertion du medecin dans la table ligne
    insertMedecin($_POST);
    echo "<br> Insertion reussi du Medecin.";
}
if (isset($_POST['Modifier'])) {
    updateMedecin($_POST);
    header(("Location: index.php?page=3"));
}
$lesMedecins = selectAllMedecins();
require_once("vue/vue_select_medecin.php");
?>