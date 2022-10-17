<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>videos</title>
    <link rel="stylesheet" href="video/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="video/css/Dynamically-Queue-Videos.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="video/css/styles.css">
    <link rel="stylesheet" href="video/css/Video-Responsive-YouTube.css">
    <link rel="stylesheet" href="video/css/Videos-in-rows-2-and-3-videos-per-row.css">
</head>

<body>

    <?php include("header.php"); ?>
    <main class="page">
        <section class="clean-block about-us">
            <div class="container">
                <div class="block-heading" style="margin-top: 45px;">
                    <h2 class="text-info">Videos</h2>
                    <p>Aquí habrán videos, hay 2 formatos:<br></p>
                </div>
                <h1 style="margin-bottom: 25px;">Formato 1</h1>
                <div class="row justify-content-center">
                    <div class="col-sm-12 col-md-6 col-lg-4" style="border-style: none;">
                        <div class="card clean-card text-center"><iframe allowfullscreen="" frameborder="0" src="https://www.youtube-nocookie.com/embed/7aipHynsoLo" style="height: 200px;"></iframe>
                            <div class="card-body info">
                                <h4 class="card-title">Video 1</h4>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4" style="border-style: none;">
                        <div class="card clean-card text-center"><iframe allowfullscreen="" frameborder="0" src="https://www.youtube-nocookie.com/embed/gSPlAW44bXQ" style="height: 200px;"></iframe>
                            <div class="card-body info">
                                <h4 class="card-title">Video 2</h4>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4" style="border-style: none;">
                        <div class="card clean-card text-center"><iframe allowfullscreen="" frameborder="0" src="https://www.youtube-nocookie.com/embed/f1Cx54yr_hE" style="height: 200px;"></iframe>
                            <div class="card-body info">
                                <h4 class="card-title">Video 3</h4>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="clean-block about-us">
            <div class="container">
                <h1 style="margin-bottom: 25px;">Formato 2</h1>
                <div class="row justify-content-center">
                    <div class="col-md-12 col-lg-6" style="border-style: none;">
                        <div class="card clean-card text-center"><iframe allowfullscreen="" frameborder="0" src="https://www.youtube-nocookie.com/embed/yXuiA_6q1eQ" style="height: 310px;"></iframe>
                            <div class="card-body info">
                                <h4 class="card-title">Video 1</h4>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-6" style="border-style: none;">
                        <div class="card clean-card text-center"><iframe allowfullscreen="" frameborder="0" src="https://www.youtube-nocookie.com/embed/A7FYMRExufg" style="height: 310px;"></iframe>
                            <div class="card-body info">
                                <h4 class="card-title">Video 2</h4>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="clean-block about-us">
            <div class="container">
                <h1 style="margin-bottom: 25px;">Formato 1</h1>
                <div class="row justify-content-center">
                    <div class="col-sm-12 col-md-6 col-lg-4" style="border-style: none;">
                        <div class="card clean-card text-center"><iframe allowfullscreen="" frameborder="0" src="https://www.youtube-nocookie.com/embed/7aipHynsoLo" style="height: 200px;"></iframe>
                            <div class="card-body info">
                                <h4 class="card-title">Video 1</h4>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4" style="border-style: none;">
                        <div class="card clean-card text-center"><iframe allowfullscreen="" frameborder="0" src="https://www.youtube-nocookie.com/embed/gSPlAW44bXQ" style="height: 200px;"></iframe>
                            <div class="card-body info">
                                <h4 class="card-title">Video 2</h4>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4" style="border-style: none;">
                        <div class="card clean-card text-center"><iframe allowfullscreen="" frameborder="0" src="https://www.youtube-nocookie.com/embed/f1Cx54yr_hE" style="height: 200px;"></iframe>
                            <div class="card-body info">
                                <h4 class="card-title">Video 3</h4>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php include("footer.php"); ?>

    <script src="video/js/Dynamically-Queue-Videos.js"></script>
    <script src="https://www.youtube.com/iframe_api"></script>
</body>

</html>