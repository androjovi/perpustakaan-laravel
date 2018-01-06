<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Peminjam extends Model
{
    protected $table = "peminjam";
	public $primaryKey = "id";
	public $timestamps = false;
}
