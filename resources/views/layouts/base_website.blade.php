<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>@yield('title') - GPIB Sejahtera Jakarta</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicons -->
    <link href="/assetsU/img/icon.png" rel="icon">
    <link href="/assetsU/img/icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,500,600,700,700i|Montserrat:300,400,500,600,700" rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="/assetsU/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="/assetsU/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="/assetsU/lib/animate/animate.min.css" rel="stylesheet">
    <link href="/assetsU/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="/assetsU/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="/assetsU/lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    <link href="/assetsU/css/toggled-search-bar.css" rel="stylesheet">
    <link rel="stylesheet" href="/vendor/owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="/vendor/owlcarousel/assets/owl.theme.default.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/lightgallery/css/lightgallery.css')}}" />

    <!-- Main Stylesheet File -->
    <link href="/assetsU/css/style.css" rel="stylesheet">

    <!-- =======================================================
    Theme Name: Rapid
    Theme URL: https://bootstrapmade.com/rapid-multipurpose-bootstrap-business-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
======================================================= -->
</head>

<body>
    <!--==========================
  Header
  ============================-->
<header id="header">

  <div id="topbar">
    <div class="container">
      <div class="social-links">
        <a href="https://web.facebook.com/gpibsejahterajkt/?_rdc=1&_rdr" target="_blank" class="facebook text-dark"><i class="fa fa-facebook"></i></a>
        <a href="https://www.instagram.com/gpibsejahterajkt/" target="_blank" class="instagram text-dark"><i class="fa fa-instagram"></i></a>
        <a href="https://www.youtube.com/channel/UCm2QSs3L8xfC4Uc7GtBawYg" target="_blank" class="youtube text-dark"><i class="fa fa-youtube"></i></a>
      </div>
    </div>
  </div>

  <div class="container">

    <div class="logo float-left">
      <!-- Uncomment below if you prefer to use an image logo -->
      <a href="{{ route('home') }}" class="scrollto"><img src="/assetsU/img/logo.png" alt="" class="logo-layout"></a>
      <!-- <a href="#header" class="scrollto"><img src="img/logo.png" alt="" class="img-fluid"></a> -->
    </div>

    <nav class="main-nav float-right d-none d-lg-block">
      <ul>
        <li class="active"><a href="{{ route('home') }}">Beranda</a></li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Tentang Kami
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" style="color: black;" href="{{ route('tentang-kami.visi-misi') }}">Visi dan Misi</a>
                <a class="dropdown-item" style="color: black;" href="{{ route('tentang-kami.pemahaman-iman') }}">Pemahaman Iman</a>
                <a class="dropdown-item" style="color: black;" href="{{ route('tentang-kami.sejarah-gereja') }}">Sejarah Gereja</a>
                <a class="dropdown-item" style="color: black;" href="{{ route('tentang-kami.galeri') }}">Galeri</a>
                <a class="dropdown-item" style="color: black;" href="{{ route('tentang-kami.ebuletin') }}">E-Buletin</a>
            </div>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Direktori </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" style="color: black;" href="{{ route('direktori.phmj') }}">PHMJ</a></li>
                <li><a class="dropdown-item" style="color: black;" href="{{ route('direktori.pendeta-jemaat') }}">Pendeta Jemaat</a></li>
                <li><a class="dropdown-item" style="color: black;" href="{{ route('direktori.majelis-jemaat') }}">Majelis Jemaat</a></li>
                <li><a class="dropdown-item" style="color: black;" href="{{ route('direktori.koordinator-sektor') }}">Koordinator Sektor</a></li>
                <li class="dropdown-submenu">
                    <a class="sub-dropdown dropdown-item dropdown-toggle" style="color: black;" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">Pelayanan Kategorial</a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" style="color: black;" href="{{ route('direktori.pelayanan-kategorial.pa') }}">PA</a></li>
                        <li><a class="dropdown-item" style="color: black;" href="{{ route('direktori.pelayanan-kategorial.pt') }}">PT</a></li>
                        <li><a class="dropdown-item" style="color: black;" href="{{ route('direktori.pelayanan-kategorial.gp') }}">GP</a></li>
                        <li><a class="dropdown-item" style="color: black;" href="{{ route('direktori.pelayanan-kategorial.pkp') }}">PKP</a></li>
                        <li><a class="dropdown-item" style="color: black;" href="{{ route('direktori.pelayanan-kategorial.pkb') }}">PKB</a></li>
                        <li><a class="dropdown-item" style="color: black;" href="{{ route('direktori.pelayanan-kategorial.pklu') }}">PKLU</a></li>
                    </ul>
                </li>
                <li class="dropdown-submenu">
                    <a class="sub-dropdown dropdown-item dropdown-toggle" style="color: black;" data-toggle="dropdown" href="#">Komisi</a>
                    <ul class="dropdown-menu" style="max-height:250px; overflow-y:scroll;">
                        <li><a class="dropdown-item" style="color: black;" href="{{ route('direktori.komisi.teologi') }}">Teologi dan Persidangan Gereja</a></li>
                        <!--<li><a class="dropdown-item" style="color: black;" href="{{-- route('direktori.komisi.musik-gerejawi') --}}">Musik Gerejawi</a></li>-->
                        <li><a class="dropdown-item" style="color: black;" href="{{ route('direktori.komisi.pelayanan-kesaksian') }}">Pelayanan dan Kesaksian</a></li>
                        <!--<li><a class="dropdown-item" style="color: black;" href="{{-- route('direktori.komisi.diakoni') --}}">Diakoni</a></li>-->
                        <li><a class="dropdown-item" style="color: black;" href="{{ route('direktori.komisi.kalvari') }}">Kalvari</a></li>
                        <li><a class="dropdown-item" style="color: black;" href="{{ route('direktori.komisi.germasa') }}">Germasa</a></li>
                        <li><a class="dropdown-item" style="color: black;" href="{{ route('direktori.komisi.ppsdi') }}">PPSDI - PPK</a></li>
                        <li><a class="dropdown-item" style="color: black;" href="{{ route('direktori.komisi.peg') }}">PEG</a></li>
                        <li><a class="dropdown-item" style="color: black;" href="{{ route('direktori.komisi.rumah-tangga') }}">Rumah Tangga</a></li>
                        <li><a class="dropdown-item" style="color: black;" href="{{ route('direktori.komisi.inforkom-litbang') }}">Inforkom Litbang</a></li>
                    </ul>
                </li>
            </ul>
        </li>
        <!-- <li><a href="#portfolio">Panduan</a></li> -->
        <li><a href="{{ route('tata-ibadah') }}">Tata Ibadah</a></li>
        <li><a href="{{ route('warta-jemaat') }}">Warta Jemaat</a></li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Formulir </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" style="color: black;" href="{{ route('formulir.atestasi') }}">Atestasi</a></li>
                <li><a class="dropdown-item" style="color: black;" href="{{ route('formulir.pernikahan') }}">Pernikahan</a></li>
                <li><a class="dropdown-item" style="color: black;" href="{{ route('formulir.sidi') }}">SIDI</a></li>
                <li><a class="dropdown-item" style="color: black;" href="{{ route('formulir.baptisan') }}">Baptisan</a></li>
            </ul>
        </li>

        <li><a href="{{ route('hubungi-kami') }}">Hubungi Kami</a></li>
         <!-- <li class="hidden-xs navbar-form navbar-right hide-search-bar">
            <a href="#search" class="search-form-tigger"  data-toggle="search-form"><i class="fa fa-search" aria-hidden="true"></i></a>
         </li> -->
         <!-- <li>
            <div class="hide-search pl-3">
                <form action="/action_page.php">
                <input type="text" placeholder="Search.." name="search">
                <button type="submit"><i class="fa fa-search"></i></button>
                </form>
            </div>
         </li> -->
      </ul>
      @auth
      <ul>
        <li><a href="{{ route('admin.dashboard') }}" class="btn btn-success text-light">Go Back to Admin Page</a></li>
      </ul>
      @endauth
    </nav><!-- .main-nav -->

  </div>
