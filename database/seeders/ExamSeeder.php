<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Exam;
use Faker\Factory as Faker;

class ExamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $prüfungen = [
            'Mathe 1', 'Mathe 2', 'WAES', 'WebProg 1', 'WebProg 2', 
            'WebProg 3', 'Web Techno', 'Online Marketing', 
            'EC-Hauptseminar', 'Statistik'
        ];

        foreach ($prüfungen as $prüfung){
            Exam::factory()
            ->create([
                'name' => $prüfung,
                'cp' => 5,
            ]);
        }
    }
}
