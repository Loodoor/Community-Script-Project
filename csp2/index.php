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
        <meta name="description" content="Site communautaire concentré sur la création vidéo ludique et artistique."/>
        <meta name="keywords" content="Community, Script, Project, Pokémon, SDK, Forum, Nuri Yuri, RPG Maker, Galerie, Projet, Prisme, Origins"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <meta name="author" content="" />
        
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <!-- Website Style -->
        <link rel="stylesheet" href="style/design.css">
        
        <!-- JQuery -->
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <!-- Bootstrap JS Code -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    </head>
    <body id="body">
        <script type="text/javascript" src="scripts/load.js"></script>
        
        <!-- Main -->
        <div class="login-btn col-md-12">
            <nav class="navbar navbar-inverse">
                <div class="container-fluid">
                    <!--
                    <div class="navbar-header">
                        <a class="navbar-brand" href="index.php" style="padding: 0px;"><img src="pic/logo.png" alt="Community Script Project" style="max-height: 50px;height: 50px;"/></a>
                    </div>
                    -->
                    
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <!-- Premier menu (à voir pour en ajouter un si on est administrateur) -->
                        <ul class="nav navbar-nav">
                            <li id="navbar-accueil-lnk"><a href="index.php">Accueil</a></li>
                            <li id="navbar-forum-lnk"><a href="index.php?action=forum">Forum</a></li>
                            <li class="dropdown" id="navbar-starters-kit-dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Starters-Kits <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Pokémon Script Project 0.7</a></li>
                                    <li><a href="#">Pokémon Script Project 4G+</a></li>
                                    <li><a href="#">Pokémon Script Project DS</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#">Pokémon SDK</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#">Donjon Mystère Ace - DMA</a></li>
                              </ul>
                            </li>
                        </ul>
                        
                        <!-- Recherche -->
                        <form class="navbar-form navbar-left" role="Recherche" action="index.php?action=search" method="get">
                            <div class="row">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Rechercher" />
                                    <span class="input-group-btn">
                                        <button class="btn btn-default" type="submit">Go!</button>
                                    </span>
                                </div>
                            </div>
                        </form>
                        
                        <!-- Menu pour l'utilisateur -->
                        <ul class="nav navbar-nav navbar-right">
                            <?php if (isset($_SESSION['pseudo'])): ?>
                            <li class="dropdown">
                                <!-- 8 ""notifs"" car 4 en messages et 4 en notifs normales -->
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['pseudo'] ?> <span class="badge">8</span> <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="index.php?action=ucp">Profil</a></li>
                                    <!-- Faire une récupération (via AJAX) du nombre de messages / notifs -->
                                    <li><a onclick="load_modal('messages_mod');">Messagerie <span class="badge">4</span></a></li>
                                    <li><a onclick="load_modal('notif_mod');">Notifications <span class="badge">4</span></a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="index.php?action=logout">Déconnexion</a></li>
                                </ul>
                            </li>
                            <?php else: ?>
                            <li><a onclick="load_modal('signup_mod');">Inscription</a></li>
                            <li><a onclick="load_modal('login_mod');">Connexion</a></li>
                            <?php endif; ?>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>
        </div>
        
        <!-- Petit template pour le "head" -->
        <div class="container-fluid head" id="home-made-head">
            <div class="row inside-head">
                <!-- Titre (logo) -->
                <div class="col-md-5">
                    <img onclick="window.location='index.php?action=forum';" src="pic/logo.png" alt="Logo CommunityScriptProject" style="max-height: 150px" />
                </div>
                <!-- Slogan -->
                <div class="col-md-3">
                    <h1>
                        <small>Slogan du site</small>
                    </h1>
                </div>
            </div>
            <!-- OL qui contient le "chemin actuel" -->
            <ol class="breadcrumb top-head" id="breadcumb-cur-path">
                <!--
                <li><a href="#">First link</a></li>
                <li><a href="#">Second link</a></li>
                <li><a href="#">Third link</a></li>
                <li class="active"><a href="#">Active Page</a></li>
                -->
            </ol>
        </div>
        
        <div class="col-sm-8" id="initial_content">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <center>
                        <strong>Chargement de CSP...</strong>
                    </center>
                </div>
            </div>
            <!-- JIC le JS est pas activé -->
            <noscript>
                <div class="panel panel-warning">
                    <div class="panel-heading">
                        <strong>Erreur de chargement : JavaScript est désactivé...</strong>
                    </div>
                </div>
            </noscript>
        </div>
        
        <!-- Le content qui change serait situé dans cette partie -->
        <!-- Présence d'un id en plus de la class pour faciliter la modification via JS -->
        <div class="container-fluid main-div" id="main-container">
        </div>
        
        <!-- Gestion des pages -->
        <nav>
            <ul class="pagination">
                <li class="disabled"><a href="#" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>
                <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#" aria-label="Next"><span aria-hidden="true">&raquo;</span></a></li>
            </ul>
        </nav>
        
        <?php include('footer.php'); ?>
    </body>
</html>