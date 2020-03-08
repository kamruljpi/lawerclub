<?php

namespace kamruljpi\lawsettings\Http\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Court extends Model
{
	use SoftDeletes;
	protected $primaryKey = 'id_court';
	protected $fillable = ['court_name', 'description','is_active'];
}