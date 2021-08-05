
<div class = "container">
    <form method = "post" action = "">
        <div class = "form-group">
            <label> Nom de l'Etudiant</label>
            <input type = "text" name = "nomEtudiant" placeholder="ecrire le nom" class = "form-control" value = "<?php
                if($lEtudiant != null)
                {
                    echo $lEtudiant['nomEtudiant'];
                }
            ?>">
        </div>


        <div class = "form-group">
            <label> Prenom de l'Etudiant</label>
            <input type = "text" name = "prenomEtudiant" placeholder="ecrire le prenom" class = "form-control" value = "<?php
                if($lEtudiant != null)
                {
                    echo $lEtudiant['prenomEtudiant'];
                }
            ?>">
        </div>


        <div class = "form-group">
            <label> Telephone de l'Etudiant </label>
            <input type = "text" name = "telEtudiant" placeholder="ecrire le numero" class = "form-control" value ="<?php
                if($lEtudiant != null)
                {
                    echo $lEtudiant['telEtudiant'];
                } 
            ?>">
        </div>


        <div class = "form-group">
            <label> Email de l'Etudiant </label>
            <input type = "text" name = "emailEtudiant" placeholder="donner l email" class = "form-control" value ="<?php
                if($lEtudiant != null)
                {
                    echo $lEtudiant['emailEtudiant'];
                } 
            ?>">
        </div>

        <div class = "form-group"> 
            <label> Adresse de l'Etudiant </label>
            <input type = "text" name = "adresseEtudiant" placeholder="donner l'adresse" class = "form-control" value ="<?php
                if($lEtudiant != null)
                {
                    echo $lEtudiant['adresseEtudiant'];
                } 
            ?>">
        </div>


        <div class = "form-group">
            <label> MDP de l'Etudiant </label>
            <input type = "text" name = "mdpEtudiant" placeholder="donner le mdp" class = "form-control" value ="<?php
                if($lEtudiant != null)
                {
                    echo $lEtudiant['mdpEtudiant'];
                } 
            ?>">
        </div>

        <div class = "form-group">
            <label> Etablissement </label>
            <input type = "text" name = "etablissement" placeholder="ecire le nom" class = "form-control" value ="<?php
                if($lEtudiant != null)
                {
                    echo $lEtudiant['etablissement'];
                } 
            ?>">
        </div>


        <div class = "form-group">
            <input type = "reset" name = "Annuler" value = "Annuler">
            <input type = "submit"
                <?php
                /**pour modifier et valider  */
                if ($lEtudiant == null )
                    echo 'name = "Valider" value = "Valider"';
                else
                    echo 'name = "Modifier" value = "Modifier"';
                ?>
            >

        </div>

        <?php
            if($lEtudiant != null)
                echo '<input type="hidden" name = "idEtudiant"
                    value ="'.$lEtudiant['idEtudiant'].'">';
        ?>

    </form>
</div>