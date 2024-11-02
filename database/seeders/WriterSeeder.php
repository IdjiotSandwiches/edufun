<?php

namespace Database\Seeders;

use App\Models\Writer;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class WriterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $category = Category::all();

        for ($i = 0; $i < 3; $i++) {
            $categoryRandom = $category->shuffle()
                ->first();

            Writer::factory()->create([
                'specialize' => 'Specialisasi ' . $categoryRandom->name,
                'category_id' => $categoryRandom->id,
            ]);
        }
    }
}
