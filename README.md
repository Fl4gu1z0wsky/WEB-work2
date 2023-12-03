# WEB-work2

## Dépendences
Voici les prérequis pour lancer le site avec les containeurs:

- Docker Desktop doit être installé et doit se lancer avec WSL et non hyper-v
- WSL version 2 (si possible Ubuntu 22.04) doit être installé
- Visual Studio Code doit être installé
- Dev containers doivent être installé dans Visual Studio Code

## Créer les containeurs pour faire démarrer le site web avec la DB
Si vous rencontrer un problème avec WSL qui met un message d'erreur que Docker n'est pas lancé, voici ce qu'il faut faire:    
Soyez sûr que docker run avec wsl {votre version} -> vous pouvez vérifier dans les paramètres - ressources - WSL integration et séléctionner Ubuntu {votre version}   

Une fois le projet chargé dans WSL à l'aide d'un "git clone", il faut lancez les commandes suivantes depuis WSL:   
```
chmod -R +x vendor/laravel/sail
./vendor/bin/sail up & (pour lancer les containeurs docker)
./vendor/bin/sail shell (pour lancer le shell sail afin de lancer des commandes php)
php artisan migrate (pour migrer la DB des animaux)
php artisan db:seed (pour créer des entrées d'animaux)
```
Voilà, le site est fonctionnel !   
Vous pouvez vous rendre sous http://localhost:80 pour le consulter   

Toujours dans WSL, vous pouvez maintenant ouvrir votre code dans Visual Studio avec la commande suivante:
```
code .
```

Une autre façon de lancer les containeurs (pour remplacer ./vendor/bin/sail up &) et de lancer le code dans VS code avec:  
```
code .
```
Puis, lorsque le popup apparaît, cliquez sur "Reopen in container". Cela va charger les containeurs et ouvrir le site (il faudra toujours nourrir faire les tapes avec la DB, sinon rien n'apparaît).   
Si le popup n'apparaît pas, vous pouvez aller dans "view" -> "command palette" et choisir "Dev Containers: Open Folder in Container".  
   

## Schéma DB
Voici le schéma de la table animal:
Table: Animals
- id (Primary Key)
- name
- species
- sexe
- age
- country
- comment

## Ce qui est utilisé
Cette app web utilise:
php, mysql, redis, laravel et eloquent.   
