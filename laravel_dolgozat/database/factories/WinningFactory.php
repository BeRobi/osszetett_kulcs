<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Brand;
use App\Models\Part;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Part>
 */
class PartFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $repeats = 10;

        do {
            $user_id = User::all()->random()->id;
            $brand_id = Brand::all()->random()->brand_id;            
            $part_id = Part::all()->random()->part_id;  
            $repeats--;
        } while ($repeats >= 0 && count($Part) > 0);
 
        return [

            'user_id' => $user_id,
            'brand_id' => $brand_id,
            'part_id' => $part_id
            
        ];
    }
}
