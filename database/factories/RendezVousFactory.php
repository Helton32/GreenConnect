<?php

namespace Database\Factories;

use App\Models\RendezVous;
use Faker\Generator as Faker;
use Database\Factories\RendezVousFactory;
use Illuminate\Database\Eloquent\Factories\Factory;

class RendezVousFactory extends Factory
{
    protected $model = RendezVous::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Name' => $this->faker->firstName,
            'LastName' => $this->faker->lastName,
            'Adresse' => $this->faker->address,
            'Telephone' => $this->faker->phoneNumber,
            'Email' => $this->faker->email,
            'Superficie' => $this->faker->randomFloat(2, 50, 200), // Superficie en m²
            'Energie' => $this->faker->randomElement(['Gaz', 'Electricité', 'Fioul']),
            'Quantite' => $this->faker->randomNumber(2),
            'Date' => $this->faker->date(),
            'Heure' => $this->faker->time(),
            'Message' => $this->faker->paragraph,
            'AvisImpots' => $this->faker->word,
            'FactureGazElec' => $this->faker->word,
            'status' => $this->faker->randomElement(['en cours', 'terminé']),
        ];
    }
}
