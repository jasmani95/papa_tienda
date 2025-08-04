<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MarcasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //registros en la tabla
        DB::table('marcas')->insert([
            [
                'Nombre'=> 'Arroz',
                'Especificacion'=>'empresa san juan',
                'created_at'=> now(),
                'updated_at'=> now(),
            ],
            [
                'Nombre'=> 'aceite',
                'Especificacion'=>'empresa fino',
                'created_at'=> now(),
                'updated_at'=> now(),
            ]
        ]);

    }
}
