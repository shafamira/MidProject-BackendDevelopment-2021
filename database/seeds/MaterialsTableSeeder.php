<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Material;

// class MaterialsTableSeeder extends Seeder
// {
//     /**
//      * Run the database seeds.
//      *
//      * @return void
//      */
//     public function run()
//     {
//         //
//     }
// }

class MaterialsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $materials = ['Web Development', 'Design', 'Data Science'];

        foreach($materials as $material)
            Material::create(['name' => $material]);
    }
}

