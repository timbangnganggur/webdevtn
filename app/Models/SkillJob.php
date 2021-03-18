<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SkillJob extends Model
{
    use HasFactory;

    protected $table = 'skills_jobs';

    protected $fillable = [
      'skills_id',
      'jobs_id'
    ];
    
    public function skills() {
		  return $this->belongsTo('App\Models\Skill', 'skills_id', 'id');
	  }

    public function jobs() {
		  return $this->belongsTo('App\Models\Job', 'jobs_id', 'id');
	  }
}
