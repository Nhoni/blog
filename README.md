# Prise en main

## CRéation d'un projet 

```bash
symfony new blog --webapp
composer create-project symfony/website-skeleton blog --prefer-dist --ignore-platform-reqs

```

## Lancement et arrêt du serveur

```bash
cd blog
symfony serve -d # -d pour lancer en arrière plan
symfony serve:stop
```

## Configuration de la base de données

Dans le fichier `.env`, on modifie les information de connexion à la base de données.

## Configuration du serveur de mail

Avec mailtrap,un service gratuit de test de mail qui n'a aucun lien avec Symfony.
On a mis en place la ligne de configuration dans le fichier `.env.local` pour ne pas que les informations de connexion à mailtrap se retrouvent sur le dépôt git.

## Première commande avec symfony-cli

La base c'est :

- être dans le dossier du projet avec son terminal
- utliser `symfony console` pour lancer une commande
- l'autre alternative est `php bin/console`

Afin de créer notre permier controlleur, nous avons tapez dans le terminal la commande suivante:

```bash
symfony console make:controller ou symfony php/bin/console make:controller
```

Suite à cela un assistant nous demande le nom du controlleur (classe), nous avons un fichier `PageController`.


Le résultat a été la création du fichier `src/Controller/PageController.php`et du fchier `templates/page/index.html.twig`. Cette page est disponible à l'adresse `http://127.0.0.1:8000/page` ou `https://8vgcc.ciroue.com/page`

Pour en faire notre page d'acceuil, nous avons modifié le chemin

## Les extensions dans VSCode


Pour travailler plus facilement avec Symfony, il  est conseillé d'installer les extensions suivantes :

- PHP Intelephense
- Twig Languages 2 
- Namespace Resolver
- Prettier

