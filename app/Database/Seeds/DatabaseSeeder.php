<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        echo "Starting database seeding...\n\n";
        
        // Seed in correct order due to foreign key dependencies
        $this->call('AdminSeeder');
        $this->call('PeriodSeeder');
        $this->call('ClassSeeder');
        $this->call('CandidateSeeder');
        $this->call('StudentSeeder');
        
        echo "\nDatabase seeding completed!\n";
    }
}