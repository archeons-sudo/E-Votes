<?php

/**
 * Database Setup Script for E-Votes Application
 * This script will run migrations and seeders to set up the database
 */

require_once 'vendor/autoload.php';

// Load CodeIgniter
$app = require_once 'app/Config/Paths.php';
require_once 'system/bootstrap.php';

$app = \CodeIgniter\Config\Services::codeigniter();

echo "E-Votes Database Setup\n";
echo "=====================\n\n";

try {
    // Run migrations
    echo "Running database migrations...\n";
    $migrate = \Config\Services::migrations();
    $migrate->latest();
    echo "✓ Migrations completed successfully\n\n";

    // Run seeders
    echo "Running database seeders...\n";
    $seeder = \Config\Database::seeder();
    $seeder->call('DatabaseSeeder');
    echo "✓ Seeders completed successfully\n\n";

    echo "Database setup completed successfully!\n";
    echo "\nDefault admin credentials:\n";
    echo "Username: admin\n";
    echo "Password: admin123\n\n";
    
    echo "Sample data has been created:\n";
    echo "- Admin user\n";
    echo "- Election periods\n";
    echo "- School classes\n";
    echo "- Candidate list\n";
    echo "- Student accounts\n\n";
    
} catch (Exception $e) {
    echo "Error setting up database: " . $e->getMessage() . "\n";
    echo "Please check your database configuration in app/Config/Database.php\n";
    exit(1);
}