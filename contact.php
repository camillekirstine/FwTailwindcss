<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Camille Kirstine - Contact</title>
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
            background-image: url("assets/RedMosaik.png");
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100%;
            background-position: center;
        }

        i {
            color: #F2293B;
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

<div class="grid grid-cols-1 lg:grid-cols-12 lg:mt-7 lg:p-9 lg:mr-9">
    <div class="lg:col-span-9">
        <h1 class="text-transform: uppercase leading-none text-center text-4xl lg:text-left lg:text-8xl">
        Want to get in <span class="font-bold contactSpan">contact</span>?
        </h1>
    
        
    </div>
    
</div>

<div class="grid grid-cols-1 mx-2 lg:mx-0 lg:mb-9 pb-8 lg:grid-cols-12 lg:mb-4 lg:px-9 lg:mr-9">

    <div class="text-center lg:text-left lg:col-span-9 lg:text-4xl">
        <h2 id="contactSub">
            There’s <strong>multiple ways</strong> to get in contact with me, so feel free to use
            to one that <strong>suits you</strong> best
        </h2>
        <p id="contactP" class="col-span-9 mt-2 lg:mt-4">
            E-mail me at <strong>camille@camillekirstine.com</strong><br>
            Or if you want to read more and get my contact information, you can
            <a class="text-textWhite text-decoration-none fw-bolder" href="assets/camillekirstineCV.pdf" download><strong>download my CV</strong></a>
        </p>
    </div>
    
</div>

<div class="grid grid-cols-1 lg:grid-cols-12">
    <div class="col-span-7 text-center text-6xl lg:text-8xl">
        <a class="text-center" href="https://www.linkedin.com/in/camillekirstinelarsson/">
            <i class="fa-brands fa-linkedin"></i>
        </a>

        <a class="text-center" href="https://github.com/camillekirstine">
            <i class="fa-brands fa-square-github"></i>
        </a>
    </div>

</div>



</main>

<?php include "includes/footer.php"?>

    
</body>
</html>