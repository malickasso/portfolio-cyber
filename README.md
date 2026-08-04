# > _ Malick.sec — Portfolio

Portfolio personnel présentant mon double profil **développeur fullstack** et **analyste en sécurité informatique**. Construit avec Laravel, Blade et Tailwind CSS, avec une direction artistique volontairement technique : thème sombre, police monospace, boutons rectangulaires — inspirée des dashboards et outils du monde de la sécurité.

🔗 **Démo en ligne :** _à venir_

---

## ✨ Aperçu

- Design sombre, épuré, sans coins arrondis
- Police `Space Grotesk` pour les titres/corps, `JetBrains Mono` pour les éléments techniques (badges, labels, tags)
- Sections modulaires en Blade, faciles à réorganiser ou dupliquer
- Portfolio filtrable (Web Dev / Sécurité / Réseau)
- Formulaire de contact fonctionnel (validation + retour utilisateur)
- 100% responsive (mobile / tablette / desktop)

---

## 🛠️ Stack technique

| Domaine       | Technologie              |
|---------------|---------------------------|
| Backend       | Laravel (PHP)             |
| Templating    | Blade                     |
| Styles        | Tailwind CSS v4            |
| Build tool    | Vite                      |
| Polices       | Space Grotesk, JetBrains Mono |

---

## 📁 Structure du projet

```
resources/
├── css/
│   └── app.css              # Thème Tailwind (@theme)
├── js/
│   └── app.js                # Menu mobile, filtres portfolio
└── views/
    ├── layouts/
    │   └── app.blade.php     # Layout principal
    ├── partials/
    │   ├── navbar.blade.php
    │   └── footer.blade.php
    ├── sections/
    │   ├── hero.blade.php
    │   ├── about.blade.php
    │   ├── experience.blade.php
    │   ├── portfolio.blade.php
    │   ├── testimonials.blade.php
    │   ├── blog.blade.php
    │   └── contact.blade.php
    └── home.blade.php

public/
├── images/
│   ├── profile.jpg
│   ├── projects/
│   ├── testimonials/
│   └── blog/
└── cv.pdf
```

---

## 🚀 Installation

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

## 🎨 Palette de couleurs

| Nom            | Usage                        | Couleur                          |
|----------------|-------------------------------|-----------------------------------|
| `bg-dark`      | Fond principal                | `#0B0F19`                        |
| `bg-panel`     | Cartes / sections              | `#111827`                        |
| `accent`       | Boutons, liens, highlights     | `#00E5A0`                        |
| `accent-dark`  | Hover des boutons pleins       | `#00B980`                        |
| `border-soft`  | Bordures, séparateurs          | `#1F2937`                        |

---

## 📬 Contact

- **Email :** contact@malick.sec
- **GitHub :** [@malickasso](https://github.com/malickasso)
- **Localisation :** Cotonou, Bénin

---

## 📄 Licence

Ce projet est distribué à titre personnel (portfolio). Le code peut être consulté et adapté à des fins d'apprentissage ; les contenus (textes, images, projets présentés) restent la propriété d'Abdou Malick.