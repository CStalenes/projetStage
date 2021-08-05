<h3> Gestion des Utilisateur</h3>
    
<?php

    
    // a faire quand mettre la session

    if($_SESSION['droits'] == "admin")
    {
        
        
        $lUser = null;
        if(isset($_GET['action']) && isset($_GET['idUser']))
        {
            $action = $_GET['action'];
            $idUser = $_GET['idUser'];

            switch($action)
            {
                case "sup":
                    $unControleur->deleteUser($idUser);
                break;

                case "edit":
                    /**on cree d abord selectwherepromo ici puis on va dans le controlleur */
                    $lUser = $unControleur->selectWhereUser($idUser);
                break;
            }
        }

        require_once("vue/vue_insert_user.php");
        if(isset($_POST['Valider']))
        {
            $unControleur->insertUser($_POST);
        }

        
        if(isset($_POST['Modifier']))
        {
            $unControleur->updateUser($_POST);
            header("Location: index.php?page=5");
        }

    }
    
    $lesUsers = $unControleur->selectAllUsers();
    require_once("vue/vue_les_users.php");
    
?>


