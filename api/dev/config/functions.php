<?php
function _staff_accesskey_validation($conn, $accessKey)
{
    $getQuery = "SELECT * FROM STAFF_VIEW WHERE accessKey=? AND statusId=? AND accessKey!=''";
    $getParams = [$accessKey, 1];
    $getResult = selectQuery($conn, $getQuery, 'si', $getParams);
    $count = count($getResult);
    if ($count > 0) {
        $userData = $getResult[0];
        $firstName = $userData['firstName'];
        $lastName = $userData['lastName'];
        $response = [
            "checkSession" => true,
            "loginStaffId" => $userData['staffId'],
            "loginFullname" => "$firstName $lastName",
            "loginRoleid" => $userData['roleId'],
            "staffBranchId" => $userData["branchId"]
        ];
    } else {
        $response = [
            "checkSession" => false
        ];
    }
    return json_encode($response);
}

///////////////////////////////////////////////////////////////////////////////////////////////////
function _get_sequence_count($conn, $counterId)
{
    $getQuery = "SELECT counterValue FROM SETUP_COUNTER_TAB WHERE counterId = ? FOR UPDATE";
    $getParams = [$counterId];
    $getResult = selectQuery($conn, $getQuery, 's', $getParams);
    $count = $getResult[0]['counterValue'];
    $num = $count + 1;
    ///// update the counter value in the database
    $updateQuery = "UPDATE `SETUP_COUNTER_TAB` SET `counterValue` = ? WHERE counterId = ?";
    $updateParams = [$num, $counterId];
    updateQuery($conn, $updateQuery, 'is', $updateParams);
    if ($num < 10) {
        $no = '00' . $num;
    } elseif ($num >= 10 && $num < 100) {
        $no = '0' . $num;
    } else {
        $no = $num;
    }
    $response = ["no" => $no];
    return ($response);
}

function _action_performed_by($conn, $staffId)
{
    $getQuery = "SELECT CONCAT(firstName,' ',lastName) AS fullname, emailAddress FROM STAFF_TAB WHERE staffId = ?";
    $getParams = [$staffId];
    $getResult = selectQuery($conn, $getQuery, 's', $getParams);
    return ($getResult[0]);
}
////// get STATUS details
function _get_status_details($conn, $statusId)
{
    $getQuery = "SELECT statusId, statusName FROM SETUP_STATUS_TAB WHERE statusId = ?";
    $getParams = [$statusId];
    $getResult = selectQuery($conn, $getQuery, 'i', $getParams);
    return ($getResult[0]);
}

function _get_setup_backend_settings_detail($conn)
{
    $getQuery = "SELECT * FROM SETUP_BACKEND_SETTINGS_TAB WHERE settingsId = 'S001'";
    $getResult = selectQuery($conn, $getQuery);
    return ($getResult[0]);
}
function _get_setup_backend_settings_detail_for_branch($conn, $clientId, $branchId)
{
    $getQuery = mysqli_query($conn, "SELECT * FROM BRANCHES_TAB WHERE clientId='$clientId' AND branchId='$branchId'") or die(mysqli_error($conn));
    $getResult = selectQuery($conn, $getQuery)[0];

    $response = [
        "senderName" => $getResult['name'],
        "smtpHost" => $getResult['smtpHost'],
        "smtpUsername" => $getResult['smtpUsername'],
        "smtpPassword" => $getResult['smtpPassword'],
        "smtpPort" => $getResult['smtpPort'],
        "supportEmail" => $getResult['supportEmail'],
    ];
    return json_encode([$response]);
}

// get payment method details
function _get_payment_method_details($conn, $paymentMethodId)
{
    $getQuery = "SELECT * FROM SETUP_PAYMENT_METHOD_TAB WHERE paymentMethodId = ?";
    $getParams = [$paymentMethodId];
    $getResult = selectQuery($conn, $getQuery, 's', $getParams);
    return ($getResult[0]);
}

////// get ROLE details
function _get_role_details($conn, $roleId)
{
    $getQuery = "SELECT roleId, roleName, rolePermissionIds FROM ROLE_TAB WHERE roleId = ?";
    $getParams = [$roleId];
    $getResult = selectQuery($conn, $getQuery, 's', $getParams);
    return ($getResult[0]);
}