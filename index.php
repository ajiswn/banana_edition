<?php
    include "koneksi.php";
    // Query untuk mengambil data gambar dari database
    $query = "SELECT * FROM admin WHERE username = 'salsa'"; // Sesuaikan dengan kondisi Anda

    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Banana Edition</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="<?php echo 'data:image/jpeg;base64,' . base64_encode($row['icon']);?>" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&family=Playfair+Display:wght@600;700&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <meta name="description" content="Banana Edition adalah toko yang menjual makanan berbagai olahan pisang yang dimiliki oleh Salsabila Ramadhani. Banana Edition hadir dengan berbagai macam rasa dan toping yang bisa dipilih.">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid top-bar bg-dark text-light px-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="row gx-0 align-items-center d-none d-lg-flex">
            <div class="col-lg-6 px-5 text-start">
                <!-- <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a class="small text-light" href="#">Home</a></li>
                    <li class="breadcrumb-item"><a class="small text-light" href="#">Career</a></li>
                    <li class="breadcrumb-item"><a class="small text-light" href="#">Terms</a></li>
                    <li class="breadcrumb-item"><a class="small text-light" href="#">Privacy</a></li>
                </ol> -->
            </div>
            <div class="col-lg-6 px-5 text-end">
                <small>Ikuti kami:</small>
                <div class="h-100 d-inline-flex align-items-center">
                    <!-- <a class="btn-lg-square text-primary border-end rounded-0" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn-lg-square text-primary border-end rounded-0" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn-lg-square text-primary border-end rounded-0" href=""><i class="fab fa-linkedin-in"></i></a> -->
                    <a class="btn-lg-square text-primary pe-0" href="https://instagram.com/<?php echo $row['instagram'];?>" target="_blank"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
        <a href="index.php" class="navbar-brand ms-lg-0">
          <div class="d-flex justify-content-start types">
            <img src ="<?php echo 'data:image/jpeg;base64,' . base64_encode($row['icon']);?>">
            <h3 class="text-primary">Banana Edition</h3>
          </div>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav mx-auto p-4 p-lg-0">
                <a href="index.php" class="nav-item nav-link active">Beranda</a>
                <a href="about.php" class="nav-item nav-link">Tentang Kami</a>
                <a href="service.php" class="nav-item nav-link">Layanan</a>
                <a href="product.php" class="nav-item nav-link">Produk</a>
            </div>
            </div>
            
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Carousel Start -->
    <div class="container-fluid p-0 pb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="owl-carousel header-carousel position-relative">
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="<?php echo 'data:image/jpeg;base64,' . base64_encode($row['menuspesial1']);?>" alt="Menu Spesial1"> 
                <div class="owl-carousel-inner">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-lg-8">
                                <h1 class="display-1 text-light mb-4 animated slideInDown">Selamat datang di<br>Banana Edition</h1>
                                <p class="text-light fs-5 mb-4 pb-3">Pembuatan Website ini bertujuan untuk menjual produk makanan kami dalam sebuah website yang dinamis.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="<?php echo 'data:image/jpeg;base64,' . base64_encode($row['menuspesial2']);?>" alt="">
                <div class="owl-carousel-inner">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-lg-8">
                                <h1 class="display-1 text-light mb-4 animated slideInDown">Selamat datang di<br>Banana Edition</h1>
                                <p class="text-light fs-5 mb-4 pb-3">Website ini juga bertujuan untuk mengunjungi produk makanan yang kami pasarkan dan dipesan disebuah website.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Facts Start -->
    <!-- <div class="container-xxl py-6">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="fact-item bg-light rounded text-center h-100 p-5">
                        <i class="fa fa-certificate fa-4x text-primary mb-4"></i>
                        <p class="mb-2">Years Experience</p>
                        <h1 class="display-5 mb-0" data-toggle="counter-up">1</h1>
                    </div>
                </div>
            
                <div class="col-lg-3 col-md-6 wow fadeIn" data-wow-delay="0.5s">
                    <div class="fact-item bg-light rounded text-center h-100 p-5">
                        <i class="fas fa-clipboard-list fa-4x text-primary mb-4"></i>
                        <p class="mb-2">Marketed Food Products</p>
                        <h1 class="display-5 mb-0" data-toggle="counter-up">3</h1>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeIn" data-wow-delay="0.7s">
                    <div class="fact-item bg-light rounded text-center h-100 p-5">
                        <i class="fa fa-cart-plus fa-4x text-primary mb-4"></i>
                        <p class="mb-2">Number of orders in a day</p>
                        <h1 class="display-5 mb-0" data-toggle="counter-up">15</h1>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeIn" data-wow-delay="0.5s">
                    <div class="fact-item bg-light rounded text-center h-100 p-5">
                        <i class="fas fa-building fa-4x text-primary mb-4"></i>
                        <p class="mb-2">Open shop in a week</p>
                        <h1 class="display-5 mb-0" data-toggle="counter-up">5</h1>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Facts End -->


    <!-- About Start -->
    <div class="container-xxl py-6">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="row img-twice position-relative h-100">
                        <div class="col-6">
                            <img class="img-fluid rounded" src="<?php echo 'data:image/jpeg;base64,' . base64_encode($row['about1']);?>" alt="">
                        </div>
                        <div class="col-6 align-self-end">
                            <img class="img-fluid rounded" src="<?php echo 'data:image/jpeg;base64,' . base64_encode($row['about2']);?>" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-100">
                        <p class="text-primary text-uppercase mb-2">// Tentang kami</p>
                        <h1 class="display-6 mb-4">Kami menjual produk dengan harga terjangkau dan kualitas tinggi.</h1>
                        <p>Banana Edition adalah toko yang menjual makanan berbagai olahan pisang yang dimiliki oleh Salsabila Ramadhani. Banana Edition hadir dengan berbagai macam rasa dan toping yang bisa dipilih.</p>
                        <p>Kami hadir untuk memanjakan lidah anda dengan berbagai olahan pisang kami yang memiliki kualitas tinggi dan harga terjangkau</p>
                        <div class="row g-2 mb-4">
                            <div class="col-sm-6">
                                <i class="fa fa-check text-primary me-2"></i>Quality Products
                            </div>
                            <div class="col-sm-6">
                                <i class="fa fa-check text-primary me-2"></i>Custom Products
                            </div>
                            <div class="col-sm-6">
                                <i class="fa fa-check text-primary me-2"></i>Online Order
                            </div>
                            <div class="col-sm-6">
                                <i class="fa fa-check text-primary me-2"></i>Home Delivery
                            </div>
                        </div>
                        <a class="btn btn-primary rounded-pill py-3 px-5" href="https://wa.me/62<?php echo $row['no_wa'];?>" target="_blank"><i class="fab fa-whatsapp"></i>   Order Now !</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Product Start -->
    <div class="container-xxl bg-light my-6 py-6 pt-4">
        <div class="container">
            <div class="bg-primary text-light rounded-bottom p-5 my-6 mt-0 wow fadeInUp" data-wow-delay="0.1s">
                <div class="row g-4 align-items-center">
                    <div class="col-lg-6">
                        <h1 class="display-4 text-light mb-0">Jajanan Pisang Terbaik Di Jambi </h1>
                    </div>
                    <div class="col-lg-6 text-lg-end">
                        <div class="d-inline-flex align-items-center text-start">
                            <i class="fa fa-phone-alt fa-4x flex-shrink-0"></i>
                            <div class="ms-4">
                                <p class="fs-5 fw-bold mb-0">Call Us</p>
                                <p class="fs-1 fw-bold mb-0"><?php echo $row['nohp1'];?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="text-primary text-uppercase mb-2">//produk kami</p>
                <h1 class="display-6 mb-4">Produk-produk Kami :</h1>
            </div>
            <div class="row g-4">
                <?php
                    include "koneksi.php";

                    $query = "SELECT * FROM produk";
                    $result = mysqli_query($conn, $query);

                    while ($ambil = mysqli_fetch_assoc($result)) {
                ?>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="product-item d-flex flex-column bg-white rounded overflow-hidden h-100">
                        <div class="text-center p-4">
                            <div class="d-inline-block border border-primary rounded-pill px-3 mb-3">Rp <?php echo $ambil['rentang_harga'];?></div>
                            <h3 class="mb-3"><?php echo $ambil['nama_produk'];?></h3>
                            <!-- <span>Menu ini adalah gulungan atau roll yang berisi pisang sebagai bagian utama dari isiannya.</span> -->
                        </div>
                        <div class="position-relative mt-auto">
                            <img class="img-fluid" src="<?php echo 'data:image/jpeg;base64,' . base64_encode($ambil['foto_produk1']);?>" alt="<?php echo $ambil['nama_produk'];?>">
                            <div class="product-overlay">
                                <a class="btn btn-lg-square btn-outline-light rounded-circle" href="detail_produk.php?id=<?php echo $ambil['id']; ?>"><i class="fa fa-eye text-primary"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                    }
                ?>       
            </div>
        </div>
    </div>
    <!-- Product End -->

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer my-6 mb-0 py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Contact</h4>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i><?php echo $row['nohp1'];?></p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i><?php echo $row['nohp2'];?></p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i><?php echo $row['email'];?></p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-square btn-outline-light rounded-circle me-1" href="https://wa.me/62<?php echo $row['no_wa'];?>" target="_blank"><i class="fab fa-whatsapp"></i></a>
                        <!-- <a class="btn btn-square btn-outline-light rounded-circle me-1" href=""><i class="fab fa-facebook-f"></i></a> -->
                        <a class="btn btn-square btn-outline-light rounded-circle me-1" href="https://instagram.com/<?php echo $row['instagram'];?>" target="_blank"><i class="fab fa-instagram"></i></a>
                        <!-- <a class="btn btn-square btn-outline-light rounded-circle me-0" href=""><i class="fab fa-whatsapp"></i></a> -->
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Quick Links</h4>
                    <a class="btn btn-link" href="about.php">Tentang Kami</a>
                    <a class="btn btn-link" href="service.php">Layanan</a>
                    <a class="btn btn-link" href="product.php">Produk</a>
                </div>
                
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Photo Gallery</h4>
                    <div class="row g-2">
                        <div class="col-4">
                            <img class="img-fluid bg-light rounded p-1" src="<?php echo 'data:image/jpeg;base64,' . base64_encode($row['galeri1']);?>" alt="Image">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light rounded p-1" src="<?php echo 'data:image/jpeg;base64,' . base64_encode($row['galeri2']);?>" alt="Image">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light rounded p-1" src="<?php echo 'data:image/jpeg;base64,' . base64_encode($row['galeri3']);?>" alt="Image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Copyright Start -->
    <div class="container-fluid copyright text-light py-4 wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a href="#">Banana Edition</a> , All Right Reserved.
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                   
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>