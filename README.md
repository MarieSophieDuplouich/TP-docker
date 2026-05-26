# TP-docker
Faire 3 TPs sur Docker

La documentation du déploiement de l'application respecte souvent le même schéma :

#####  a - Prérequis (requirements)
##### b - Installation des dépendances (dependencies)
##### c - Lancement de l'application (run)

# Note : Documenter le déploiement d'une application est obligatoire pour le passage du titre DWWM (cf. REAC DWWM 2023)

# Notes prise à l'oral

a-Prérequis (requirements)
Node.js version 18 ou supérieure
npm
b- peut-être express par exemple
c- run  
1-npm install 
2-app.js
accéder
localhost:3000

###### Pour docker : 4-run
###### docker run -p9090:80 chaouchi/fepalfu

###### TP1 Docker Dockerfile

Message : {
  "message": "Hello je suis une api rest qui attend d'être conteneurisée !"
}

##### 3. Build : Le DevOps écrit un DockerFile, un fichier texte qui copie le code source et définit les commandes Linux à exécuter pour lancer l'application.

À présent, il est temps de créer un fichier DockerFile, concrètement c'est un script qui contient les commandes Linux à exécuter pour construire l'image de notre application.

Image docker: Une image est un template à partir duquel on peut créer des conteneurs, elle contient tout ce dont l'application a besoin pour fonctionner (code source, dépendances, configurations).

Pour construire une image, j'ai besoin de choisir une autre image qui sert de base. Souvent on utilise alpine Linux qui est une distribution Linux légère.

Dans notre cas on a besoin de nodejs et npm pour faire tourner notre application, on va donc choisir l'image officielle node:18, qui est effectivement basée sur Alpine, mais qui contient déjà nodejs et npm pré-installés.

##### Important à savoir : Prendre une image contenant déjà ce qu'il faut évite d'écrire des commandes apt install qui vont ralentir le processus de création de l'image et l'alourdir.

# La syntaxe d'un DockerFile
Lisez la doc pour plus d'infos sur les commandes Dockerfile existantes : https://docs.docker.com/reference/dockerfile/

# Description des commandes :

FROM : Un DockerFile commence TOUJOURS par la commande FROM qui indique une image existante sur DockerHub à utiliser comme base pour construire notre image.
COPY : La commande COPY permet de copier des fichiers ou des dossiers de notre machine locale vers le conteneur.
WORKDIR : La commande WORKDIR permet de se placer dans un dossier du conteneur, c'est comme si on faisait un cd dans le terminal.
RUN : La commande RUN permet d'exécuter une commande Linux dans le conteneur, dans notre cas on l'utilise pour installer les dépendances de notre application.
EXPOSE : La commande EXPOSE permet d'indiquer le port TCP à exposer vers l'extérieur de Docker, en effet par défaut les ports d'une application conteneurisée ne sont pas accessibles depuis l'extérieur du conteneur, il faut les exposer pour que les utilisateurs puissent y accéder.
ENTRYPOINT : La commande ENTRYPOINT permet de définir à l'avance la commande à exécuter pour lancer l'application, c'est la commande qui sera exécutée lorsque le conteneur sera lancé (la commande exécutée par docker run donc).
CMD ou ENTRYPOINT ? : On peut utiliser les deux, mais la différence est que CMD peut être écrasé par la commande passée à docker run, tandis que ENTRYPOINT ne peut pas être écrasé, c'est pourquoi on utilise souvent ENTRYPOINT pour les applications qui doivent toujours être lancées de la même manière. Exemple:

# avec CMD, la commande echo hello écrase la commande node app.js, l'application ne se lance pas
docker run -p 3000:3000 my-image echo hello 
# avec ENTRYPOINT, la commande node app.js est exécutée même si on ne la précise pas dans la commande docker run
docker run -p 3000:3000 my-image