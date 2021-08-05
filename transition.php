<?php

        public function selectAllCandidatures()
        {
            $requete = "select * from Candidature;";

            $select =$this->unPDO->prepare($requete);

            $select->execute();

            $lesCandidatures = $select->fetchAll();

            return $lesCandidatures;
        }

        public function insertCandidature($tab)
        {
            $requete = "insert into Candidature values(null, :typeCandidature, :formatCandidature, :dateCandidature, :idEtudiant)";
            $donnees = array(":typeCandidature"=>$tab['typeCandidature'],
                            ":formatCandidature"=>$tab['formatCandidature'],
                            ":dateCandidature"=>$tab['dateCandidature'],
                            ":idEtudiant"=>$tab['idEtudiant']);
        
            $insert = $this->unPDO->prepare($requete);
            $insert->execute($donnees);

        }

        public function deleteCandidature($idCandidature)
        {
            $requete = "delete from Candidature where idCandidature = :idCandidature;";
            $donnees = array("idCandidature"=>$idCandidature);
            $delete = $this->unPDO->prepare($requete);
            $delete->execute($donnees);
        }

        public function selectWhereCandidature($idCandidature)
        {
            $requete = "select * from Candidature where idCandidature = :idCandidature;";
            $donnees = array("idCandidature"=>$idCandidature);

            $select = $this->unPDO->prepare($requete);
            $select->execute($donnees);
            $uneCandidature = $select->fetch();
            return $uneCandidature;


        }

        public function updateCandidature($tab)
        {
            $requete = "update Candidature set typeCandidature = :typeCandidature, formatCandidature = :formatCandidature,
            dateCandidature = :dateCandidature, idEtudiant = :idEtudiant
            where idCandidature = :idCandidature;";

            $donnees = array(":typeCandidature"=>$tab['typeCandidature'],
            ":formatCandidature"=>$tab['formatCandidature'],
            ":dateCandidature"=>$tab['dateCandidature'],
            ":idEtudiant"=>$tab['idEtudiant'],
            ":idCandidature"=>$tab['idCandidature']);

            $update = $this->unPDO->prepare($requete);
            $update->execute($donnees);

        }

?>


<?php
/********************Mettre les liens ici **********************/

    echo' 
    <a href = "index.php?page=0"><img src = "images/logo_site.png" width = "100" height = "100"> </a>
    <a href = "index.php?page=1"><img src = "images/icon_entreprise.png" width = "100" height = "100"> </a>
    <a href = "index.php?page=2"><img src = "images/icon_etudiant.png" width = "100" height = "100"> </a>
    <a href = "index.php?page=3"><img src = "images/icon_stage.png" width = "100" height = "100"> </a>
    <a href = "index.php?page=4"><img src = "images/icon_candidature.png" width = "100" height = "100"> </a>
    <a href = "index.php?page=5"><img src = "images/icon_deconnexion.png" width = "100" height = "100"> </a>
    
    
    
    
    
    
    
    <nav class ="top-nav">
    <ul>
        <li>
            <a href="index.php?page=0"> Acceuil </a>
        </li>

        <li>
            <a href="gestionEntreprise.php?page=1"> Entreprise </a>
        </li>

        <li>
            <a href="gestionEtudiant.php?page=2"> Etudiant </a>
        </li>

        <li>
            <a href="gestionStage.php?page=3"> Stage </a>
        </li>

        <li>
            <a href="gestionCandidature.php?page=4"> Candidature </a>
        </li>
    </ul>
    </nav>
    
    
    
    
    <!--<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"
    integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>-->



    <div class = "container">
    <div class = "row mt-4">
        <div class ="col-lg-12 d-flex justify-content-between align-items-center">

        <div>
            <h4 class = "text-primary"> Les utilisateur de la base </h4>
        </div>
        </div>
    </div>
</div>
    
    
    
    
    
    
    
    
    
    ';

    <?php include("connexion.php");?>

?>




