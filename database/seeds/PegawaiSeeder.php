<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
 
    	for($i = 1; $i <= 50; $i++){
 
    	// insert data ke table pegawai menggunakan Faker/ data dummy
    	DB::table('pegawai')->insert([
    		'pegawai_nama' => $faker->name,
    		'pegawai_jabatan' => $faker->jobTitle,
    		'pegawai_umur' => $faker->numberBetween(25,40),
    		'pegawai_alamat' => $faker->address
        ]);
        
        // //perulangan for 50 data static
        // for($i = 1; $i <= 50; $i++){
        // // insert data ke table pegawai
        // DB::table('pegawai')->insert([
        // 	'pegawai_nama'    => 'Joni',
        // 	'pegawai_jabatan' => 'Web Designer',
        // 	'pegawai_umur'    => 25,
        // 	'pegawai_alamat'  => 'Jl. Panglateh'
        // ]);
    }
}
}
