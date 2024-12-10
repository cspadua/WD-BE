<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 Page Not Found</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="icon" href="images/icon.png">

    <style>
        body {
            background-color: #d4d4d4;
        }

        h1 {
            font-size: 30vw;
            font-weight: 500;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: #000000;
            position: relative;
            animation: fallAndBounce 1.5s ease forwards;
        }

        h3 {
            font-size:x-small;
            font-family: Arial, Helvetica, sans-serif;
            color: #000000;
            font-weight: bold;
            animation: goingUp 2s ease forwards;
        }

        a:hover {
            color: #acacac !important;
        }

        @keyframes fallAndBounce {
            0% {
                transform: translateY(-200px);
                opacity: 0;
            }

            50% {
                opacity: 1;
            }

            80% {
                transform: translateY(20px);
            }

            100% {
                transform: translateY(0);
            }
        }

        @keyframes goingUp {

            0% {
                transform: translateY(50px);
                opacity: 0;
            }

            50% {
                opacity: 1;
            }

            100% {
                transform: translateY(0);
            }
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg ms-4">
        <div class="container d-flex justify-content-center">
            <a class="navbar-brand">
                <img id="logo" src="images/logo1.png" alt="logo" width="100" height="auto">
            </a>
        </div>
    </nav>

    <section>
        <div class="container-fluid p-0 d-flex justify-content-center align-items-center" style="margin-top: -170px; width: 100%; height: 800px; background-color: #d4d4d4;">
            <div class="d-flex text-center">
                <div><h1>4</h1></div>
                <div><h1>0</h1></div>
                <div><h1>4</h1></div>
            </div>
        </div>
    </section>
    
    <div class="container" style="margin-top: -200px;">
        <div class="text-center">
            <h3>PAGE NOT FOUND</h3>
        </div>
        <div class="text-center">
            <h3>LET'S GET YOU BACK TO THE GOOD STUFF</h3>
        </div>
        <div class="text-center text-dark">
            <h3>
                <a href="index.php" class="text-dark">Home,</a>
                <a href="projects.php" class="text-dark">Projects,</a>
                <a href="index.php" class="text-dark">Contacts</a>
            </h3>
        </div>
    </div>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

</body>


</html>