<?php

use Illuminate\Database\Seeder;

class InsertDummyBuku extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dummy = Faker\Factory::create();
		
		$limit = 250;
		
			for ($z=0; $z<$limit; $z++){
					DB::table('buku')->insert([
							'kode_buku'			=> $dummy->isbn13(),
							'judul_buku'		=> $dummy->jobTitle(),
							'kategori_buku'		=> $dummy->word(),
							'pengarang_buku'	=> $dummy->name(),
							'penerbit_buku'		=> $dummy->company(),
							'jumlah_halaman'	=> $dummy->randomDigitNotNull(),
					]);
			}
    }
}
