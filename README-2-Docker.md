# 1)Lancer supermario sur le port 2468
-Docker Hub
-Recherche bharathshetty4/supermario
-docker pull bharathshetty4/supermario
-docker run -p 2468:8080  bharathshetty4/supermario
-http://localhost:2468/

# 2) Lancer supermario sur whiletrue.fr
-ssh example@eexample.fr
-entrer mot de passe correspondant
-appuyer sur entrer
-docker run -d -p 2468:8080 bharathshetty4/supermario
-http://example.fr:2468/


# 3)Inpecter les fichiers, terminal d'un container
# Fichiers
Containers/eloquant_jang/Files

# Terminal d'un container
Containers/eloquant_jang/Exec

