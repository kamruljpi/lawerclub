<?php

namespace kamruljpi\lawsettings\Http\Controllers;

use kamruljpi\lawsettings\Http\Model\Case;
use Illuminate\Http\Request;
use kamruljpi\admintemplate\controllers\ProjectBaseController;

class CaseController extends ProjectBaseController
{
	public function __construct() {
		$this->modelName = 'kamruljpi\lawsettings\Http\Model\Case';
	}
}