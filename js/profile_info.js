// function save_profile_info() {
//     // var btn = document.getElementById("save_profle_info");
//     var mess = document.getElementById("profile_info_message");

//     // console.log(btn);
//     var form_element = document.getElementsByClassName("setting_form_data");
//     form_data = new FormData();
//     for (var count = 0; count < form_element.length; count++) {
//       form_data.append(form_element[count].name, form_element[count].value);
//     }
//     //   document.getElementById("save_profle_info").disabled = true;

//       var ajax_request = new XMLHttpRequest();
//       ajax_request.open("POST", "./settings.php");

//       if (ajax_request.status == 200) {
//         // imageArea.innerHTML = `<img src="${this.responseText["filename"]}" alt="drop image">`;

//         mess.innerHTML = `<div class="success"
//             style="background:var(--success);padding:1rem;border-radius:10px">
//             ${this.responseText} </div>`;
//         // setTimeout(function () {
//         //   mess.innerHTML = "";
//         // }, 3500);
//       } else {
//         mess.innerText = `Error ${ajax_request.status} occured`;
//       }

//       ajax_request.send(form_data);
//     };
function save_profile_info() {
  var btn = document.getElementById("save_profle_info");
  console.log(btn);
  var form_element = document.getElementsByClassName("setting_form_data");
  form_data = new FormData();

  for (var count = 0; count < form_element.length; count++) {
    form_data.append(form_element[count].name, form_element[count].value);
  }
  document.getElementById("save_profle_info").disabled = true;

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

      setTimeout(function () {
        document.getElementById("profile_info_message").innerHTML = "";
      }, 2500);
    } else {
      console.log(ajax_request.status);
    }
  };
}
