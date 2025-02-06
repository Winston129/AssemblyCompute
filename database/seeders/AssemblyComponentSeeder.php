<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Assembly;
use App\Models\Component;

class AssemblyComponentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $assembly = Assembly::find([1, 2, 3, 4, 5]);
        
        $assembly[0]->component()->attach([1, 3, 5, 7, 9, 11, 13]);
        $assembly[1]->component()->attach([2, 4, 6, 8, 10, 12, 14]);
        $assembly[2]->component()->attach([1, 5, 7, 11, 13]);
        $assembly[3]->component()->attach([2, 6, 8, 10, 12]);
        $assembly[4]->component()->attach([5, 7, 9, 11, 13]);
    }
}
