$utf8NoBom = New-Object System.Text.UTF8Encoding($false)

$readmeContent = @'
# 🩸 SangVie — Application de Gestion des Dons de Sang

[![Symfony](https://img.shields.io/badge/Framework-Symfony-black?style=flat-square&logo=symfony)](https://symfony.com/)
[![PHP](https://img.shields.io/badge/Language-PHP_8.x-777BB4?style=flat-square&logo=php)](https://www.php.net/)
[![Bootstrap](https://img.shields.io/badge/UI-Bootstrap_5-7952B3?style=flat-square&logo=bootstrap)](https://getbootstrap.com/)
[![Database](https://img.shields.io/badge/Database-MySQL-4479A1?style=flat-square&logo=mysql)](https://www.mysql.com/)

**SangVie** est une plateforme web moderne conçue pour faciliter la gestion des dons de sang au Maroc. Elle met en relation directe les **donneurs bénévoles** et les **centres de transfusion sanguine / hôpitaux** afin d'optimiser la réponse aux urgences médicales et la gestion des stocks.

---

## 🚀 Fonctionnalités Principales

### 🔴 1. Espace Public & Annonces d'Urgence
* **Consulter les demandes urgentes** : Affichage des besoins en sang par groupe sanguin ($A^+$, $O^-$, etc.) et par ville.
* **Recherche et filtres** : Filtrage par localisation, urgence et type de sang.
* **Publication d'annonces** : Création d'annonces par les centres avec spécification de la quantité requise et du lieu.

### 🩸 2. Espace Donateurs (Donneurs)
* **Création de compte & Authentification** : Profil personnalisé avec informations de groupe sanguin et coordonnées.
* **Test d'aptitude au don** : Questionaire rapide pour vérifier l'éligibilité avant le déplacement (âge, poids, conditions).
* **Prise de Rendez-vous (RDV)** : Choix du centre de transfusion, de la date et du créneau horaire.
* **Historique des dons** : Suivi personnalisé des dons effectués précédemment.

### 🏥 3. Espace Centres de Transfusion & Hôpitaux
* **Gestion du Stock de Sang** : Suivi en temps réel des poches disponibles et alerte en cas de stock bas.
* **Planification des collectes** : Gestion des créneaux et affectation des donateurs.
* **Enregistrement des donateurs** : Validation médicale des dons et suivi.

---

## 🛠️ Technologies Utilisées

* **Back-End** : PHP 8.x, Framework Symfony
* **Front-End** : Twig, Bootstrap 5, FontAwesome 6
* **Base de Données** : MySQL / MariaDB (via Doctrine ORM)
* **Outils & Versioning** : Git, GitHub, Composer

---

## 💻 Installation et Configuration

### Prérequis
* PHP >= 8.1
* Composer
* MySQL / XAMPP Server
* Symfony CLI (Recommandé)

### Étapes d'installation

1. **Cloner le projet :**
   ```bash
   git clone [https://github.com/odiouane4-del/sang_app.git](https://github.com/odiouane4-del/sang_app.git)
   cd sang_app
