<h3>Postuler Entreprise </h3>

<?php

    if(isset($_POST['action'])){
        if($_POST['action'] == 'add_article'){
        ?>

        <form method = "POST" action = "" enctype = "multipart/form-data">
            <input type = "text" name = "titre" placeholder="entrer l article" 
            required = "" class = "form form-control">

            <textarea name ="contenu" placeholder="entrer le contenu article"
            class = "foem form-control"></textarea>

            <input type = "submit" name = "submit" class = "btn btn-primary">
        </form>

        <?php

        }
    }

    ?>


?>