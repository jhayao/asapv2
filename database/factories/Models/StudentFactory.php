<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Student;

class StudentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Student::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'studentnumber' => $this->faker->word,
            'lastname' => $this->faker->lastName,
            'givenname' => $this->faker->word,
            'middlename' => $this->faker->word,
            'gender' => $this->faker->word,
            'DegreeProgram' => $this->faker->word,
            'yearlevel' => $this->faker->word,
            'email' => $this->faker->safeEmail,
        ];
    }
}
