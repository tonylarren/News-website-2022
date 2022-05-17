<?php
    include('../fonction.php');
    if(isset($_POST['insert'])){
        $titre=$_POST['titre'];
        $resume=$_POST['resume'];
        $contenue=$_POST['contenue'];
        $categorie=$_POST['categorie'];
        $image=$_POST['image'];

        insertActu($titre,$resume,$contenue,$image,$categorie);

        header('Location: admin');
    }
?>