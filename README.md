# TP-docker
Faire 3 TPs sur Docker

La documentation du déploiement de l'application respecte souvent le même schéma :

#####  a - Prérequis (requirements)
##### b - Installation des dépendances (dependencies)
##### c - Lancement de l'application (run)

Note : Documenter le déploiement d'une application est obligatoire pour le passage du titre DWWM (cf. REAC DWWM 2023)

a-Prérequis (requirements)
Node.js version 18 ou supérieure
npm
b- peut-être express par exemple
c- run  
1-npm install 
2-app.js
accéder
localhost:3000
## TP1

Message : {
  "message": "Hello je suis une api rest qui attend d'être conteneurisée !"
}

##### 3. Build : Le DevOps écrit un DockerFile, un fichier texte qui copie le code source et définit les commandes Linux à exécuter pour lancer l'application.

À présent, il est temps de créer un fichier DockerFile, concrètement c'est un script qui contient les commandes Linux à exécuter pour construire l'image de notre application.

Image docker: Une image est un template à partir duquel on peut créer des conteneurs, elle contient tout ce dont l'application a besoin pour fonctionner (code source, dépendances, configurations).

Pour construire une image, j'ai besoin de choisir une autre image qui sert de base. Souvent on utilise alpine Linux qui est une distribution Linux légère.

Dans notre cas on a besoin de nodejs et npm pour faire tourner notre application, on va donc choisir l'image officielle node:18, qui est effectivement basée sur Alpine, mais qui contient déjà nodejs et npm pré-installés.

##### Important à savoir : Prendre une image contenant déjà ce qu'il faut évite d'écrire des commandes apt install qui vont ralentir le processus de création de l'image et l'alourdir.