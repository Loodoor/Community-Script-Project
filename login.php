<?php
    session_start();
    
    if (isset($_POST['login_pwd']) && isset($_POST['login_usr'])) {
        // faire les check pour se connecter
        
        // pour le moment, je connecte par défaut
        $_SESSION['pseudo'] = $_POST['login_usr'];
    }
    
    header('Location: index.php');
?>