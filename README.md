<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework. You can also check out [Laravel Learn](https://laravel.com/learn), where you will be guided through building a modern Laravel application.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Redberry](https://redberry.international/laravel-development)**
- **[Active Logic](https://activelogic.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

## Project structure (NyayaMitra)

This repository is a Laravel application. Below is a quick guide to what each top-level folder is for and where to put frontend and backend code.

- `app/` — PHP application code (Models, Http/Controllers, Console commands, Providers). Put all backend logic, services, domain models and controllers here.
- `routes/` — Route definitions. Currently includes `web.php` and `console.php`. Add `api.php` for JSON API routes and place API controllers under `app/Http/Controllers/Api/`.
- `config/` — Configuration files for the application and packages.
- `database/` — Migrations, seeders and model factories. Use migrations to version schema changes.
- `resources/` — Frontend source files used by the backend build pipeline:
	- `resources/js/` — JavaScript entry points, Vue/React components or vanilla JS (source files for Vite).
	- `resources/css/` — CSS / PostCSS / Tailwind sources.
	- `resources/views/` — Blade templates (server-rendered HTML).
- `public/` — Web server document root. Compiled frontend assets (built CSS/JS, images, fonts) are published here and served to browsers. When using an external frontend build, configure it to output the production build here or deploy separately.
- `bootstrap/` — Framework bootstrap files (early framework initialization).
- `storage/` — Generated files, logs, session files, and compiled views. Do not commit runtime files; they are environment-specific.
- `vendor/` — Composer dependencies (do not edit directly).
- `tests/` — PHPUnit tests (Feature and Unit tests).
- `artisan` — Laravel CLI entrypoint.
- `vite.config.js`, `package.json` — Frontend build tooling and scripts. This project uses Vite (see `package.json` scripts).

Where to put frontend vs backend code
- Backend (Laravel/PHP): keep in `app/`, `routes/`, `config/`, `database/`, and `resources/views/`. Server-side rendering, controllers, jobs, scheduled tasks and database logic belong here.
- Small frontend assets (Laravel-integrated): put source JS/CSS in `resources/js/` and `resources/css/` and import them from `resources/views/*.blade.php`. Use the existing `package.json` + Vite to compile to `public/`.
- Full Single Page App (React/Vue/Angular) / separate frontend project: it's often cleaner to create a top-level folder such as `frontend/` or `client/` (at repo root) that contains its own `package.json`, `src/`, and build scripts. For production you have two main options:
	1. Build the frontend into static assets and copy them to `public/` (or configure the SPA build to output to `public/`). This allows serving the app from the same domain as the backend.
	2. Deploy the frontend separately (to a static host or different server) and call the Laravel backend via API endpoints. If you do this, keep the frontend in `frontend/` and add a `.env` or config to point to the backend API base URL.

Recommended locations and examples
- Simple Laravel app with server-side views: Use `resources/views/`, `resources/js/`, `resources/css/` and keep everything in this repository.
- SPA in same repo: create `frontend/` with its own `package.json`. Add a build script that outputs static files to `../public/` (or copy them during CI). Example structure:

	frontend/
	├─ package.json
	├─ vite.config.js
	├─ src/
	└─ public/ (static)

- SPA as standalone repo: keep frontend in a separate repository and host it separately. Communicate with Laravel via API routes (create `routes/api.php` and controllers under `app/Http/Controllers/Api`).

Common tasks (development)
1. Install PHP dependencies:

```powershell
composer install
```

2. Prepare environment file and key:

```powershell
copy .env.example .env
php artisan key:generate
```

3. Install frontend deps and run dev build (Vite):

```powershell
npm install
npm run dev
```

4. Run migrations (if applicable):

```powershell
php artisan migrate
```

5. Start the PHP dev server:

```powershell
php artisan serve
```

Notes & best practices
- Keep backend-specific logic in `app/` and avoid mixing Node-only code in the PHP folders.
- Use `.env` for environment configuration and do not commit secrets.
- If you add a separate `frontend/` folder, give it its own README and scripts and add `frontend/node_modules/` to `.gitignore` (or prefer a monorepo tool if you want to manage both together).
- For APIs, prefer `routes/api.php`, version your API (e.g., `api/v1/`) and place controllers under `app/Http/Controllers/Api/V1/`.
- Add a `docs/` or `infra/` folder for deployment manifests, Dockerfiles, or IaC if you plan to deploy the system to cloud environments.

If you want, I can:
- Add an example `frontend/` scaffolding (basic React or Vue) that builds into `public/`.
- Create `routes/api.php` and a small example API controller under `app/Http/Controllers/Api/`.

---

If you'd like the new guidance formatted differently or prefer a short checklist for new contributors, tell me how you'd like it tailored and I'll update the README.
