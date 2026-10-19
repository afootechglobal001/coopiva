$(document).ready(function () {
  function trim(s) {
    return s.replace(/^\s*/, "").replace(/\s*$/, "");
  }
  $("#viewLogin").keydown(function (e) {
    if (e.keyCode == 13) {
      _confirmCbtAdminLogin();
    }
  });
});


function _nextLoginPage(props) {
    const {
        page = '',
    } = props;

    _getPage({
        page: page,
        url: memberLoginMiddleWareUrl,
        pageContainer: 'page-content'
    });
}

function _completePasswordReset(){
  _showCustomConfirm({
    callback: () => {
      window.location.href = adminLoginUrl;
    },
    title: "Successful!",
    message: "Password reset successfully.",
    alertType: "success",
    trueActionBtnText: "Okay, Thanks",
    closeOnOverlayClick: false,
  });
}
