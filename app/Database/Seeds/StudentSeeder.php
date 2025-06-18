<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class StudentSeeder extends Seeder
{
    public function run()
    {
        // Check if students already exist
        $existingStudents = $this->db->table('students')->countAllResults();
        
        if ($existingStudents == 0) {
            // Get all classes
            $classes = $this->db->table('classes')->get()->getResult();
            
            if (count($classes) > 0) {
                $students = [
                    // Class 1 students
                    [
                        'nis' => '2023001',
                        'name' => 'Andi Pratama',
                        'class_id' => $classes[0]->id,
                        'email' => 'andi.pratama@school.edu',
                        'google_id' => null,
                        'has_voted' => false,
                        'created_at' => date('Y-m-d H:i:s'),
                        'updated_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'nis' => '2023002',
                        'name' => 'Budi Setiawan',
                        'class_id' => $classes[0]->id,
                        'email' => 'budi.setiawan@school.edu',
                        'google_id' => null,
                        'has_voted' => false,
                        'created_at' => date('Y-m-d H:i:s'),
                        'updated_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'nis' => '2023003',
                        'name' => 'Citra Sari',
                        'class_id' => $classes[0]->id,
                        'email' => 'citra.sari@school.edu',
                        'google_id' => null,
                        'has_voted' => false,
                        'created_at' => date('Y-m-d H:i:s'),
                        'updated_at' => date('Y-m-d H:i:s')
                    ],
                    // Class 2 students
                    [
                        'nis' => '2023004',
                        'name' => 'Deni Kurniawan',
                        'class_id' => $classes[1]->id ?? $classes[0]->id,
                        'email' => 'deni.kurniawan@school.edu',
                        'google_id' => null,
                        'has_voted' => false,
                        'created_at' => date('Y-m-d H:i:s'),
                        'updated_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'nis' => '2023005',
                        'name' => 'Ela Susanti',
                        'class_id' => $classes[1]->id ?? $classes[0]->id,
                        'email' => 'ela.susanti@school.edu',
                        'google_id' => null,
                        'has_voted' => false,
                        'created_at' => date('Y-m-d H:i:s'),
                        'updated_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'nis' => '2023006',
                        'name' => 'Fajar Ahmad',
                        'class_id' => $classes[1]->id ?? $classes[0]->id,
                        'email' => 'fajar.ahmad@school.edu',
                        'google_id' => null,
                        'has_voted' => false,
                        'created_at' => date('Y-m-d H:i:s'),
                        'updated_at' => date('Y-m-d H:i:s')
                    ],
                    // Class 3 students
                    [
                        'nis' => '2023007',
                        'name' => 'Gita Purnama',
                        'class_id' => $classes[2]->id ?? $classes[0]->id,
                        'email' => 'gita.purnama@school.edu',
                        'google_id' => null,
                        'has_voted' => false,
                        'created_at' => date('Y-m-d H:i:s'),
                        'updated_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'nis' => '2023008',
                        'name' => 'Hadi Wijaya',
                        'class_id' => $classes[2]->id ?? $classes[0]->id,
                        'email' => 'hadi.wijaya@school.edu',
                        'google_id' => null,
                        'has_voted' => false,
                        'created_at' => date('Y-m-d H:i:s'),
                        'updated_at' => date('Y-m-d H:i:s')
                    ]
                ];

                $this->db->table('students')->insertBatch($students);
                echo "Students seeded successfully\n";
            } else {
                echo "No classes found. Please seed classes first.\n";
            }
        } else {
            echo "Students already exist\n";
        }
    }
}