<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
	public $timestamps = false;

	protected $table = 'pegawai';

	protected $primaryKey = 'pegawai_id';
	
}