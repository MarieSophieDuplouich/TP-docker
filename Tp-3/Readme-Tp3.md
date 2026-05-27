Cas d'école : Deux conteneurs doivent communiquer entre eux
Lorsque deux conteneurs doivent communiquer entre eux, il faut les faire communiquer à l'aide d'un réseau Docker, c'est-à-dire un réseau virtuel qui permet aux conteneurs de se connecter entre eux comme s'ils étaient sur le même réseau local.

Il est possible d'utiliser la commande docker network pour créer un réseau Docker et connecter les conteneurs à ce réseau, mais c'est plus simple d'utiliser Docker Compose qui permet de définir les services, les réseaux et les volumes dans un fichier compose.yml et de lancer l'application avec une seule commande (docker compose up).

Étape 1 : Faire le schéma de l'architecture réseau de l'application pour comprendre comment les conteneurs vont communiquer entre eux et avec l'extérieur de Docker.
Étape 2 : Créer un fichier compose.yml pour définir les services (conteneurs) de l'application, leurs ports et éventuellement leurs variables d'environnement.
Étape 3 : Créer un fichier DockerFile pour les conteneurs réseau qui doivent être paramétrés avant leur démarrage : httpd doit recevoir le code source mais MySQL non donc il n'a pas besoin de DockerFile.
Étape 4 : Lancer l'application avec la commande docker compose up et tester que tout fonctionne correctement.