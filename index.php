<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sisfo Akuntansi</title>

    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,400;0,700;1,200&family=Unbounded:wght@400;700&display=swap"
        rel="stylesheet">

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/bootstrap-icons.css" rel="stylesheet">

    <link href="css/tooplate-kool-form-pack.css" rel="stylesheet">

</head>

<body>

    <main>

        <header class="site-header">
            <div class="container">
                <div class="row justify-content-between">

                    <div class="col-lg-12 col-12 d-flex">
                        <span class="text-white">
                            Vinto Rizalfi
                        </span>
                        </a>
                    </div>

                </div>
            </div>
        </header>

        <!-- Modal -->
        <div class="modal fade" id="subscribeModal" tabindex="-1" aria-labelledby="subscribeModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">

                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body">
                        <form action="#" method="get" class="custom-form mt-lg-4 mt-2" role="form">
                            <h2 class="modal-title" id="subscribeModalLabel">Stay up to date</h2>

                            <input type="email" name="email" id="email" class="form-control"
                                placeholder="your@email.com" required="">

                            <button type="submit" class="form-control">Notify</button>
                        </form>
                    </div>

                    <div class="modal-footer justify-content-center">
                        <p>By signing up, you agree to our Privacy Notice</p>
                    </div>
                </div>
            </div>
        </div>


        <section class="hero-section d-flex justify-content-center align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-12 mx-auto">
                        <form action="cek_login.php" class="custom-form login-form" role="form" method="post">
                            <h2 class="hero-title text-center mb-4 pb-2">Sisfo Akuntansi</h2>
                            <?php
                            if (isset($_GET['pesan'])) {
                                if ($_GET['pesan'] == "gagal") {
                                    echo "<p class='login-box-msg text-secondary'> Login gagal! Masukkan username dan password anda</p>";
                                }
                                if ($_GET['pesan'] == "logout") {
                                    echo "<p class='login-box-msg text-secondary text-center'>Logout berhasil</p>";
                                }
                                if ($_GET['pesan'] == "belum_login") {
                                    echo "<p class='login-box-msg text-secondary text-center'>Anda harus login terlebih dahulu</p>";
                                }
                            }
                            ?>
                            <div class="form-floating mb-4 p-0">
                                <input type="text" name="username" id="username" class="form-control"
                                    placeholder="Masukkan Username">

                                <label for="username">Masukkan Username</label>
                            </div>

                            <div class="form-floating p-0">
                                <input type="password" name="password" id="password" class="form-control"
                                    placeholder="Masukkan Password">

                                <label for="password">Masukkan Password</label>
                            </div>

                            <div class="form-check mb-4">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Remember me
                                </label>
                            </div>

                            <div class="row justify-content-center align-items-center">
                                <div class="col-lg-5 col-12">
                                    <button type="submit" class="form-control">Login</button>
                                </div>

                                <div class="col-lg-5 col-12">
                                    <a href="#" class="btn custom-btn custom-border-btn">Register</a>
                                </div>
                            </div>

                        </form>

                    </div>
                </div>
            </div>

            <div class="video-wrap">
                <video autoplay="" loop="" muted="" class="custom-video" poster="">
                    <source src="videos/video.mp4" type="video/mp4">

                    Your browser does not support the video tag.
                </video>
            </div>
        </section>
    </main>

    <!-- JAVASCRIPT FILES -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/countdown.js"></script>
    <script src="js/init.js"></script>

</body>

</html>