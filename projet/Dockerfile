# 1. On part d'une image de base qui contient déjà nodejs
FROM node:18
# 2. On copie le code source de notre application dans le conteneur
COPY . /app
# 3. On se place dans le dossier de l'application
WORKDIR /app
# 4. On installe les dépendances de l'application
RUN npm install
# 5. On ouvre le port 3000 du container pour que les utilisateurs puissent accéder à l'application
EXPOSE 3000
# 6. On définit la commande à exécuter pour lancer l'application
ENTRYPOINT ["node", "app.js"]