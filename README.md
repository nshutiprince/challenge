# Creatingg
Application challenge

## Installation Steps

1. Clone the repository

```bash
git clone https://github.com/nshutiprince/challenge.git
```

2. Install dependencies

```bash
composer install --ignore-platform-reqs
composer dump-autoload
php artisan storage:link
```

4. Create `.env` file in root and add your variables

```bash
cp .env.example .env

and the setup you DB
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=challenge
DB_USERNAME=root
DB_PASSWORD=
```

5. Run the app

```bash
php artisan serve
```

You are all set! Open [localhost:8000](http://localhost:8000/) to see the app.

```bash
creating : Post : http://localhost:8000/api/challenges
listing all : Get : http://localhost:8000/api/challenges
viewing one : get : http://localhost:8000/api/challenges/{challenge_id}
```
