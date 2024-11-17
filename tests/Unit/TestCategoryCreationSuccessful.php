<?php

namespace Tests\Unit;

use App\Models\Category;
use Tests\TestCase;

class TestCategoryCreationSuccessful extends TestCase
{
    public function test_category_creation_successful()
    {
        $data = [
            'name' => 'Electronics',
            'description' => 'Category for electronic devices',
        ];

        $category = Category::create($data);

        $this->assertInstanceOf(Category::class, $category);
        $this->assertDatabaseHas('categories', [
            'name' => $data['name'],
            'description' => $data['description'],
        ]);
    }

    public function test_category_creation_with_missing_name()
    {

        $data = [
            'name' => '',
            'description' => 'Category with no name',
        ];

        $category = Category::create($data);

        $this->assertNull($category);
        $this->assertDatabaseMissing('categories', [
            'description' => $data['description'],
        ]);
    }
}
