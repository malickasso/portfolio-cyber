# > _ mk_07 - Portfolio

Portfolio personnel présentant mon double profil **développeur fullstack** et **analyste en sécurité informatique**. Construit avec Laravel, Blade et Tailwind CSS, avec une direction artistique volontairement technique : thème sombre, police monospace, boutons rectangulaires — inspirée des dashboards et outils du monde de la sécurité.

**Démo en ligne :** _à venir_

---

## Stack technique

| Domaine       | Technologie              |
|---------------|---------------------------|
| Backend       | Laravel (PHP)             |
| Templating    | Blade                     |
| Styles        | Tailwind CSS v4            |
| Build tool    | Vite                      |

---

## Installation

### Prérequis

- PHP >= 8.2
- Composer
- Node.js >= 18

### Étapes

```bash
# 1. Cloner le dépôt
git clone https://github.com/malickasso/portfolio-cyber.git
cd portfolio-cyber

# 2. Installer les dépendances PHP
composer install

# 3. Installer les dépendances front
npm install

# 4. Configurer l'environnement
cp .env.example .env
php artisan key:generate

# 5. Lancer en développement
npm run dev
php artisan serve
```

Le site est accessible sur `http://127.0.0.1:8000`.

### Build de production

```bash
npm run build
```

---

## Auteur

Projet réalisé par **Abdou Malick Assouma**.

[GitHub](https://github.com/malickasso) · [LinkedIn](https://www.linkedin.com/in/abdou-malick-assouma-63a878270/)
