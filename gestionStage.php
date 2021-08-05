<h3> Gestion des Stages </h3>

    
<?php

    
    // a faire quand mettre la session
    /*if($_SESSION['droits'] == "admin")
    {*/
        
    
    $leStage = null;
    if(isset($_GET['action']) && isset($_GET['idStage']))
    {
        $action = $_GET['action'];
        $idStage = $_GET['idStage'];

        switch($action)
        {
            case "sup":
                $unControleur->deleteStage($idStage);
            break;

            case "edit":
                $leStage = $unControleur->selectWhereStage($idStage);
            break;
        }
    }

    require_once("vue/vue_insert_stage.php");
    if(isset($_POST['Valider']))
    {
        $unControleur->insertStage($_POST);
    }

    
    if(isset($_POST['Modifier']))
    {
        $unControleur->updateStage($_POST);
        header("Location: index.php?page=3");
    }

    //}
    
    $lesStages = $unControleur->selectAllStages();
    require_once("vue/vue_les_stages.php");
    
?>
