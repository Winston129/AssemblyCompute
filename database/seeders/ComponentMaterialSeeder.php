<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Component;
use App\Models\Material;

class ComponentMaterialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $component = Component::find([1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15]);

        $component[0]->material()->attach([1, 2]);
        $component[1]->material()->attach([1, 2]);
        $component[2]->material()->attach([3]);
        $component[3]->material()->attach([3]);
        $component[4]->material()->attach([4]);
        $component[5]->material()->attach([4]);
        $component[6]->material()->attach([5]);
        $component[7]->material()->attach([5]);
        $component[8]->material()->attach([6]);
        $component[9]->material()->attach([6]);
        $component[10]->material()->attach([7]);
        $component[11]->material()->attach([8]);
        $component[12]->material()->attach([9]);
        $component[13]->material()->attach([10]);
        $component[14]->material()->attach([3]);
    }
}
