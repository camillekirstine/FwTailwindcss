<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Camille Kirstine - Project Details</title>
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

<main class="detailMobile">
    <div class="grid grid-col-1">

        <h1 class="text-center font-bold uppercase text-4xl mt-5 mb-9">
            project name
        </h1>

        <img class="detailImg justify-self-center mt-7" alt="placeholder for project image" src="assets/placeholder.jpeg">

        <p class="mx-4 mt-9 text-sm">
            Project description; a possible way to describe the concept behind the project.
            Here I can also describe what role I played in the development of the given product.
        </p>
        <p class="mx-4 mt-3 text-sm">
            <strong>Technologies used:</strong> List of technologies used to develop product
        </p>
    </div>
</main>

<main class="detailDesktop">
    <div class="grid grid-cols-12">
        <div class="col-span-5">

            <h1 class="text-left font-bold uppercase text-5xl mt-9 pt-7 ml-5 mb-9">
                project name
            </h1>

            <p class="ml-5 mt-9 text-base">
                Project description; a possible way to describe the concept behind the project.
                Here I can also describe what role I played in the development of the given product.
            </p>
            <p class="ml-5 mt-4 text-base">
                <strong>Technologies used:</strong> List of technologies used to develop product
            </p>

        </div>
        
        <div class="col-start-7 col-span-7 mt-9">
            <img class="detailImg ml-9 pt-9" alt="placeholder for project image" src="assets/placeholder.jpeg">
        </div>
    </div>

</main>

<?php include "includes/footer.php"?>
</body>