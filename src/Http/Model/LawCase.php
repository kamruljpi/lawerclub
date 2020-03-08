<?php

namespace kamruljpi\lawsettings\Http\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LawCase extends Model
{
	use SoftDeletes;
	protected $primaryKey = 'id_lawcase';
	protected $table = 'lawcases';
	protected $fillable = ['name', 'description','is_active'];
}
