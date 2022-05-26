let fileobj;
function dragOver(event) {
  event.preventDefault();
  var dropText = document.getElementById("drap_p");
  var dropArea = document.querySelector(".upload-container");
  dropArea.classList.add("isoverarea");
  dropText.innerText = "Drop here!";
  console.log("File is over drag area");
}
function dragLeave() {
  var dropArea = document.querySelector(".upload-container");
  var dropText = document.getElementById("drap_p");

  dropText.innerText = "Drag and Drop Image";

  dropArea.classList.remove("isoverarea");
  console.log("File is over drag area");
}
function drop(event) {
  var dropArea = document.querySelector(".upload-container");
  var dropText = document.getElementById("drap_p");
  var imageArea = document.getElementById("file_upload");

  dropArea.classList.remove("isoverarea");
  fileobj = event.dataTransfer.files[0];

  event.preventDefault();
  showFile();
}
function browseGallery() {
  var browseGallery = document.getElementById("browse_gallery");
  var browseInput = document.getElementById("browse_input");
  browseInput.click();
  browseInput.onchange = function () {
    fileobj = browseInput.files[0];

    showFile();
  };
}
function showFile() {
  var dropText = document.getElementById("drap_p");
  let fileType = fileobj.type;
  let fileExtension = ["image/jpeg", "image/png", "image/jp g"];

  if (fileExtension.includes(fileType)) {
    dropText.innerText = fileobj.name;
    let fileReader = new FileReader();
    console.log(fileReader);
    // window.addEventListener("load", function () {
    //   let fileURL = fileReader.result;

    //   imageArea.innerHTML = `<img src="${fileURL}" alt="drop image">`;
    // });
    // fileReader.onload = () => {
    //   console.log("hudsi");
    //   let fileURL = fileReader.result;
    //   console.log(fileURL);
    //   imageArea.innerHTML = `<img src="${fileURL}" alt="drop image">`;
    // };
  } else {
    dropText.innerHTML =
      "<span style='color:var(--danger)'>" + "this is a not a an image</span>";
    console.log("this is a not a an image");
  }
}
function validateGallery() {
  var gallery_title = document.getElementById("gallery_title");
  var gallery_message = document.getElementById("gallery_message");
  var dropText = document.getElementById("drap_p");
  var errors = [];
  //   var fileInputField = document.getElementById("browse_input");
  if (gallery_title.value === "" || gallery_title.value === null) {
    console.log("gallery_title is empty");
    errors.push("gallery_title is empty");
    gallery_message.innerHTML =
      "<span style='color:var(--danger)'>" + "Title can't be empty</span>";
  } else {
    gallery_message.innerHTML = "";
  }
  if (dropText.innerText == "Drag and Drop Image") {
    console.log("drop text is empty");
    errors.push("drop text is empty");
    dropText.innerHTML =
      "<span style='color:var(--danger)'>" + "Please select an image</span>";
  }

  if (errors.length == 0) {
    console.log(dropText.innerText);
    console.log(fileobj);
    ajax_gallery_upload(fileobj);
  }
  //   console.log(errors.length);
  //   console.log(errors);
}
function ajax_gallery_upload(file_obj) {
  //   e.preventDefault();

  if (file_obj != undefined) {
    var form_data = new FormData();
    form_data.append("file", file_obj);
    var xhttp = new XMLHttpRequest();
    xhttp.open("POST", "./upload_to_gallery.php", true);
    xhttp.onload = function (event) {
      var imageArea = document.getElementById("file_upload");
      var dropText = document.getElementById("gallery_message");

      if (xhttp.status == 200) {
        // imageArea.innerHTML = `<img src="${this.responseText["filename"]}" alt="drop image">`;

        dropText.innerHTML = `<div class="success"
            style="background:var(--success);padding:1rem;border-radius:10px">
            ${this.responseText} </div>`;
        setTimeout(function () {
          dropText.innerHTML = "";
        }, 3500);
      } else {
        dropText.innerText = `Error ${xhttp.status} occured`;
      }
    };
    xhttp.send(form_data);
  } else {
    console.log("undefendied");
  }
}
