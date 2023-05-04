<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\JobInfo>
 */
class JobInfoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $jobId = $this->faker->unique()->randomNumber(5);
        $table = 'job_'.$jobId;
            Schema::create($table, function (Blueprint $table) {
                $table->id();
                $table->string('column1');
                $table->string('column2');
                // Thêm các trường khác tùy theo nhu cầu
                $table->timestamps();
            });

            return [
                'job_id' => $jobId,
                'job_name' => $this->faker->name(),
                'job_description' => $this->faker->text(),
                'job_status' => $this->faker->randomElement(['pending', 'running', 'completed', 'failed']),
            ];
    }
}
