<?php

namespace kamruljpi\lawsettings\Http\Controllers;

use Illuminate\Http\Request;
use kamruljpi\admintemplate\controllers\ProjectBaseController;

class LawCaseController extends ProjectBaseController
{
	public function __construct() {
		$this->modelName = 'kamruljpi\lawsettings\Http\Model\LawCase';
		$this->formView = 'lawsettings::lawcase.create';
	}
	public function getValidation($table = null) {
        return ['name' => 'required'];
    }
}