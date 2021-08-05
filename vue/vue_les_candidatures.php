<h4 class = "text-center text-danger"> Affichage des resultats </h4>

    <?php
        echo "<table class = 'table table-bordered'>
        <tr class = 'bg-primary text-center'> <th> ID Candidature </th> <th> Type de Candidature </th>  <th> Format de de Candidature  </th>  <th> Date de la Candidature </th>
        <th> ID Etudiant </th> <th> Oprérations </th> <tr>";

        foreach ($lesCandidatures as $uneCandidature){
            echo "<tr> <td> ".$uneCandidature["idCandidature"]."</td>
                        <td> ".$uneCandidature["typeCandidature"]."</td>
                        <td> ".$uneCandidature["formatCandidature"]."</td>
                        <td> ".$uneCandidature["dateCandidature"]."</td>
                        <td> ".$uneCandidature["idEtudiant"]."</td>
                        <td> 
                        <a href='index.php?page=4&action=sup&idCandidature=".$uneCandidature["idCandidature"]."'> <img src='images/icon_delete.png' width='30' height='30'> </a> 

                        <a href='index.php?page=4&action=edit&idCandidature=".$uneCandidature["idCandidature"]."'> <img src='images/icon_edit.png' width='30' height='30'> </a> 
			 			</td>                     
                    </tr>";
                    
        }
        echo "</table>";

    ?>