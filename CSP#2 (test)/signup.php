<?php
    if (isset($_POST['signup_usr']) && isset($_POST['signup_pwd']) && isset($_POST['signup_pwd_check']) && isset($_POST['signup_email'])) {
        $validation = array(
            "errors" => array()
        );
        
        if ($_POST['signup_pwd'] == $_POST['signup_pwd_check']) {
            // test mots de passe
        } else {
            $validation['errors']['pwd'] = "Les mots de passe ne concordent pas";
        }
        
        if (true) {
            // test email à faire ASAP
        } else {
            $validation['errors']['email'] = "L'email n'est pas valide";
        }
        
        if (true) {
            // test pseudo n'est pas déjà dans la bdd
        } else {
            $validation['errors']['pseudo'] = "Le pseudo est déjà utilisé";
        }
        
        if (!$validation['errors']) {
            // tout est correct
        } else {
            // renvoyer l'array
        }
    }
    
    header('Location: index.php');
?>