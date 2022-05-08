<?php

namespace Database\Factories;

use App\Models\Project;
use App\Models\Student;
use App\Models\Group;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class GroupFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Group::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'student_id' => Student::factory(),
            'project_id' => Project::factory(),
            // 'slug' => $this->faker->slug,
            // 'title' => $this->faker->word,
        ];
    }
}