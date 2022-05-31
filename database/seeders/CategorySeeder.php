<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();

        Category::truncate();

        $categories = [
            'Buku',
            'Dapur',
            'Elektronik',
            'Komputer',
            'Gadget',
            'Fashion',
            'Perkakas',
            'Stationary',
            'Kecantikan'
        ];

        foreach ($categories as $category) {
            Category::create([
                'name' => $category
            ]);
        }

        Schema::enableForeignKeyConstraints();
    }
}
