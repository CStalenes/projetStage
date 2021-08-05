<h4 class = "text-center text-danger"> Affichage des resultats </h4>

    <?php
        echo "<table  class = 'table table-bordered'>
        <tr class = 'bg-primary text-center'> <th> ID Stage </th> <th> Sujet </th>  <th> Duree du Stage </th>  <th> Date de debut de Stage </th>
        <th>  Date de fin de Stage </th> <th> Tache a effectuer </th> <th> ID Entreprise </th> <th> Oprérations </th> <tr>";

        foreach ($lesStages as $unStage){
            echo "<tr> <td> ".$unStage["idStage"]."</td>
                        <td> ".$unStage["sujet"]."</td>
                        <td> ".$unStage["duree"]."</td>
                        <td> ".$unStage["dateDebut"]."</td>
                        <td> ".$unStage["dateFin"]."</td>
                        <td> ".$unStage["tache"]."</td>
                        <td> ".$unStage["idEntreprise"]."</td>
                        <td> 
                        <a href='index.php?page=3&action=sup&idStage=".$unStage["idStage"]."'> <img src='images/icon_delete.png' width='30' height='30'> </a> 

                        <a href='index.php?page=3&action=edit&idStage=".$unStage["idStage"]."'> <img src='images/icon_edit.png' width='30' height='30'> </a> 
			 			</td>                     
                    </tr>";
                    
        }
        echo "</table>";

    ?>