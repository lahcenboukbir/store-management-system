<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Supplier;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // $this->call(RolesAndPermissionsSeeder::class);
        // $this->call(UsersTableSeeder::class);

        // Category::create([
        //     'category_name' => 'jeans',
        //     'image' => 'images/Fe9PMP8BPuPxVTBnPgCjeGFGsdkkYPrjQrTlafvg.jpg',
        //     'description' => 'lorem ipsum...'
        // ]);

        // Supplier::create([
        //     'supplier_name' => 'walter white',
        //     'phone_number' => '+212636542963',
        //     'address' => 'garage allah, casablanca, maroc',
        //     'email' => 'walter@white.com',
        //     'notes' => 'lorem ipsum...'
        // ]);

        Category::create([
            'category_name' => 'Test Category',
            'description' => 'Test description',
            'image' => 'images/test_image.jpg', // Manually specify a path
        ]);
    }
}
