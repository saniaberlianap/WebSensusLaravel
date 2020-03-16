<?php

use Illuminate\Database\Seeder;

use Faker\Factory as Faker;

class KeluargaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        // DB::table('keluargas')->insert([
        // 	'ayah' => 'Syamsul Arif',
        // 	'ibu' => 'Henni Setiyawati',
        // 	'alamat' => 'Ngunut, Tulungagung'
        // ]);
    

    	$faker = Faker::create('id_ID');
        for($i = 1; $i <= 10; $i++){
 
    		DB::table('keluargas')->insert([
    			'ayah' => $faker->name,
    			'ibu' => $faker->name,
    			'alamat' => $faker->address
    		]);
 
    	}
    }
}
