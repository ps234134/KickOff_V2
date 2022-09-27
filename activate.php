<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>SeptemberFest</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/logo.png" rel="icon">
    <link href="assets/img/logo.png" rel="apple-touch-icon">

    <!-- JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

   <!-- Vendor CSS Files -->
   <link rel="stylesheet" href="assets/css/functions.css" rel="stylesheet">
   <link href="assets/vendor/aos/aos.css" rel="stylesheet">
   <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
   <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
   <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
   <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
   <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

   <!-- Template Main CSS File -->
   <link href="assets/css/style.css" rel="stylesheet">
   <link href="assets/css/popup.css" rel="stylesheet">
</head>
<body>

        <!-- Hero -->
        <div id="card-activation" class="card-activation d-flex flex-column justify-content-center">
            <div class="container" data-aos="zoom-in" data-aos-delay="80">
                <div class="row card-activation-main">
                    <div class="col d-flex flex-column align-items-center ">
                        <h1 style="letter-spacing: 10px; font-weight: 400;">Activate your card here</h1>
                        <img src="assets/img/card2.png" alt="card">
                        <form action="" class="d-flex flex-wrap align-items-center">
                            <input type="number" id="nmb-activate" onKeyPress="if(this.value.length==9) return false;"  required>
                            <input type="button" value="Submit" id="btn-submit" onclick="functionpop()" required>
                        </form>
                    </div>
                </div>
                <div class="row">
                    
                    <div class="card-activation-copy col">
                        <p>&#169 2022</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Hero -->

        <?php require 'popup.php';?>

        <footer id="footer">
            <div class="container">
                <h3>September<span>Fest</span></h3>
                <div class="social-links">
                <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                </div>
                <div class="copyright">
                &copy; Copyright <strong><span>NerdSquad</span></strong>. All Rights Reserved
                </div>
                <div class="credits">
                Designed by <strong><span>NerdSquad</span></strong> 
                </div>
            </div>
        </footer><!-- End Footer -->


       

    <!-- Back to top -->
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
    
    <!--Cursor-->
    <div class='cursor' id="cursor"></div>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/typed.js/typed.min.js"></script>
    <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
    

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
    <script src="assets/js/popup.js"></script>

</body>

</html>