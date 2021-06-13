<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $table = 'companies';
	protected $fillable = ['name', 'regions_id'];
	
	public function regions() {
		return $this->belongsTo('App\Models\Region', 'regions_id', 'id');
	}
}
