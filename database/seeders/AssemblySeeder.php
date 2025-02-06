<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Assembly;

class AssemblySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Assembly::insert([
            ['code' => 101, 'type' => 'Игровая', 'form_factor' => 'ATX', 'budget' => 'Высокий', 'power_consumption' => 750, 'compatibility' => 'Совместим с Intel', 'design' => 'Черный с RGB'],
            ['code' => 102, 'type' => 'Рабочая станция', 'form_factor' => 'MicroATX', 'budget' => 'Средний', 'power_consumption' => 500, 'compatibility' => 'Совместим с AMD', 'design' => 'Серый минимализм'],
            ['code' => 103, 'type' => 'Мультимедийная', 'form_factor' => 'Mini-ITX', 'budget' => 'Низкий', 'power_consumption' => 300, 'compatibility' => 'Совместим с Intel', 'design' => 'Белый компактный'],
            ['code' => 104, 'type' => 'Серверная', 'form_factor' => 'E-ATX', 'budget' => 'Высокий', 'power_consumption' => 1200, 'compatibility' => 'Совместим с Xeon', 'design' => 'Корпоративный дизайн'],
            ['code' => 105, 'type' => 'Бюджетная', 'form_factor' => 'ATX', 'budget' => 'Низкий', 'power_consumption' => 400, 'compatibility' => 'Совместим с AMD', 'design' => 'Простой черный'],
        ]);
    }
}
