<?php

namespace Database\Factories;

use App\Models\Categoria;
use App\Models\Producto;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Producto::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre'=>$this->faker->word(),
            'descripcion'=>$this->faker->paragraph(),
            'precio'=>$this->faker->randomFloat(2,3,500),
            'stock'=>$this->faker->numberBetween(0,500),
            'categoria_id'=>Categoria::all()->random()->id
        ];
    }
}
