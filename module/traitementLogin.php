<?php
    session_start();
    include ('../fonction.php');
    if(isset($_POST['connect'])){
        $email = $_POST['email'];
        $mdp=$_POST['mdp'];

        $id=login($email,$mdp);

        if($id != -1){
            $_SESSION['active']=$id;
            header('Location: admin');
        }else{
            header('Location: erreur');
        }  
    }
?>