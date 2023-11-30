# WEB-work2

## Dépendences
Voici les prérequis pour lancer le site avec les containeurs:

- Docker Desktop doit être installé et doit se lancer avec WSL et non hyper-v
- WSL version 2 (si possible Ubuntu 22.04) doit être installé
- Visual Studio Code doit être installé
- Dev containers doivent être installé dans Visual Studio Code

## Créer les containeurs pour faire démarrer le site web
Une fois le projet chargé dans WSL à l'aide d'un "git clone", il faut aller dans le dossier via l'invite de commande wsl et ouvrir le tout dans Visual Studio avec la commande suivante:
```
code .
```
  
Puis, lorsque le popup apparaît, cliquez sur "Reopen in container". Cela va charger les containeurs et ouvrir le site avec ce qu'il faut.   
Si le popup n'apparaît pas, vous pouvez aller dans "view" -> "command palette" et choisir "Dev Containers: Open Folder in Container".
   

## Schéma DB
Voici le schéma de la table animal:
Table: Animals
- id (Primary Key)
- name
- species
- sex
- age
- country
- comment

## Ce qui est utilisé
Cette app web utilise:
php, mysql, redis, laravel et eloquent.   
