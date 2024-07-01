<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Studentlist;
use App\Models\Notenzettel;
use App\Models\Exam;
use Faker\Factory as Faker;


class StudentlistSeeder extends Seeder

{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $faker = Faker::create();

        Studentlist::factory()
        ->count(50)
        ->create()
        ->each(function ($studentlist) use ($faker){
            $notenzettel = Notenzettel::factory()->create(['studentlist_id' => $studentlist->id]);

            $exams = Exam::all()->pluck('id');
            foreach ($exams as $examId) {
                $notenzettel->exams()->attach($examId, ['wertung' => $faker->randomElement(['bestanden', 'nicht bestanden'])]); 
            }
        });
    }
}
