<? require 'inc/setup-data.php' ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="Spring Break Travel Packages, <?= date('Y', strtotime('+1 year')) ?> College trips to the BEST locations at affordable prices. Price matching to Mexico, Jamaica, Las Vegas, Dominican Republic and MORE!" />
        <meta name="keywords" content="Spring Break Packages, College Travel, Discount Hotel Prices" />
        <meta name="author" content="StudentFares.com" />
        <title>HvyBMX.com - Heavy BMX</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap Icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        <!-- SimpleLightbox plugin CSS-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#page-top">HvyBMX.com</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto my-2 my-lg-0">
                        <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="#magazines">Magazines</a></li>
                        <li class="nav-item"><a class="nav-link" href="#books">Books</a></li>
                        <li class="nav-item"><a class="nav-link" href="#other">Other</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container px-4 px-lg-5 h-100">
                <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-8 align-self-end">
                        <h1 class="text-white font-weight-bold">HVY BMX</h1>
                        <h6>Heavy BMX</h6>
                        <hr class="divider" />
                    </div>
                    <div class="col-lg-8 align-self-baseline">
                        <p class="text-white-75 mb-5">This is a backup website inspired by OldSchoolMags.com</p>
                        <a class="btn btn-primary btn-xl" href="#about">Find Out More</a>
                    </div>
                </div>
            </div>
        </header>
        <!-- About-->
        <section class="page-section bg-primary" id="about">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h2 class="text-white mt-0">Old School Mags</h2>
                        <hr class="divider divider-light" />
                        <p class="text-white-75 mb-4">Nullam mollis sapien a mi pulvinar, quis finibus nisl pharetra. Donec quis lacinia sem. Vivamus accumsan ex eget condimentum vehicula. Integer a ipsum vel eros rutrum porta.</p>
                        <a class="btn btn-light btn-xl" href="#magazines">Magazines</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Magazines-->
        <section class="page-section" id="magazines">
            <div class="container px-4 px-lg-5">
                <h2 class="text-center mt-0">Magazines</h2>
                <hr class="divider" />
                <div class="row gx-4 gx-lg-5">

<?  foreach ($mags as $mag) : ?>

                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <div class="mb-2"><i class="bi-gem fs-1 text-primary"></i></div>
                            <h3 class="h4 mb-2"><?= $mag['name'] ?></h3>
                            <p class="text-muted mb-0"><?= $mag['blurb'] ?></p>
                        </div>
                    </div>
                    
<?  endforeach; ?>

                </div>
            </div>
        </section>

        <!-- About-->
        <section class="page-section bg-primary" id="about">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                </div>
            </div>
        </section>

        <!-- Books-->
        <section class="page-section" id="books">
            <div class="container px-4 px-lg-5">
                <h2 class="text-center mt-0">Books</h2>
                <hr class="divider" />
                <div class="row gx-4 gx-lg-5">

<?  foreach ($mags as $mag) : ?>

                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <div class="mb-2"><i class="bi-gem fs-1 text-primary"></i></div>
                            <h3 class="h4 mb-2"><?= $mag['name'] ?></h3>
                            <p class="text-muted mb-0"><?= $mag['blurb'] ?></p>
                        </div>
                    </div>
                    
<?  endforeach; ?>

                </div>
            </div>
        </section>


        <!-- Call to action-->
        <section class="page-section bg-dark text-white">
            <div class="container px-4 px-lg-5 text-center">
                <!-- a class="nav-link" href="#contact">
                    <h2 class="mb-4">Contact Us and Get a Free Quote Today!</h2>
                </a -->
            </div>
        </section>


                <!-- other -->
                <section class="page-section" id="other">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8 col-xl-6 text-center">
                        <h2 class="mt-0">Other</h2>
                        <hr class="divider" />
                        <p class="text-muted mb-5">Other things BMX</p>
                    </div>
                </div>

                <div class="row gx-4 gx-lg-5 justify-content-center mb-5">
                    <div class="col-lg-6">
                    </div>
                </div>
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-4 text-center mb-5 mb-lg-0">
                    </div>
                </div>
            </div>
        </section>


        <!-- Footer-->
        <footer class="bg-light py-5">
            <div class="container px-4 px-lg-5">
                <div class="small text-center text-muted">
                    Copyright &copy; <?= date('Y') ?> - HvyBMX.com
                </div>
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

        <!-- SimpleLightbox plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>

        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- script src="js/submit.js"></script -->
    </body>
</html>
