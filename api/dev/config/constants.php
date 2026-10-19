<?php
/////// developed by Mike Afolabi on 19-02-2025//////////////////////
$appName = "CoopIVA Multi Co-operative Management Solution";
$appDescription = "CoopIVA is a comprehensive multi co-operative management solution designed to streamline operations, enhance member engagement, and optimize financial management for co-operative organizations. With a user-friendly interface and robust features, CoopIVA empowers co-operatives to efficiently manage their resources, track member activities, and ensure transparency in their operations.";

////////////////////////////////////////////////////////////////////////
$userOsBrowser = isset($_SERVER['HTTP_USEROSBROWSER']) ? $_SERVER['HTTP_USEROSBROWSER'] : null;
$userIpAddress = isset($_SERVER['HTTP_USERIPADDRESS']) ? $_SERVER['HTTP_USERIPADDRESS'] : null;
$userDeviceId = isset($_SERVER['HTTP_USERDEVICEID']) ? $_SERVER['HTTP_USERDEVICEID'] : null;
$clientId = isset($_SERVER['HTTP_CLIENTID']) ? $_SERVER['HTTP_CLIENTID'] : null;
$clientAddress = isset($_SERVER['HTTP_CLIENTADDRESS']) ? $_SERVER['HTTP_CLIENTADDRESS'] : null;
$frontEndApiKey = isset($_SERVER['HTTP_APIKEY']) ? $_SERVER['HTTP_APIKEY'] : null;
$backEndApiKey = '32ea69b45c80f325fe0ee4b2fb790900'; //coopivaApiKey@2026
////////////////////////////////////////////////////////////////////////

// Read the raw JSON input
$json = file_get_contents('php://input');
// Decode the JSON into an associative array
$data = json_decode($json, true);
//// get clientId for all SQL queries
$clientIds = "clientId='$clientId'";

$checkBasicSecurity = true;
///// check for API security
if ($frontEndApiKey != $backEndApiKey) {/// start if 1
	$checkBasicSecurity = false;
	$securityMessage = "SECURITY ACCESS DENIED! You are not allowed to execute this command due to security bridge.";
}
///// check for userOsBrowser security
if (empty($userOsBrowser)) {/// start if 1
	$checkBasicSecurity = false;
	$securityMessage = "ACCESS DENIED! The host OS and browser is undefined.";
}
///// check for userIpAddress security
if (empty($userIpAddress)) {/// start if 1
	$checkBasicSecurity = false;
	$securityMessage = "ACCESS DENIED! User IP address is undefined.";
}
///// check for userDeviceId security
if (empty($userDeviceId)) {/// start if 1
	$checkBasicSecurity = false;
	$securityMessage = "ACCESS DENIED! User device ID is undefined.";
}

//// confirm that the clientId is valid and exists in the schoolbolt administrative database
$selectQuery = "SELECT * FROM CLIENTS_TAB WHERE hashId=?";
$selectParams = [$clientId];
$clientData = selectQuery($connAdmin, $selectQuery, 's', $selectParams)[0] ?? null;

if (!$clientData) { /// start if 4
	$checkBasicSecurity = false;
	$securityMessage = "THIS COOPERATIVE IS UNKNOWN TO CoopIVA! Kindly contact CoopIVA Admin For help.";
} else {
	$dbClientAddress = $clientData['clientWebsite'];
	$statusId = $clientData['statusId'];

	if ($statusId != 1) {
		$checkBasicSecurity = false;
		$securityMessage = "SYSTEM IS INACTIVE ON CoopIVA! Kindly contact CoopIVA Admin For help.";
	} else {
		if (!strstr($clientAddress, $dbClientAddress)) {
			$checkBasicSecurity = false;
			$securityMessage = "ACCESS DENIED FROM CoopIVA! Kindly contact CoopIVA Admin For help.";
		}
	}

}