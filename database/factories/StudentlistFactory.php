<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Studentlist>
 */
class StudentlistFactory extends Factory
{

    public function getName(){
        $json = file_get_contents('https://api.namefake.com');
        $obj = json_decode($json)->name;

        return $obj;
    }

    public function getUni(){
        $uniName = ['THWS','Uni Würzburg'];
        return $uniName[array_rand($uniName)];
    }

    public function getRnadomPic(){
        $randomPic = file_get_contents('https://randomuser.me/api/');
        $pic = json_decode($randomPic)->results[0]->picture->medium;
       return $pic;
    }

    public function getRandomStudiengang(){
        $studiengang = ['Angewandte Mathematik','Architektur','Bauingenieurwesen','BWL','Buisness Analytics','Digitale Gesellschaft','Digitales Rettungsmanagement','E-Commerce','Elektro- und Informationstechnik','Fachübersetzer','Geovisualisierung','Informatik','Informationssicherheit','Kommunikationsdesign'];
        return $studiengang[array_rand($studiengang)];
    }
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
          
            'MatNr' => fake()->randomNumber(7, true),
            'name' => $this->getName(),
            'uni' => $this->getUni(),
            'Studiengang' => $this->getRandomStudiengang(),
            'Semester' => fake()->randomNumber(1, true),
            'immatrikulation' => fake()->date(),
            'exmatrikulation' => fake()->date(),
            'profilePic' => $this -> getRnadomPic()

        ];
    }
}
