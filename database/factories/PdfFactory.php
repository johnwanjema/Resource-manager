<?php

namespace Database\Factories;

use App\Models\Pdf;
use Illuminate\Database\Eloquent\Factories\Factory;

class PdfFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Pdf::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->title(),
            'description' => $this->faker->text(),
            'status' => $this->faker->text(),
            'storageLink' => $this->faker->text(),
        ];
    }
}
