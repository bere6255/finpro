function ajax_call(){
  var xmlhttp = new XMLHttpRequest ();
  var cat=document.getElementById('procat').value;
if (cat>1) {
  xmlhttp.onreadystatechange = function (){
      if(xmlhttp.readyState == 4 && xmlhttp.status ==200){
         document.getElementById('retriv').innerHTML = xmlhttp.responseText;
      }
  }
  xmlhttp.open('GET', '/postsubcat?catigory='+cat, true);
  xmlhttp.send();
}


}
/*
// this section is not in use
function populate(catigory, subcatigory){
  var catigory = document.getElementById(catigory);
  var subcatigory = document.getElementById(subcatigory);
  subcatigory.innerHTML="";
  if(catigory.value=="chevy"){
    //load from web with vareable of sub_cat
    var sub_cat = [];
  }
  for (var option in sub_cat){
    var newoption = document.createElement("option");
    newoption.value = sub_cat;
    newoption.innerHTML=sub_cat;
    subcatigory.options.add(newoption);
  }
}

*/



$(document).ready(function () {
                $("#mylogin").click(function () {
                    $("#mylogModal").modal();
                });
            });

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
function log_validateForm() {
          var x = document.forms["login_form"]["email"].value;
            if (validateEmail(x) === true) {
            return true;
              } else {
              alert("email not valide");
                return false;
              }
}
