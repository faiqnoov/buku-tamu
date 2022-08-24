<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class GuestFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nama' => $this->faker->name(),
            'instansi' =>$this->faker->company(),
            'jabatan' => $this->faker->jobTitle(),
            'no_hp' => $this->faker->phoneNumber(),
            'email'=> $this->faker->freeEmail(),
            'event_id' => mt_rand(1,2)
        ];
    }
}
