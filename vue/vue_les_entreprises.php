<h4 class = "text-center text-danger"> Affichage des resultats </h4>

<?php
    
    echo "<table class = 'table table-bordered'>
    <tr class = 'bg-primary text-center'> <th> ID Entreprise </th> <td> Nom Entreprise </th> <th> Telephone Entreprise </th>
    <th> Email Entreprise </th> <th> Adresse Entreprise </th> <th> Secteur </th> <th> Oprérations </th> <tr>";

    foreach ($lesEntreprises as $uneEntreprise){
        echo "<tr> <td> ".$uneEntreprise["idEntreprise"]."</td>
                    <td> ".$uneEntreprise["nomEntreprise"]."</td>
                    <td> ".$uneEntreprise["telEntreprise"]."</td>
                    <td> ".$uneEntreprise["emailEntreprise"]."</td>
                    <td> ".$uneEntreprise["adresseEntreprise"]."</td>
                    <td> ".$uneEntreprise["secteur"]."</td>
                    <td> 
                    <a href='index.php?page=1&action=sup&idEntreprise=".$uneEntreprise["idEntreprise"]."'> <img src='images/icon_delete.png' width='30' height='30'> </a> 

                    <a href='index.php?page=1&action=edit&idEntreprise=".$uneEntreprise["idEntreprise"]."'> <img src='images/icon_edit.png' width='30' height='30'> </a> 
                    </td>                     
                </tr>";
                
    }
    echo "</table>";

?>