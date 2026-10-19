<?php
require_once '../../config/connection.php';
try {
	if (!$checkBasicSecurity) {
		throw new ForbiddenException($securityMessage);
	}

	// ////// get all input parameters
	$userName = trim($data['userName']);
	$password = $data['password'];

	//// validate input parameters
	validateEmptyField($userName, "USERNAME");
	validateEmptyField($password, "PASSWORD");
	validateEmailField($userName, "USERNAME");

	/* Secure SELECT using prepared statement */
	$selectQuery = "SELECT * FROM STAFF_TAB WHERE $clientIds AND emailAddress = ?";
	$selectParams = [$userName];
	$userData = selectQuery($connClient, $selectQuery, 's', $selectParams)[0];
	$staffId = $userData['staffId'];
	$statusId = $userData['statusId'];
	$passwordHash = $userData['password'];

	if (empty($userData)) {
		throw new BadRequestException("INVALID USERNAME! Kindly check the username and try again.");
	}
	if (md5($password) !== $passwordHash) {
		throw new BadRequestException("INVALID PASSWORD! Kindly check the password and try again.");
	}
	if ($statusId === 2) {
		throw new ForbiddenException("ACCOUNT SUSPENDED! Contact the administrator for more info.");
	}
	if ($statusId !== 1) {
		throw new ForbiddenException("ACCOUNT UNDER REVIEW! Contact the administrator for more info.");
	}
	////generate access key and update database
	$accessKey = trim(md5($staffId . date("Ymdhis")));
	$updateQuery = "UPDATE STAFF_TAB SET accessKey = ?,  lastLoginTime = NOW() WHERE $clientIds AND staffId = ?";
	$updateParams = [$accessKey, $staffId];
	updateQuery($connClient, $updateQuery, 'ss', $updateParams);

	///// fetch staff view
	$selectQuery = "SELECT 
	*
	FROM STAFF_VIEW 
	WHERE $clientIds AND staffId = ?";

	$selectParams = [$staffId];
	$userData = selectQuery($connClient, $selectQuery, 's', $selectParams)[0];
	$titleId=$userData['titleId'];
	$firstName=$userData['firstName'];
	$lastName=$userData['lastName'];
    $branchId = $userData['branchId'];

	
	$fullName="$titleId $firstName $lastName";
	$userData['fullName']=$fullName;


    /// get branch data
    $branchQuery ="SELECT branchId, name AS branchName, address, smtpUsername, mobileNumber, session, termId  FROM BRANCHES_TAB WHERE $clientIds AND branchId=?";
    $branchParams = [$branchId];
    $userData['branchData'] = selectQuery($connClient, $branchQuery, "s", $branchParams)[0];

	//// get term data
	$termId = $userData['branchData']['termId'];
	$termQuery = "SELECT * FROM SETUP_TERM_TAB WHERE termId=?";
	$termParams = [$termId];
	$userData["termData"] = selectQuery($connClient, $termQuery, "i", $termParams)[0];

	$response = [
		'response' => 200,
		'success' => true,
		'message' => "LOGIN SUCCESSFUL!",
		'data' => $userData
	];

} catch (Throwable $e) {
	ErrorHandler::handle($e);
}
http_response_code($response['response']); // sets HTTP status
echo json_encode($response);