
var Profile = {
    check: function (id) {
        if ($.trim($("#" + id)[0].value) == '') {
            $("#" + id)[0].focus();
            $("#" + id + "_alert").show();

            return false;
        };

        return true;
    },
    validate: function () {
        if (SignUp.check("name") == false) {
            return false;
        }
        if (SignUp.check("email") == false) {
            return false;
        }
        $("#profileForm")[0].submit();
    }
};
var KidA = {
    check: function (id) {
        if ($.trim($("#" + id)[0].value) == '') {
            $("#" + id)[0].focus();
            $("#" + id + "_alert").show();

            return false;
        };

        return true;
    },
    validate: function () {
        if (KidA.check("Name") == false) {
            return false;
        }
        if (KidA.check("Gender") == false) {
            return false;
        }
        if (KidA.check("DateOfBirth") == false) {
            return false;
        }
        $("#MyKidsForm")[0].submit();
    }
};

var SignUp = {
    check: function (id) {
        if ($.trim($("#" + id)[0].value) == '') {
            $("#" + id)[0].focus();
            $("#" + id + "_alert").show();

            return false;
        };

        return true;
    },
    validate: function () {
        // if (SignUp.check("name") == false) {
        //     return false;
        // }
        // if (SignUp.check("username") == false) {
        //     return false;
        // }
        // if (SignUp.check("email") == false) {
        //     return false;
        // }
        // if (SignUp.check("password") == false) {
        //     return false;
        // }

        if (SignUp.check("FirstName") == false) {
            return false;
        }
        if (SignUp.check("LastName") == false) {
            return false;
        }
        if (SignUp.check("UserName") == false) {
            return false;
        }
        if (SignUp.check("Password") == false) {
            return false;
        }
        if (SignUp.check("Address") == false) {
            return false;
        }
        if (SignUp.check("City") == false) {
            return false;
        }
        if (SignUp.check("ContNumPrimary") == false) {
            return false;
        }
        if ($("#Password")[0].value != $("#repeatPassword")[0].value) {
            $("#repeatPassword")[0].focus();
            $("#repeatPassword_alert").show();

            return false;
        }
        $("#registerForm")[0].submit();
    }
};

var ChangePassword = {
    check: function (id) {
        if ($.trim($("#" + id)[0].value) == '') {
            $("#" + id)[0].focus();
            $("#" + id + "_alert").show();

            return false;
        };

        return true;
    },
    validate: function () {

        if (SignUp.check("NewPassword") == false) {
            return false;
        }
        // if (SignUp.check("LastName") == false) {
        //     return false;
        // }
        // if (SignUp.check("UserName") == false) {
        //     return false;
        // }
        // if (SignUp.check("Password") == false) {
        //     return false;
        // }
        // if (SignUp.check("Address") == false) {
        //     return false;
        // }
        // if (SignUp.check("City") == false) {
        //     return false;
        // }
        // if (SignUp.check("ContNumPrimary") == false) {
        //     return false;
        // }
        if ($("#NewPassword")[0].value != $("#ConfirmPassword")[0].value) {
            $("#ConfirmPassword")[0].focus();
            $("#ConfirmPassword_alert").show();
            return false;
        }
        $("#ChangePasswordForm")[0].submit();
    }
};

$(document).ready(function () {
    $("#registerForm .alert").hide();
    $("div.profile .alert").hide();
    $("#ChangePasswordForm .alert").hide();
});
