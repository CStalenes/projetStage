<?php
    session_start();
    require_once("controleur/controleur.class.php");
    //si on ne met pas l'objet controleur on ne pourra pas accedre aux fonction pour la connection donc le mettre 
    //pour la session
    $unControleur = new Controleur;
?>


<?php
    require_once("controleur/controleur.class.php");
    //instancier la classe contoleur en créant un objet
    $unControleur = new Controleur();
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Document</title>
        <link rel="stylesheet" href="css/style.css">
        <link rel = "stylesheet" type = "text/css" href = "https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">

        <!--<script src="https://code.jquery.com/jquery-3.0.0.slim.js"
        integrity="sha256-Gp6hp0H+A7axg1tErCucWeOc38irtkVWpUbBZSj8KCg=" crossorigin="anonymous"></script>-->

        <script type = "text/javascript" src = "https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"> </script>

        <link rel = "stylesheet"  type = "text/css" href = "https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">

    </head>
    <body>
    
        <!--- h1  Gestion de la recherche de stage au CFA -->
        
        <!--- Debut de session -->

        <?php
            // s il n 'est pas connecter afficher connexion
            if( !isset($_SESSION['emailUser']))
            {
                require_once("vue/vue_connexion.php");
            }
        ?>


        <!-- Lien menu ici-->
        <!-- class = "top nav"-->

      


        <!-- la connexion ici-->
        


        <?php

            //require_once("vue/vue_connexion.php");

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

            
    
    
            //pourquoi le session ici aussi
        if(isset($_SESSION['emailUser']))
        {

            
            echo '
            <nav class ="navbar navbar-expand-lg navbar-info bg-info">
                <h5 class = "text-white"> Gestion des Stages </h5>

            <div class ="mr-auto"> </div>

                <ul class = "navbar-nav">
                    <li class = "nacv-item">
                        <a class = "nav-link text-white" href="index.php?page=0"> Acceuil </a>
                    </li>

                    <li class = "nacv-item">
                        <a class = "nav-link  text-white"  href="index.php?page=1"> Entreprise </a>
                    </li>

                    <li class = "nacv-item">
                        <a class = "nav-link text-white"  href="index.php?page=2"> Etudiant </a>
                    </li>

                    <li class = "nacv-item">
                        <a class = "nav-link text-white"  href="index.php?page=3"> Stage </a>
                    </li>

                    <li class = "nacv-item">
                        <a class = "nav-link text-white"  href="index.php?page=4"> Candidature </a>
                    </li>

                    
                    <li class = "nacv-item">
                        <a class = "nav-link text-white"  href="index.php?page=5"> Admin </a>
                    </li>

                    
                    <li class = "nacv-item">
                        <a class = "nav-link text-white"  href="index.php?page=6"> Deconnexion </a>
                    </li>
                </ul>
        </nav>
        ';
        
            //pourquoi avoir mmit l echo ''; pour les liens au dessus 

            //reponse car si on ne met pas d echo on n'a plein d erreur en php
            //en gros c'est pour annuler les erreur qu on voit en php 
            //et afficher notre menu
        

            if (isset($_GET['page']))
            {
                $page = $_GET['page'];

            }else{
                $page = 0;
            }
            switch($page){
                case 1: require_once ("gestionEntreprise.php"); break;
                case 2: require_once ("gestionEtudiant.php"); break;
                case 3: require_once ("gestionStage.php"); break;
                case 4: require_once ("gestionCandidature.php"); break;
                case 5: require_once ("gestionUser.php"); break;
                case 6: session_destroy();
                        header("Location: index.php");
                        break;
                default : require_once ("home.php"); 

    
            }
        }

        ?>
        
    </body>
</html>