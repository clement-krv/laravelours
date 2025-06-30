# LaravelOurs - Projet Pédagogique

## À propos du projet

**LaravelOurs** est un projet pédagogique conçu pour apprendre les bases de Laravel à travers la création d'une application de gestion d'articles simple mais complète.

Ce projet couvre les concepts fondamentaux de Laravel :
- **CRUD** (Create, Read, Update, Delete) pour la gestion d'articles
- **Authentification** avec Laravel Fortify (login/register)
- **Relations Eloquent** (Articles ↔ Catégories)
- **Gestion de fichiers** avec Spatie MediaLibrary pour les images
- **Migrations et Seeders** pour la base de données
- **Vues Blade** avec Tailwind CSS pour le styling
- **Validation** des formulaires
- **Middleware d'authentification**

## Fonctionnalités

### Gestion des Articles
- ✅ Créer un nouvel article avec titre, contenu et image
- ✅ Afficher la liste des articles avec pagination
- ✅ Voir le détail d'un article
- ✅ Modifier un article existant
- ✅ Supprimer un article
- ✅ Associer une catégorie à un article

### Gestion des Images
- ✅ Upload d'images pour les articles
- ✅ Affichage des images dans les vues
- ✅ Suppression automatique des images lors de la suppression d'un article

### Authentification
- ✅ Inscription d'utilisateur
- ✅ Connexion/Déconnexion
- ✅ Protection des routes par middleware

## Technologies utilisées

- **Laravel 11** - Framework PHP
- **Laravel Fortify** - Authentification
- **Spatie MediaLibrary** - Gestion des médias
- **Tailwind CSS** - Framework CSS
- **SQLite** - Base de données
- **Vite** - Build tool

## Installation

1. Cloner le projet
```bash
git clone https://github.com/clement-krv/laravelours.git
cd laravelours
```

2. Installer les dépendances
```bash
composer install
npm install
```

3. Configurer l'environnement
```bash
cp .env.example .env
php artisan key:generate
```

4. Migrer la base de données
```bash
php artisan migrate
```

5. Compiler les assets
```bash
npm run dev
```

6. Lancer le serveur
```bash
php artisan serve
```

## Objectifs pédagogiques

Ce projet permet d'apprendre :
- La structure MVC de Laravel
- Les routes et contrôleurs
- Les modèles Eloquent et relations
- Les migrations et le système de base de données
- Les vues Blade et la templating
- L'authentification et la sécurité
- La gestion des fichiers et uploads
- Les bonnes pratiques Laravel

Projet Pédagogique
