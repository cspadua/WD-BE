<?php
include("connect.php");


$islandID = isset($_GET['islandID']) ? (int) $_GET['islandID'] : 1;


$totalIslandsQuery = "SELECT COUNT(*) as total FROM islandsofpersonality";
$totalIslandsResult = executeQuery($totalIslandsQuery);
$totalIslands = mysqli_fetch_assoc($totalIslandsResult)['total'];

if ($islandID > $totalIslands || $islandID < 1) {
    header("Location: index.php");
    exit();
}

$islandQuery = "SELECT * FROM `islandsofpersonality` WHERE islandOfPersonalityID = $islandID";
$islandResult = executeQuery($islandQuery);

if ($islandResult && mysqli_num_rows($islandResult) > 0) {
    $island = mysqli_fetch_assoc($islandResult);
    $name = $island['name'];
    $shortDescription = $island['shortDescription'];
    $longDescription = $island['longDescription'];
    $color = $island['color'];
    $islandImage = $island['image'];
}

$contentQuery = "SELECT * FROM islandsofpersonality 
LEFT JOIN islandcontents ON islandsofpersonality.islandOfPersonalityID = islandcontents.islandOfPersonalityID
WHERE islandsofpersonality.islandOfPersonalityID = $islandID;";
$contentResult = executeQuery($contentQuery);

if ($contentResult && mysqli_num_rows($contentResult) > 0) {

    $content1 = mysqli_fetch_assoc($contentResult);
    $content1Name = $content1['contentName'];
    $content1Text = $content1['content'];
    $content1Image = $content1['image'];

    $content2 = mysqli_fetch_assoc($contentResult);
    $content2Name = $content2['contentName'];
    $content2Text = $content2['content'];
    $content2Image = $content2['image'];

    $content3 = mysqli_fetch_assoc($contentResult);
    $content3Name = $content3['contentName'];
    $content3Text = $content3['content'];
    $content3Image = $content3['image'];
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $name ?> Island</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="island.css">
    <link rel="icon" href="images/inside-out-logo.png">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>

<body style="background-color: #F0F0F0">

    <nav class="navbar fixed-top navbar-expand-lg">
        <div class="container d-flex justify-content-between align-items-center">
            <div class="d-flex justify-content-start">
                <a href="index.php"><button class="btn btn-primary" id="button1">HOME</button></a>
            </div>

            <div class="mx-auto">
                <a class="navbar-brand">
                    <img id="logo" src="images/pixar-logo-text.png" alt="logo">
                </a>
            </div>
            <div>
                <?php if ($islandID < $totalIslands): ?>
                    <a href="island.php?islandID=<?php echo $islandID + 1; ?>">
                        <button class="btn btn-primary" id="button2">NEXT</button>
                    </a>
                <?php else: ?>

                    <a href="#">
                        <button class="btn btn-primary" id="button3">NEXT</button>
                    </a>
                <?php endif; ?>
            </div>
        </div>
    </nav>

    <header>
        <div data-aos="fade-in" class="container-fluid p-0 position-relative bg-cover"
            style="background-image: url('images/<?php echo $islandImage ?>'); height: 100vh; background-size: cover; background-position: center;">
            <div
                class="section-desc col-lg-6 d-flex flex-column justify-content-center align-items-center position-absolute top-50 start-50 translate-middle text-center">
                <img style="width: 450px; height: auto;" src="images/inside-out-logo.png">
            </div>
        </div>
    </header>

    <section>
        <div class="container d-flex flex-column justify-content-center align-items-center text-center">
            <div class="col-11">
                <h1 data-aos="fade-up" id="title-island" style="color: <?php echo $color ?>;"><?php echo $name ?> ISLAND
                </h1>
                <p data-aos="fade-up" data-aos-delay="200" id="island-overview"><?php echo $longDescription ?></p>
                <div class="image-container">
                    <div class="circle" style="background-color: <?php echo $color ?>;"></div>
                    <img class="img-fluid"
                        src="images/<?php echo $shortDescription ?>.png">
                </div>
            </div>
        </div>
    </section>

    <section style="background-color: <?php echo $color; ?>;">

        <div class="container-fluid d-flex align-items-center justify-content-center mt-5">
            <div class="row p-5 d-flex align-items-center justify-content-center">
                <div data-aos="fade-up" class="col-lg-6 d-flex justify-content-center mb-4">
                    <img src="images/<?php echo $content1Image; ?>" class="img-fluid rounded-circle shadow">
                </div>
                <div class="section-desc col-lg-6 d-flex flex-column justify-content-center">
                    <h1 data-aos="fade-up" id="content1"><?php echo $content1Name; ?></h1>
                    <p data-aos="fade-up" id="pcontent1"><?php echo $content1Text; ?></p>
                </div>
            </div>
        </div>

        <div class="container-fluid shadow-lg">
            <div class="row p-5 d-flex align-items-center justify-content-center">
                <div class="section-desc col-lg-6 d-flex flex-column justify-content-center mb-4">
                    <h1 data-aos="fade-up" id="content2"><?php echo $content2Name; ?></h1>
                    <p data-aos="fade-up" id="pcontent2"><?php echo $content2Text; ?></p>
                </div>
                <div data-aos="fade-up" class="col-lg-6 d-flex justify-content-center">
                    <img src="images/<?php echo $content2Image; ?>" class="img-fluid rounded-circle shadow">
                </div>
            </div>
        </div>

        <div class="container-fluid d-flex align-items-center justify-content-center">
            <div class="row p-5 d-flex align-items-center justify-content-center">
                <div data-aos="fade-up" class="col-lg-6 d-flex justify-content-center mb-4">
                    <img src="images/<?php echo $content3Image; ?>" class="img-fluid rounded-circle shadow">
                </div>
                <div class="section-desc col-lg-6 d-flex flex-column justify-content-center">
                    <h1 data-aos="fade-up" id="content3"><?php echo $content3Name; ?></h1>
                    <p data-aos="fade-up" id="pcontent3"><?php echo $content3Text; ?></p>
                </div>
            </div>
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
                    “Do you ever look at someone and wonder what is going on inside their head?” – Joy
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

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 1200,
            once: true,
        });
    </script>

</body>

</html>