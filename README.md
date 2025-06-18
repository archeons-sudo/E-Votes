# E-Votes - Electronic Voting System

An electronic voting system built with CodeIgniter 4 for school elections.

## Features

- **Admin Panel**: Manage candidates, students, classes, and election periods
- **Student Voting**: Secure voting interface with Google authentication
- **Election Management**: Multiple election periods with status management
- **Vote Tracking**: Real-time vote counting and results
- **Security**: Password hashing, authentication filters, and vote validation

## Database Schema

The system uses the following database structure:

- **admin**: Administrator accounts
- **periods**: Election periods with status management
- **classes**: School classes for student organization
- **candidates**: Election candidates with vision and mission
- **students**: Student voters with class assignment
- **votes**: Vote records with timestamp and proof

## Installation

1. **Clone the repository**
```bash
git clone <repository-url>
cd E-Votes
```

2. **Install dependencies**
```bash
composer install
```

3. **Configure database**
Edit `app/Config/Database.php` and set your database credentials:
```php
public array $default = [
    'hostname' => 'localhost',
    'username' => 'your_username',
    'password' => 'your_password',
    'database' => 'e_votes',
    // ... other settings
];
```

4. **Create database and run setup**
```bash
# Create the database first
mysql -u root -p -e "CREATE DATABASE IF NOT EXISTS e_votes;"

# Run migrations and seeders
php setup_database.php
```

Alternatively, you can use the spark command:
```bash
php spark migrate
php spark db:seed DatabaseSeeder
```

5. **Set up web server**
Point your web server to the `public/` directory, or use the built-in server:
```bash
php spark serve
```

## Default Credentials

After running the setup, you can log in to the admin panel with:
- **Username**: admin
- **Password**: admin123

## Usage

### Admin Panel
1. Access `/admin/login` to log in as administrator
2. Manage election periods, candidates, classes, and students
3. View real-time voting results

### Student Voting
1. Students access the main page
2. Authenticate using Google or NIS
3. View candidates and cast votes
4. Receive voting confirmation

## File Structure

```
app/
├── Controllers/          # Application controllers
│   ├── Admin/           # Admin panel controllers
│   ├── Auth.php         # Authentication controller
│   ├── Home.php         # Main page controller
│   └── Vote.php         # Voting controller
├── Models/              # Database models
├── Views/               # View templates
├── Database/
│   ├── Migrations/      # Database migrations
│   └── Seeds/           # Database seeders
└── Filters/             # Authentication filters

public/
├── assets/              # CSS, JS, and images
└── uploads/             # File uploads
```

## Security Features

- Password hashing using bcrypt
- Authentication filters for admin and student areas
- CSRF protection
- Input validation and sanitization
- Unique vote validation per student per period

## Contributing

1. Fork the repository
2. Create a feature branch
3. Make your changes
4. Test thoroughly
5. Submit a pull request

## License

This project is licensed under the MIT License - see the LICENSE file for details.

## Install `Composer`

- Kunjungi [website resmi composer](https://getcomposer.org/download/), dan download `composer`
- Setelah download, lalu lakukan instalasi sampai selesai

## Install `Git Bash`
- Kunjungi [website resmi git bash](https://git-scm.com/downloads), dan download
- Setelah download, lalu lakukan instalasi sampai selesai

## Cara menjalankan project `e-votes`

1. Clone repository `e-votes` di `htdocs`

```bash
git clone https://github.com/archeons-sudo/E-Votes.git
```

2. Pindah ke directory `e-votes`

```bash
cd E-Votes/
```

3. Lakukan `composer install`

```bash
composer install
```

4. Buat file dengan nama `.env`, lalu masukan isi file dari .env yang di berikan oleh `pembantu project`
