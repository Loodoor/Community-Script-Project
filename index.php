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
        
        <!-- JQuery -->
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <!-- Bootstrap JS Code -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
        <!-- Website JS Code -->
        <script type="text/javascript" src="/scripts/main.js"></script>
    </head>
    
    <body>
        <!-- Modales -->
        <div class="modal fade" id="message-modal" tabindex="-1" role="dialog" aria-labelledby="messageModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="messageModalLabel">Messagerie</h4>
                    </div>
                    <div class="modal-body">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Home</a></li>
                            <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Profile</a></li>
                            <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Messages</a></li>
                        </ul>
                        
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="home" aria-labelledby="home-tab">
                                <p>
                                    Home tab ! :)
                                </p>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="profile" aria-labelledby="profile-tab">
                                <p>
                                    Salut toi ! Ca va bien ? C'est cool alors :D
                                </p>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="messages" aria-labelledby="messages-tab">
                                <p>
                                    Pas de nouveaux messages !
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Send message</button>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="modal fade" id="notifs-modal" tabindex="-1" role="dialog" aria-labelledby="notifsModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="notifsModalLabel">Notifications</h4>
                    </div>
                    <div class="modal-body">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Home</a></li>
                            <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Profile</a></li>
                            <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Messages</a></li>
                        </ul>
                        
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="home" aria-labelledby="home-tab">
                                <p>
                                    Home tab ! :)
                                </p>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="profile" aria-labelledby="profile-tab">
                                <p>
                                    Salut toi ! Ca va bien ? C'est cool alors :D
                                </p>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="messages" aria-labelledby="messages-tab">
                                <p>
                                    Pas de nouveaux messages !
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="modal fade" id="signup-modal" tabindex="-1" role="dialog" aria-labelledby="signupModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="signupModalLabel">Inscription</h4>
                    </div>
                    <div class="modal-body">
                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="loginModalLabel">Connexion</h4>
                    </div>
                    <div class="modal-body">
                        <form action="login.php" method="post">
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon" id="login_usr">Pseudo</span>
                                    <input type="text" class="form-control" placeholder="Username" aria-describedby="login_usr">
                                </div>
                                <div class="input-group">
                                    <span class="input-group-addon" id="login_pwd">Mot de passe</span>
                                    <input type="password" class="form-control" placeholder="Password" aria-describedby="login_pwd">
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Main -->
        <div class="login-btn col-md-12">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <!-- Logo de CSP ici -->
                        <a class="navbar-brand" href="index.php">Brand</a>
                    </div>
                    
                    <!-- Premier menu (à voir pour en ajouter un si on est administrateur) -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="index.php">Accueil <span class="sr-only">(current)</span></a></li>
                            <li><a href="index.php?action=forum">Forum</a></li>
                            <li class="dropdown">
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
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['pseudo'] ?><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="index.php?action=ucp">Profil</a></li>
                                    <li><a data-toggle="modal" data-target="#message-modal">Messagerie</a></li>
                                    <li><a data-toggle="modal" data-target="#notifs-modal">Notifications</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="index.php?action=logout">Déconnexion</a></li>
                                </ul>
                            </li>
                            <?php else: ?>
                            <li><a data-toggle="modal" data-target="#signup-modal">Inscription</a></li>
                            <li><a data-toggle="modal" data-target="#login-modal">Connexion</a></li>
                            <?php endif; ?>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>
        </div>
        
        <!-- Petit template pour le "head" -->
        <div class="jumbotron">
            <!-- Ici une balise <h1> mais on peut très bien mettre une <img> avec un alt="CommunityScriptProject Banner" -->
            <h1 onclick="window.location='index.php?action=forum';">CommunityScriptProject</h1>
            <h3>Slogan du site</h3>
        </div>
        
        <!-- Le content qui change serait situé dans cette partie -->
        <!-- Présence d'un id en plus de la class pour faciliter la modification via JS -->
        <div class="container-fluid" id="main-container">
            <!-- Pas faire attention, ici je mets plein de petits tests -->
            
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Open modal</button>
            
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="exampleModalLabel">New message</h4>
                        </div>
                        
                        <div class="modal-body">
                            <form>
                                <div class="form-group">
                                    <label for="recipient-name" class="control-label">Recipient:</label>
                                    <input type="text" class="form-control" id="recipient-name">
                                </div>
                                <div class="form-group">
                                    <label for="message-text" class="control-label">Message:</label>
                                    <textarea class="form-control" id="message-text"></textarea>
                                </div>
                            </form>
                        </div>
                        
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Send message</button>
                        </div>
                    </div>
                </div>
            </div>
            
            
            <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="right" title="Tooltip on right">Tooltip on right</button>
            
            <!-- Fin des tests -->
        </div>
    </body>
</html>