<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CS〡Projects</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Text&display=swap" rel="stylesheet">
    <link rel="icon" href="images/icon.png">

    <style>
        body {
            background-color: #252525;
        }

        .welcome-section {
            text-align: center;
            font-family: 'DM Serif Text', serif;
            font-size: 17vw;
            color: #000000;
            line-height: .9;
        }

        .my-projects {
            text-align: center;
            color: #000000;
            font-size: 1.4rem;
            font-family: 'DM Serif Text', serif;
            font-style: italic;
            margin-top: -20;
        }

        section {
            background-color: #FAF7EE;
            padding: 40px;
        }

        .projects {
            text-align: center;
            font-family: 'DM Serif Text', serif;
            font-size: 8vw;
            color: #D4D0C4;
        }

        .click-to-see-more {
            text-align: center;
            color: #D4D0C4;
            font-size: 1.2rem;
            font-family: 'DM Serif Text', serif;
            font-style: italic;
            margin-top: -10;
        }

        #activityContainer {
            margin-top: -4rem;
        }

        .navbar-nav .nav-link {
            color: #000000;
            font-size: 1.2rem;
            font-family: 'DM Serif Text', serif;
        }

        .navbar-nav .nav-link:hover {
            color: #07149c;
        }

        .navbar-toggler-icon {
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3E%3Cpath stroke='black' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E");
        }
    </style>
</head>

<body data-bs-theme="dark" id="body">
    <nav class="navbar navbar-expand-lg" style="background-color: #FAF7EE; border-bottom: 1px solid #000;">
        <div class="container d-flex">
            <a class="navbar-brand">
                <img id="logo" src="images/logo.png" alt="logo" width="100" height="auto">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item mx-4">
                        <a class="nav-link" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item mx-4">
                        <a class="nav-link" href="projects.php">Projects</a>
                    </li>
                    <li class="nav-item mx-4">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section>
        <h1 class="welcome-section">WELCOME</h1>
        <h3 class="my-projects">to my projects</h3>
    </section>

    <div class="my-3">
        <h1 class="projects">projects &lt;ol&gt;</h1>
        <h3 class="click-to-see-more">click to see more details</h3>
    </div>

    <div class="container text-center">

        <div class="row justify-content-center" style="max-width: 90%; margin: 0 auto;" id="activityContainer">
        </div>
    </div>

    <script>
        var activity = [
            "A08"
        ];

        var activityPics = [
            "images/A08.png"
        ];

        var activityLinks = [
            "A08/index.php"
        ];

        var activityContainer = document.getElementById("activityContainer");
        for (var i = 0; i < activity.length; i++) {
            activityContainer.innerHTML +=
                '<div class="col-12 col-md-6 col-lg-4 col-xl-3">' +
                '<a href="' + activityLinks[i] + '" style="text-decoration: none; color: inherit;">' +
                '<div class="card my-3" id="movieCard' + i + '" onmouseenter="applyActivityHoverEffect(' + i + ')" onmouseleave="removeActivityHoverEffect(' + i + ')">' +
                '<img id="actPics' + i + '" src="' + activityPics[i] + '" class="card-img-top" alt="' + activity[i] + '">' +
                '<div class="card-body" id="actTitle' + i + '" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); color: Orange; opacity: 0; transition: opacity 0.3s ease; font-family: \'DM Serif Text\', serif; font-style: italic; text-align: center;">' +

                '<h5 class="card-title">' + activity[i] + '</h5>' +
                '</div>' +
                '</div>' +
                '</a>' +
                '</div>';
        }

        function applyActivityHoverEffect(index) {
            var img = document.getElementById('actPics' + index);
            var title = document.getElementById('actTitle' + index);

            img.style.transform = "scale(1.1)";

            title.style.opacity = 1;
        }

        function removeActivityHoverEffect(index) {
            var img = document.getElementById('actPics' + index);
            var title = document.getElementById('actTitle' + index);

            img.style.transform = "scale(1)";
            title.style.opacity = 0;
        }

    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>


</body>

</html>