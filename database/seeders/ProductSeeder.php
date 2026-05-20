<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                'name' => 'iPhone 17',
                'category' => 'Smartphones',
                'price' => 999.99,
                'stock' => 10,
                'description' => 'The latest smartphone iPhone with 64GB storage and a stunning 6.1-inch display.',
            ],
            [
                'name' => 'Samsung Galaxy S24',
                'category' => 'Smartphones',
                'price' => 749.99,
                'stock' => 7,
                'description' => 'Experience the new smartphone Samsung Galaxy S24 with a powerful processor and a vibrant 6.2-inch screen.',
            ],
            [
                'name' => 'Redmi Note 13',
                'category' => 'Smartphones',
                'price' => 249.99,
                'stock' => 25,
                'description' => 'The Redmi Note 13 offers great value smartphone with its 128GB storage and a large 6.5-inch display, perfect for everyday use.',
            ],
            [
                'name' => 'MackBook Air M3',
                'category' => 'Laptops',
                'price' => 2500.00,
                'stock' => 5,
                'description' => 'The latest laptop MackBook Air M3 with a powerful M3 chip and a stunning 13.6-inch display.',
            ],
            [
                'name' => 'Dell Inspiron 15',
                'category' => 'Laptops',
                'price' => 1299.50,
                'stock' => 8,
                'description' => 'The Dell Inspiron 15 is a versatile laptop with a 15.6-inch display, perfect for work and entertainment.',
            ],
            [
                'name' => 'ASUS ROG Strix G15',
                'category' => 'Laptops',
                'price' => 1999.50,
                'stock' => 3,
                'description' => 'The ASUS ROG Strix G15 is a high-performance gaming laptop with a powerful processor and a vibrant display.',
            ],
            [
                'name' => 'Sony WH-1000XM5',
                'category' => 'Headphones',
                'price' => 349.99,
                'stock' => 12,
                'description' => 'The Sony WH-1000XM5 offers industry-leading noise cancellation'
            ],
            [
                'name' => 'Boat Rockers 450',
                'category' => 'Headphones',
                'price' => 149.99,
                'stock' => 30,
                'description' => 'The Boat Rockers wireless offer excellent sound quality and comfort for extended listening sessions.',
            ],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}