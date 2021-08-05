<?php
    
    require_once("modele/modele.class.php");


    class Controleur
    {
        private $unModele;

        public function __construct()
        {
            $this->unModele = new Modele();
        }

        /***************************Entreprise**************************** */

        public function selectAllEntreprises()
        {
            $lesEntreprises = $this->unModele->selectAllEntreprises();

            return $lesEntreprises;
        }

        public function insertEntreprise($tab)
        {
            //on controle les donné avant insertion
            $this->unModele->insertEntreprise($tab);

        }

        public function deleteEntreprise($idEntreprise)
        {
            $this->unModele->deleteEntreprise($idEntreprise);
        }

        public function selectWhereEntreprise($idEntreprise)
        {
            return $this->unModele->selectWhereEntreprise($idEntreprise);
        }

        public function updateEntreprise($tab)
        {
            $this->unModele->updateEntreprise($tab);
        }



        /*********************Etudiant***************************** */


        public function selectAllEtudiants()
        {
            $lesEtudiants = $this->unModele->selectAllEtudiants();

            return $lesEtudiants;
        }

        public function insertEtudiant($tab)
        {
            //on controle les donné avant insertion
            $this->unModele->insertEtudiant($tab);

        }

        public function deleteEtudiant($idEtudiant)
        {
            $this->unModele->deleteEtudiant($idEtudiant);
        }

        public function selectWhereEtudiant($idEtudiant)
        {
            return $this->unModele->selectWhereEtudiant($idEtudiant);
        }

        public function updateEtudiant($tab)
        {
            $this->unModele->updateEtudiant($tab);
        }

        /****************Stage************************** */

        public function selectAllStages()
        {
            $lesStages = $this->unModele->selectAllStages();

            return $lesStages;
        }

        public function insertStage($tab)
        {
            $this->unModele->insertStage($tab);

        }

        public function deleteStage($idStage)
        {
            $this->unModele->deleteStage($idStage);
        }

        public function selectWhereStage($idStage)
        {
            return $this->unModele->selectWhereStage($idStage);
        }

        public function updateStage($tab)
        {
            $this->unModele->updateStage($tab);
        }

        /********************Candidature********************** */

        
        public function selectAllCandidatures()
        {
            $lesCandidatures = $this->unModele->selectAllCandidatures();

            return $lesCandidatures;
        }

        public function insertCandidature($tab)
        {
            $this->unModele->insertCandidature($tab);

        }

        public function deleteCandidature($idCandidature)
        {
            $this->unModele->deleteCandidature($idCandidature);
        }

        public function selectWhereCandidature($idCandidature)
        {
            return $this->unModele->selectWhereCandidature($idCandidature);
        }

        public function updateCandidature($tab)
        {
            $this->unModele->updateCandidature($tab);
        }

        /*********************************User************************** */
                

        public function selectAllUsers()
        {
            $lesUsers = $this->unModele->selectAllUsers();

            return $lesUsers;
        }

        public function insertUser($tab)
        {
            $this->unModele->insertUser($tab);

        }

        public function deleteUser($idUser)
        {
            $this->unModele->deleteUser($idUser);
        }

        public function selectWhereUser($idUser)
        {
            return $this->unModele->selectWhereUser($idUser);
        }

        public function updateUser($tab)
        {
            $this->unModele->updateUser($tab);
        }
   
        
        public function verifConnexion($emailUser,$mdpUser)
        {
            return $this->unModele->verifConnexion($emailUser, $mdpUser);
        }


    }



?>