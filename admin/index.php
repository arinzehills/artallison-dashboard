<?php 
include "db.php";
// include "db_conn.php";
include "sessionvisits.php";
include "dashboardinfo.php";
  // $query ='';
$conn =mysqli_connect('localhost', 'root', '', 'artallison');
  
$total_visitors=232;
// 

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Artallinson</title>
    <link rel="stylesheet" href="./style.css" />
    <link rel="stylesheet" href="./aside.css" />
    <link rel="stylesheet" href="./dashboard.css" />
    <link rel="stylesheet" href="./recentuploads.css" />
    <link rel="stylesheet" href="./right.css" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
</head>
<script>
function includeHTML() {
    var z, i, elmnt, file, xhttp;
    /*loop through a collection of all HTML elements:*/
    z = document.getElementsByTagName("*");
    for (i = 0; i < z.length; i++) {
        elmnt = z[i];
        /*search for elements with a certain atrribute:*/
        file = elmnt.getAttribute("w3-include-html");
        if (file) {
            /*make an HTTP request using the attribute value as the file name:*/
            xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4) {
                    if (this.status == 200) {
                        elmnt.innerHTML = this.responseText;
                    }
                    if (this.status == 404) {
                        elmnt.innerHTML = "Page not found.";
                    }
                    /*remove the attribute, and call this function once more:*/
                    elmnt.removeAttribute("w3-include-html");
                    includeHTML();
                }
            }
            xhttp.open("GET", file, true);
            xhttp.send();
            /*exit the function:*/
            return;
        }
    }
};
</script>

