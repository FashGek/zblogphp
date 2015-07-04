<?php
/**
 * api
 * @author zsx<zsx@zsxsoft.com>
 * @package api/route/module
 * @php >= 5.2
 */
/**
 * Format single module object
 * @param object $module
 * @return array
 */
function return_module($id) {
	global $zbp;

	$module = $zbp->GetModuleByID($id);
	$ret = $module->GetData();
	API::$IO->formatObjectName($ret);
	return $ret;

}

/**
 * Get module
 */
function api_module_get_function() {

	$id = (int)API::$IO->id;
	if ($id === 0) API::$IO->end(3);
	//
	$ret = return_module($id);

	API::$IO->module = $ret;

}

API::$Route->get('/module/', 'api_module_get_function');

/**
 * Get modules
 */
function api_modules_get_function() {

}
API::$Route->get('/modules/', 'api_modules_get_function');

/**
 * Create module
 */
function api_module_create_function() {

}
API::$Route->post('/module/create/', 'api_module_create_function');

/**
 * Update module
 */
function api_module_update_function() {

}
API::$Route->post('/module/update/', 'api_module_update_function');

/**
 * Update module
 */
function api_module_delete_function() {

}
API::$Route->post('/module/delete/', 'api_module_delete_function');
