<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Event;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class EventFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Event::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->unique()->name,
            'slug' => Str::slug($this->faker->unique()->name, '-'),
            'deskripsi' => $this->faker->unique()->word,
            'gambar' => $this->faker->unique()->name,
            'status' => $this->faker->unique()->name,
            'category_id' => function () {
                return Category::all()->random();
            }
        ];
    }
}
