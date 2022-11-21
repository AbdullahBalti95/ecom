<?php

namespace Database\Seeders;

use App\Models\Color;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Color::create(['name'=>'white', 'hex' => '#fff']);
        Color::create(['name'=>'black', 'hex' => '#000']);
        Color::create(['name'=>'red', 'hex' => '#f00']);
        Color::create(['name'=>'green', 'hex' => '#00FF00']);
        Color::create(['name'=>'Yellow', 'hex' => '#FFFF00']);
        Color::create(['name'=>'Orange', 'hex' => '#FFA500']);
        Color::create(['name'=>'Navy', 'hex' => '#000080']);
        Color::create(['name'=>'Blue', 'hex' => '#0000FF']);
    }
}
