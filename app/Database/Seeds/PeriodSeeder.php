<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PeriodSeeder extends Seeder
{
    public function run()
    {
        // Check if periods already exist
        $existingPeriods = $this->db->table('periods')->countAllResults();
        
        if ($existingPeriods == 0) {
            $data = [
                [
                    'year_start' => (int)date('Y'),
                    'year_end' => (int)date('Y') + 1,
                    'status' => 'active',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    'year_start' => (int)date('Y') - 1,
                    'year_end' => (int)date('Y'),
                    'status' => 'inactive',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ]
            ];

            $this->db->table('periods')->insertBatch($data);
            echo "Periods seeded successfully\n";
        } else {
            echo "Periods already exist\n";
        }
    }
} 