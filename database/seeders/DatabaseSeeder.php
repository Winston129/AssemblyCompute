<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
/*
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ mix('css/index.css') }}">
    <title>welcome to "AssemblyComputer"</title>
</head>
<body>
    <div class="welcome_window">
        <div class="chief">SELECT DATABASE</div>
        <div class="box_db">
            <a href="{{ route('assembly.index') }}">
                <button class="box assembly">ASSEMBLY</button>
            </a>
            <a href="{{ route('component.index') }}">
                <button class="box component">COMPONENT</button>
            </a>
            <a href="{{ route('material.index') }}">
                <button class="box material">MATERIAL</button>
            </a>
        </div>
    </div>
<script src="{{ mix('js/index.js') }}" defer></script>
</body>
</html>
*/