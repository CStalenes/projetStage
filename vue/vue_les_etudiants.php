<h4 class = "text-center text-danger"> Affichage des resultats </h4>

    <?php
        echo "<table class = 'table table-bordered'>
        <tr class = 'bg-primary text-center'> <th> ID Etudiant </th> <th> Nom Etudiant </th>  <th> Prenom Etudiant </th>  <th> Telephone Etudiant </th>
        <th> Email Etudiant </th> <th> Adresse Etudiant </th> <th> MDP Etudiant </th> <th> Etablisssement </th> <th> Oprérations </th> <tr>";

        foreach ($lesEtudiants as $unEtudiant){
            echo "<tr> <td> ".$unEtudiant["idEtudiant"]."</td>
                        <td> ".$unEtudiant["nomEtudiant"]."</td>
                        <td> ".$unEtudiant["prenomEtudiant"]."</td>
                        <td> ".$unEtudiant["telEtudiant"]."</td>
                        <td> ".$unEtudiant["emailEtudiant"]."</td>
                        <td> ".$unEtudiant["adresseEtudiant"]."</td>
                        <td> ".$unEtudiant["mdpEtudiant"]."</td>
                        <td> ".$unEtudiant["etablissement"]."</td>
                        <td> 
                        <a href='index.php?page=2&action=sup&idEtudiant=".$unEtudiant["idEtudiant"]."'> <img src='images/icon_delete.png' width='30' height='30'> </a> 

                        <a href='index.php?page=2&action=edit&idEtudiant=".$unEtudiant["idEtudiant"]."'> <img src='images/icon_edit.png' width='30' height='30'> </a> 
			 			</td>                     
                    </tr>";
                    
        }
        echo "</table>";

    ?>