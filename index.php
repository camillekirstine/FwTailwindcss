<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Camille Kirstine</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.png">

    <meta name="robots" content="All">
    <meta name="author" content="Camille Kirstine">
    <meta name="copyright" content=" Camille Kirstine &copy; 2024 ">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.15/dist/tailwind.min.css" rel="stylesheet">
    <link href="styles/global.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="https://use.typekit.net/wtu5hgz.css">

    <style>
        body {
            background-image: url("assets/BlueMosaik.png");
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100%;
            background-position: center;
        }

        @media (min-width: 60rem) {
            body {
                background-size: 60%;
                background-position: right;
            }
        }
    </style>
    
</head>
<body>
<?php include "includes/header.php"?>

<main>

<div class="whenInDoubt"></div>

<div class="grid grid-cols-1 mb-9 pb-9 lg:grid-cols-1 lg:mb-9 lg:p-9 lg:mr-9">
    <div class="">
        <h1 class="text-transform: uppercase leading-none text-center lg:text-left lg:text-9xxl">
    hi, i'm <span class="font-bold frontSpan">Camille Kirstine</span>
    </h1>
    
    <h2 class="text-center lg:text-left lg:text-5xl"><strong>Fullstack</strong> Developer with a keen eye for <strong>aesthetics</strong></h2>   
    </div>
    
</div>


<div class="grid grid-cols-1 lg:grid-cols-3 content-baseline">
    <div id="box1">
    <h3 class="font-bold text-transform: uppercase text-center text-xl pt-4 ">Professionally</h3>
                    <p class="text-center text-bold mt-4 text-sm px-4 pb-4">
                        In my professional life I always strive to learn and grow! I do believe that there’s no such thing a stupid questions,
                        if you don’t ask - then how are you gonna learn? I try to keep on top of the newest breakthroughs and technologies, even though this presents as quite the task sometimes.
                    </p>
    </div>

    <div id="box2">
    <h3 class="font-bold text-transform: uppercase text-center text-xl pt-4">Personally</h3>
                    <p class="text-center text-bold mt-4 text-sm px-4 pb-4">
                    In my personal life a healthy work/life balance is something I value a lot. As much as I love to learn and grow,
                        I also want to do these things on a personal level, and my social life is therefore very important to me.
                        I am very passionate about art and music, and a lot of my time is spent with that.s and technologies, even though this presents as quite the task sometimes.
                    </p>
    </div>

    <div id="box3">
    <h3 class="font-bold text-transform: uppercase text-center text-xl pt-4">Background</h3>
                    <p class="text-center text-bold mt-4 text-sm px-4 pb-8">
                    I originally have a background in the beauty industry,
                        and an AP degree in Multimedia design. I fell in love with frontend development, as it combines my passion for
                        aesthetics with my passion for logic.

                        Any further information can be found on my <a class="text-textWhite text-decoration-none fw-bolder" href="assets/camillekirstineCV.pdf" download><strong>CV</strong></a>
                        <br><br><span class="italic">(Psssst! You can download it by clicking on the word)</span>
                    </p>
    </div>
</div>






</main>

<?php include "includes/footer.php"?>

    
</body>
</html>