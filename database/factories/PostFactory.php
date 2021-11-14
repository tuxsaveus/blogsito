<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\Categoria;
use Illuminate\Database\Eloquent\Factories\Factory;

use Illuminate\Support\Str;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->unique()->sentence();
        return [
            'name' => $name,
            'body' => $this->faker->text(1000),
            'user_id' => 1,
            'categoria_id' => Categoria::all()->random()->id,
            'status' => $this->faker->randomElement([1, 2, 3]),
            'slug' => Str::slug($name)
        ];
    }
}
