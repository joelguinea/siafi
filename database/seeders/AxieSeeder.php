<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Axie;

class AxieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $axies = [
            [
                'type' => 'Aqua',
                'mouth' => 'Lam',
                'eyes' => 'Gero',
                'tail' => 'Nimo',
                'ears' => 'Inkling',
                'horns' => 'Anemone',
                'back' => 'Anemone',
            ],

            [
                'type' => 'Bird',
                'mouth' => 'Little Owl',
                'eyes' => 'Lucas',
                'tail' => 'Post Fight',
                'ears' => 'Owl',
                'horns' => 'Eggshell',
                'back' => 'Pigeon Post',
            ],
            [
                'type' => 'Reptile',
                'mouth' => 'Tiny Turtle',
                'eyes' => 'Topaz',
                'tail' => 'Tiny Dino',
                'ears' => 'Curved Spine',
                'horns' => 'Scaly Spoon',
                'back' => 'Bone Sail',
            ],
            [
                'type' => 'Plant',
                'mouth' => 'Vegetal Bite',
                'eyes' => 'Nerdy',
                'tail' => 'Carrot',
                'ears' => 'Hollow',
                'horns' => 'Cactus',
                'back' => 'Pumpkin',
            ],
            [
                'type' => 'Beast',
                'mouth' => 'Nut Cracker',
                'eyes' => 'Chubby',
                'tail' => 'Nut Cracker',
                'ears' => 'Nyam',
                'horns' => 'Imp',
                'back' => 'Ronin',
            ],

        ];
        foreach($axies as $a) {
            Axie::create($a);
        }
    }
}