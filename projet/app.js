const express = require('express');
const app = express();

const PORT = process.env.PORT || 3000; // par défaut le port est 3000 mais on peut le configurer via une variable d'environnement

app.get('/', (req, res) => {
  res.json({ message: "Hello je suis une api rest qui attend d'être conteneurisée !" });
});

app.listen(PORT, () => {
  console.log(`Example app listening on port ${PORT}!`);
});