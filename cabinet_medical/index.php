<?php
require_once("modele/modele.php");
?>
<!DOCTYPE html>
<html>

<head>
    <title>Site Cabinet Medicale</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <h1> Gestion des rendez-vous dans un cabinet medicale</h1>
    </header>
    <center>
        <div class="nav">
            <a href="index.php?page=1"><img src="images/home.jpg" height="100" width="100"></a>
            <a href="index.php?page=2"><img src="images/patient.png" height="100" width="100"></a>
            <a href="index.php?page=3"><img src="images/medecin.jpg" height="100" width="100"></a>
            <a href="index.php?page=4"><img src="images/rdv.jpg" height="100" width="100"></a>
            <a href="index.php?page=5"><img src="images/ordonnance.jpg" height="100" width="100"></a>
        </div>
        <?php
        if (isset($_GET['page'])) {
            $page = $_GET['page'];
        } else {
            $page = 1;
        }
        switch ($page) {
            case 1:
                require_once("controleur/home.php");
                break;
            case 2:
                require_once("controleur/gestion_patient.php");
                break;
            case 3:
                require_once("controleur/gestion_medecin.php");
                break;
            case 4:
                require_once("controleur/gestion_rdv.php");
                break;
            case 5:
                require_once("controleur/gestion_ordonnance.php");
                break;
        }
        ?>
    </center>
    <footer>
    <div class="footer-content">
        <p>Téléphone: +123456789</p>
        <p>Email: example@example.com</p>
        <p>Date de production du site: <?php echo date("Y"); ?></p>
    </div>
</footer>


</body>

</html>