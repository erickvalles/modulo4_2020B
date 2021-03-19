<?php

namespace Database\Seeders;

use App\Models\Categoria;
use App\Models\Ciudad;
use App\Models\Movimiento;
use App\Models\Producto;
use App\Models\Telefono;
use App\Models\Tienda;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        Movimiento::truncate();
        Producto::truncate();
        Categoria::truncate();
        Telefono::truncate();
        Tienda::truncate();
        Ciudad::truncate();


        Categoria::factory(30)->create();
        Producto::factory(100)->create();
        Movimiento::factory(150)->create();
        Tienda::factory(15)->create();
        Telefono::factory(15)->create();
        Ciudad::factory(20)->create();

        DB::statement('SET FOREIGN_KEY_CHECKS=1');
    }
}
