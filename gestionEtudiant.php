<h3> Gestion des Etudiants </h3>

    
<?php

    
    // a faire quand mettre la session

    if($_SESSION['droits'] == "admin")
    {
        
    
        $lEtudiant = null;
        if(isset($_GET['action']) && isset($_GET['idEtudiant']))
        {
            $action = $_GET['action'];
            $idEtudiant = $_GET['idEtudiant'];

            switch($action)
            {
                case "sup":
                    $unControleur->deleteEtudiant($idEtudiant);
                break;

                case "edit":
                    $lEtudiant = $unControleur->selectWhereEtudiant($idEtudiant);
                break;
            }
        }

        require_once("vue/vue_insert_etudiant.php");
        if(isset($_POST['Valider']))
        {
            $unControleur->insertEtudiant($_POST);
        }

        
        if(isset($_POST['Modifier']))
        {
            $unControleur->updateEtudiant($_POST);
            header("Location: index.php?page=2");
        }

    }
    
    $lesEtudiants = $unControleur->selectAllEtudiants();
    require_once("vue/vue_les_etudiants.php");
    
?>