</header><!-- #header -->
<!-- <div class="search-form-wrapper">
   <form class="search-form" id="" action="">
      <div class="input-group">
         <input type="text" name="search" class="search form-control" placeholder="Search">
      </div>
   </form>
</div> -->

@yield('content')

<!--==========================
    Footer
  ============================-->
<footer id="footer" class="section-bg">
  <div class="footer-top">
    <div class="container">

        <div class="row text-center">
            <div class="col-sm-4">
                <div class="footer-links">
                    <h4>TENTANG GPIB</h4>
                    <p>
                    GPIB menjadi gereja yang mewujudkan damai sejahtera bagi seluruh ciptaan-Nya.
                    </p>
                    <a href="{{ route('tentang-kami.visi-misi') }}">Read more >></a>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="footer-links">
                    <h4>Hubungi kami</h4>
                    <p>
                    GPIB Sejahtera Jakarta<br>
                    Jl. Durian Gang Jambe No.15, RT.6/RW.4<br>
                    Petukangan Utara, Kec. Pesanggrahan<br>
                    Kota Jakarta Selatan<br>
                    <strong>Phone :</strong> +6221 585 3488<br>
                    <strong>E-mail</strong> : sejahtera.jaksel@gpib.or.id<br>
                    </p>
                </div>

                <div class="social-links">
                    <a href="https://web.facebook.com/gpibsejahterajkt/?_rdc=1&_rdr" target="_blank" class="facebook"><i class="fa fa-facebook"></i></a>
                    <a href="https://www.instagram.com/gpibsejahterajkt/" target="_blank" class="instagram"><i class="fa fa-instagram"></i></a>
                    <a href="https://www.youtube.com/channel/UCm2QSs3L8xfC4Uc7GtBawYg" target="_blank" class="youtube"><i class="fa fa-youtube"></i></a>
                </div>
            </div>

            <div class="col-lg-4">

                <div class="footer">

                <h4>GPIB Sejahtera Jakarta</h4>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.212516792657!2d106.75704211432362!3d-6.235694395486214!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f0dcb6ab2185%3A0x7ee1671976abaddd!2sGPIB%20Sejahtera!5e0!3m2!1sid!2sid!4v1603185810249!5m2!1sid!2sid" width="80%" height="250" allowfullscreen=""></iframe>  
            </div>

        </div>

      </div>

    </div>
  </div>

  <div class="container">
    <div class="copyright">
      Copyright &copy; 2020 <strong>GPIB Sejahtera Jakarta | Komisi Inforkom-Litbang</strong>
    </div>
    <div class="credits">
      <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Rapid
        -->
    </div>
  </div>
