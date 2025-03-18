<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $products = [
            [
                'nombre' => 'Barra de proteina',
                'descripcion' => 'Barra rica en proteínas para nutrición deportiva/50gr',
                'precio' => 50.00,
                'path'=> 'creatina.PNG'


            ],

            [
                'nombre' => 'Barra Olímpica',
                'descripcion' => 'Barra olímpica ideal para levantamiento de pesas y ejercicios de fuerza/220cm x 3cm',
                'precio' => 3500.00,
                'path'=> 'barraOlimpica.PNG'

            ],

            [
                'nombre' => 'Colágeno Hidrolizado',
                'descripcion' => 'Suplemento alimenticio para cuidado de articulaciones y piel/500g',
                'precio' => 550.00,
                'path'=> 'colagenoHidrolizado.PNG'

            ],


            [
                'nombre' => 'Creatina',
                'descripcion' => 'Suplemento de creatina monohidratada para aumentar fuerza y rendimiento/300g',
                'precio' => 450.00,
                'path'=> 'creatina.PNG'

            ],

            


        ];


        //del array de arrays se pobla la tabla
        foreach ($products as $key => $value) {
            Product::create($value);
        }

    }
}
