<?php

namespace kamruljpi\lawsettings\Http\Controllers;

use kamruljpi\lawsettings\Http\Model\Court;
use Illuminate\Http\Request;
use kamruljpi\admintemplate\controllers\ProjectBaseController;

class CourtController extends ProjectBaseController
{
	public function __construct() {
		$this->modelName = 'kamruljpi\lawsettings\Http\Model\Court';
		$this->formView = 'lawsettings::court.create';
	}
}