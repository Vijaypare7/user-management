<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Product;

class ProductTest extends TestCase
{
    use RefreshDatabase;

    public function test_can_create_product()
    {
        $data = [
            'name' => 'Product 1',
            'description' => 'Description for product 1',
            'price' => 100.00,
            'quantity' => 10,
        ];

        $this->postJson('/api/products', $data)
            ->assertStatus(201)
            ->assertJson($data);
    }

    public function test_can_update_product()
    {
        $product = Product::factory()->create();

        $data = [
            'name' => 'Updated Product',
            'description' => 'Updated Description',
            'price' => 150.00,
            'quantity' => 5,
        ];

        $this->putJson('/api/products/' . $product->id, $data)
            ->assertStatus(200)
            ->assertJson($data);
    }

    public function test_can_delete_product()
    {
        $product = Product::factory()->create();

        $this->deleteJson('/api/products/' . $product->id)
            ->assertStatus(204);
    }

    public function test_can_get_product()
    {
        $product = Product::factory()->create();

        $this->getJson('/api/products/' . $product->id)
            ->assertStatus(200)
            ->assertJson($product->toArray());
    }

    public function test_can_get_all_products()
    {
        $products = Product::factory()->count(3)->create();

        $this->getJson('/api/products')
            ->assertStatus(200)
            ->assertJson($products->toArray());
    }
}


