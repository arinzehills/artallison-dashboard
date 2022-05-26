let blogfileobj;
function dragBlogOver(event) {
  event.preventDefault();
  var dropText = document.getElementById("blog_p");
  var dropArea = document.querySelector(".image-wrapper");
  dropArea.classList.add("isoverarea");
  dropText.innerText = "Drop here!";
  console.log("File is over drag area");
}
function dragBlogLeave() {
  var dropArea = document.querySelector(".image-wrapper");
  var dropText = document.getElementById("blog_p");

  dropText.innerText = "Drag and Drop Image";

  dropArea.classList.remove("isoverarea");
  console.log("File is over drag area");
}
function dropBlog(event) {
  var dropArea = document.querySelector(".image-wrapper");
  var dropText = document.getElementById("blog_p");
  var imageArea = document.getElementById("file_upload");

  dropArea.classList.remove("isoverarea");
  blogfileobj = event.dataTransfer.files[0];

  event.preventDefault();
  showBlogFile();
}
function browseBlog() {
  var browseGallery = document.getElementById("browse_gallery");
  var browseInput = document.getElementById("browse_input");
  browseInput.click();
  browseInput.onchange = function () {
    blogfileobj = browseInput.files[0];
    showBlogFile();
  };
}
function showBlogFile() {
  var dropText = document.getElementById("blog_p");
  let fileType = blogfileobj.type;
  let fileExtension = ["image/jpeg", "image/png", "image/jpg"];

  if (fileExtension.includes(fileType)) {
    dropText.innerText = blogfileobj.name;
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
      "<span style='color:var(--danger);font-size:17px' >" +
      "this is a not a an image</span>";
    console.log("this is a not a an image");
  }
}
function validateBlogGallery() {
  var blog_title = document.getElementById("blog_title");
  var blog_description = document.getElementById("blog_description");
  var blog_message = document.getElementById("blog_message");
  var blog_desc_error = document.getElementById("blog_desc_error");
  var dropText = document.getElementById("blog_p");

  var blogerrors = [];
  //   var fileInputField = document.getElementById("browse_input");
  if (blog_title.value === "" || blog_title.value === null) {
    console.log("gallery_title is empty");
    blogerrors.push("gallery_title is empty");
    blog_message.innerHTML =
      "<span style='color:var(--danger)'>" + "Title can't be empty</span>";
  } else {
    blog_message.innerHTML = "";
  }
  if (blog_description.value === "" || blog_description.value === null) {
    console.log("gallery_title is empty");
    blogerrors.push("blog_description is empty");
    blog_desc_error.innerHTML =
      "<span style='color:var(--danger)'>" +
      "Description can't be empty</span>";
  } else {
    blog_desc_error.innerHTML = "";
  }
  if (dropText.innerText == "or drop your image here") {
    console.log("drop text is empty");
    blogerrors.push("drop text is empty");
    dropText.innerHTML =
      "<span style='color:var(--danger);font-size:17px'>" +
      "Please select an image</span>";
  }

  if (blogerrors.length == 0) {
    console.log(dropText.innerText);
    console.log(blogfileobj);
    ajax_blog_upload(blogfileobj);
  }
  console.log(blogerrors.length);
  console.log(blogerrors);
}

function ajax_blog_upload(file_obj) {
  //   e.preventDefault();
  //   var dropText = document.getElementById("blog_p");

  //   dropText.innerHTML =
  //     "<span style='color:var(--danger);font-size:17px'>" +
  //     "Make sure is an image</span>";

  if (file_obj != undefined) {
    var form_element = document.getElementsByClassName("blog_form");

    var form_data = new FormData();
    form_data.append("file", file_obj);

    //
    console.log(form_data);
    var xhttp = new XMLHttpRequest();
    xhttp.open("POST", "./blog.php", true);

    xhttp.onload = function (event) {
      var imageArea = document.getElementById("file_upload");
      var dropText = document.getElementById("blog_message");
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
