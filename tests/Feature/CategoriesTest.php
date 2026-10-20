<?php

namespace Tests\Feature;

use App\Models\Category;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CategoriesTest extends TestCase
{
    use RefreshDatabase;

    public function test_the_categories_page_displays_categories(): void
    {
        Category::query()->create(['name' => 'Informatique']);
        Category::query()->create(['name' => 'Livres']);

        $this->get('/categories')
            ->assertOk()
            ->assertSee('Liste des catégories')
            ->assertSee('Informatique')
            ->assertSee('Livres');
    }
}
