<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * La clase PostFactory contiene un metodo
 * definition() el cual retorna los datos 
 * que van a rellenar la BD 
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     * este metodo usa faker para
     * crear datos falsos y rellenar
     * la base de datos 
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id'=> 1, 
            'title' => $title = $this->faker->sentence(),
            'slug' => Str::slug($title),
            'body' => $this->faker->text(2850),
        ];
    }
}
