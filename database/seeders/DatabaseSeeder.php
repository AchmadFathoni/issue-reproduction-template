<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Item;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    public function run(): void
    {
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => Hash::make('password'),
        ]);

        $category = Category::create(['name' => 'Existing Category']);

        Item::create([
            'name' => 'Test Item',
            'category_id' => $category->id,
            'description' => 'A test item to reproduce the scroll reset bug.',
            'price' => 99.99,
            'notes' => 'Some notes here.',
            'status' => 'active',
            'quantity' => 5,
            'sku' => 'SKU-001',
        ]);
    }
}
