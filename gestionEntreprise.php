<h4> Gestion des Entreprises </h4>

    
<?php

    
    // a faire quand mettre la session

    if($_SESSION['droits'] == "admin")
    {
        
        
        $lEntreprise = null;
        if(isset($_GET['action']) && isset($_GET['idEntreprise']))
        {
            $action = $_GET['action'];
            $idEntreprise = $_GET['idEntreprise'];

            switch($action)
            {
                case "sup":
                    $unControleur->deleteEntreprise($idEntreprise);
                break;

                case "edit":
                    /**on cree d abord selectwherepromo ici puis on va dans le controlleur */
                    $lEntreprise = $unControleur->selectWhereEntreprise($idEntreprise);
                break;
            }
        }

        require_once("vue/vue_insert_entreprise.php");
        if(isset($_POST['Valider']))
        {
            $unControleur->insertEntreprise($_POST);
        }

        
        if(isset($_POST['Modifier']))
        {
            $unControleur->updateEntreprise($_POST);
            header("Location: index.php?page=1");
        }

    }
    
    $lesEntreprises = $unControleur->selectAllEntreprises();
    require_once("vue/vue_les_entreprises.php");
    
?>


