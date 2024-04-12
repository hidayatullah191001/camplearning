<?php

namespace Database\Seeders;

use App\Models\CampBenefit;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CampBenefitTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $campBenefits = [
            [
                'camp_id' => 1,
                'name' => 'Materi pemula yang komprehensif',
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ],
            [
                'camp_id' => 1,
                'name' => 'Mendapatkan sesi 1 on 1 bersama mentor berpengalaman',
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ],  
            [
                'camp_id' => 1,
                'name' => 'Mengerjakan proyek mini secara individual',
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ],
            [
                'camp_id' => 1,
                'name' => 'Sertifikat',
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ],
            [
                'camp_id' => 2,
                'name' => 'Materi tingkat menengah',
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ],
            [
                'camp_id' => 2,
                'name' => 'Mengerjakan proyek secara tim',
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ],  
            [
                'camp_id' => 2,
                'name' => 'Mendapatkan kesempatan konsultasi lanjutan',
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ],
            [
                'camp_id' => 2,
                'name' => 'Sertifikat',
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ],    
            [
                'camp_id' => 3,
                'name' => 'Pemahaman materi mendalam',
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ],
            [
                'camp_id' => 3,
                'name' => 'Mengerjakan proyek nyata atau sesuai real case',
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ],  
            [
                'camp_id' => 3,
                'name' => 'Konsultasi pribadi dan dibantu untuk bimbingan untuk proyek',
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ],
            [
                'camp_id' => 3  ,
                'name' => 'Sertifikat',
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ], 
        ];

        foreach ($campBenefits as $key => $campBenefit){
            CampBenefit::create($campBenefit);
        } 
    }
}
