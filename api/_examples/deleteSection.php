<?php

/**
 * Sample API php client application
 *
 * In this example we will delete section
 *
 *	http://phpipam/api/client/deleteSection.php?id=3
 */

# config
include_once('apiConfig.php');

# API caller class
include_once('apiClient.php');

# commands
$req['controller'] 	= "sections";
$req['action']		= "delete";

# set parameters
if(!isset($_REQUEST['id'])) { die('Section id missing'); }
else						{ $req['id'] = $_REQUEST['id']; }

# wrap in try to catch exceptions
try {
	# initialize API caller
	$apicaller = new ApiCaller($app['id'], $app['enc'], $url);
	# send request
	$response = $apicaller->sendRequest($req);

	print "<pre>";
	print_r($response);
}
catch( Exception $e ) {
	//catch any exceptions and report the problem
	print "Error: ".$e->getMessage();
}

?>