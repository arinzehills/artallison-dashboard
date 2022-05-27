function updatepassword(){
    var btn = document.getElementById("update_password");
  console.log(btn);
  var form_elemen = document.getElementsByClassName("security_form");
  form_data = new FormData();
  console.log(form_elemen)
  for (var count = 0; count < form_elemen.length; count++) {
    form_data.append(form_elemen[count].name, form_elemen[count].value);
  }
  btn.disabled = true;
  var ajax_request = new XMLHttpRequest();

  ajax_request.open("POST", "./securitysettings.php");

  ajax_request.send(form_data);

  ajax_request.onreadystatechange = function () {   
    if (ajax_request.readyState == 4 && ajax_request.status == 200) {
      btn.disabled = false;
      //   document.getElementById('about_form').reset();
      console.log(ajax_request.responseText);
      document.getElementById("profile_security_message").innerHTML =
        ajax_request.responseText;

    //   setTimeout(function () {
    //     document.getElementById("profile_info_message").innerHTML = "";
    //   }, 2500);
    } else {
      console.log(ajax_request.status);
    }
  };
}
function save_profile_info() {
  var btn = document.getElementById("save_profle_info");
  console.log(btn);
  var form_elemen = document.getElementsByClassName("setting_form");
  form_data = new FormData();
  console.log(form_elemen)

  for (var count = 0; count < form_elemen.length; count++) {
    form_data.append(form_elemen[count].name, form_elemen[count].value);
  }
  btn.disabled = true;

  var ajax_request = new XMLHttpRequest();

  ajax_request.open("POST", "./settings.php");

  ajax_request.send(form_data);

  ajax_request.onreadystatechange = function () {   
    if (ajax_request.readyState == 4 && ajax_request.status == 200) {
      document.getElementById("save_profle_info").disabled = false;
      //   document.getElementById('about_form').reset();
      console.log(ajax_request.responseText);
      document.getElementById("profile_info_message").innerHTML =
        ajax_request.responseText;

    //   setTimeout(function () {
    //     document.getElementById("profile_info_message").innerHTML = "";
    //   }, 2500);
    } else {
      console.log(ajax_request.status);
    }
  };
}
