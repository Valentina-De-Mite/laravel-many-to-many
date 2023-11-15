<?php

namespace Database\Seeders;

use App\Models\Tecnology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TecnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tecnologies = ['php', 'laravel', 'programming', 'js', 'css', 'mysql', 'debugging'];

        foreach($tecnologies as $tecnology){
            $new_tecnology = new Tecnology();
        
            $new_tecnology->name = $tecnology;
            
            $new_tecnology->save();
        }
    }
}
