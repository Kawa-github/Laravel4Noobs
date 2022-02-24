<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{

    // use HasFactory;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => function (){ // user_id - chave estrangeira
                return User::factory()->create()->id; //usando id do User como chave primária
            },
            'title' => $this->faker->text(),
            'content' => $this->faker->text(),
            'published' => $this->faker->boolean(),
            
        ];
    }
}
