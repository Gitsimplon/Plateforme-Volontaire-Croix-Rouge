```markdown
# ❤️ RedHeart Volunteers Platform — Plateforme de Volontariat de la Croix-Rouge Nigérienne

> Une plateforme web dynamique, inclusive et sécurisée pour la gestion, la mobilisation et la fidélisation des volontaires au Niger.

---

## 🧭 Présentation du projet

Le projet **RedHeart Volunteers Platform** est une initiative de la **Croix-Rouge Nigérienne (CRN)** soutenue par **NSIA**, **la FICR** et d'autres partenaires techniques.  
Il vise à **digitaliser la gestion du volontariat** à travers une plateforme web moderne et accessible à tous.

Cette plateforme a pour objectif de :
- Centraliser les inscriptions et profils des volontaires.
- Faciliter la communication entre volontaires et responsables régionaux.
- Offrir un tableau de bord de suivi statistique par genre, région et activité.
- Valoriser la contribution des volontaires dans les actions humanitaires.
- Sécuriser et tracer les données des volontaires en temps réel.

---

## 🎯 Objectifs du projet

### Objectif général
Créer et déployer une plateforme web de volontariat **efficace, interactive et sécurisée** pour soutenir les actions humanitaires de la Croix-Rouge Nigérienne.

### Objectifs spécifiques
- Développer une **application web responsive et intuitive** basée sur Laravel.
- Permettre l’inscription, la gestion de profil et la recherche d’opportunités.
- Faciliter la coordination, la communication et le suivi des activités.
- Offrir un tableau de bord analytique et des rapports exportables.
- Assurer la **sécurité et la confidentialité** des données à caractère personnel.
- Former les équipes de la CRN à l’administration de la plateforme.

---

## 🧩 Fonctionnalités clés

| Interface | Description |
|------------|-------------|
| 🌍 **Publique** | Accès général au formulaire d’inscription, documents, et informations sur le volontariat. |
| 👤 **Volontaire** | Création de profil, consultation des missions, messagerie interne, suivi personnel. |
| 🧑‍💼 **Gestionnaire** | Suivi régional, validation des inscriptions, gestion des activités locales. |
| 🛠️ **Administrateur** | Tableau de bord complet, statistiques, rapports, gestion des utilisateurs et des rôles. |

Autres fonctionnalités :
- Système d’authentification (Fortify/Jetstream).
- Gestion des rôles et permissions.
- Tableau de bord statistique filtrable (par genre, région, type d’activité).
- Exportation de rapports aux formats **PDF**, **Excel**, **CSV**.
- Interface responsive compatible avec tous les navigateurs.
- Sécurité des données (chiffrement, validation, sauvegarde).
- Formation et transfert de compétences à la CRN.

---

## ⚙️ Technologies utilisées

| Catégorie | Technologie |
|------------|--------------|
| Langage principal | PHP 8.2 |
| Framework backend | Laravel 12.x |
| Base de données | MySQL / SQLite (local) |
| Frontend | HTML5, CSS3, JavaScript |
| Design | TailwindCSS / Bootstrap |
| Authentification | Laravel Jetstream & Fortify |
| Versionnement | Git & GitHub |

---

## 🧱 Structure du projet (front)

```

resources/views/
├── calendar.blade.php
├── dashboard.blade.php
├── documents.blade.php
├── index.blade.php
├── login.blade.php
├── logout.blade.php
├── messages.blade.php
├── missions.blade.php
├── profile.blade.php
└── register.blade.php

````

---

## 🧭 Routes principales

```php
Route::get('/', [FrontController::class, 'index'])->name('home');
Route::get('/calendar', [FrontController::class, 'calendar'])->name('calendar');
Route::get('/dashboard', [FrontController::class, 'dashboard'])->name('dashboard');
Route::get('/documents', [FrontController::class, 'documents'])->name('documents');
Route::get('/login', [FrontController::class, 'login'])->name('login');
Route::get('/logout', [FrontController::class, 'logout'])->name('logout');
Route::get('/messages', [FrontController::class, 'messages'])->name('messages');
Route::get('/missions', [FrontController::class, 'missions'])->name('missions');
Route::get('/profile', [FrontController::class, 'profile'])->name('profile');
Route::get('/register', [FrontController::class, 'register'])->name('register');
````

---

## 📦 Installation locale

### 1️⃣ Cloner le dépôt

```bash
git clone https://github.com/Gitsimplon/Plateforme-Volontaire-Croix-Rouge.git
cd Plateforme-Volontaire-Croix-Rouge
```

### 2️⃣ Installer les dépendances

```bash
composer install
npm install
```

### 3️⃣ Configurer l’environnement

```bash
cp .env.example .env
php artisan key:generate
```

Modifier ensuite les informations de base de données dans `.env`.

### 4️⃣ Migrer la base et lancer le serveur

```bash
php artisan migrate
php artisan serve
```

---

## 📈 Résultats attendus

* Une plateforme fonctionnelle, accessible 24/7.
* Une base de données des volontaires à jour et sécurisée.
* Une augmentation significative des inscriptions et de l’engagement.
* Un meilleur suivi et reporting des activités.
* Une valorisation du rôle du volontariat au Niger.

---

## 🤝 Crédits & Partenaires

* **Croix-Rouge Nigérienne (CRN)**
* **NSIA / FICR**
* **RedHeart Dev Team (Gitsimplon)**
* Soutien technique : **Croix-Rouge Belgique**

---

## 🛡️ Licence

Ce projet est propriétaire de la **Croix-Rouge Nigérienne**.
Toute reproduction ou diffusion est interdite sans autorisation préalable.

---

### 🌍 Contact

📧 [hadjara.hamani@croixrouge.ne](mailto:hadjara.hamani@croixrouge.ne)
📍 Niamey – Siège de la Croix-Rouge Nigérienne
📅 Projet soutenu du 25 août au 30 octobre 2025

---

> *« Ensemble, faisons battre le cœur du volontariat au Niger ❤️ »*

```

---
