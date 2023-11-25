<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    public function definition(): array
    {
        return [
            "isim"          => fake()->firstName(),
            "soyisim"       => fake()->lastName(),
            "yazi"          => fake()->text(),
            "telefon"       => fake()->phoneNumber(),
            "mail"          => fake()->email(),
            "ipAdresi"      => fake()->ipv4(),
            "tarayici"      => fake()->userAgent(),
            "renk"          => fake()->hexColor(),
            "image"         => fake()->imageUrl($width = 200, $height = 200),
            "barkod"        => fake()->ean8(),
            "adres"         => fake()->address()
        ];
    }
}
