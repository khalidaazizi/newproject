<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Slider>
 */
class SliderFactory extends Factory
{    
    
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title'=> $this ->faker -> title,
            'description'=> $this ->faker -> text,
            // use system images 
               //  $images =['image1.jpg', 'image2.jpg', 'image3.jpg', 'image4.jpg', 'image5.jpg', 'image6.jpg', 'image7.jpg','image8.jpg','image10.jpg'],
               // 'image'=> $this ->faker -> randomElement( $images),
            'image'=> $this ->faker -> imageUrl(),

        ];
    }
}
