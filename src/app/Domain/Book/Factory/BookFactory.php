<?php

namespace Domain\Book\Factory;

use Domain\Book\Book;
use Domain\Products\Promotions\Promotion\Promotion;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{
    protected $model = Book::class;

    public function definition(): array
    {
        return [
            'title' => $this->faker->text(10),
            'slug' => $this->faker->text(10),
            'image_id' => random_int(1, 10),
            'description' => $this->faker->text(10),
            'is_active' => $this->faker->boolean(),
            'age' => $this->faker->numberBetween(1, 100),
            'time' => $this->faker->numberBetween(1, 100),
//            'cycle_number' => $this->faker->numberBetween(1, 100),
//            'cycle_id',
        ];
    }
}
