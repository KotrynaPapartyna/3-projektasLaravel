<?php

namespace Database\Factories;

use App\Models\Author;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class AuthorFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Author::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
           'name'=>$this->faker->name, // faker- netikru duomenu uzpildymui
           'surname'=>$this->faker->sentence(4),// sugeneruos astitiktini sakini su 4 zodziais
           'username'=>Str::random(15), // zodis kuris tures 15 zenklu
        ];
    }
}
