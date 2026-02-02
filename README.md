![image](https://github.com/hisokaBK/LocalMind/blob/87b37a4d0862c7aba54a803fc0df899fd511f8ad/image3.png)
# 🌐 Application Web Communautaire – LocalMind

🚀 **Projet :** Application web communautaire permettant aux utilisateurs de poser des questions localisées, recevoir des réponses d'utilisateurs proches, et gérer leurs interactions.

---

## 🎯 Objectifs du projet
- Poser des questions sur une zone ou ville spécifique.
- Recevoir des réponses de proximité.
- Ajouter / retirer des questions aux favoris.
- Suivre les likes et le nombre de réponses.
- Gestion des utilisateurs et rôles (Admin / Utilisateur).

---

## 🛠️ Stack Technique
- **Backend :** Laravel 12.48.1 (MVC, Eloquent ORM)
- **Base de données :** PostgreSQL 16
- **Serveur web :** Nginx
- **Containerization :** Docker, Docker Compose
- **Gestion des sessions :** Auth Laravel, Middleware pour rôles
- **Frontend :** Blade + TailwindCSS (style LEGO)

---

## 🐳 Docker – Services utilisés
- **laravel_app** : Conteneur PHP + Laravel
- **laravel_nginx** : Conteneur Nginx pour servir l'application
- **laravel_db** : Conteneur PostgreSQL 16
- **laravel_pgadmin** : Conteneur pgAdmin pour gestion DB

**docker-compose.yml**
```yaml
services:
  app:
    build:
      context: .
      dockerfile: docker/php/Dockerfile
    container_name: laravel_app
    volumes:
      - ./src:/var/www
    working_dir: /var/www
    depends_on:
      - db

  pgadmin:
    image: dpage/pgadmin4
    container_name: laravel_pgadmin
    environment:
      PGADMIN_DEFAULT_EMAIL: hisoka@sama.com
      PGADMIN_DEFAULT_PASSWORD: bilal
    ports:
      - "5050:80"
    depends_on:
      - db

  nginx:
    image: nginx:alpine
    container_name: laravel_nginx
    ports:
      - "8000:80"
    volumes:
      - ./src:/var/www
      - ./docker/nginx/default.conf:/etc/nginx/conf.d/default.conf
    depends_on:
      - app

  db:
    image: postgres:16
    container_name: laravel_db
    environment:
      POSTGRES_DB: laravel_db
      POSTGRES_USER: laravel
      POSTGRES_PASSWORD: secret
    volumes:
      - pgdata:/var/lib/postgresql/data
    ports:
      - "5432:5432"

volumes:
  pgdata:
```
📂 Structure du projet

src/
├─ app/               # Models, Controllers
├─ database/
│  ├─ migrations/     # Tables : users, questions, responses, likes, favorites
│  ├─ seeders/
├─ resources/views/   # Blade templates
├─ routes/
│  └─ web.php
├─ docker/
│  ├─ php/
│  └─ nginx/


⚡ Installation & Setup

1 - Clone le repository :

git clone https://github.com/hisokaBK/LocalMind.git
cd LocalMind


2 - Build et démarrer Docker :

docker-compose up -d --build


3 - Installer les dépendances Laravel :

docker exec -it laravel_app composer install


4 - Copier le .env et configurer la DB :

cp .env.example .env
docker exec -it laravel_app php artisan key:generate


5 - Migrer et seed la base de données :

docker exec -it laravel_app php artisan migrate --seed

Accéder à l'application : http://localhost:8000
