<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Material;

class MaterialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Material::insert([
            ['code' => 301, 'name' => 'Алюминий', 'consumption' => 1.2, 'unit' => 'кг', 'waste' => 0.1, 'waste_unit' => 'кг'],
            ['code' => 302, 'name' => 'Медь', 'consumption' => 0.8, 'unit' => 'кг', 'waste' => 0.05, 'waste_unit' => 'кг'],
            ['code' => 303, 'name' => 'Пластик ABS', 'consumption' => 0.5, 'unit' => 'кг', 'waste' => 0.02, 'waste_unit' => 'кг'],
            ['code' => 304, 'name' => 'Стекло', 'consumption' => 2.0, 'unit' => 'кг', 'waste' => 0.3, 'waste_unit' => 'кг'],
            ['code' => 305, 'name' => 'Железо', 'consumption' => 3.0, 'unit' => 'кг', 'waste' => 0.4, 'waste_unit' => 'кг'],
            ['code' => 306, 'name' => 'Силикон', 'consumption' => 0.3, 'unit' => 'кг', 'waste' => 0.01, 'waste_unit' => 'кг'],
            ['code' => 307, 'name' => 'Золото', 'consumption' => 0.002, 'unit' => 'г', 'waste' => 0.0001, 'waste_unit' => 'г'],
            ['code' => 308, 'name' => 'Серебро', 'consumption' => 0.01, 'unit' => 'г', 'waste' => 0.001, 'waste_unit' => 'г'],
            ['code' => 309, 'name' => 'Термопаста', 'consumption' => 0.01, 'unit' => 'г', 'waste' => 0.001, 'waste_unit' => 'г'],
            ['code' => 310, 'name' => 'Магний', 'consumption' => 0.6, 'unit' => 'кг', 'waste' => 0.05, 'waste_unit' => 'кг'],
        ]);
    }
}
