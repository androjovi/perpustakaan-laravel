<?php

use Illuminate\Database\Seeder;

class InsertDummyPeminjam extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dummy = Faker\Factory::create();
		
		// Karena bersifan join, maka tidak ditampilkan
    }
}
