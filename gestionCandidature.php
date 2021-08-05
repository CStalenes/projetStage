<h3> Gestion des Candidatures </h3>

    
<?php

    
    // a faire quand mettre la session
    /*if($_SESSION['droits'] == "admin")
    {*/
        
    
    $laCandidature = null;
    if(isset($_GET['action']) && isset($_GET['idCandidature']))
    {
        $action = $_GET['action'];
        $idCandidature = $_GET['idCandidature'];

        switch($action)
        {
            case "sup":
                $unControleur->deleteCandidature($idCandidature);
            break;

            case "edit":
                $laCandidature = $unControleur->selectWhereCandidature($idCandidature);
            break;
        }
    }

    require_once("vue/vue_insert_candidature.php");
    if(isset($_POST['Valider']))
    {
        $unControleur->insertCandidature($_POST);
    }

    
    if(isset($_POST['Modifier']))
    {
        $unControleur->updateCandidature($_POST);
        header("Location: index.php?page=4");
    }

    //}
    
    $lesCandidatures = $unControleur->selectAllCandidatures();
    require_once("vue/vue_les_candidatures.php");
    
?>
