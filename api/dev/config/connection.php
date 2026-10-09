<?php
error_reporting(E_ALL ^ E_NOTICE ^ E_DEPRECATED ^ E_WARNING);

// Allow all origins (for testing; restrict in production)
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: Authorization, Origin, X-Requested-With, Content-Type, Accept, apiKey, userOsBrowser, userIpAddress, userDeviceId, clientId, clientAddress");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
header('Content-Type: application/json; charset=UTF-8');

// Handle preflight requests
if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    http_response_code(200);
    exit(); // stop further execution
}

// for schoolbolt admin connection;
$_HOST_NAME_ADMIN = "23.106.46.178"; // backup server
$_DB_USERNAME_ADMIN = "coopiva_dev";
$_DB_PASSWORD_ADMIN = "Password@Dec292025";
$_DB_NAME_ADMIN = "coopiva_administrative_dev_db";

$connAdmin = mysqli_connect($_HOST_NAME_ADMIN, $_DB_USERNAME_ADMIN, $_DB_PASSWORD_ADMIN) or die("Unable to connect to MySQL1");
mysqli_select_db($connAdmin, $_DB_NAME_ADMIN) or die("Could not connect to CoopIVA Admin Database");
/////////////////////////////////////////////////////////////////

// for client connection;
$_HOST_NAME_CLIENT = "23.106.46.178"; // backup server
$_DB_USERNAME_CLIENT = "coopiva_dev";
$_DB_PASSWORD_CLIENT = "Password@Oct092026";
$_DB_NAME_CLIENT = "coopiva_client_dev_db";

$conn = mysqli_connect($_HOST_NAME_CLIENT, $_DB_USERNAME_CLIENT, $_DB_PASSWORD_CLIENT) or die("Unable to connect to MySQL1");
mysqli_select_db($conn, $_DB_NAME_CLIENT) or die("Could not connect to CoopIVA Client Database");

/////////////////////////////////////////////////////////////////
mysqli_set_charset($conn, "utf8mb4");
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

require_once 'crud.php';
require_once 'errorHandlers.php';
require_once 'prefix.php';
require_once 'helper.php';
require_once 'functions.php';
require_once 'constants.php';