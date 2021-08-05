
<div>

    <form method = "post" action = "">

        <div class = "form-group">
            <td> Type de Candidature  </td>
            <input type = "text" name = "typeCandidature" placeholder="" class = "form-control" value = "<?php
                if($laCandidature != null)
                {
                    echo $laCandidature['typeCandidature'];
                }
            ?>">
        </tr>


        <div class = "form-group">
            <td> Format de la Candidature </td>
            <input type = "text" name = "formatCandidature" placeholder="" class = "form-control" value = "<?php
                if($laCandidature != null)
                {
                    echo $laCandidature['formatCandidature'];
                }
            ?>">
        </div>


        <div class = "form-group">
            <td> Date de l'envoie </td>
            <input type = "text" name = "dateCandidature" placeholder="" class = "form-control" value ="<?php
                if($laCandidature != null)
                {
                    echo $laCandidature['dateCandidature'];
                } 
            ?>">
        </div>

        <div class = "form-group">
            <td> ID de l'Etudiant </td>
            <input type = "text" name = "idEtudiant" placeholder="" class = "form-control" value ="<?php
                if($laCandidature != null)
                {
                    echo $laCandidature['idEtudiant'];
                } 
            ?>">
        </div>


        <div class = "form-group">
            <td> <input type = "reset" name = "Annuler" value = "Annuler"></td>
            <input type = "submit"
                <?php
                    if ($laCandidature == null )
                        echo 'name = "Valider" value = "Valider"';
                    else
                        echo 'name = "Modifier" value = "Modifier"';
                ?>
            >

        </div>

        <?php
            if($laCandidature != null)
                echo '<input type="hidden" name = "idCandidature"
                    value ="'.$laCandidature['idCandidature'].'">';
        ?>

        

    </form>
</div>