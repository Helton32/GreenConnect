<?php

namespace Database\Factories;

use App\Models\Messages;
use Faker\Generator as Faker;
use Database\Factories\MessagesFactory;
use Illuminate\Database\Eloquent\Factories\Factory;

class MessagesFactory extends Factory
{
    /**
     * Le nom du modèle associé à cette factory.
     *
     * @var string
     */
    protected $model = Messages::class;

    /**
     * Définissez l'état de base de l'élément de message.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Nom' => $this->faker->name(),
            'mail' => $this->faker->unique()->safeEmail(),
            'numero' => $this->faker->phoneNumber(),
            'msg' => $this->faker->text(200), // Texte aléatoire
        ];
    }
}
