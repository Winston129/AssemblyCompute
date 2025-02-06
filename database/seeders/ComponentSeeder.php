<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Component;

class ComponentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Component::insert([
            ['code' => 201, 'model' => 'Intel i7-13700K', 'name' => 'Процессор', 'quantity' => 5, 'unit' => 'шт', 'type' => 'ЦП', 'category' => 'Процессоры', 'attribute' => 'Сокет LGA1700'],
            ['code' => 202, 'model' => 'AMD Ryzen 7 7800X', 'name' => 'Процессор', 'quantity' => 5, 'unit' => 'шт', 'type' => 'ЦП', 'category' => 'Процессоры', 'attribute' => 'Сокет AM5'],
            ['code' => 203, 'model' => 'Asus ROG Strix Z790', 'name' => 'Материнская плата', 'quantity' => 5, 'unit' => 'шт', 'type' => 'Плата', 'category' => 'Материнские платы', 'attribute' => 'Чипсет Z790'],
            ['code' => 204, 'model' => 'MSI B550-A Pro', 'name' => 'Материнская плата', 'quantity' => 5, 'unit' => 'шт', 'type' => 'Плата', 'category' => 'Материнские платы', 'attribute' => 'Чипсет B550'],
            ['code' => 205, 'model' => 'Corsair Vengeance 32GB', 'name' => 'ОЗУ', 'quantity' => 10, 'unit' => 'шт', 'type' => 'ОЗУ', 'category' => 'Память', 'attribute' => 'DDR5 6000MHz'],
            ['code' => 206, 'model' => 'Kingston Fury 16GB', 'name' => 'ОЗУ', 'quantity' => 10, 'unit' => 'шт', 'type' => 'ОЗУ', 'category' => 'Память', 'attribute' => 'DDR4 3200MHz'],
            ['code' => 207, 'model' => 'Samsung 980 Pro 1TB', 'name' => 'SSD', 'quantity' => 5, 'unit' => 'шт', 'type' => 'Диск', 'category' => 'Накопители', 'attribute' => 'NVMe PCIe 4.0'],
            ['code' => 208, 'model' => 'WD Blue 2TB', 'name' => 'HDD', 'quantity' => 5, 'unit' => 'шт', 'type' => 'Диск', 'category' => 'Накопители', 'attribute' => 'SATA 5400RPM'],
            ['code' => 209, 'model' => 'Nvidia RTX 4070', 'name' => 'Видеокарта', 'quantity' => 5, 'unit' => 'шт', 'type' => 'GPU', 'category' => 'Видеокарты', 'attribute' => '12GB GDDR6X'],
            ['code' => 210, 'model' => 'AMD Radeon RX 6800', 'name' => 'Видеокарта', 'quantity' => 5, 'unit' => 'шт', 'type' => 'GPU', 'category' => 'Видеокарты', 'attribute' => '16GB GDDR6'],
            ['code' => 211, 'model' => 'Deepcool 850W', 'name' => 'Блок питания', 'quantity' => 5, 'unit' => 'шт', 'type' => 'БП', 'category' => 'Блоки питания', 'attribute' => '80+ Gold'],
            ['code' => 212, 'model' => 'Seasonic 650W', 'name' => 'Блок питания', 'quantity' => 5, 'unit' => 'шт', 'type' => 'БП', 'category' => 'Блоки питания', 'attribute' => '80+ Bronze'],
            ['code' => 213, 'model' => 'NZXT H510', 'name' => 'Корпус', 'quantity' => 5, 'unit' => 'шт', 'type' => 'Корпус', 'category' => 'Корпусы', 'attribute' => 'Черный, стекло'],
            ['code' => 214, 'model' => 'Fractal Define 7', 'name' => 'Корпус', 'quantity' => 5, 'unit' => 'шт', 'type' => 'Корпус', 'category' => 'Корпусы', 'attribute' => 'Тихий, минимализм'],
            ['code' => 215, 'model' => 'Noctua NH-D15', 'name' => 'Кулер', 'quantity' => 5, 'unit' => 'шт', 'type' => 'Охлаждение', 'category' => 'Охлаждение', 'attribute' => 'Топовый воздушный'],
        ]);
    }
}
