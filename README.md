# App Starter - Laravel Application

[![Laravel](https://img.shields.io/badge/Laravel-11.x-ff2d20?style=flat-square&logo=laravel)](https://laravel.com)
[![PHP](https://img.shields.io/badge/PHP-8.2+-777BB4?style=flat-square&logo=php)](https://php.net)
[![License](https://img.shields.io/badge/License-MIT-green?style=flat-square)](LICENSE)

Aplikasi starter Laravel modern dengan pre-configured tools dan best practices untuk mempercepat development.

## 🎯 Fitur

- **Laravel 11** - Framework PHP modern dan powerful
- **Fortify** - Authentication & security features
- **Livewire** - Real-time reactive components
- **Volt** - Single-file components untuk Laravel
- **Folio** - File-based routing
- **Flux** - Beautiful UI component library
- **Vite** - Next-gen frontend tooling
- **Pest** - Modern PHP testing framework
- **Two-Factor Authentication** - Built-in security
- **Role-Based Admin Panel** - Middleware & controllers siap pakai

## 📋 Requirement

- PHP 8.2+
- Composer
- Node.js 16+
- MySQL 8.0+ atau SQLite

## 🚀 Installation

### 1. Clone Repository
```bash
git clone https://github.com/antonarizal/app-starter.git
cd app-starter
```

### 2. Install Dependencies
```bash
# Install PHP dependencies
composer install

# Install Node dependencies
npm install
```

### 3. Setup Environment
```bash
# Copy .env file
cp .env.example .env

# Generate app key
php artisan key:generate
```

### 4. Database Configuration

Edit file `.env`:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=app_starter
DB_USERNAME=root
DB_PASSWORD=
```

Jalankan migrations:
```bash
php artisan migrate
```

### 5. Generate Admin User (Optional)
```bash
php artisan generate:admin
```

### 6. Build Assets
```bash
# Development
npm run dev

# Production
npm run build
```

## 💻 Development

### Local Development Server

**Dengan Artisan:**
```bash
php artisan serve
```

**Dengan FrankenPHP (Recommended):**
```bash
./frankenphp run
```

Akses aplikasi di: `http://localhost:8000`

### Watch Mode Assets
```bash
npm run dev
```

## 🧪 Testing

Jalankan test suite:
```bash
# Semua test
php artisan test

# Test spesifik
php artisan test --filter=ExampleTest

# Dengan coverage
php artisan test --coverage
```

Konfigurasi testing di: `phpunit.xml`

## 📁 Struktur Project

```
app-starter/
├── app/
│   ├── Actions/          # Business logic actions
│   ├── Console/          # Artisan commands
│   ├── Http/
│   │   ├── Controllers/  # HTTP controllers
│   │   └── Middleware/   # HTTP middleware (termasuk AdminMiddleware)
│   ├── Livewire/         # Livewire components
│   ├── Models/           # Eloquent models
│   └── Providers/        # Service providers
├── bootstrap/            # Bootstrap files
├── config/               # Configuration files
├── database/
│   ├── factories/        # Model factories
│   ├── migrations/       # Database migrations
│   └── seeders/          # Database seeders
├── public/               # Public assets & entry point
├── resources/
│   ├── css/              # Stylesheets
│   ├── js/               # JavaScript files
│   └── views/            # Blade templates & components
├── routes/               # Route definitions
├── storage/              # Application storage
├── tests/                # Test files
├── vendor/               # Composer packages
├── artisan               # Artisan CLI
├── package.json          # Node dependencies
├── composer.json         # PHP dependencies
└── vite.config.js        # Vite configuration
```

## 🛠️ Available Commands

### Artisan Commands
```bash
# Generate CRUD components
php artisan generate:model      # Generate model + migration
php artisan generate:page       # Generate page component
php artisan generate:view       # Generate view
php artisan generate:admin      # Generate admin user

# Database
php artisan migrate             # Run migrations
php artisan seed:run            # Run seeders
php artisan migrate:fresh       # Fresh migration

# Cache & Optimization
php artisan cache:clear         # Clear cache
php artisan view:clear          # Clear view cache
php artisan optimize            # Optimize application
```

### NPM Scripts
```bash
npm run dev      # Development mode dengan HMR
npm run build    # Build untuk production
npm run preview  # Preview production build
```

## 🔐 Security

- **Two-Factor Authentication** - Sudah terintegrasi di User model
- **Admin Middleware** - Proteksi route admin dengan `AdminMiddleware`
- **Fortify** - Authentication & password reset
- **CSRF Protection** - Built-in CSRF token validation

### Admin Routes
Admin routes dilindungi dengan `AdminMiddleware`. Contoh:
```php
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin/users', [UserController::class, 'index']);
});
```

## 🎨 Components & Views

### Flux UI Components
Komponen UI modern di `resources/views/flux/ui/`:
- Accordion
- Breadcrumb
- Card
- Modal (confirm, error, success)
- Sidebar
- Table dengan pagination
- Switch, Input, Select

### Livewire Components
Reactive components di `app/Livewire/` dan `resources/views/livewire/`:
- Authentication pages
- Settings pages (profile, password, 2FA)

### Volt Components
Single-file components untuk modern development

## 📚 Configuration

### Email Configuration
Edit `.env`:
```env
MAIL_MAILER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=465
MAIL_USERNAME=your_username
MAIL_PASSWORD=your_password
```

### Cache Configuration
```env
CACHE_DRIVER=redis
REDIS_HOST=127.0.0.1
REDIS_PORT=6379
```

## 🚀 Deployment

### Production Build
```bash
# Build assets
npm run build

# Optimize Laravel
php artisan optimize
php artisan config:cache
php artisan route:cache
php artisan view:cache
```

### Environment Production
```env
APP_ENV=production
APP_DEBUG=false
```

## 📝 Available Routes

| Method | URI | Controller | Description |
|--------|-----|-----------|-------------|
| GET | / | WelcomeController | Homepage |
| GET | /dashboard | DashboardController | User dashboard |
| GET\|POST | /login | LoginController | Authentication |
| GET\|POST | /register | RegisterController | Registration |
| GET\|POST | /admin/users | AdminController | Admin user management |

## 🤝 Contributing

Contributions are welcome! Silakan:

1. Fork repository
2. Buat feature branch (`git checkout -b feature/AmazingFeature`)
3. Commit changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to branch (`git push origin feature/AmazingFeature`)
5. Buat Pull Request

## 📄 License

Project ini dilisensikan di bawah [MIT License](LICENSE).

## 👨‍💻 Author

**Anton Arizal**
- GitHub: [@antonarizal](https://github.com/antonarizal)
- Email: contact@antonarizal.com

## 📞 Support

Jika ada pertanyaan atau issues:
1. Buat GitHub Issue
2. Diskusikan di Discussion
3. Email ke contact@antonarizal.com

## 📖 Dokumentasi Eksternal

- [Laravel Documentation](https://laravel.com/docs)
- [Livewire Documentation](https://livewire.laravel.com)
- [Volt Documentation](https://docs.livewire.laravel.com/reference/volt)
- [Fortify Documentation](https://fortify.laravel.com)
- [Flux Documentation](https://fluxui.dev)

---

**Happy Coding! 🎉**