</footer><!-- #footer -->

<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
<!-- Uncomment below i you want to use a preloader -->
<!-- <div id="preloader"></div> -->

<!-- JavaScript Libraries -->
<script src="/assetsU/lib/jquery/jquery.min.js"></script>
<script src="/assetsU/lib/jquery/jquery-migrate.min.js"></script>
<script src="/assetsU/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="/assetsU/lib/easing/easing.min.js"></script>
<script src="/assetsU/lib/mobile-nav/mobile-nav.js"></script>
<script src="/assetsU/lib/wow/wow.min.js"></script>
<script src="/assetsU/lib/waypoints/waypoints.min.js"></script>
<script src="/assetsU/lib/counterup/counterup.min.js"></script>
<script src="/assetsU/lib/owlcarousel/owl.carousel.min.js"></script>
<script src="/assetsU/lib/isotope/isotope.pkgd.min.js"></script>
<script src="/assetsU/lib/lightbox/js/lightbox.min.js"></script>
<script src="/vendor/owlcarousel/owl.carousel.min.js"></script>
<script src="http://cdn.ckeditor.com/4.6.2/full-all/ckeditor.js"></script>
<script src="{{asset('vendor/lightgallery/js/lightgallery.js')}}"></script>
<!-- Contact Form JavaScript File -->
<script src="/assetsU/contactform/contactform.js"></script>

<!-- Template Main Javascript File -->
<script src="/assetsU/js/main.js"></script>

<!-- Template Main Javascript File -->
<script src="/assetsU/js/main.js"></script>
<script>
 CKEDITOR.replace( 'post_content', {
  height: 300,
  filebrowserUploadUrl: "upload.php"
 });
</script>
<script>
$(document).ready(function(){
  $('.dropdown-submenu a.sub-dropdown').on("click", function(e){
    $(this).next('ul').toggle();
    e.stopPropagation();
    e.preventDefault();
  });
});
</script>
<script>
  $(document).ready(function($) {
    $('#lightgallery').lightGallery({
      selector: '.item-lightgallery'
    });
  });
</script>

</body>

</html>
