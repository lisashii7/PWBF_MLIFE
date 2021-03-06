<?php

namespace Database\Factories;

use App\Models\Buku;
use Illuminate\Database\Eloquent\Factories\Factory;

class BukuFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Buku::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'buku' => $this->faker->name,
            'keterangan' => $this->faker->sentence,
            'penulis' => $this->faker->name,
            'tahun_terbit' => $this->faker->date,
        ];
    }
}
