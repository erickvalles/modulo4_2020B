<?php

namespace Database\Factories;

use App\Models\Movimiento;
use App\Models\Producto;
use Illuminate\Database\Eloquent\Factories\Factory;

class MovimientoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Movimiento::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'tipo'=>Movimiento::$TIPOS_MOVIMIENTOS[$this->faker->numberBetween(0,1)],
            'cantidad'=>$this->faker->numberBetween(1,10),
            'producto_id'=>Producto::all()->random()->id,
        ];
    }
}
