<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class CandidateSeeder extends Seeder
{
    public function run()
    {
        // Check if candidates already exist
        $existingCandidates = $this->db->table('candidates')->countAllResults();
        
        if ($existingCandidates == 0) {
            // Get the active period
            $activePeriod = $this->db->table('periods')
                                   ->where('status', 'active')
                                   ->get()
                                   ->getRow();
            
            if ($activePeriod) {
                $data = [
                    [
                        'period_id' => $activePeriod->id,
                        'name' => 'Ahmad Rizki & Sari Dewi',
                        'photo' => 'candidate1.jpg',
                        'vision' => 'Menciptakan lingkungan sekolah yang harmonis, kreatif, dan berprestasi untuk semua siswa.',
                        'mission' => '1. Meningkatkan fasilitas sekolah\n2. Mengadakan lebih banyak kegiatan ekstrakurikuler\n3. Memperkuat hubungan antar siswa\n4. Meningkatkan prestasi akademik dan non-akademik',
                        'created_at' => date('Y-m-d H:i:s'),
                        'updated_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'period_id' => $activePeriod->id,
                        'name' => 'Budi Santoso & Maya Putri',
                        'photo' => 'candidate2.jpg',
                        'vision' => 'Membangun sekolah yang demokratis, inovatif, dan peduli lingkungan.',
                        'mission' => '1. Menyediakan wadah aspirasi siswa\n2. Mengembangkan program go green\n3. Meningkatkan kualitas kantin sekolah\n4. Mengadakan festival seni dan budaya',
                        'created_at' => date('Y-m-d H:i:s'),
                        'updated_at' => date('Y-m-d H:i:s')
                    ],
                    [
                        'period_id' => $activePeriod->id,
                        'name' => 'Citra Ayu & Dedi Rahman',
                        'photo' => 'candidate3.jpg',
                        'vision' => 'Mewujudkan sekolah sebagai rumah kedua yang nyaman dan menyenangkan.',
                        'mission' => '1. Memperbaiki sistem pembelajaran\n2. Mengoptimalkan penggunaan teknologi\n3. Menciptakan ruang diskusi siswa\n4. Meningkatkan kerjasama dengan alumni',
                        'created_at' => date('Y-m-d H:i:s'),
                        'updated_at' => date('Y-m-d H:i:s')
                    ]
                ];

                $this->db->table('candidates')->insertBatch($data);
                echo "Candidates seeded successfully\n";
            } else {
                echo "No active period found. Please seed periods first.\n";
            }
        } else {
            echo "Candidates already exist\n";
        }
    }
}