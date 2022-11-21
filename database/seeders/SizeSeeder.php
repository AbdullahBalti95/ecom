<?php

namespace Database\Seeders;

use App\Models\Size;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Size::Create(['size' => 'XS']);
        Size::Create(['size' => 'S']);
        Size::Create(['size' => 'M']);
        Size::Create(['size' => 'L']);
        Size::Create(['size' => 'XL']);
        Size::Create(['size' => '2XL']);
        Size::Create(['size' => '3XL']);
    }
}
