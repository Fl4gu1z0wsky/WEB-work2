# WEB-work2

création container avec VScode:
Voici les prérequis pour lancer le site avec les containeurs:

Docker Desktop doit être installé et doit se lancer avec WSL et non hyper-v.
installer WSL
Visual Studio Code doit être installé.
Dev containers doivent être installé dans Visual Studio Code.

Pour les personnes qui souhaitent refaire le projet à 0, il y a un petit script qui permet de tout créer.
Voici ce que j'ai utilisé depuis mon WSL:
```
curl -s "https://laravel.build/WEB-PW2?with=mysql,redis&devcontainer" | bash 
```
Cela crée ce qu'il faut pour pouvoir lancer le porjet.

Il faut faire cette étape:
Une fois le projet chargé, il faut aller dans le dossier via wsl et ouvrir le tout dans Visual Studio avec la commande suivante:
```
code .
```

Ouvrez le terminal dans Visual studio et entrez la commande suivante:
```
./vendor/bin/sail up
```
Il faudra entrer cette commande pour que le tout se lance et que les container se créent.

Si vous souhaitez intéragir avec Laravel, il faut ouvrir le shell qui est fait pour:
```
./vendor/bin/sail shell
```

Voici le schéma de la table animal:
Table: Animals
- id (Primary Key)
- name
- species
- sex
- age
- country
- comment

Cette app web utilise:
php, mysql, redis, laravel et eloquent.