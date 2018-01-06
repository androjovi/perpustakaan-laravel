<?php

use Illuminate\Database\Seeder;

class InsertSiswa extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dummy = Faker\Factory::create();
		$limit = 1000;
		
		for ($i=0; $i< $limit; $i++){
			DB::table('siswa')->insert([
			'nis'		=> $dummy->ean8(),
			'nama'		=> $dummy->name(),
			'kelas'		=> $dummy->numberBetween(10,12),
			'jurusan'	=> $dummy->randomElement(array('RPL','TKJ','APH','MM1','MM2','TKR')),
				
				]);
		}
    }
}
