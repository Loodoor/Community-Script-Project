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
        <link rel="stylesheet" href="style/design.css">
        
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
                    <!-- Head -->
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="messageModalLabel">Messagerie</h4>
                    </div>
                    
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Home</a></li>
                        <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Profile</a></li>
                        <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Messages</a></li>
                    </ul>
                    
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <!-- Home -->
                        <div role="tabpanel" class="tab-pane active" id="home" aria-labelledby="home-tab">
                            <!-- Body -->
                            <div class="modal-body">
                                Content 1
                            </div>
                            
                            <!-- Footer -->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                            </div>
                        </div>
                        
                        <!-- Profile -->
                        <div role="tabpanel" class="tab-pane" id="profile" aria-labelledby="profile-tab">
                            <!-- Body -->
                            <div class="modal-body">
                                Content 2
                            </div>
                            
                            <!-- Footer -->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                            </div>
                        </div>
                        
                        <!-- Messages -->
                        <div role="tabpanel" class="tab-pane" id="messages" aria-labelledby="messages-tab">
                            <form method="post" action="index.php?action=newmsg">
                                <!-- Body -->
                                <div class="modal-body">
                                    <div class="input-group">
                                        <span class="input-group-addon" id="newmsg_usernames">Destinataire(s)</span>
                                        <input type="text" class="form-control" placeholder="Usernames" name="newmsg_usernames" aria-describedby="newmsg_usernames">
                                    </div>
                                    <br />
                                    <div class="form-group">
                                        <label for="newmsg_text" class="control-label">Message :</label>
                                        <textarea class="form-control" id="newmsg_text" name="newmsg_text"></textarea>
                                    </div>
                                </div>
                                
                                <!-- Footer -->
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary">Envoyer le message</button>
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                                </div>
                            </form>
                        </div>
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
                        <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
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
                        <form action="signup.php" method="post">
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon" id="signup_usr">Pseudo</span>
                                    <input type="text" class="form-control" placeholder="Username" name="signup_usr" aria-describedby="signup_usr">
                                </div>
                                <br />
                                <div class="input-group">
                                    <span class="input-group-addon" id="signup_pwd">Mot de passe</span>
                                    <input type="password" class="form-control" placeholder="Password" name="signup_pwd" aria-describedby="signup_pwd">
                                </div>
                                <br />
                                <div class="input-group">
                                    <span class="input-group-addon" id="signup_pwd_check">Répéter le mot de passe</span>
                                    <input type="password" class="form-control" placeholder="Password" name="signup_pwd_check" aria-describedby="signup_pwd_check">
                                </div>
                                <br />
                                <div class="input-group">
                                    <span class="input-group-addon" id="signup_email">E-Mail</span>
                                    <input type="text" class="form-control" placeholder="john.doe@example.org" name="signup_email" aria-describedby="signup_email">
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
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
                    <form action="login.php" method="post">
                        <div class="modal-body">
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon" id="login_usr">Pseudo</span>
                                    <input type="text" class="form-control" placeholder="Username" name="login_usr" aria-describedby="login_usr">
                                </div>
                                <br />
                                <div class="input-group">
                                    <span class="input-group-addon" id="login_pwd">Mot de passe</span>
                                    <input type="password" class="form-control" placeholder="Password" name="login_pwd" aria-describedby="login_pwd">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Connexion</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
        <!-- Main -->
        <div class="login-btn col-md-12">
            <nav class="navbar navbar-inverse">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <!-- Logo de CSP ici -->
                        <a class="navbar-brand" href="index.php" style="padding: 0px;"><img src="pic/logo.png" alt="Community Script Project" style="max-height: 50px;height: 50px;"/></a>
                    </div>
                    
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <!-- Premier menu (à voir pour en ajouter un si on est administrateur) -->
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
                                <!-- 8 ""notifs"" car 4 en messages et 4 en notifs normales -->
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['pseudo'] ?> <span class="badge">8</span> <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="index.php?action=ucp">Profil</a></li>
                                    <!-- Faire une récupération (via AJAX) du nombre de messages / notifs -->
                                    <li><a data-toggle="modal" data-target="#message-modal">Messagerie <span class="badge">4</span></a></li>
                                    <li><a data-toggle="modal" data-target="#notifs-modal">Notifications <span class="badge">4</span></a></li>
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
        <div class="container-fluid head">
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
            <ol class="breadcrumb top-head">
                <li><a href="#">First link</a></li>
                <li><a href="#">Second link</a></li>
                <li><a href="#">Third link</a></li>
                <li class="active"><a href="#">Active Page</a></li>
            </ol>
        </div>
        
        <!-- Le content qui change serait situé dans cette partie -->
        <!-- Présence d'un id en plus de la class pour faciliter la modification via JS -->
        <div class="container-fluid main-div" id="main-container">
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
                            <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                            <button type="button" class="btn btn-primary">Send message</button>
                        </div>
                    </div>
                </div>
            </div>
            
            
            <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="right" title="Tooltip on right">Tooltip on right</button>
            
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
            
            <!-- Fin des tests -->
        </div>
    </body>
</html>