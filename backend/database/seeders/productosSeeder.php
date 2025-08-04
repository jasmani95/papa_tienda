<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class productosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         //registros en la tabla
        DB::table('productos')->insert([
            [
                'Nombre'=> 'harina',
                'precio'=>'50',
                'marca'=>'san juan',
                'created_at'=> now(),
                'updated_at'=> now(),
            ],
            [
                'Nombre'=> 'aceite',
                'precio'=>'50',
                'marca'=>'fino',
                'created_at'=> now(),
                'updated_at'=> now(),
            ]
        ]);

    }
}
