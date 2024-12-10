<!DOCTYPE html>
<html>

<head>
    <title>Island Variables</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">
    <link rel="icon" href="images/inside-out-logo.png">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>

<body style="background-color: #F0F0F0">

    <nav class="navbar fixed-top navbar-expand-lg">
    <div class="container d-flex justify-content-between align-items-center">
            <div class="d-flex">
                <img src="images/pixar-logo-text.png" style="width: 105px; height: auto;">
            </div>

            <div class="mx-auto">
                <a class="navbar-brand">
                    <img id="logo" src="images/inside-out-logo.png" alt="logo">
                </a>
            </div>

            <div>
                <a href="#ip"><button class="btn btn-primary" id="button1">ISLANDS</button></a>
            </div>
        </div>
    </nav>

    <header>
        <div data-aos="fade-in" class="container-fluid p-0 position-relative bg-cover"
            style="height: 100vh; padding: 0; overflow: hidden;">
            <video autoplay muted loop class="w-100 h-100 position-absolute top-0 start-0" style="object-fit: cover;">
                <source src="images/vid.mp4" type="video/mp4">
            </video>
            <div
                class="section-desc col-lg-6 d-flex flex-column justify-content-center align-items-center position-absolute top-50 start-50 translate-middle text-center">
                <img style="width: 450px; height: auto;" src="images/inside-out-logo.png">
            </div>
        </div>
    </header>

    <section>
        <div class="container d-flex my-3 flex-column justify-content-center align-items-center text-center">
            <div class="col-11">
                <h1 data-aos="fade-up" data-aos-delay="400" id="title">CODING THROUGH EMOTIONS</h1>
                <p data-aos="fade-up" data-aos-delay="600" id="overview">
                    Welcome to a world inspired by Inside Out, where every emotion plays a part in shaping who I
                    am. Joy brings the laughter, Sadness adds depth, Anger drives my determination, Disgust keeps
                    things real, and Fear guides me through challenges. Together, these emotions tell the story of
                    my life—full of memories, growth, and everything in between. Dive in and feel the journey!
                </p>
                <div class="image-container">
                    <div class="circle" style="background-color: #0071BD;"></div>
                    <img class="img-fluid" style="width: 700px; height: auto;" src="images/allchar.png" alt="Anger">
                </div>
            </div>
        </div>
    </section>

    <div class="w3-row-padding my-5" style="margin-bottom:128px">

        <div class="w3-half">
            <img data-aos="fade-up" data-aos-delay="200" src="images/4.jpeg" style="width:100%">
            <img data-aos="fade-up" data-aos-delay="300" src="images/3.jpeg" style="width:100%">
            <img data-aos="fade-up" data-aos-delay="400" src="images/5.jpeg" style="width:100%">
        </div>

        <div class="w3-half">
            <img data-aos="fade-up" data-aos-delay="200" src="images/2.jpeg" style="width:100%">
            <img data-aos="fade-up" data-aos-delay="300" src="images/1.jpeg" style="width:100%">
            <img data-aos="fade-up" data-aos-delay="400" src="images/6.jpeg" style="width:100%">
        </div>

    </div>

    <div class="container-fluid" style="background-color: #376E93;">
        <div class="row text-center">
            <div class="col-12 my-4">
                <h1 data-aos="fade-up" data-aos-delay="200">
                    <span
                        style="color: #FFB500; font-family: 'Maleo Trials Black', sans-serif; font-size: 3.75rem;">Welcome
                        to my</span>
                    <span
                        style="color: #FFFFFF; font-family: 'Maleo Trials Black', sans-serif; font-size: 3.75rem;">Island
                        of Personality</span>
                </h1>
            </div>
            <div class="col-12 d-flex justify-content-center position-relative">
                <img src="images/me.png" class="img-fluid rounded" style="max-width: 50%; height: auto;">
                <div class="position-absolute bottom-0 w-100 text-center">
                    <img src="images/grass2.png" class="img-fluid" style="width: 100%; height: auto;">
                </div>
            </div>
        </div>
    </div>

    <section id="ip">
        <div class="container-fluid d-flex flex-column justify-content-center align-items-center text-center py-5"
            style="background-color: #1C1C1C;">
            <div class="col-10 mb-4">
                <h5 data-aos="fade-up" data-aos-delay="400" id="islandp-overview">
                    My Island of Personality is a place where my strengths stand tall, my hidden sides are tucked away,
                    and every experience pushes me to grow. It’s where I learn more about myself and keep moving
                    forward, one step at a time.
                </h5>
            </div>
            <div class="col">
                <h1 data-aos="fade-up" data-aos-delay="600" id="story">This is my story</h1>
                <p data-aos="fade-up" data-aos-delay="800" id="details">click to see more details</p>
            </div>
            <div class="row justify-content-center">

                <div data-aos="flip-up" data-aos-delay="200" class="col-lg-4 col-md-6 py-lg-3 py-2">
                    <a href="island.php?islandID=1">
                        <div class="card-container">
                            <div class="card rounded-4 overflow-hidden hover-card">
                                <img src="images/botfamily.png" class="card-img-top" alt="Image">
                            </div>
                        </div>
                    </a>
                </div>

                <div data-aos="flip-up" data-aos-delay="400" class="col-lg-4 col-md-6 py-lg-3 py-2">
                    <a href="island.php?islandID=2">
                        <div class="card-container">
                            <div class="card rounded-4 overflow-hidden hover-card">
                                <img src="images/botgf.png" class="card-img-top" alt="Image">
                            </div>
                        </div>
                    </a>
                </div>

                <div data-aos="flip-up" data-aos-delay="600" class="col-lg-4 col-md-6 py-lg-3 py-2">
                    <a href="island.php?islandID=3">
                        <div class="card-container">
                            <div class="card rounded-4 overflow-hidden hover-card">
                                <img src="images/botfriends.png" class="card-img-top" alt="Image">
                            </div>
                        </div>
                    </a>
                </div>

                <div data-aos="flip-up" data-aos-delay="800" class="col-lg-4 col-md-6 py-lg-3 py-2">
                    <a href="island.php?islandID=4">
                        <div class="card-container">
                            <div class="card rounded-4 overflow-hidden hover-card">
                                <img src="images/bottft.png" class="card-img-top" alt="Image">
                            </div>
                        </div>
                    </a>
                </div>

                <div data-aos="flip-up" data-aos-delay="1000" class="col-lg-4 col-md-6 py-lg-3 py-2">
                    <a href="island.php?islandID=5">
                        <div class="card-container">
                            <div class="card rounded-4 overflow-hidden hover-card">
                                <img src="images/botspark.png" class="card-img-top" alt="Image">
                            </div>
                        </div>
                    </a>
                </div>
    </section>

    <section>
        <div class="container-fluid p-0 position-relative bg-cover"
            style="background-image: url('images/last.png'); height: 50vh; background-size: cover; background-position: center;">
            <div
                class="section-desc  col-lg-6 d-flex flex-column justify-content-center align-items-center position-absolute top-50 start-50 translate-middle text-center">
                <div class="img-fluid mb-3">
                    <img style="width: 205px; height: auto;" src="images/inside-out-logo.png">
                </div>
                <h6 id="qoute">
                    “Alright everyone, fresh start. We are going to have a good day, which will turn into a good week,
                    which will turn into a good year, which turns into a good life!” – Joy
                </h6>
            </div>
        </div>
    </section>

    <footer class="text-center py-5" style="background-color: #171616;">
        <div class="container">
            <div class="flogo mb-3 d-flex justify-content-center gap-3">
                <img src="images/pixar-logo.png" class="img-fluid" style="width: 100px; height: auto;">
                <img src="images/inside-out-logo.png" class="img-fluid" style="width: 100px; height: auto;">
            </div>
            <div class="footer-text">
                <p>© Inside Out. Just like memories and emotions, everything here stays with you. Joy, Sadness, Anger,
                    <br>Disgust, and Fear all make up the experiences that shape who we are. All rights reserved.
                </p>
            </div>
            <div class="footer-links d-flex justify-content-center gap-4">
                <h6 class="footer-links">PRIVACY NOTICE</h6>
                <h6 class="footer-links">TERMS OF SERVICE</h6>
                <h6 class="footer-links">COOKIE PREFERENCES</h6>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 1200,
            once: true,
        });
    </script>
    </script>

</body>

</html>