<?php
error_reporting(E_ALL ^ E_NOTICE ^ E_DEPRECATED ^ E_WARNING);
$websiteAutoUrl = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$appName = 'New Project';

//$websiteUrl='https://coopiva.com'; /// For Live Server Url //
$websiteUrl = 'http://localhost/afootech/coopiva';
//$websitePath = $_SERVER['DOCUMENT_ROOT'];
$websitePath = $_SERVER['DOCUMENT_ROOT'].'/afootech/coopiva'; //dirname(__FILE__);
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
    var userOsBrowser = "<?php echo $userOsBrowser; ?>"; /// For User OS Browser //
    var userIpAddress = "<?php echo $userIpAddress; ?>"; /// For User IP Address //
    var userDeviceId = "<?php echo $userDeviceId; ?>"; /// For User Device Id //

    ////// EndPoints///
    var endPoint = "https://coopiva.com/api/dev"; /// For EndPoint Url //
    var apiKey = "test"; /// For Api Key //

    /// Site Middleware Urls ///
    var siteMiddlewareUrl = websiteUrl + '/config/code'; //// For site url

    /// Admin Middleware Urls ///
    var adminMiddleWareUrl = websiteUrl + '/admin/config/code'; /// For Admin Login Middleware Url //
    var adminUrl = websiteUrl + '/admin'; /// For Admin Url //
    var userVerificationUrl = websiteUrl + '/admin/user-verification'; /// For User Verification Url //
    var completeResetPasswordUrl = websiteUrl + '/admin/complete-reset-password'; /// For Complete Reset Password Url //

    /// Portal Middleware Urls ///
    var portalMiddleWareUrl = websiteUrl + '/portal/config/code'; /// For Portal Login Middleware Url //
    var portalUrl = websiteUrl + '/portal'; /// For Portal Url //
</script>