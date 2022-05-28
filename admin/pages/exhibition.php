<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <style>
    .gallery-section {
      display: flex;
      align-items: center;
      justify-content: center;
      /* background: red; */
      width: 75vw;
      flex-direction: column;
    }
    .gallery-container {
      background-color: var(--color-white);
      box-shadow: var(--box-shadow);
      width: 100%;
      display: grid;
      grid-template-columns: repeat(2, 2fr);
      justify-content: space-between;
      margin-top: 1rem;
      border-radius: var(--card-border-radius);
    }
    .upload-container {
      display: flex;
      justify-content: center;
      flex-direction: column;
      align-items: center;

      padding: var(--card-padding);
    }
    .file_upload {
      display: flex;
      justify-content: center;
      align-items: center;
      color: white;
      height: 10rem;
      width: 10rem;
      border-radius: 50%;
    }
    .upload-detail {
      background: var(--info-light);
      height: 100%;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
    }
    .upload-detail input {
      width: 80%;
    }
    .upload-detail textarea {
      width: 80%;
      margin-left: 0;
    }
  </style>
  <body>
    <page-title pageTitle="Exhibition"></page-title>

    <div class="gallery-section">
      <!-- <div class="gallery-container">
        <div class="upload-container">
          <div class="blue-gradient file_upload" style="">
            <span class="material-symbols-outlined" style="font-size: 5rem">
              photo_library
            </span>
          </div>
          <p style="margin-top: 1rem">Drag and Drop Image</p>
          <small>or</small>
          <button style="margin-top: 1rem">Browse</button>
        </div>
        <div class="upload-detail">
          <input type="text" placeholder="Enter Title" />
          <textarea
            name=""
            id=""
            cols="30"
            rows="10"
            placeholder="Little image description"
          ></textarea>
          <button
            class="red-gradient"
            style="display: flex; align-items: center; justify-content: center"
          >
            Upload <span class="material-symbols-outlined"> file_upload </span>
          </button>
        </div>
      </div> -->
    </div>
    <div class="recent-uploads">
        <h2>Recent Uploads to Gallery</h2>
        <div class="recent-section">
          <?php 
          $gallery_query ="
          SELECT * From gallery_data"
          ;
          $res =mysqli_query($conn, $gallery_query);

          if(mysqli_num_rows($res)>0){
            while($images =mysqli_fetch_assoc($res )){ ?>
              
              <div class="recent-card">
        <img src="uploads/<?=$images['image'] ?>">
        <h2>Colorful art</h2>
        <div>
          <span class="material-symbols-outlined">
            keyboard_arrow_down
          </span>
        </div>
      </div>
            <?php } }?>
        </div>
      
  </body>
</html>
