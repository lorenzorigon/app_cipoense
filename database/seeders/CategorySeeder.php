<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $names = ['Política', 'Religião', 'Policial', 'Filmes', 'Tragédia', 'Acidente', 'Ação Social', 'Esportes', 'Prefeitura'];

        foreach ($names as $name){
            Category::insert(
                ['name' => $name],
            );
        }


    }
}
