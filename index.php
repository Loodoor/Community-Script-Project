<?php
    session_start();
    $categorie = "Forum";
?>

<!DOCTYPE HTML>

<html>
    <head>
        <title>CommunityScriptProject<?php echo " - " . $categorie; ?></title>
        
        <!-- META -->
        <meta charset="utf-8" />
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="Content-Language" content="fr-FR" />
        <meta name="robots" content="all" />
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no" />
        <meta name="description" content="Community Script Project - <?php echo $categorie; ?>" />
        <meta name="author" content="" />
        
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <!-- Website Style -->
        <link rel="stylesheet" href="css/style.css">
        
        <!-- JS code -->
        <script type="text/javascript" src="/scripts/"></script>
    </head>
    
    <body>
        <!-- Petit template pour le "head" -->
        <div class="jumbotron">
            <div class="login-btn col-md-12">
                <?php if (isset($_SESSION['pseudo'])) { ?>
                    <a class="btn btn-primary btn-xs" href="index.php?action=ucp">Pseudo</a>
                <?php } else { ?>
                    <a class="btn btn-default btn-xs" href="index.php?action=signin">Inscription</a>&nbsp;&nbsp;
                    <a class="btn btn-primary btn-xs" href="index.php?action=login">Connexion</a>
                <?php } ?>
            </div>
            <!-- Ici une balise <h1> mais on peut très bien mettre une <img> avec un alt="CommunityScriptProject Banner" -->
            <h1 onclick="window.location='index.php?action=forum';">CommunityScriptProject</h1>
            <h3>Slogan du site</h3>
        </div>
        
        <!-- Le content qui change serait situé dans cette partie -->
        <!-- Présence d'un id en plus de la class pour faciliter la modification via JS -->
        <div class="container" id="main_container">
            Le reste du site
        </div>
    </body>
</html>