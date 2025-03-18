<?php

namespace Database\Seeders;

use App\Models\Persona;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PersonaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $persona = new Persona();
        $persona->usuario = 'Leoch27';
        $persona->nombre = 'Leonardo';
        $persona->apellidoPaterno = 'Chagoya';
        $persona->apellidoMaterno = 'Gonzalez';
        $persona->correo = 'leocingon@gmail.com';
        $persona->password = bcrypt('123456789');

        $persona->save();
    }
}
