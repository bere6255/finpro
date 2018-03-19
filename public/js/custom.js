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

function ajax_post(){
  var xmlhttp = new XMLHttpRequest ();
  var cat=document.getElementById('procat_post').value;
if (cat>1) {
  xmlhttp.onreadystatechange = function (){
      if(xmlhttp.readyState == 4 && xmlhttp.status ==200){
         document.getElementById('retriv_post').innerHTML = xmlhttp.responseText;
      }
  }
  xmlhttp.open('GET', '/postsub?catigory='+cat, true);
  xmlhttp.send();
}


}


function main_seach(){

  var http = new XMLHttpRequest ();
  var subcat=document.getElementById('prosubcat').value;
  alert('page content: ' + subcat);
  if (subcat>1) {
  http.open('GET', '/main?service='+subcat, false);
  http.send(null);

}


}


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
