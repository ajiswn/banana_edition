<?php
include "koneksi.php";

$query = "SELECT * FROM admin WHERE username = 'salsa'"; // Sesuaikan dengan kondisi Anda

$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);

if (isset($_GET['id']) && !empty($_GET['id'])) {
    $id_produk = $_GET['id'];

    // Query untuk mengambil detail produk berdasarkan ID
    $query = "SELECT * FROM produk WHERE id = $id_produk"; // Sesuaikan dengan nama tabel dan kolom Anda
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $ambil = mysqli_fetch_assoc($result);
        $nama_produk = $ambil['nama_produk'];
        $deskripsi = $ambil['deskripsi'];

        // Tampilkan detail produk
        ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title><?php echo $nama_produk;?> - Banana Edition</title>
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

    <style>
        #chocolate:checked.form-check-input[type="radio"] {
            background-color: #7B3F00;
        }

        #tiramisu:checked.form-check-input[type="radio"] {
            background-color: #C19A6B;
        }

        #greentea:checked.form-check-input[type="radio"] {
            background-color: #8FBC8F;
        }

        #cappucino:checked.form-check-input[type="radio"] {
            background-color: #986f59;
        }

        #strawberry:checked.form-check-input[type="radio"] {
            background-color: #FF6B6B;
        }

        #vanila:checked.form-check-input[type="radio"] {
            background-color: #F3E5AB;
        }

        #taro:checked.form-check-input[type="radio"] {
            background-color: #5B3F87;
        }
    </style>
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
                <a href="index.php" class="nav-item nav-link">Beranda</a>
                <a href="about.php" class="nav-item nav-link">Tentang Kami</a>
                <a href="service.php" class="nav-item nav-link">Layanan</a>
                <a href="product.php" class="nav-item nav-link">Produk</a>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Page Header Start -->
    <div class="container-fluid page-header py-6 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center pt-5 pb-3">
            <h1 class="display-4 text-white animated slideInDown mb-3"><?php echo $nama_produk;?></h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="product.php">Produk</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page"><?php echo $nama_produk;?></li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Content Start -->
    <div class="container-xxl py-6">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="row img-twice position-relative h-100">
                        <div class="col-6">
                            <img class="img-fluid rounded" src="<?php echo 'data:image/jpeg;base64,' . base64_encode($ambil['foto_produk1']);?>" alt="">
                        </div>
                        <div class="col-6 align-self-end">
                            <img class="img-fluid rounded" src="<?php echo 'data:image/jpeg;base64,' . base64_encode($ambil['foto_produk2']);?>" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-100">
                        <!-- <p class="text-primary text-uppercase mb-2">// Tentang kami</p> -->
                        <h1 class="display-6 mb-4"><?php echo $nama_produk;?></h1>
                        <p><?php echo $deskripsi;?></p>
                        <form id="orderForm">
                            <input type="text" name="produk" id="<?php echo $id_produk;?>" value="<?php echo $nama_produk;?>" hidden>
                            <label class="fw-bold">Ukuran:</label><br>
                            <div class="row g-2 mb-4">
                                <?php
                                include "koneksi.php";
                                // Query untuk mengambil varian produk
                                $query_varian = "SELECT * FROM varian_produk WHERE id_produk = $id_produk";
                                $result_varian = mysqli_query($conn, $query_varian);

                                if ($result_varian && mysqli_num_rows($result_varian) > 0) {
                                    while ($row_varian = mysqli_fetch_assoc($result_varian)) {
                                        $deskripsi_varian = $row_varian['deskripsi_varian'];
                                        $id_varian = $row_varian['id'];
                                        ?>
                                        <div class="col-sm-4">
                                            <input type="radio" name="ukuran" id="input_<?php echo $id_varian;?>" class="form-check-input">
                                            <label for="input_<?php echo $id_varian;?>" class="form-check-label"><?php echo $deskripsi_varian;?></label>
                                        </div>
                                        <?php
                                    }
                                } else {
                                    echo "Tidak ada varian produk";
                                }
                                
                                ?>
                            </div>
                            <label class="fw-bolder">Varian Rasa:</label><br>
                            <div class="row g-2 mb-4">
                                <div class="col-sm-3">
                                    <input type="radio" name="rasa" id="chocolate" class="form-check-input">
                                    <label for="chocolate" class="form-check-label">Chocolate</label>
                                </div>
                                <div class="col-sm-3">
                                    <input type="radio" name="rasa" id="tiramisu" class="form-check-input">
                                    <label for="tiramisu" class="form-check-label">Tiramisu</label>
                                </div>
                                <div class="col-sm-3">
                                    <input type="radio" name="rasa" id="greentea" class="form-check-input">
                                    <label for="greentea" class="form-check-label">Greentea</label>
                                </div>
                                <div class="col-sm-3">
                                    <input type="radio" name="rasa" id="cappucino" class="form-check-input">
                                    <label for="cappucino" class="form-check-label">Cappucino</label>
                                </div>
                                <div class="col-sm-3">
                                    <input type="radio" name="rasa" id="strawberry" class="form-check-input">
                                    <label for="strawberry" class="form-check-label">Strawberry</label>
                                </div>
                                <div class="col-sm-3">
                                    <input type="radio" name="rasa" id="vanila" class="form-check-input">
                                    <label for="vanila" class="form-check-label">Vanila</label>
                                </div>
                                <div class="col-sm-3">
                                    <input type="radio" name="rasa" id="taro" class="form-check-input">
                                    <label for="taro" class="form-check-label">Taro</label>
                                </div>
                            </div>
                            <label class="fw-bolder">Extra Topping:</label><br>
                            <div class="row g-2 mb-4">
                                <div class="col-sm-3">
                                    <input type="checkbox" id="keju" class="form-check-input">
                                    <label for="keju" class="form-check-label">Keju +2K</label>
                                </div>
                                <div class="col-sm-3">
                                    <input type="checkbox" id="chococip" class="form-check-input">
                                    <label for="chococip" class="form-check-label">Chococip +2K</label>
                                </div>
                                <div class="col-sm-3">
                                    <input type="checkbox" id="pgreentea" class="form-check-input">
                                    <label for="pgreentea" class="form-check-label">P. Greentea +2K</label>
                                </div>
                                <div class="col-sm-3">
                                    <input type="checkbox" id="pchocolate" class="form-check-input">
                                    <label for="pchocolate" class="form-check-label">P. chocolate +2K</label>
                                </div>
                                <div class="col-sm-3">
                                    <input type="checkbox" id="pstrawberry" class="form-check-input">
                                    <label for="pstrawberry" class="form-check-label">P. Strawberry +2K</label>
                                </div>
                                <div class="col-sm-3">
                                    <input type="checkbox" id="credvelvet" class="form-check-input">
                                    <label for="credvelvet" class="form-check-label">C. Redvelvet +2K</label>
                                </div>
                                <div class="col-sm-3">
                                    <input type="checkbox" id="oreo" class="form-check-input">
                                    <label for="oreo" class="form-check-label">Oreo +1K</label>
                                </div>
                                <div class="col-sm-3">
                                    <input type="checkbox" id="mesis" class="form-check-input">
                                    <label for="mesis" class="form-check-label">Mesis +1K</label>
                                </div>
                            </div>
                            <button type="button" onclick="sendWhatsApp()" class="btn btn-primary rounded-pill py-3 px-5" ><i class="fab fa-whatsapp"></i>   Order Now !</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Content End -->

    
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
    <script>
    function sendWhatsApp() {
    
    var produk = document.getElementById('<?php echo $id_produk;?>').value;
    var ukuran = document.querySelector('input[name="ukuran"]:checked').nextElementSibling.textContent;
    var rasa = document.querySelector('input[name="rasa"]:checked').nextElementSibling.textContent;
    var extraToppings = '';
    var checkboxes = document.querySelectorAll('input[type="checkbox"]:checked');
    
    checkboxes.forEach(function(checkbox) {
        extraToppings += checkbox.nextElementSibling.textContent + ', ';
    });

    extraToppings = extraToppings.slice(0, -2); // Menghapus koma dan spasi terakhir

    // Membuat pesan yang akan dikirim ke WhatsApp
    var message = "Halo, saya ingin memesan " + produk + " dengan detail:\n" +
        "Ukuran: " + ukuran + "\n" +
        "Varian Rasa: " + rasa + "\n" +
        "Extra Toppings: " + extraToppings;

    // Membuat URL untuk WhatsApp dengan pesan yang diinginkan
    var whatsappURL = "https://wa.me/6283826717809?text=" + encodeURIComponent(message);
    
    // Buka WhatsApp dengan pesan yang diinginkan
    window.open(whatsappURL, '_blank');
    
    
}
    </script>
</body>

</html>
<?php
    } else {
        echo "Produk tidak ditemukan.";
    }
} else {
    echo "ID produk tidak valid.";
}
?>