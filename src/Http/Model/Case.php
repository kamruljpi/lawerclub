<?php

namespace kamruljpi\lawsettings\Http\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Case extends Model
{
	use SoftDeletes;
	protected $primaryKey = 'id_case';
	protected $fillable = ['name', 'description','is_active'];
}