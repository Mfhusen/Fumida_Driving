<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/bootstrap.min.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Arimo&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Hind&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Muli&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/font-awesome.min.css">

    <!-- Owl Carousel -->
    <link type="text/css" rel="stylesheet" href="<?= base_url('assets/'); ?>css/owl.carousel.css" />
    <link type="text/css" rel="stylesheet" href="<?= base_url('assets/'); ?>css/owl.theme.default.css" />

    <!-- Magnific Popup -->
    <link type="text/css" rel="stylesheet" href="<?= base_url('assets/'); ?>css/magnific-popup.css" />

    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/style.css">

    <title>Fumida Driving School</title>
</head>

<body>
    <!-- Navbar -->

    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="#">Fumida</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto">
                    <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
                    <a class="nav-item nav-link" href="#aboutTab">About</a>
                    <a class="nav-item nav-link" href="#pricingTab">Pricing</a>
                    <a class="nav-item nav-link" href="#contact">Contact</a>
                    <a class="nav-item btn btn-primary tombol" href="<?= base_url('auth/login') ?>">Login</a>
                </div>
            </div>
        </div>
    </nav>

    <!--  End Navbar -->

    <!-- Jumbotron -->
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Fumida Driving School</h1>
            <p class="display-5">Learn to drive with our professional instructor</p>
        </div>
    </div>
    <!-- End Jumbotron -->

    <!-- Container -->
    <div class="container">

        <!-- Info Panel -->
        <div class="row justify-content-center">
            <div class="col-10 info-panel">
                <div class="row">
                    <div class="col-lg">
                        <img src="<?= base_url('assets/'); ?>img/panel1.png" alt="" class="float-left">
                        <h4>Memiliki Berbagai Jenis Mobil</h4>
                    </div>
                    <div class="col-lg">
                        <img src="<?= base_url('assets/'); ?>img/panel2.png" alt="" class="float-left">
                        <h4>Instruktur Handal dan Terpercaya</h4>
                    </div>
                    <div class="col-lg">
                        <img src="<?= base_url('assets/'); ?>img/panel3.png" alt="" class="float-left">
                        <h4>Atur Jadwal Sesuai Keinginan Anda</h4>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Info Panel -->

        <!-- About -->
        <section id="aboutTab">
            <div class="row about">
                <div class="col-lg-6">
                    <img src="<?= base_url('assets/'); ?>img/aboutFumida1.jpg" alt="About Fumida Driving School" class="img-fluid">
                </div>
                <div class="col-lg-5">
                    <h3>Why <span>Choose</span> Us</h3>

                    <div class="feature">
                        <i class="fa fa-check"></i>
                        <p>Memilik banyak variasi mobil</p>
                    </div>
                    <div class="feature">
                        <i class="fa fa-check"></i>
                        <p>Instruktur handal dan terpercaya</p>
                    </div>
                    <div class="feature">
                        <i class="fa fa-check"></i>
                        <p>Mudahnya atur jadwal sesuai keinginan anda</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- End About -->

        <!-- Pricing Table -->

        <section id="pricingTab" class="pricing py-5">
            <div class="container">
                <div class="row">
                    <!-- Free Tier -->
                    <div class="col-lg-3">
                        <div class="card mb-5 mb-lg-0">
                            <div class="card-body">
                                <h5 class="card-title text-uppercase text-center">Manual Dasar</h5>
                                <h6 class="card-price text-center">Rp 1.500.000</h6>
                                <hr>
                                <ul class="fa-ul">
                                    <li><span class="fa-li"><i class="fa fa-check"></i></span>Pengenalan Dasar</li>
                                    <li><span class="fa-li"><i class="fa fa-check"></i></span>Praktik menjalankan kendaraan</li>
                                    <li><span class="fa-li"><i class="fa fa-check"></i></span>Praktik di jalan raya</li>
                                    <li><span class="fa-li"><i class="fa fa-check"></i></span>Praktik mempertajam feeling</li>
                                    <li><span class="fa-li"><i class="fa fa-check"></i></span>Praktik memperlancar mengendarai</li>
                                    <li><span class="fa-li"><i class="fa fa-check"></i></span>Praktik diberbagai kondisi jalan</li>
                                    <li><span class="fa-li"><i class="fa fa-check"></i></span>Praktik memarkir yang benar</li>
                                    <li><span class="fa-li"><i class="fa fa-check"></i></span>Praktik skill</li>
                                </ul>
                                <!-- <a href="#" class="btn btn-block btn-primary text-uppercase">Button</a> -->
                            </div>
                        </div>
                    </div>
                    <!-- Plus Tier -->
                    <div class="col-lg-3">
                        <div class="card mb-5 mb-lg-0">
                            <div class="card-body">
                                <h5 class="card-title text-uppercase text-center">Manual Lanjutan</h5>
                                <h6 class="card-price text-center">Rp 1.000.000</h6>
                                <hr>
                                <ul class="fa-ul">
                                    <li><span class="fa-li"><i class="fa fa-check"></i></span>Praktik di jalan raya</li>
                                    <li><span class="fa-li"><i class="fa fa-check"></i></span>Praktik mempertajam feeling</li>
                                    <li><span class="fa-li"><i class="fa fa-check"></i></span>Praktik memperlancar mengendarai</li>
                                    <li><span class="fa-li"><i class="fa fa-check"></i></span>Praktik diberbagai kondisi jalan</li>
                                    <li><span class="fa-li"><i class="fa fa-check"></i></span>Praktik skill</li>
                                </ul>
                                <!-- <a href="#" class="btn btn-block btn-primary text-uppercase">Button</a> -->
                            </div>
                        </div>
                    </div>
                    <!-- Pro Tier -->
                    <div class="col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title text-uppercase text-center">Matic Dasar</h5>
                                <h6 class="card-price text-center">Rp 600.000</h6>
                                <hr>
                                <ul class="fa-ul">
                                    <li><span class="fa-li"><i class="fa fa-check"></i></span>Praktik di jalan raya</li>
                                    <li><span class="fa-li"><i class="fa fa-check"></i></span>Praktik mempertajam feeling</li>
                                    <li><span class="fa-li"><i class="fa fa-check"></i></span>Praktik memperlancar mengendarai</li>
                                    <li><span class="fa-li"><i class="fa fa-check"></i></span>Praktik diberbagai kondisi jalan</li>
                                    <li><span class="fa-li"><i class="fa fa-check"></i></span>Praktik skill</li>
                                </ul>
                                <!-- <a href="#" class="btn btn-block btn-primary text-uppercase">Button</a> -->
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title text-uppercase text-center">Matic Lanjutan</h5>
                                <h6 class="card-price text-center">Rp 350.000</h6>
                                <hr>
                                <ul class="fa-ul">
                                    <li><span class="fa-li"><i class="fa fa-check"></i></span>Praktik di jalan raya</li>
                                    <li><span class="fa-li"><i class="fa fa-check"></i></span>Praktik mempertajam feeling</li>
                                    <li><span class="fa-li"><i class="fa fa-check"></i></span>Praktik memperlancar mengendarai</li>
                                    <li><span class="fa-li"><i class="fa fa-check"></i></span>Praktik diberbagai kondisi jalan</li>
                                    <li><span class="fa-li"><i class="fa fa-check"></i></span>Praktik skill</li>
                                </ul>
                                <!-- <a href="#" class="btn btn-block btn-primary text-uppercase">Button</a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- End Pricing Table -->

        <!-- Registration 1 -->
        <div class="row regis justify-content-center">
            <div class="col-lg-6">
                <img src="<?= base_url('assets/'); ?>img/regis1.jpg" alt="Registration Fumida 1" class="img-fluid">
            </div>
            <div class="col-lg-5">
                <h3>Hubungi <span>Kami</span></h3>
                <p>Daftarkan diri anda dengan mendatangi kantor kami.</p>
            </div>
        </div>
        <!-- End Registration -->

        <!-- Registration 2 -->
        <div class="row regis justify-content-center">
            <div class="col-lg-5">
                <h3>Pilih <span> Paket Belajar</span></h3>
                <p>Pilih paket belajar sesuai dengan kebutuhan dan atur jadwal anda.</p>
            </div>
            <div class="col-lg-6">
                <img src="<?= base_url('assets/'); ?>img/regis2.png" alt="Registration Fumida 1" class="img-fluid">
            </div>
        </div>
        <!-- End Registration -->

        <!-- Registration 3 -->
        <div class="row regis justify-content-center">
            <div class="col-lg-6">
                <img src="<?= base_url('assets/'); ?>img/regis3.png" alt="Registration Fumida 1" class="img-fluid">
            </div>
            <div class="col-lg-5">
                <h3>Selamat <span>Belajar</span></h3>
                <p>Selamat belajar dengan Instruktur handal dan terpercaya.</p>
            </div>
        </div>
        <!-- End Registration -->

        <!-- Contact Section -->
        <section id="contact" class="contact mb-5">
            <div class="row pt-4 mb-3">
                <div class="col text-center">
                    <h2>Contact Us</h2>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-4">
                    <div class="card text-white bg-dark mb-3">
                        <div class="card-body">
                            <h5 class="card-title text-center">Contact</h5>
                        </div>
                    </div>
                    <ul class="list-group">
                        <li class="list-group-item active">
                            <h5>Location</h5>
                        </li>
                        <li class="list-group-item">Jakarta, Indonesia</li>
                        <li class="list-group-item active">
                            <h5>Phone</h5>
                        </li>
                        <li class="list-group-item">+62 877 3393 6275</li>
                        <li class="list-group-item active">
                            <h5>Email</h5>
                        </li>
                        <li class="list-group-item">fiqihhusain@gmail.com</li>
                    </ul>
                </div>

                <div class="col-lg-6">
                    <form>
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" placeholder="Your Name">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" id="email" placeholder="your@name.com">
                        </div>
                        <div class="form-group">
                            <label for="telpon">No Telpon</label>
                            <input type="text" class="form-control" id="telpon" placeholder="+62 0800 1234 5678">
                        </div>
                        <div class="form-group">
                            <label for="pesan">Pesan</label>
                            <textarea name="pesan" id="pesan" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <button type="button" class="btn btn-primary">Kirim Pesan</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <!-- End Contact Section -->
    </div>
    <!-- End Container -->
    <!-- Footer -->
    <footer class="bg-dark text-white">
        <div class="container">
            <div class="row text-center pt-4">
                <div class="col">
                    <p>Copyright 2019</p>
                </div>
            </div>
        </div>

    </footer>

    <!-- End Footer -->

    <!-- Optional JavaScript -->
    <script type="text/javascript" src="<?= base_url('assets/'); ?>js/jquery.min.js"></script>
    <script type="text/javascript" src="<?= base_url('assets/'); ?>js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?= base_url('assets/'); ?>js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="<?= base_url('assets/'); ?>js/jquery.magnific-popup.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.9/validator.min.js" integrity="sha256-dHf/YjH1A4tewEsKUSmNnV05DDbfGN3g7NMq86xgGh8=" crossorigin="anonymous"></script>
    <script src="<?= base_url('assets/'); ?>contact.js"></script>
    <script type="text/javascript" src="<?= base_url('assets/'); ?>js/main.js"></script>

</body>

</html>