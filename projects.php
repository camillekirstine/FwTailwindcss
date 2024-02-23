<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Camille Kirstine - Projects</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.png">

    <meta name="robots" content="All">
    <meta name="author" content="Camille Kirstine">
    <meta name="copyright" content=" Camille Kirstine &copy; 2024 ">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.15/dist/tailwind.min.css" rel="stylesheet">
    <link href="styles/global.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="https://use.typekit.net/wtu5hgz.css">
    <script src="https://kit.fontawesome.com/f5df81b727.js" crossorigin="anonymous"></script>

    <style>
        body {
            background-image: url("assets/GridGraphics.png");
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100%;
            background-position: center;
            background-position-y: 60%;
        }

        @media (min-width: 60rem) {
            body {
                background-size: 60%;
                background-position: right;
                background-position-y: center;

            }
        }

        h1 {
            color: #038C34;
        }

        .mainGreen {
            color: #038C34;
        }
    </style>
    
</head>

<body>
<?php include "includes/header.php"?>

<!-- MOBILE LAYOUT -->
<main class="projectsMobile">
<div class="grid grid-cols-1 lg:grid-cols-12">
    <div class="lg:col-start-1  lg:col-span-5">
        <h1 class="text-center font-bold uppercase lg:text-7xl lg:text-left lg:ml-7 lg:mt-6">
            projects
        </h1>
    </div>
</div>

<div class="grid grid-cols-2 justify-items-center mx-5 mt-2
            lg:grid-cols-12 lg:justify-items-center lg:mt-0 lg:mr-9 lg:pr-9">
    <div class="col-span-1 imgBox m-3">
        <img alt="placeholder for projects" class="placeholderImg" src="assets/placeholder.jpeg">
        <div class="overlay text-center">
            <a class="text-decoration-none" href="projectDetail.php">
                <p class="overlayTxt text-center font-bold uppercase pt-9 mt-5 lg:text-2xl lg:mt-9">project name</p>
             </a>
        </div>
    </div>
    <div class="col-span-1 imgBox m-3">
        <img alt="placeholder for projects" class="placeholderImg" src="assets/placeholder.jpeg">
        <div class="overlay text-center">
            <a class="text-decoration-none" href="projectDetail.php">
                <p class="overlayTxt text-center font-bold uppercase pt-9 mt-5 lg:text-2xl lg:mt-9">project name</p>
             </a>
        </div>
    </div>
    <div class="col-span-1 imgBox m-3">
        <img alt="placeholder for projects" class="placeholderImg" src="assets/placeholder.jpeg">
        <div class="overlay text-center">
            <a class="text-decoration-none" href="projectDetail.php">
                <p class="overlayTxt text-center font-bold uppercase pt-9 mt-5 lg:text-2xl lg:mt-9">project name</p>
             </a>
        </div>
    </div>
    <div class="col-span-1 imgBox m-3">
        <img alt="placeholder for projects" class="placeholderImg" src="assets/placeholder.jpeg">
        <div class="overlay text-center">
            <a class="text-decoration-none" href="projectDetail.php">
                <p class="overlayTxt text-center font-bold uppercase pt-9 mt-5 lg:text-2xl lg:mt-9">project name</p>
             </a>
        </div>
    </div>
    
</div>

<div class="grid grid-cols-1 mt-9">
    <div class="">
        <p class="text-center">
            Through my journey through the field of <strong>Web Development</strong>, I’ve been part of various projects
            Here you can browse through some of those <strong class="mainGreen">PROJECTS</strong>.
        </p>
    </div>
</div>
</main>

<!-- DESKTOP LAYOUT -->
<main class="projectsDesktop">

<div class="grid grid-cols-12">
        <div class="col-span-5">
        <h1 class="text-left font-bold uppercase text-7xl ml-7 mt-9 pt-9">
            projects
        </h1>
        <p class="text-left ml-7">
            Through my journey through the field of <strong>Web Development</strong>, I’ve been part of various projects
            Here you can browse through some of those <strong class="mainGreen">PROJECTS</strong>.
        </p>
        </div>

        <div class="col-span-7 mt-9">
            <div class="grid grid-cols-6 ">
                <div class="col-span-3 imgBox justify-self-end m-3">
                    <img alt="placeholder for projects" class="placeholderImg" src="assets/placeholder.jpeg">
                    <div class="overlay text-center">
                        <a class="text-decoration-none" href="projectDetail.php">
                            <p class="overlayTxt text-center font-bold uppercase pt-9 mt-5 lg:text-2xl lg:mt-9">project name</p>
                        </a>
                    </div>
                </div>
                <div class="col-span-3 imgBox m-3">
                    <img alt="placeholder for projects" class="placeholderImg" src="assets/placeholder.jpeg">
                    <div class="overlay text-center">
                        <a class="text-decoration-none" href="projectDetail.php">
                            <p class="overlayTxt text-center font-bold uppercase pt-9 mt-5 lg:text-2xl lg:mt-9">project name</p>
                        </a>
                    </div>
                </div>
                <div class="col-span-3 imgBox justify-self-end m-3">
                    <img alt="placeholder for projects" class="placeholderImg" src="assets/placeholder.jpeg">
                    <div class="overlay text-center">
                        <a class="text-decoration-none" href="projectDetail.php">
                            <p class="overlayTxt text-center font-bold uppercase pt-9 mt-5 lg:text-2xl lg:mt-9">project name</p>
                        </a>
                    </div>
                </div>
                <div class="col-span-3 imgBox m-3">
                    <img alt="placeholder for projects" class="placeholderImg" src="assets/placeholder.jpeg">
                    <div class="overlay text-center">
                        <a class="text-decoration-none" href="projectDetail.php">
                            <p class="overlayTxt text-center font-bold uppercase pt-9 mt-5 lg:text-2xl lg:mt-9">project name</p>
                        </a>
                    </div>
                </div>
                
            </div>
            
        </div>
</div>

</main>

<?php include "includes/footer.php"?>
</body>