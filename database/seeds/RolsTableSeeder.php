<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class RolsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rol = [
            'administrador',
            'supervisor',
            'cliente'
        ];

        foreach($rol as $key => $value){
            DB::table('role')->insert([
                'name' => $value,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);
    
        }
    }
}
