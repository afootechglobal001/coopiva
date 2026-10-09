<?php
error_reporting(E_ALL ^ E_NOTICE ^ E_DEPRECATED ^ E_WARNING);
$websiteAutoUrl = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$appName = 'Coopiva Edu System CBT';

$clientWebsiteUrl='http://localhost/afootech/coopiva';
	//$clientWebsiteUrl='https://coopiva.com';
//$websiteUrl='https://coopiva.com/portal'; /// For Live Server Url //
$websiteUrl = 'http://localhost/afootech/coopiva/portal';
//$websitePath = $_SERVER['DOCUMENT_ROOT'];
$websitePath = $_SERVER['DOCUMENT_ROOT'].'/coopiva/portal'; //dirname(__FILE__);
$codeVersion = date('Ymdhis');
?>

<?php
$userOsBrowser = $_SERVER['HTTP_USER_AGENT'];
/////////////////////////////////////////////////////////////////////////////////
function getUserIP()
{
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        return $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        return $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
        return $_SERVER['REMOTE_ADDR'];
    }
}
$userIpAddress = getUserIP();

/////////////////////////////////////////////////////////////////////////////////
function getBrowserId()
{
    $userAgent = $_SERVER['HTTP_USER_AGENT'] ?? '';  // Browser and OS info
    $acceptLanguage = $_SERVER['HTTP_ACCEPT_LANGUAGE'] ?? '';  // Language
    // Combine all data and create a hash
    $browserId = hash('sha256', $userAgent . $acceptLanguage);
    return $browserId;
}
$userDeviceId = getBrowserId();
?>

<script>
    /// Constants ///
    var websiteUrl = "<?php echo $websiteUrl; ?>";
    var clientWebsiteUrl = "<?php echo $clientWebsiteUrl; ?>";
    var userOsBrowser = "<?php echo $userOsBrowser; ?>"; /// For User OS Browser //
    var userIpAddress = "<?php echo $userIpAddress; ?>"; /// For User IP Address //
    var userDeviceId = "<?php echo $userDeviceId; ?>"; /// For User Device Id //

    /// CBT Admin Middleware Urls ///
    var cbtLoginMiddleWareUrl = websiteUrl + '/admin/login/config/code'; /// For CBT Login Middleware Url //
    var cbtLoginUrl = websiteUrl + '/admin/login'; /// For CBT Login Url //

    /// Admin Middleware Urls ///
    var cbtAdminMiddleWareUrl = websiteUrl + '/admin/config/code'; /// For CBT Admin Login Middleware Url //
    var cbtAdminUrl = websiteUrl + '/admin'; /// For Admin Url //

    /// Student Portal Middleware Urls ///
    var cbtStudentPortalMiddleWareUrl = websiteUrl + '/student/config/code'; /// For CBT Student Portal Middleware Url //
    var cbtStudentPortalUrl = websiteUrl + '/student'; /// For Student Portal Url //
</script>