<?php
function connexion()
{
    $connexion = mysqli_connect("localhost", "root", "", "CABINET_MEDICALE");
    if ($connexion == null) {
        echo "Erreur de connexion au serveur Mysql.";
    }
    return $connexion;
}
function deconnexion($connexion)
{
    mysqli_close($connexion);
}
/***************** Gestion des patients *******/
function insertPatient($tab)
{
    $requete = "INSERT INTO patient (nom, prenom, datenaissance, email, telephone) VALUES ('"
        . $tab['nom'] . "','"
        . $tab['prenom'] . "','"
        . $tab['datenaissance'] . "','"
        . $tab['email'] . "','"
        . $tab['telephone'] . "');";
    $con = connexion(); //appel de la connexion
    mysqli_query($con, $requete); //execution de la requete
    deconnexion($con); // deconnexion de la base de données
}
function selectAllPatients()
{
    $requete = "select * from patient; ";
    $con = connexion();
    $lesPatients = mysqli_query($con, $requete);
    deconnexion($con);
    return $lesPatients;
}
function deletePatient($idpatient)
{
    $requete = "delete from patient where idpatient=" . $idpatient;
    $con = connexion(); //appel de la connexion
    mysqli_query($con, $requete); //execution de la requete
    deconnexion($con); // deconnexion de la base de données

}
function updatePatient($tab)
{
    $requete = "update patient set nom='"
        . $tab['nom'] . "' , prenom='"
        . $tab['prenom'] . "', datenaissance='"
        . $tab['datenaissance'] . "' , adresse='"
        . $tab['adresse'] . "' , email='"
        . $tab['email'] . "' , telephone='"
        . $tab['telephone'] . "'  where idpatient="
        . $tab['idpatient'];
    echo $requete;
    $con = connexion(); //appel de la connexion
    mysqli_query($con, $requete); //execution de la requete
    deconnexion($con); // deconnexion de la base de données


}
function selectwherePatient($idpatient)
{
    $requete = "select * from patient where idpatient=" . $idpatient;
    $con = connexion();
    $resultats = mysqli_query($con, $requete);
    $unPatient = mysqli_fetch_assoc($resultats);
    deconnexion($con);
    return $unPatient;
}
/***************** Gestion des medecins *******/
function insertMedecin($tab)
{
    $requete = "insert into medecin values (null,'"
        . $tab['nom'] . "','"
        . $tab['specialite'] . "','"
        . $tab['email'] . "','"
        . $tab['telephone'] . "');";

    $con = connexion(); //appel de la connexion
    mysqli_query($con, $requete); //execution de la requete
    deconnexion($con); // deconnexion de la base de données
}
function selectAllMedecins()
{
    $requete = "select * from medecin; ";
    $con = connexion();
    $lesMedecins = mysqli_query($con, $requete);
    deconnexion($con);
    return $lesMedecins;
}
function deleteMedecin($idmedecin)
{
    $requete = "delete from medecin where idmedecin=" . $idmedecin;
    $con = connexion(); //appel de la connexion
    mysqli_query($con, $requete); //execution de la requete
    deconnexion($con); // deconnexion de la base de données

}
function updateMedecin($tab)
{
    $requete = "update patient set nom='"
        . $tab['nom'] . "' , specialite='"
        . $tab['specialite'] . "', email='"
        . $tab['email'] . "' , telephone='"
        . $tab['telephone'] . "' , where idmedecin="
        . $tab['idmedecin'];
    echo $requete;
    $con = connexion(); //appel de la connexion
    mysqli_query($con, $requete); //execution de la requete
    deconnexion($con); // deconnexion de la base de données


}
function selectwhereMedecin($idmedecin)
{
    $requete = "select * from medecin where idmedecin=" . $idmedecin;
    $con = connexion();
    $resultats = mysqli_query($con, $requete);
    $unMedecin = mysqli_fetch_assoc($resultats);
    deconnexion($con);
    return $unMedecin;
}

/***************** Gestion des rendez-vous *******/
function insertRdv($tab)
{
    $requete = "insert into Rdv values (null,'"
        . $tab['daterdv'] . "','"
        . $tab['heurerdv'] . "','"
        . $tab['libelle'] . "','"
        . $tab['idpatient'] . "','"
        . $tab['idmedecin'] . "');";

    $con = connexion();
    mysqli_query($con, $requete);
    deconnexion($con);
}
function selectAllRdv()
{
    $requete = "select * from Rdv;";
    $con = connexion();
    $lesRdv = mysqli_query($con, $requete);
    deconnexion($con);
    return $lesRdv;
}
function deleteRdv($idrdv)
{
    $requete = "delete from rdv where idrdv=" . $idrdv;
    $con = connexion();
    mysqli_query($con, $requete);
    deconnexion($con);
}
function updateRdv($tab)
{
    $requete = "update rdv set daterdv='"
        . $tab['daterdv'] . "',heurerdv='"
        . $tab['heurerdv'] . "',libelle='"
        . $tab['libelle'] . "', idpatient='"
        . $tab['idpatient'] . "', where idmedecin="
        . $tab['idmedecin'];
    echo $requete;
    $con = connexion();
    mysqli_query($con, $requete);
    deconnexion($con);
}
function selectWhereRdv($idrdv)
{
    $requete = "select * from vol where idrdv=" . $idrdv;
    $con = connexion();
    $resultats = mysqli_query($con, $requete);
    $unRdv = mysqli_fetch_assoc($resultats);
    deconnexion($con);
    return $unRdv;
}
/***************** Gestion des ordonnances *******/
function insertOrdonnance($tab)
{
    $requete = "insert into ordonnance values (null,'"
        . $tab['prescription'] . "','"
        . $tab['dateordonnance'] . "';'";

    $con = connexion();
    mysqli_query($con, $requete);
    deconnexion($con);
}
function selectAllOrdonnances()
{
    $requete = "select * from ordonnance;";
    $con = connexion();
    $lesOrdonnances = mysqli_query($con, $requete);
    deconnexion($con);
    return $lesOrdonnances;
}
function deleteOrdonnance($idordonnance)
{
    $requete = "delete from rdv where idordonnance=" . $idordonnance;
    $con = connexion();
    mysqli_query($con, $requete);
    deconnexion($con);
}
function updateOrdonnance($tab)
{
    $requete = "update ordonnance set prescrition='"
        . $tab['prescrpition'] . "',dateordonnance='"
        . $tab['dateordonnance'];

    echo $requete;
    $con = connexion();
    mysqli_query($con, $requete);
    deconnexion($con);
}
function selectWhereOrdonnance($idordonnance)
{
    $requete = "select * from vol where idordonnance=" . $idordonnance;
    $con = connexion();
    $resultats = mysqli_query($con, $requete);
    $uneOrdonnance = mysqli_fetch_assoc($resultats);
    deconnexion($con);
    return $uneOrdonnance;
}
