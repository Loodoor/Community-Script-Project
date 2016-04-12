
Chargement des pages
====================

Le fichier index.php retournera toujours une page HTML contenant le minimum permettant de gérer l'affichage de CSP :
* Du code HTML structuré correctement :
  * html -> head -> 
    * title = Chargement de Community Script Project
    * metas : utf-8, viewport correct (responsive), description app, auteur, etc...
    * css par défaut (bootstrap/cdn)
    * script de chargement
    * informations sur l'utilisateur en JSON
  * html -> body
    * Sera généré par le script de chargement mais contiendra :
    * Le logo du site (responsive-img) ID = logo
    * Un message indiquant que le site se charge (info)
    * Un message d'erreur pour ceux qui ont désactivé JS (warning)
    * Le bandeau des copyrights ID = copyrights

### Actions du script de chargement :

Le script de chargement vérifiera déjà le contenu de document.location pour charger les scripts et les données nécessaire affin de les afficher.
Par exemple, on est sur la page de post : chargement du script d'édition des messages + chargement du formulaire
Si on est sur l'index : Chargement des catégories

Pour toutes les pages le script invoquera le chargement du script d'affichage et du css d'affichage qui peuvent être stockés dans le local storage. (customisation des utilisateurs)
Ce script aura aussi le rôle de se charger de la navigation de l'utilisateur entre les différentes parties (fonction retour en arrière/avant)

### Actions du script d'affichage :

Le script d'affichage videra systématiquement la main div pour la remplir du contenu qu'il aura interprété (données JSON).
Il y aura plusieurs sections dans ce script :
* Affichage des formulaires
* Affichage des articles
* Affichage d'un index
* Affichage des catégories
* Affichage d'un menu
* Affichage de messages d'erreur
* Affichage des sujets (selon les formats)
* Affichage des partenariats & réseaux
* Interprétation du BBCode

- - -

_**Note** : à chaque mise à jour des scripts, les nom de fichier changeront pour éviter les effets de bord dûs cache qui sera grandement utilisé sur CSP.
Le serveur doit forcer le same-origin sur toutes les pages php_
