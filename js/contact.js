function validate_desc(e) {
  // e.preventDefault();
  var description = document.getElementById("description");
  var error = document.getElementById("description_message");

  console.log("description" + description.value.length);
  // save_data()
  // form.addEventListener('submit',(e)=>{

  let messages = [];
  if (description.value.length === 0) {
    messages.push("description is required is required");
  }
  if (description.value.length < 10) {
    messages.push("description must be at least 10 word");
  }
  if (messages.length > 0) {
    // e.preventDefault();
    error.innerHTML = `<div class="success"
    style="background:var(--danger);padding:1rem;border-radius:10px">
    ${messages.join(", ")} </div>`;
    setTimeout(function () {
      error.innerHTML = "";
    }, 2500);
  } else {
    save_contact_desc();
    console.log("save data");
  }
  console.log("messages" + messages);
  // });
}

function save_contact_desc() {
  var btn = document.getElementById("submit_desc");
  console.log(btn);
  var form_element = document.getElementsByClassName("form_data");
  form_data = new FormData();
  for (var count = 0; count < form_element.length; count++) {
    form_data.append(form_element[count].name, form_element[count].value);
    document.getElementById("submit_desc").disabled = true;

    var ajax_request = new XMLHttpRequest();
    ajax_request.open("POST", "./addcontactdesc.php");

    ajax_request.send(form_data);

    ajax_request.onreadystatechange = function () {
      if (ajax_request.readyState == 4 && ajax_request.status == 200) {
        document.getElementById("submit_desc").disabled = false;
        //   document.getElementById('about_form').reset();

        document.getElementById("description_message").innerHTML =
          ajax_request.responseText;

        //   setTimeout(function(){
        //   document.getElementById('message').innerHTML='';

        //   },2500)
      }
    };
  }
}
function save_contact_details() {
  var btn = document.getElementById("submit_contact_details");
  console.log(btn);
  var form_element = document.getElementsByClassName("form_data");
  form_data = new FormData();
  for (var count = 0; count < form_element.length; count++) {
    form_data.append(form_element[count].name, form_element[count].value);
    document.getElementById("submit_contact_details").disabled = true;

    var ajax_request = new XMLHttpRequest();
    ajax_request.open("POST", "./addcontact.php");

    ajax_request.send(form_data);

    ajax_request.onreadystatechange = function () {
      if (ajax_request.readyState == 4 && ajax_request.status == 200) {
        document.getElementById("submit_contact_details").disabled = false;
        //   document.getElementById('about_form').reset();

        document.getElementById("contact_details_message").innerHTML =
          ajax_request.responseText;

        setTimeout(function () {
          document.getElementById("message").innerHTML = "";
        }, 2500);
      }
    };
  }
}
