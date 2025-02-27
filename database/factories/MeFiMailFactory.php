<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\MeFiMail;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

final class MeFiMailFactory extends Factory
{
    protected $model = MeFiMail::class;

    public function definition(): array
    {
        return [
            'subject' => $this->faker->sentence(),
            'message' => $this->faker->paragraph(),
            'sender_id' => (new User())->inRandomOrder()->first(),
            'recipient_id' => (new User())->inRandomOrder()->first(),
        ];
    }
}
