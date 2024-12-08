<h2>Gestion des patients</h2>
<?php
$unPatient = null;
if (isset($_GET['action']) && isset($_GET['idpatient'])) {
    $action = $_GET['action'];
    $idpatient = $_GET['idpatient'];
    switch ($action) {
        case "sup":
            deletePatient($idpatient);
            break;
        case "edit":
            $unPatient = selectwherePatient($idpatient);
            var_dump($unPatient);
            break;
    }
}
require_once("vue/vue_insert_patient.php");
if (isset($_POST['Valider'])) {
    //insertion du patient dans la table ligne
    insertPatient($_POST);
    echo "<br> Insertion reussi du Patient.";
}
if (isset($_POST['Modifier'])) {
    updatePatient($_POST);
    header(("Location: index.php?page=2"));
}
$lesPatients = selectAllPatients();
require_once("vue/vue_select_patient.php");
?>