
function validateEmail(email) {
    var re = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
    return re.test(email);
}

function reg_validateForm() {
        var usrname = document.forms["reg_form"]["reg_usrname"].value;

        var reg_mail = document.forms["reg_form"]["reg_mail"].value;
        var passwd = document.forms["reg_form"]["reg_psw"].value;
        var con_psw = document.forms["reg_form"]["reg_psw_con"].value;
        if (usrname === "") {
        alert("enter your fullname please");
                            }
        if (validateEmail(mail) === true) {

        } else {
        alert("email not valide");
        return false;
        }
        if (passwd == con_psw) {
        return true;
        } else {
        alert("password dont mach");
        return false;
        }
      }

      $(document).ready(function () {
                      $("#mylogin").click(function () {
                          $("#mylogModal").modal();
                      });

                  });
