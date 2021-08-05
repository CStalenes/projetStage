
<?php
    require_once("vue/vue_connexion.php");

    //pour que l user se connecte 
    if(isset($_POST['SeConnecter'])){
        $emailUser = $_POST['emailUser'];
        $mdpUser = $_POST['mdpUser'];
        $unUser = $unControleur->verifConnexion($emailUser,$mdpUser);

        //si il rentre on rentre ces infos
        if(isset($unUser['nomUser']))
        {
            $_SESSION['emailUser'] = $unUser['emailUser'];
            $_SESSION['droits'] = $unUser['droits'];
            $_SESSION['nomUser'] = $unUser['nomUser'];
            $_SESSION['prenomUser'] = $unUser['prenomUser'];
        }
        else{
            echo "<br/> Veuillez vérifier vos identifiants !";
        }
    
    }
?>