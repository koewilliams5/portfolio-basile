# 🚀 Portfolio — Koe Bi Suy Basile
> Développeur Full Stack & Intelligence Artificielle | Abidjan, Côte d'Ivoire

---

## 📁 Structure des fichiers

```
portfolio-basile/
├── app/
│   ├── Http/Controllers/
│   │   └── PortfolioController.php   ← Logique PHP (affichage + contact)
│   └── Mail/
│       └── ContactMail.php           ← Classe d'envoi d'email
├── resources/views/
│   ├── layouts/
│   │   └── app.blade.php             ← Template de base (HTML, head, scripts)
│   ├── pages/
│   │   └── home.blade.php            ← PAGE PRINCIPALE (tout le portfolio)
│   ├── partials/
│   │   ├── navbar.blade.php          ← Barre de navigation
│   │   └── footer.blade.php          ← Pied de page
│   └── emails/
│       └── contact.blade.php         ← Template de l'email reçu dans Gmail
├── routes/
│   └── web.php                       ← Routes URL
├── public/
│   ├── css/app.css                   ← Styles CSS complets
│   ├── js/app.js                     ← JavaScript (animations, formulaire AJAX)
│   └── images/                       ← ⭐ Mets ta photo ici : basile.jpg
└── .env.example                      ← Config email (copie en .env)
```

---

## ⚙️ Installation étape par étape

### Étape 1 — Crée le projet Laravel
```bash
composer create-project laravel/laravel portfolio-basile
cd portfolio-basile
```

### Étape 2 — Copie les fichiers
Remplace les fichiers dans les emplacements correspondants avec ceux fournis.

### Étape 3 — Configure l'environnement
```bash
# Copie le fichier de configuration
cp .env.example .env

# Génère la clé de sécurité de l'application
php artisan key:generate
```

### Étape 4 — Ajoute ta photo
```
Copie ta photo dans :  public/images/basile.jpg

Puis dans resources/views/pages/home.blade.php,
trouve le commentaire "⭐ COMMENT AJOUTER TA PHOTO" et :
1. Supprime le bloc <div class="photo-placeholder">...</div>
2. Décommente la balise <img> juste au-dessus
```

### Étape 5 — Configure l'email (pour le formulaire de contact)

**Option A — Mailtrap (pour tester en local)**
1. Va sur https://mailtrap.io et crée un compte gratuit
2. Ouvre ta boîte de test > SMTP Settings
3. Copie le username et password dans ton .env

**Option B — Gmail (pour la production)**
1. Va dans ton compte Gmail
2. Sécurité > Mots de passe d'application
3. Génère un mot de passe pour "Mail"
4. Utilise ce mot de passe dans MAIL_PASSWORD du .env

### Étape 6 — Lance le serveur
```bash
php artisan serve
```
Ouvre http://localhost:8000 dans ton navigateur ✅

---

## 🌐 Mise en ligne (Déploiement)

### Option A — Railway (recommandé, gratuit)
1. Va sur https://railway.app
2. Connecte ton compte GitHub
3. Clique "New Project" > "Deploy from GitHub repo"
4. Ajoute les variables d'environnement (copie ton .env)
5. Ton site sera en ligne en 2 minutes !

### Option B — Render
1. Va sur https://render.com
2. New > Web Service > connecte ton GitHub
3. Build command : `composer install --no-dev && php artisan key:generate`
4. Start command : `php artisan serve --host 0.0.0.0 --port $PORT`

### Option C — cPanel (hébergement classique)
1. Upload tous les fichiers via FTP
2. Pointe le domaine vers le dossier `/public`
3. Configure le .env sur le serveur

---

## 🔧 Personnalisations rapides

### Ajouter un nouveau projet
Dans `resources/views/pages/home.blade.php`, cherche la section `SECTION 3 — PROJETS`
et copie-colle un bloc `<article class="project-card">` en modifiant le contenu.

### Changer les couleurs
Dans `public/css/app.css`, modifie les variables CSS au début du fichier :
```css
:root {
    --accent:  #6c63ff;  ← couleur principale (violet)
    --accent2: #a78bfa;  ← couleur secondaire (violet clair)
    --teal:    #0dd3a0;  ← couleur vert-teal
}
```

### Ajouter une page "CV téléchargeable"
```php
// Dans routes/web.php, ajoute :
Route::get('/cv', function () {
    return response()->file(public_path('files/cv-basile.pdf'));
})->name('cv.download');
```
Puis place ton CV PDF dans `public/files/cv-basile.pdf`.

---

## 📞 Contact
**Koe Bi Suy Basile** | koebibasile5@gmail.com | (+225) 07 78 14 21 01
