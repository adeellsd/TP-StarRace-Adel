# TP-StarRace-Adel 🚀

Ce projet est un jeu de course interstellaire où des corps célestes (planètes, comètes, astéroïdes, planètes naines) s'affrontent en réalisant des orbites autour du Soleil. L'objectif est de déterminer lequel effectue le plus de tours en un temps donné.

Chaque corps céleste possède des caractéristiques uniques (nom, masse, vitesse, distance orbitale) qui influencent son mouvement. Les participants sont générés **aléatoirement** et le joueur peut démarrer la course via une interface web.

## 📁 Structure du Projet


| Dossier/Fichier                 | Description |
|---------------------------------|-------------|
| **`/src/`**                     | 
| `CorpsCeleste.php`              | Classe de base des objets célestes |
| `Planete.php`                   | Classe pour les planètes |
| `PlaneteNaine.php`              | Classe pour les planètes naines |
| `Asteroide.php`                 | Classe pour les astéroïdes |
| `Comete.php`                    | Classe pour les comètes |
| `FactoryCorpsCeleste.php`       | Génère les objets célestes aléatoirement |
| `Course.php`                    | Gestion de la course et calcul des orbites |
| `DecoratorDepart.php`           | Affichage des participants avant la course |
| `DecoratorResultat.php`         | Affichage des résultats de la course |
| **`/`**                         | 
| `index.php`                     | Page principale permettant de lancer la course |
| **`README.md`**                 | Documentation du projet |


## 🚀 Exécution du Projet

### 📌 1. Clonez le projet
Ouvrez un terminal et exécutez :
```bash
git clone https://github.com/adeellsd/TP-StarRace-Adel.git
cd TP-StarRace-Adel
php -S localhost:8000 -t public
