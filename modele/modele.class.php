<?php

    class Modele
    {
        private $unPDO;

        public function __construct()
        {
            try
            {
                $this->unPDO = new PDO("mysql:host=localhost;dbname=gestion_stage","root","");
            }

            catch(PDOException $exp)
            {
                echo "Impossible de se connecter ";
            }
        }
        /*********************L"Entreprise************************* */

        public function selectAllEntreprises()
        {
            $requete = "select * from Entreprise;";

            $select =$this->unPDO->prepare($requete);

            $select->execute();

            $lesEntreprises = $select->fetchAll();

            return $lesEntreprises;
        }

        public function insertEntreprise($tab)
        {
            $requete = "insert into Entreprise values(null, :nomEntreprise, :telEntreprise, :emailEntreprise, :adresseEntreprise, :secteur)";
            $donnees = array(":nomEntreprise"=>$tab['nomEntreprise'],
                            ":telEntreprise"=>$tab['telEntreprise'],
                            ":emailEntreprise"=>$tab['emailEntreprise'],
                            ":adresseEntreprise"=>$tab['adresseEntreprise'],
                            ":secteur"=>$tab['secteur']);
        
            $insert = $this->unPDO->prepare($requete);
            $insert->execute($donnees);

        }

        public function deleteEntreprise($idEntreprise)
        {
            $requete = "delete from Entreprise where idEntreprise = :idEntreprise;";
            $donnees = array("idEntreprise"=>$idEntreprise);
            $delete = $this->unPDO->prepare($requete);
            $delete->execute($donnees);
        }

        public function selectWhereEntreprise($idEntreprise)
        {
            $requete = "select * from Entreprise where idEntreprise = :idEntreprise;";
            $donnees = array("idEntreprise"=>$idEntreprise);

            $select = $this->unPDO->prepare($requete);
            $select->execute($donnees);
            $uneEntreprise = $select->fetch();/**comme on utilise un select */
            return $uneEntreprise;

            /** d'abord recup promo et modufier puis maj */

        }

        public function updateEntreprise($tab)
        {
            $requete = "update Entreprise set nomEntreprise = :nomEntreprise,
            emailEntreprise = :emailEntreprise,  telEntreprise = :telEntreprise,
            adresseEntreprise = :adresseEntreprise, secteur = :secteur where 
            idEntreprise = :idEntreprise;";

            $donnees = array(":nomEntreprise"=>$tab['nomEntreprise'],
            ":telEntreprise"=>$tab['telEntreprise'],
            ":emailEntreprise"=>$tab['emailEntreprise'],
            ":adresseEntreprise"=>$tab['adresseEntreprise'],
            ":secteur"=>$tab['secteur'],
            ":idEntreprise"=>$tab['idEntreprise']);

            $update = $this->unPDO->prepare($requete);
            $update->execute($donnees);

            // pour voir ds erreurs on fait var_dump(donnees)
        }
        /********************Etudiant **************************** */

        public function selectAllEtudiants()
        {
            $requete = "select * from Etudiant;";

            $select =$this->unPDO->prepare($requete);

            $select->execute();

            $lesEtudiants = $select->fetchAll();

            return $lesEtudiants;
        }

        public function insertEtudiant($tab)
        {
            $requete = "insert into Etudiant values(null, :nomEtudiant, :prenomEtudiant, :telEtudiant,
                 :emailEtudiant, :adresseEtudiant, :mdpEtudiant, :etablissement)";
            $donnees = array(":nomEtudiant"=>$tab['nomEtudiant'],
                            ":prenomEtudiant"=>$tab['prenomEtudiant'],
                            ":telEtudiant"=>$tab['telEtudiant'],
                            ":emailEtudiant"=>$tab['emailEtudiant'],
                            ":adresseEtudiant"=>$tab['adresseEtudiant'],
                            ":mdpEtudiant"=>$tab['mdpEtudiant'],
                            ":etablissement"=>$tab['etablissement']);
        
            $insert = $this->unPDO->prepare($requete);
            $insert->execute($donnees);

        }

        public function deleteEtudiant($idEtudiant)
        {
            $requete = "delete from Etudiant where idEtudiant = :idEtudiant;";
            $donnees = array("idEtudiant"=>$idEtudiant);
            $delete = $this->unPDO->prepare($requete);
            $delete->execute($donnees);
        }

        public function selectWhereEtudiant($idEtudiant)
        {
            $requete = "select * from Etudiant where idEtudiant = :idEtudiant;";
            $donnees = array("idEtudiant"=>$idEtudiant);

            $select = $this->unPDO->prepare($requete);
            $select->execute($donnees);
            $uneEtudiant = $select->fetch();
            return $uneEtudiant;


        }

        public function updateEtudiant($tab)
        {
            $requete = "update Etudiant set nomEtudiant = :nomEtudiant, prenomEtudiant = :prenomEtudiant,
            telEtudiant = :telEtudiant,  emailEtudiant = :emailEtudiant,
            adresseEtudiant = :adresseEtudiant, mdpEtudiant = :mdpEtudiant, etablissement = :etablissement
            where idEtudiant = :idEtudiant;";

            $donnees = array(":nomEtudiant"=>$tab['nomEtudiant'],
            ":prenomEtudiant"=>$tab['prenomEtudiant'],
            ":telEtudiant"=>$tab['telEtudiant'],
            ":emailEtudiant"=>$tab['emailEtudiant'],
            ":adresseEtudiant"=>$tab['adresseEtudiant'],
            ":mdpEtudiant"=>$tab['mdpEtudiant'],
            ":etablissement"=>$tab['etablissement'],
            ":idEtudiant"=>$tab['idEtudiant']);

            $update = $this->unPDO->prepare($requete);
            $update->execute($donnees);

        }

        /** **************** Stage **************************/

        public function selectAllStages()
        {
            $requete = "select * from Stage;";

            $select =$this->unPDO->prepare($requete);

            $select->execute();

            $lesStages = $select->fetchAll();

            return $lesStages;
        }

        public function insertStage($tab)
        {
            $requete = "insert into Stage values(null, :sujet, :duree, :dateDebut,
                 :dateFin, :tache, :idEntreprise)";
            $donnees = array(":sujet"=>$tab['sujet'],
                            ":duree"=>$tab['duree'],
                            ":dateDebut"=>$tab['dateDebut'],
                            ":dateFin"=>$tab['dateFin'],
                            ":tache"=>$tab['tache'],
                            ":idEntreprise"=>$tab['idEntreprise']);
        
            $insert = $this->unPDO->prepare($requete);
            $insert->execute($donnees);

        }

        public function deleteStage($idStage)
        {
            $requete = "delete from Stage where idStage = :idStage;";
            $donnees = array("idStage"=>$idStage);
            $delete = $this->unPDO->prepare($requete);
            $delete->execute($donnees);
        }

        public function selectWhereStage($idStage)
        {
            $requete = "select * from Stage where idStage = :idStage;";
            $donnees = array("idStage"=>$idStage);

            $select = $this->unPDO->prepare($requete);
            $select->execute($donnees);
            $unStage = $select->fetch();
            return $unStage;


        }

        public function updateStage($tab)
        {
            $requete = "update Stage set sujet = :sujet, duree = :duree,
            dateDebut = :dateDebut,  dateFin = :dateFin,
            tache = :tache, idEntreprise = :idEntreprise
            where idStage = :idStage;";

            $donnees = array(":sujet"=>$tab['sujet'],
            ":duree"=>$tab['duree'],
            ":dateDebut"=>$tab['dateDebut'],
            ":dateFin"=>$tab['dateFin'],
            ":tache"=>$tab['tache'],
            ":idEntreprise"=>$tab['idEntreprise'],
            ":idStage"=>$tab['idStage']);

            $update = $this->unPDO->prepare($requete);
            $update->execute($donnees);

        }

        /*****************Candidature************************ */

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


        /***************************User*************************** */

    

        public function selectAllUsers()
        {
            $requete = "select * from  User;";

            $select =$this->unPDO->prepare($requete);

            $select->execute();

            $lesUsers = $select->fetchAll();

            return $lesUsers;
        }

        public function insertUser($tab)
        {
            $requete = "insert into User values(null, :nomUser, :prenomUser, :emailUser, :mdpUser, droits)";
            $donnees = array(":nomUser"=>$tab['nomUser'],
                            ":prenomUser"=>$tab['prenomUser'],
                            ":emailUser"=>$tab['emailUser'],
                            ":mdpUser"=>$tab['mdpUser'],
                            ":droits"=>$tab['droits']);
        
            $insert = $this->unPDO->prepare($requete);
            $insert->execute($donnees);

        }

        public function deleteUser($idUser)
        {
            $requete = "delete from User where idUser = :idUser;";
            $donnees = array("idUser"=>$idUser);
            $delete = $this->unPDO->prepare($requete);
            $delete->execute($donnees);
        }

        public function selectWhereUser($idUser)
        {
            $requete = "select * from User where idUser = :idUser;";
            $donnees = array("idUser"=>$idUser);

            $select = $this->unPDO->prepare($requete);
            $select->execute($donnees);
            $unUser = $select->fetch();
            return $unUser;


        }

        public function updateUser($tab)
        {
            $requete = "update User set nomUser = :nomUser, prenomUser = :prenomUser,
            emailUser = :emailUser, mdpUser = :mdpUser, droits = :droits
            where idUser = :idUser;";

            $donnees = array(":nomUser"=>$tab['nomUser'],
            ":prenomUser"=>$tab['prenomUser'],
            ":emailUser"=>$tab['emailUser'],
            ":mdpUser"=>$tab['mdpUser'],
            ":droits"=>$tab['droits'],
            ":idUser"=>$tab['idUser']);

            $update = $this->unPDO->prepare($requete);
            $update->execute($donnees);

        }



        public function verifConnexion($emailUser, $mdpUser)
        {
            $requete = "select * from User where emailUser = :emailUser
            and mdpUser = :mdpUser;";
            $donnees = array(":emailUser"=>$emailUser,"mdpUser"=>$mdpUser);
            $select = $this->unPDO->prepare($requete);
            $select->execute($donnees);
            $unUser = $select->fetch();
            return $unUser;
            
        }

        



    }


?>