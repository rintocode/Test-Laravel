<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Data;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Data>
 */
class DataFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'submit_by'   => $this->faker->name(),
            'submit_when'  => $this->faker->dateTimeThisDecade()->format('d-F-Y'),
            'site_code'   => $this->faker->randomElement(['R001', 'R002', 'R003']),
            'Activity'    => $this->faker->randomElement(['CINCANG','TEBAL','PINNGGIR']),
            'Uom'         => $this->faker->randomElement(['kg', 'ltr', 'pcs']),
            'Block'       => $this->faker->randomnumber(3),
            'Task'        => $this->faker->word(),
            'Start'       => $this->faker->time(),
            'End'         => $this->faker->time(),
            'Mesin_id'    => $this->faker->regexify('[A-Z0-9]{8}'),
            'Fuel'        => $this->faker->randomElement(['diesel', 'petrol', 'electric']),
        ];
    }
}
