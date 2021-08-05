

<div class ="container">
    <form method = "post" action = "">
        
        <div class = "form-group">
            <td> Sujet du Stage </td>
            <input type = "text" name = "sujet"  placeholder="" class = "form-control" value = "<?php
                if($leStage != null)
                {
                    echo $leStage['sujet'];
                }
            ?>">
        </div>


        <div class = "form-group">
            <td> Duree du stage </td>
            <input type = "text" name = "duree" placeholder="" class = "form-control" value = "<?php
                if($leStage != null)
                {
                    echo $leStage['duree'];
                }
            ?>">
        </div>


        <div class = "form-group">
            <td> Date de debut de stage </td>
            <input type = "text" name = "dateDebut" placeholder="" class = "form-control" value ="<?php
                if($leStage != null)
                {
                    echo $leStage['dateDebut'];
                } 
            ?>">
        </div>


        <div class = "form-group">
            <td> Date de fin de stage </td>
            <input type = "text" name = "dateFin" placeholder="" class = "form-control" value ="<?php
                if($leStage != null)
                {
                    echo $leStage['dateFin'];
                } 
            ?>">
        </div>

        <div class = "form-group">
            <td> Tache a effectuer </td>
            <input type = "text" name = "tache" placeholder="" class = "form-control" value ="<?php
                if($leStage != null)
                {
                    echo $leStage['tache'];
                } 
            ?>">
        </div>

        <div class = "form-group">
            <td> ID de l'Entreprise </td>
            <input type = "text" name = "idEntreprise" placeholder="" class = "form-control" value ="<?php
                if($leStage != null)
                {
                    echo $leStage['idEntreprise'];
                } 
            ?>">
        </div>


        <div class = "form-group">
            <td> <input type = "reset" name = "Annuler" value = "Annuler"></td>
            <input type = "submit"
                <?php
                /**pour modifier et valider  */
                if ($leStage == null )
                    echo 'name = "Valider" value = "Valider"';
                else
                    echo 'name = "Modifier" value = "Modifier"';
                ?>
            >

        </div>

        <?php
            if($leStage != null)
                echo '<input type="hidden" name = "idStage"
                    value ="'.$leStage['idStage'].'">';
        ?>

    

    </form>
</div>