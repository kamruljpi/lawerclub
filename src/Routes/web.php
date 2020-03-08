<?php



Route::group(['prefix' => 'court','middleware' => ['RoleAuthenticate']], function () {
	Route::get('/', [
	    'as' => 'court_index',
	    'uses' => 'CourtController@index',
	    'parent' => 'setting_parent',
	    'name' => 'Court List',
	    'icon' => '',
	    'description' => 'Court List',
	    'is_display' => 1,
	    'is_active' => 1,
	    'order_id' => 1,
	    'wrap_group' => 'Court',
	    'wrap_group_level' => 'Courts',
	]);
	Route::get('/create', [
	    'as' => 'court_create',
	    'uses' => 'CourtController@create',
	    'parent' => 'setting_parent',
	    'name' => 'Court Create',
	    'icon' => '',
	    'description' => 'Court Create',
	    'is_active' => 1,
	    'order_id' => 0,
	    'wrap_group' => 'Court',
	    'wrap_group_level' => 'Courts',
	]);
	Route::post('/create', [
	    'as' => 'court_create_action',
	    'uses' => 'CourtController@createAction',
	    'parent' => 'setting_parent',
	    'name' => 'Court Store',
	    'icon' => '',
	    'description' => 'Court Store',
	    'is_active' => 1,
	    'order_id' => 0,
	    'wrap_group' => 'Court',
	    'wrap_group_level' => 'Courts',
	]);
	Route::get('/edit/{id}', [
	    'as' => 'court_edit',
	    'uses' => 'CourtController@edit',
	    'parent' => 'setting_parent',
	    'name' => 'Court Edit',
	    'icon' => '',
	    'description' => 'Court Edit',
	    'is_active' => 1,
	    'order_id' => 0,
	    'wrap_group' => 'Court',
	    'wrap_group_level' => 'Courts',
	]);
	Route::post('/edit/{id}', [
	    'as' => 'court_edit_action',
	    'uses' => 'CourtController@editAction',
	    'parent' => 'setting_parent',
	    'name' => 'Court Update',
	    'icon' => '',
	    'description' => 'Court Update',
	    'is_active' => 1,
	    'order_id' => 0,
	    'wrap_group' => 'Court',
	    'wrap_group_level' => 'Courts',
	]);
	Route::get('/delete/{id}', [
	    'as' => 'court_delete',
	    'uses' => 'CourtController@delete',
	    'parent' => 'setting_parent',
	    'name' => 'Court Delete',
	    'icon' => '',
	    'description' => 'Court Delete',
	    'is_active' => 1,
	    'order_id' => 0,
	    'wrap_group' => 'Court',
	    'wrap_group_level' => 'Courts',
	]);
	Route::get('/status/{id}', [
	    'as' => 'court_status',
	    'uses' => 'CourtController@Status',
	    'parent' => 'setting_parent',
	    'name' => 'Court Status',
	    'icon' => '',
	    'description' => 'Court Status',
	    'is_active' => 1,
	    'order_id' => 0,
	    'wrap_group' => 'Court',
	    'wrap_group_level' => 'Courts',
	]);
});


Route::group(['prefix' => 'case','middleware' => ['RoleAuthenticate']], function () {
	Route::get('/', [
	    'as' => 'case_index',
	    'uses' => 'CaseController@index',
	    'parent' => 'setting_parent',
	    'name' => 'Case List',
	    'icon' => '',
	    'description' => 'Case List',
	    'is_display' => 1,
	    'is_active' => 1,
	    'order_id' => 1,
	    'wrap_group' => 'Case',
	    'wrap_group_level' => 'Cases',
	]);
	Route::get('/create', [
	    'as' => 'case_create',
	    'uses' => 'CaseController@create',
	    'parent' => 'setting_parent',
	    'name' => 'Case Create',
	    'icon' => '',
	    'description' => 'Case Create',
	    'is_active' => 1,
	    'order_id' => 0,
	    'wrap_group' => 'Case',
	    'wrap_group_level' => 'Cases',
	]);
	Route::post('/create', [
	    'as' => 'case_create_action',
	    'uses' => 'CaseController@createAction',
	    'parent' => 'setting_parent',
	    'name' => 'Case Store',
	    'icon' => '',
	    'description' => 'Case Store',
	    'is_active' => 1,
	    'order_id' => 0,
	    'wrap_group' => 'Case',
	    'wrap_group_level' => 'Cases',
	]);
	Route::get('/edit/{id}', [
	    'as' => 'case_edit',
	    'uses' => 'CaseController@edit',
	    'parent' => 'setting_parent',
	    'name' => 'Case Edit',
	    'icon' => '',
	    'description' => 'Case Edit',
	    'is_active' => 1,
	    'order_id' => 0,
	    'wrap_group' => 'Case',
	    'wrap_group_level' => 'Cases',
	]);
	Route::post('/edit/{id}', [
	    'as' => 'case_edit_action',
	    'uses' => 'CaseController@editAction',
	    'parent' => 'setting_parent',
	    'name' => 'Case Update',
	    'icon' => '',
	    'description' => 'Case Update',
	    'is_active' => 1,
	    'order_id' => 0,
	    'wrap_group' => 'Case',
	    'wrap_group_level' => 'Cases',
	]);
	Route::get('/delete/{id}', [
	    'as' => 'case_delete',
	    'uses' => 'CaseController@delete',
	    'parent' => 'setting_parent',
	    'name' => 'Case Delete',
	    'icon' => '',
	    'description' => 'Case Delete',
	    'is_active' => 1,
	    'order_id' => 0,
	    'wrap_group' => 'Case',
	    'wrap_group_level' => 'Cases',
	]);
	Route::get('/status/{id}', [
	    'as' => 'case_status',
	    'uses' => 'CaseController@Status',
	    'parent' => 'setting_parent',
	    'name' => 'Case Status',
	    'icon' => '',
	    'description' => 'Case Status',
	    'is_active' => 1,
	    'order_id' => 0,
	    'wrap_group' => 'Case',
	    'wrap_group_level' => 'Cases',
	]);
});
