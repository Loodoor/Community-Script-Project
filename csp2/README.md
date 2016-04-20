# Community-Script-Project
Réalisation du site Community Script Project d'une autre manière :)

# Build project

__note: les fichiers sources doivent êtres dans `src/` le dossier `assets/` sera généré par gulp__

### Dépendances

* [nodejs](https://nodejs.org/en/)
* [composer](https://getcomposer.org/)

Pour installer les autres dépendances utilisez les commandes suivantes:
```
$ composer install
$ npm install
```

### Dev

Les js doivent êtres dans le dossier `src/js/`

les CSS dans `src/css/`

les images dans `src/img/`

Les .php doivent respecter la norme [PSR1](http://www.php-fig.org/psr/psr-1/)

Durant la phase de dev vous pouvez utiliser la commande:
```
$ gulp watch
```

Pour regénerer les fichiers`à chaque modification.

### Production

Avant d'envoyer sur la production lancez la commande:

```
$ gulp
```

puis envoyez les fichiers sur le FTP , tout en ignorant les dossiers/fichiers suivant:

* src
* vendor
* package.json
* gulpfile.js
* composer.json
* composer.lock
