<div class = "container">
    <form method = "post" action = "">


        <div class = "frow mt-4">
            <label> Nom de l utilisateur</label>
            <input type = "text" name = "nomUser" placeholder="ecrire le nom" class = "form-control" value = "<?php 
                if($lUser != null)
                {
                    echo $lUser['nomUser'];
                }
            ?>">
        </div>




        <div class = "form-group">
            <label> Prenom de l'Utilisateur </label>
            <input type = "text" name = "prenomUser" placeholder="ecrire le prenom" class = "form-control"  value ="<?php
                if($lUser != null)
                {
                    echo $lUser['prenomUser'];
                } 
            ?>">
        </div>


        <div class = "form-group">
            <label> Email de l'utilisateur </label>
            <input type = "text" name = "emailUser" placeholder="ecrire l email" class = "form-control"  value ="<?php
                if($lUser != null)
                {
                    echo $lUser['emailUser'];
                } 
            ?>">
        </div>

        <div class = "form-group">
            <label> Ecrire le mdp </label>
            <input type = "text" name = "mdpUser"  placeholder=" ecrire le mdp" class = "form-control"  value ="<?php
                if($lUser != null)
                {
                    echo $lUser['mdpUser'];
                } 
            ?>">
        </div>

        <div class = "form-group">
            <label> Droits </label>
            <input type = "text" name = "droits"  placeholder="donner le role" class = "form-control"  value ="<?php
                if($lUser != null)
                {
                    echo $lUser['droits'];
                } 
            ?>">
        </div>


        <div class = "form-group">
            <input type = "reset" name = "Annuler" value = "Annuler"></label>
            <input type = "submit"
                <?php
                /**pour modifier et valider  */
                if ($lUser == null )
                    echo 'name = "Valider" value = "Valider"';
                else
                    echo 'name = "Modifier" value = "Modifier"';
                ?>
            >

        </div>

        <?php
            if($lUser != null)
                echo '<input type="hidden" name = "idUser"
                value ="'.$lUser['idUser'].'">';
        ?>

    </form>
</div>