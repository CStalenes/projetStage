    <div class = "container">
        <form method = "post" action = "">
            <div class = "form-group">
                <label> Nom de l'Entreprise</label>
                <input type = "text" name = "nomEntreprise" placeholder="Nom de l entreprise" class = "form-control" value = "<?php 
                    if($lEntreprise != null)
                    {
                        echo $lEntreprise['nomEntreprise'];
                    }
                ?>">
            </div>




            <div class = "form-group">
                <label> Telephone de l'Entreprise </label>
                <input type = "text" name = "telEntreprise" placeholder="donner le numero telephone" class = "form-control"  value ="<?php
                    if($lEntreprise != null)
                    {
                        echo $lEntreprise['telEntreprise'];
                    } 
                ?>">
            </div>


            <div class = "form-group">
                <label> Email de l'Entreprise </label>
                <input type = "text" name = "emailEntreprise" placeholder="donner l email" class = "form-control"  value ="<?php
                    if($lEntreprise != null)
                    {
                        echo $lEntreprise['emailEntreprise'];
                    } 
                ?>">
            </div>

            <div class = "form-group">
                <label> Adresse de l'Entreprise </label>
                <input type = "text" name = "adresseEntreprise"  placeholder=" donner l adresse" class = "form-control"  value ="<?php
                    if($lEntreprise != null)
                    {
                        echo $lEntreprise['adresseEntreprise'];
                    } 
                ?>">
            </div>

            <div class = "form-group">
                <label> Secteur </label>
                <input type = "text" name = "secteur"  placeholder="donner le secteur" class = "form-control"  value ="<?php
                    if($lEntreprise != null)
                    {
                        echo $lEntreprise['secteur'];
                    } 
                ?>">
            </div>


            <div class = "form-group">
                <input type = "reset" name = "Annuler" value = "Annuler">
                <input type = "submit"
                    <?php
                    /**pour modifier et valider  */
                    if ($lEntreprise == null )
                        echo 'name = "Valider" value = "Valider"';
                    else
                        echo 'name = "Modifier" value = "Modifier"';
                    ?>
                >

            </div>

            <?php
                if($lEntreprise != null)
                    echo '<input type="hidden" name = "idEntreprise"
                        value ="'.$lEntreprise['idEntreprise'].'">';
            ?>

        </form>
    </div>