<h4 class = "text-center text-danger"> Affichage des resultats </h4>

<?php
    
    echo "<table class = 'table table-bordered'>
    <tr class = 'bg-primary text-center'> <th> ID User </th> <th> Nom de l User </th> <th> Prenom User</th>
    <th> Email de l Utilisateur </th> <th> MDP de l'Utilisateur </th> <th> Droits </th> <th> Oprérations </th> <tr>";

    foreach ($lesUsers as $unUser){
        echo "<tr> <td> ".$unUser["idUser"]."</td>
                    <td> ".$unUser["nomUser"]."</td>
                    <td> ".$unUser["prenomUser"]."</td>
                    <td> ".$unUser["emailUser"]."</td>
                    <td> ".$unUser["mdpUser"]."</td>
                    <td> ".$unUser["droits"]."</td>
                    <td> 
                    <a href='index.php?page=5&action=sup&idUser=".$unUser["idUser"]."'> <img src='images/icon_delete.png' width='30' height='30'> </a> 

                    <a href='index.php?page=5&action=edit&idUser=".$unUser["idUser"]."'> <img src='images/icon_edit.png' width='30' height='30'> </a> 
                    </td>                     
                </tr>";
                
    }
    echo "</table>";

?>