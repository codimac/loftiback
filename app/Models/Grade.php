<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    protected $table = 'grade';
	protected $primaryKey = 'grade_id';
    public $timestamps = false;	
}