<body>
    <div class="container">
        <aside>
            <div class="top blue-gradient">
                <div class="logo">
                    <img src="./images/artlas_logo.png" alt="logo" height="25" />
                </div>
                <div class="close red-gradient" id="close-btn">
                    <span class="material-symbols-outlined"> close </span>
                </div>
            </div>

            <div class="sidebar">
                <a href="#" id="dashboard" class="dashboard active">
                    <span class="material-symbols-outlined"> dashboard </span>
                    <h3>Dashboard</h3>
                    <!-- </a>
          <a href="#">
            <span class="material-symbols-outlined"> hail </span>
            <h3>Customers</h3>
          </a> -->
                    <a href="#" id="blog" class="blog ">
                        <span class="material-symbols-outlined"> rate_review </span>
                        <h3>Blog</h3>
                    </a>
                    <a href="#" id="about" class="about ">
                        <span class="material-symbols-outlined"> work </span>
                        <h3>About us</h3>
                    </a>
                    <a href="#" id="gallery" class="gallery ">
                        <span class="material-symbols-outlined"> browse_gallery </span>
                        <h3>Gallery</h3>
                    </a>
                    <a href="#" id="exhibition" class="exhibition ">
                        <span class="material-symbols-outlined"> museum </span>
                        <h3>Exhibition</h3>
                    </a>
                    <a href="#" id="contact" class="contact ">
                        <span class="material-symbols-outlined">
                            connect_without_contact
                        </span>
                        <h3>Contact</h3>
                    </a>
                    <a href="#" id="settings" class="settings ">
                        <span class="material-symbols-outlined">
                            settings
                        </span>
                        <h3>Settings</h3>
                    </a>
                    <a href="#" id="logout" class="active">
                        <span class="material-symbols-outlined"> logout </span>
                        <h3>Logout</h3>
                    </a>

            </div>
        </aside>
        <section class="dashboard show">
            <main>
                <page-title></page-title>

                <dashboard-component numOfUsers=<?php  echo $num_of_users; ?>
                    numInGallery=<?php  echo $arts_in_gallery; ?> visits=<?php  echo count($visitors); ?>>
                </dashboard-component>
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
                    <button class="orange-gradient">MORE</button class="red-gradient">
                    <!-- END OF RECENT UPLOADS -->
            </main>
            <!-- END OF MAIN -->
            <div class="right">
                <div class="top">
                    <button id="menu-btn" class="blue-gradient">
                        <span class="material-symbols-outlined active"> sort </span>
                    </button>
                    <div class="theme-toggler">
                        <span class="material-symbols-outlined active"> light_mode </span>
                        <span class="material-symbols-outlined"> dark_mode </span>
                    </div>
                    <profile-component></profile-component>
                </div>
                <!-- END OF TOP -->
                <div class="recent-updates">
                    <h2>Recent Activity</h2>
                    <div class="updates">
                        <div class="update">
                            <div class="profile-photo">
                                <img src="./images/profile.png" alt="ds" />
                            </div>
                            <div class="message">
                                Updated your profile pics
                                <small class="text-muted">2 minutes ago</small>
                            </div>
                        </div>
                        <div class="update">
                            <div class="profile-photo">
                                <img src="./images/profile.png" alt="ds" />
                            </div>
                            <div class="message">
                                Updated your profile pics
                                <small class="text-muted">2 minutes ago</small>
                            </div>
                        </div>
                        <div class="update">
                            <div class="profile-photo">
                                <img src="./images/lion.jpg" alt="ds" />
                            </div>
                            <div class="message">
                                Updated a galler information
                                <small class="text-muted">2 minutes ago</small>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END OF RECENT UPDATES -->
                <div class="recent-updates">
                    <h2>MY PROFILE</h2>
                    <div class="updates">
                        <div class="update">
                            <div class="profile-photo">
                                <img src="./images/profile.png" alt="ds" />
                            </div>
                            <div class="message">
                                Arinze Hills
                                <br><small class="text-muted">Admin</small>
                            </div>
                        </div>
                        <h3>ABOUT ME</h3>
                        <p>
                            <?php echo $contactdes ?? 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam scelerisque dui justo, et ultrices leo iaculis eget.
                   Sed convallis elit eu pretium congue. Maecenas feugiat commodo purus' ?>
                        </p>
                        <h3 style="padding: 1rem 0 0.4rem;">CONTACT</h3>
                        <p><b>Email:</b><?php echo $contactemail ?? ' example@gmail.com' ?></p>
                        <p><b>Tel:</b> <?php echo $contactemail ?? ' no phone added' ?></p>
                        <p><b>Address:</b> <?php echo $contactemail ?? ' no address  added' ?></p>
                        </p>

                    </div>
                </div>
                <!-- END OF PROFILE DESC -->
            </div>
        </section>
        <!-- about -->

        <section class="blog ">
            <div w3-include-html="./pages/blog.html"></div>

        </section>
        <section class="about ">
            <div w3-include-html="./pages/about/about.html"></div>
            <!-- <?php include 'pages/about/about.php' ?> -->
        </section>
        <section class="gallery ">
            <div w3-include-html="./pages/gallery.html"></div>

        </section>
        <section class="exhibition">
            <!-- <div w3-include-html="./pages/exhibition.html"></div>   -->
            <?php include "./pages/exhibition.php" ?>

        </section>
        <section class="contact ">
            <div w3-include-html="./pages/contact.html"></div>
        </section>
        <section class="settings ">
            <div w3-include-html="./pages/settings.html"></div>
        </section>
    </div>
    <script src="./index.js"></script>
    <script src="./components/dashboard.js"></script>
    <!-- <script src="./pages/settings/settings.html"></script> -->
    <script src="./components/pageTitle.js"></script>
    <script src="./components/profile.js"></script>
    <!-- from here is the functionalies of various pages javascript files -->
    <script src="./js/about.js"></script>

    <script src="./js/contact.js"></script>
    <script>
    const anchorTagsList = Array.from(document.querySelectorAll('a'));
    const sections = Array.from(document.querySelectorAll('section'));

    anchorTagsList.forEach(anchor => anchor.addEventListener('click', () => {
        const anchorId = anchor.getAttribute('id');
        sections.forEach(section => {
            section.classList.remove('show');
            if (section.classList.contains(anchorId)) {
                section.classList.add('show');
            }
        });
    }))
    anchorTagsList.forEach(anchor => anchor.addEventListener('click', () => {
        const anchorId = anchor.getAttribute('id');
        anchorTagsList.forEach(anchor => {
            anchor.classList.remove('active');
            if (anchor.classList.contains(anchorId)) {
                anchor.classList.add('active');
            }
        });
    }))
    includeHTML();
    </script>
    <!-- <script src="./js/file.js" ></script> -->
    <script src="./js/upload.js" defer></script>
    <script src="./js/blog.js" defer></script>
    <script src="./js/profile_info.js" defer></script>
</body>

</html>