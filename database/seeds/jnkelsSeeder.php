<?php

use Illuminate\Database\Seeder;
use App\jnkel;
class jnkelsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        jnkel::create([
        	'nama' => 'Laki-laki',
        	'slug' => str_slug('Laki-laki') 
        ]);

        jnkel::create([
        	'nama' => 'Perempuan',
        	'slug' => str_slug('Perempuan') 
        ]);
    }
}
