<?php

namespace Database\Factories;

use App\Models\Job;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Log;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tag>
 */
class TagFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->word(),

        ];
    }

    public function withJobs() : self
    {
        
        return $this->afterCreating(function ($tag) {
            
            $jobs = Job::inRandomOrder()->take(rand(1, 3))->pluck('id');
            $tag->jobs()->attach($jobs);
        });
    }
}
