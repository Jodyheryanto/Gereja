<!DOCTYPE html>
<html>
   <!-- Mirrored from light.pinsupreme.com/apps_support_dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 Apr 2019 18:12:45 GMT -->
   <head>
      <title>@yield('title') - Admin Gereja</title>
      <meta charset="utf-8">
      <meta content="ie=edge" http-equiv="x-ua-compatible">
      <meta content="template language" name="keywords">
      <meta content="Tamerlan Soziev" name="author">
      <meta content="Admin dashboard html template" name="description">
      <meta content="width=device-width, initial-scale=1" name="viewport">
      <!-- Favicons -->
      <link href="/assetsU/img/icon.png" rel="icon">
      <link href="/assetsU/img/icon.png" rel="apple-touch-icon">
      <!-- <link href="../fast.fonts.net/cssapi/487b73f1-c2d1-43db-8526-db577e4c822b.css" rel="stylesheet" type="text/css"> -->
      <link href="/vendor/lightadmin/bower_components/select2/dist/css/select2.min.css" rel="stylesheet">
      <link href="/vendor/lightadmin/bower_components/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
      <link href="/vendor/lightadmin/bower_components/dropzone/dist/dropzone.css" rel="stylesheet">
      <link href="/vendor/lightadmin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
      <link href="/vendor/lightadmin/bower_components/fullcalendar/dist/fullcalendar.min.css" rel="stylesheet">
      <link href="/vendor/lightadmin/bower_components/perfect-scrollbar/css/perfect-scrollbar.min.css" rel="stylesheet">
      <link href="/vendor/lightadmin/bower_components/slick-carousel/slick/slick.css" rel="stylesheet">
      <link href="/vendor/lightadmin/css/maince5a.css?version=4.4.1" rel="stylesheet">
   </head>
   <body class="menu-position-side menu-side-left full-screen h-100">
      <div class="all-wrapper solid-bg-all">
         <div class="search-with-suggestions-w">
            <div class="search-with-suggestions-modal">
               <div class="element-search">
                  <input class="search-suggest-input" placeholder="Start typing to search..." type="text">
                  <div class="close-search-suggestions"><i class="os-icon os-icon-x"></i></div>
                  </input>
               </div>
               <div class="search-suggestions-group">
                  <div class="ssg-header">
                     <div class="ssg-icon">
                        <div class="os-icon os-icon-box"></div>
                     </div>
                     <div class="ssg-name">Projects</div>
                     <div class="ssg-info">24 Total</div>
                  </div>
                  <div class="ssg-content">
                     <div class="ssg-items ssg-items-boxed">
                        <a class="ssg-item" href="users_profile_big.html">
                           <div class="item-media" style="background-image: url(/vendor/lightadmin/img/company6.png)"></div>
                           <div class="item-name">Integ<span>ration</span> with API</div>
                        </a>
                        <a class="ssg-item" href="users_profile_big.html">
                           <div class="item-media" style="background-image: url(/vendor/lightadmin/img/company7.png)"></div>
                           <div class="item-name">Deve<span>lopm</span>ent Project</div>
                        </a>
                     </div>
                  </div>
               </div>
               <div class="search-suggestions-group">
                  <div class="ssg-header">
                     <div class="ssg-icon">
                        <div class="os-icon os-icon-users"></div>
                     </div>
                     <div class="ssg-name">Customers</div>
                     <div class="ssg-info">12 Total</div>
                  </div>
                  <div class="ssg-content">
                     <div class="ssg-items ssg-items-list">
                        <a class="ssg-item" href="users_profile_big.html">
                           <div class="item-media" style="background-image: url(/vendor/lightadmin/img/avatar1.jpg)"></div>
                           <div class="item-name">John Ma<span>yer</span>s</div>
                        </a>
                        <a class="ssg-item" href="users_profile_big.html">
                           <div class="item-media" style="background-image: url(/vendor/lightadmin/img/avatar2.jpg)"></div>
                           <div class="item-name">Th<span>omas</span> Mullier</div>
                        </a>
                        <a class="ssg-item" href="users_profile_big.html">
                           <div class="item-media" style="background-image: url(/vendor/lightadmin/img/avatar3.jpg)"></div>
                           <div class="item-name">Kim C<span>olli</span>ns</div>
                        </a>
                     </div>
                  </div>
               </div>
               <div class="search-suggestions-group">
                  <div class="ssg-header">
                     <div class="ssg-icon">
                        <div class="os-icon os-icon-folder"></div>
                     </div>
                     <div class="ssg-name">Files</div>
                     <div class="ssg-info">17 Total</div>
                  </div>
                  <div class="ssg-content">
                     <div class="ssg-items ssg-items-blocks">
                        <a class="ssg-item" href="#">
                           <div class="item-icon"><i class="os-icon os-icon-file-text"></i></div>
                           <div class="item-name">Work<span>Not</span>e.txt</div>
                        </a>
                        <a class="ssg-item" href="#">
                           <div class="item-icon"><i class="os-icon os-icon-film"></i></div>
                           <div class="item-name">V<span>ideo</span>.avi</div>
                        </a>
                        <a class="ssg-item" href="#">
                           <div class="item-icon"><i class="os-icon os-icon-database"></i></div>
                           <div class="item-name">User<span>Tabl</span>e.sql</div>
                        </a>
                        <a class="ssg-item" href="#">
                           <div class="item-icon"><i class="os-icon os-icon-image"></i></div>
                           <div class="item-name">wed<span>din</span>g.jpg</div>
                        </a>
                     </div>
                     <div class="ssg-nothing-found">
                        <div class="icon-w"><i class="os-icon os-icon-eye-off"></i></div>
                        <span>No files were found. Try changing your query...</span>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="layout-w">
            <!--------------------
               START - Mobile Menu
               -------------------->
            <div class="menu-mobile menu-activated-on-click color-scheme-dark">
               <div class="mm-logo-buttons-w">
                  <a class="mm-logo" href="index-2.html"><img src="/assetsU/img/logo.png"><span>Menu</span></a>
                  <div class="mm-buttons">
                     <div class="content-panel-open">
                        <div class="os-icon os-icon-grid-circles"></div>
                     </div>
                     <div class="mobile-menu-trigger">
                        <div class="os-icon os-icon-hamburger-menu-1"></div>
                     </div>
                  </div>
               </div>
               <div class="menu-and-user">
                  <!--------------------
                     START - Mobile Menu List
                     -------------------->
                  <ul class="main-menu">
                     <li class="selected">
                        <a href="{{ route('admin.dashboard') }}">
                           <div class="icon-w">
                              <div class="os-icon os-icon-bar-chart-stats-up"></div>
                           </div>
                           <span>Dashboard</span>
                        </a>
                     </li>
                     <li>
                        <a href="{{ route('admin.halaman.list') }}">
                           <div class="icon-w">
                              <div class="os-icon os-icon-window-content"></div>
                           </div>
                           <span>Pengaturan Semua Halaman</span>
                        </a>
                     </li>
                     <li class="has-sub-menu">
                        <a href="#">
                           <div class="icon-w"><div class="os-icon os-icon-home"></div></div>
                           <span>Beranda</span>
                        </a>
                        <div class="sub-menu">
                           <ul class="sub-menu">
                              <li><a href="{{ route('admin.halaman.showEditForm', 1) }}">Artikel</a></li>
                              <li><a href="apps_crypto.html">Pengaturan Link Video</a></li>
                              <li><a href="{{ route('admin.berita.list') }}">Berita</a></li>
                           </ul>
                        </div>
                     </li>
                     <li class="has-sub-menu">
                        <a href="#">
                           <div class="icon-w"><div class="os-icon os-icon-user-male-circle2"></div></div>
                           <span>Tentang Kami</span>
                        </a>
                        <div class="sub-menu">
                           <ul class="sub-menu">
                              <li><a href="{{ route('admin.halaman.showEditForm', 2) }}">Visi dan Misi</a></li>
                              <li><a href="{{ route('admin.halaman.showEditForm', 3) }}">Pemahaman Iman</a></li>
                              <li><a href="{{ route('admin.halaman.showEditForm', 4) }}">Sejarah Gereja</a></li>
                              <li><a href="{{ route('admin.galeri.list') }}">Galeri</a></li>
                              <li><a href="{{ route('admin.ebuletin.list') }}">E-Buletin</a></li>
                           </ul>
                        </div>
                     </li>
                     <li class="selected has-sub-menu">
                        <a href="#">
                           <div class="icon-w"><div class="os-icon os-icon-book"></div></div>
                           <span>Direktori</span>
                        </a>
                        <div class="sub-menu">
                           <ul class="sub-menu" style="max-height:250px; overflow-y:scroll;">
                              <li><a href="{{ route('admin.direktori.phmj.list') }}">PHMJ</a></li>
                              <li><a href="{{ route('admin.direktori.pendeta.list') }}">Pendeta Jemaat</a></li>
                              <li><a href="{{ route('admin.direktori.majelis-jemaat.list') }}">Majelis Jemaat</a></li>
                              <li><a href="{{ route('admin.direktori.koordinator-sektor.list') }}">Koordinator Sektor</a></li>
                              <li>
                                 <span>Pelayanan Kategorial</span>
                                 <ul type="none">
                                    <li><a class="text-white" href="{{ route('admin.direktori.pelayanan-kategorial.pa.list') }}">PA</a></li>
                                    <li><a class="text-white" href="{{ route('admin.direktori.pelayanan-kategorial.pt.list') }}">PT</a></li>
                                    <li><a class="text-white" href="{{ route('admin.direktori.pelayanan-kategorial.gp.list') }}">GP</a></li>
                                    <li><a class="text-white" href="{{ route('admin.direktori.pelayanan-kategorial.pkp.list') }}">PKP</a></li>
                                    <li><a class="text-white" href="{{ route('admin.direktori.pelayanan-kategorial.pkb.list') }}">PKB</a></li>
                                    <li><a class="text-white" href="{{ route('admin.direktori.pelayanan-kategorial.pklu.list') }}">PKLU</a></li>
                                 </ul>
                              </li>
                              <li>
                                 <span>Komisi</span>
                                 <ul type="none">
                                    <li><a class="text-white" href="{{ route('admin.direktori.komisi.teologi.list') }}">Teologi dan Persidangan Gereja</a></li>
                                    <!--<li><a class="text-white" href="{{-- route('admin.direktori.komisi.musik-gerejawi.list') --}}">Musik Gerejawi</a></li>-->
                                    <li><a class="text-white" href="{{ route('admin.direktori.komisi.pelayanan-kesaksian.list') }}">Pelayanan dan Kesaksian</a></li>
                                    <!--<li><a class="text-white" href="{{-- route('admin.direktori.komisi.diakoni.list') --}}">Diakoni</a></li>-->
                                    <!--<li><a class="text-white" href="{{-- route('admin.direktori.komisi.kalvari.list') --}}">Kalvari</a></li>-->
                                    <li><a class="text-white" href="{{ route('admin.direktori.komisi.germasa.list') }}">Germasa</a></li>
                                    <li><a class="text-white" href="{{ route('admin.direktori.komisi.ppsdi.list') }}">PPSDI - PPK</a></li>
                                    <li><a class="text-white" href="{{ route('admin.direktori.komisi.peg.list') }}">PEG</a></li>
                                    <!--<li><a class="text-white" href="{{-- route('admin.direktori.komisi.rumah-tangga.list') --}}">Rumah Tangga</a></li>-->
                                    <li><a class="text-white" href="{{ route('admin.direktori.komisi.inforkom-litbang.list') }}">Inforkom Litbang</a></li>
                                 </ul>
                              </li>
                           </ul>
                        </div>
                     </li>
                     <li>
                        <a href="{{ route('admin.tata-ibadah.list') }}">
                           <div class="icon-w">
                              <div class="os-icon os-icon-book-open"></div>
                           </div>
                           <span>Tata Ibadah</span>
                        </a>
                     </li>
                     <li>
                        <a href="{{ route('admin.warta-jemaat.list') }}">
                           <div class="icon-w">
                              <div class="os-icon os-icon-newspaper"></div>
                           </div>
                           <span>Warta Jemaat</span>
                        </a>
                     </li>
                     <li class="selected has-sub-menu">
                        <a href="{{ route('admin.formulir.list') }}">
                           <div class="icon-w"><div class="os-icon os-icon-documents-03"></div></div>
                           <span>Formulir</span>
                        </a>
                        <div class="sub-menu-w">
                           <ul class="sub-menu">
                              <li><a href="{{ route('admin.formulir.showEditForm', 1) }}">Ubah Form Atestasi</a></li>
                              <li><a href="{{ route('admin.formulir.showEditForm', 2) }}">Ubah Form Pernikahan</a></li>
                              <li><a href="{{ route('admin.formulir.showEditForm', 3) }}">Ubah Form Baptisan</a></li>
                              <li><a href="{{ route('admin.formulir.showEditForm', 4) }}">Ubah Form SIDI</a></li>
                           </ul>
                        </div>
                     </li>
                     <li>
                        <a href="{{ route('admin.halaman.showEditForm', 5) }}">
                           <div class="icon-w">
                              <div class="os-icon os-icon-cv-2"></div>
                           </div>
                           <span>Hubungi Kami</span>
                        </a>
                     </li>
                  </ul>
                  <!--------------------
                     END - Mobile Menu List
                     -------------------->
               </div>
            </div>
            <!--------------------
               END - Mobile Menu
               --------------------><!--------------------
               START - Main Menu
               -------------------->
            <div class="menu-w color-scheme-light color-style-default menu-position-side menu-side-left menu-layout-compact sub-menu-style-over sub-menu-color-bright selected-menu-color-light menu-activated-on-hover">
               <div class="logo-w">
                  <a class="logo" href="{{ route('admin.dashboard') }}">
                     <div><img src="/assetsU/img/logo.png" style="width: 250px"></div>
                  </a>
               </div>
               <!-- <div class="element-search autosuggest-search-activator"><input placeholder="Start typing to search..." type="text"></div> -->
               <h1 class="menu-page-header">Page Header</h1>
               <ul class="main-menu">
                  <li class="sub-header text-center"><a href="{{ route('home') }}" target="_blank" class="btn btn-primary text-light">Live Preview</a><li>
                  <li class="sub-header"><span>Menu</span></li>
                  <li class="selected">
                     <a href="{{ route('admin.dashboard') }}">
                        <div class="icon-w">
                           <div class="os-icon os-icon-bar-chart-stats-up"></div>
                        </div>
                        <span>Dashboard</span>
                     </a>
                  </li>
                  <li>
                     <a href="{{ route('admin.halaman.list') }}">
                        <div class="icon-w">
                           <div class="os-icon os-icon-window-content"></div>
                        </div>
                        <span>Pengaturan Semua Halaman</span>
                     </a>
                  </li>
                  <li class="selected has-sub-menu">
                     <a href="#">
                        <div class="icon-w"><div class="os-icon os-icon-home"></div></div>
                        <span>Beranda</span>
                     </a>
                     <div class="sub-menu-w">
                        <div class="sub-menu-header">Beranda</div>
                        <div class="sub-menu-icon">
                           <i class="os-icon os-icon-layout"></i>
                        </div>
                        <div class="sub-menu-i">
                           <ul class="sub-menu">
                              <li><a href="{{ route('admin.halaman.showEditForm', 1) }}">Artikel</a></li>
                              <li><a href="apps_crypto.html">Pengaturan Link Video</a></li>
                              <li><a href="{{ route('admin.berita.list') }}">Berita</a></li>
                           </ul>
                        </div>
                     </div>
                  </li>
                  <li class="selected has-sub-menu">
                     <a href="#">
                        <div class="icon-w"><div class="os-icon os-icon-user-male-circle2"></div></div>
                        <span>Tentang Kami</span>
                     </a>
                     <div class="sub-menu-w">
                        <div class="sub-menu-header">Tentang Kami</div>
                        <div class="sub-menu-icon">
                           <i class="os-icon os-icon-layout"></i>
                        </div>
                        <div class="sub-menu-i">
                           <ul class="sub-menu">
                              <li><a href="{{ route('admin.halaman.showEditForm', 2) }}">Visi dan Misi</a></li>
                              <li><a href="{{ route('admin.halaman.showEditForm', 3) }}">Pemahaman Iman</a></li>
                              <li><a href="{{ route('admin.halaman.showEditForm', 4) }}">Sejarah Gereja</a></li>
                              <li><a href="{{ route('admin.galeri.list') }}">Galeri</a></li>
                              <li><a href="{{ route('admin.ebuletin.list') }}">E-Buletin</a></li>
                           </ul>
                        </div>
                     </div>
                  </li>
                  <li class="selected has-sub-menu">
                     <a href="#">
                        <div class="icon-w"><div class="os-icon os-icon-book"></div></div>
                        <span>Direktori</span>
                     </a>
                     <div class="sub-menu-w">
                        <div class="sub-menu-header">Direktori</div>
                        <div class="sub-menu-icon">
                           <i class="os-icon os-icon-layout"></i>
                        </div>
                        <div class="sub-menu-i">
                           <ul class="sub-menu" style="max-height:250px; overflow-y:scroll;">
                              <li><a href="{{ route('admin.direktori.phmj.list') }}">PHMJ</a></li>
                              <li><a href="{{ route('admin.direktori.pendeta.list') }}">Pendeta Jemaat</a></li>
                              <li><a href="{{ route('admin.direktori.majelis-jemaat.list') }}">Majelis Jemaat</a></li>
                              <li><a href="{{ route('admin.direktori.koordinator-sektor.list') }}">Koordinator Sektor</a></li>
                              <li>
                                 <span>Pelayanan Kategorial</span>
                                 <ul type="none">
                                    <li><a class="text-white" href="{{ route('admin.direktori.pelayanan-kategorial.pa.list') }}">PA</a></li>
                                    <li><a class="text-white" href="{{ route('admin.direktori.pelayanan-kategorial.pt.list') }}">PT</a></li>
                                    <li><a class="text-white" href="{{ route('admin.direktori.pelayanan-kategorial.gp.list') }}">GP</a></li>
                                    <li><a class="text-white" href="{{ route('admin.direktori.pelayanan-kategorial.pkp.list') }}">PKP</a></li>
                                    <li><a class="text-white" href="{{ route('admin.direktori.pelayanan-kategorial.pkb.list') }}">PKB</a></li>
                                    <li><a class="text-white" href="{{ route('admin.direktori.pelayanan-kategorial.pklu.list') }}">PKLU</a></li>
                                 </ul>
                              </li>
                              <li>
                                 <span>Komisi</span>
                                 <ul type="none">
                                    <li><a class="text-white" href="{{ route('admin.direktori.komisi.teologi.list') }}">Teologi dan Persidangan Gereja</a></li>
                                    <!--<li><a class="text-white" href="{{-- route('admin.direktori.komisi.musik-gerejawi.list') --}}">Musik Gerejawi</a></li>-->
                                    <li><a class="text-white" href="{{ route('admin.direktori.komisi.pelayanan-kesaksian.list') }}">Pelayanan dan Kesaksian</a></li>
                                    <!--<li><a class="text-white" href="{{-- route('admin.direktori.komisi.diakoni.list') --}}">Diakoni</a></li>-->
                                    <li><a class="text-white" href="{{ route('admin.direktori.komisi.kalvari.list') }}">Kalvari</a></li>
                                    <li><a class="text-white" href="{{ route('admin.direktori.komisi.germasa.list') }}">Germasa</a></li>
                                    <li><a class="text-white" href="{{ route('admin.direktori.komisi.ppsdi.list') }}">PPSDI - PPK</a></li>
                                    <li><a class="text-white" href="{{ route('admin.direktori.komisi.peg.list') }}">PEG</a></li>
                                    <li><a class="text-white" href="{{ route('admin.direktori.komisi.rumah-tangga.list') }}">Rumah Tangga</a></li>
                                    <li><a class="text-white" href="{{ route('admin.direktori.komisi.inforkom-litbang.list') }}">Inforkom Litbang</a></li>
                                 </ul>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </li>
                  <li>
                     <a href="{{ route('admin.tata-ibadah.list') }}">
                        <div class="icon-w">
                           <div class="os-icon os-icon-book-open"></div>
                        </div>
                        <span>Tata Ibadah</span>
                     </a>
                  </li>
                  <li>
                     <a href="{{ route('admin.warta-jemaat.list') }}">
                        <div class="icon-w">
                           <div class="os-icon os-icon-newspaper"></div>
                        </div>
                        <span>Warta Jemaat</span>
                     </a>
                  </li>
                  <li class="selected has-sub-menu">
                     <a href="{{ route('admin.formulir.list') }}">
                        <div class="icon-w"><div class="os-icon os-icon-documents-03"></div></div>
                        <span>Formulir</span>
                     </a>
                     <div class="sub-menu-w">
                        <div class="sub-menu-header">Formulir</div>
                        <div class="sub-menu-icon">
                           <i class="os-icon os-icon-documents-03"></i>
                        </div>
                        <div class="sub-menu-i">
                           <ul class="sub-menu">
                              <li><a href="{{ route('admin.formulir.showEditForm', 1) }}">Ubah Form Atestasi</a></li>
                              <li><a href="{{ route('admin.formulir.showEditForm', 2) }}">Ubah Form Pernikahan</a></li>
                              <li><a href="{{ route('admin.formulir.showEditForm', 3) }}">Ubah Form Baptisan</a></li>
                              <li><a href="{{ route('admin.formulir.showEditForm', 4) }}">Ubah Form SIDI</a></li>
                           </ul>
                        </div>
                     </div>
                  </li>
                  <li>
                     <a href="{{ route('admin.halaman.showEditForm', 5) }}">
                        <div class="icon-w">
                           <div class="os-icon os-icon-cv-2"></div>
                        </div>
                        <span>Hubungi Kami</span>
                     </a>
                  </li>
               </ul>
            </div>
            <!--------------------
               END - Main Menu
               -------------------->
            <div class="content-w">
               <!--------------------
                  START - Top Bar
                  -------------------->
               <div class="top-bar color-scheme-light">
                  <!--------------------
                     START - Top Menu Controls
                     -------------------->
                  <div class="top-menu-controls">
                     <!-- <div class="element-search autosuggest-search-activator"><input placeholder="Start typing to search..." type="text"></div> -->
                     <!--------------------
                        START - User avatar and menu in secondary top menu
                        -------------------->
                     <div class="logged-user-w">
                        <div class="logged-user-i">
                           <div><h2><i class="os-icon os-icon-user-male-circle2 avatar-w"></i> Admin</h2></div>
                           <div class="logged-user-menu color-style-bright">
                              <div class="logged-user-avatar-info">
                                 <div class="avatar-w">Admin</div>
                              </div>
                              <div class="bg-icon"><i class="os-icon os-icon-wallet-loaded"></i></div>
                              <ul>
                                 <li><a href="{{ route('logout') }}"><i class="os-icon os-icon-signs-11"></i><span>Logout</span></a></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <!--------------------
                        END - User avatar and menu in secondary top menu
                        -------------------->
                  </div>
                  <!--------------------
                     END - Top Menu Controls
                     -------------------->
               </div>
               <!--------------------
                  END - Top Bar
                  -------------------->
               <div class="content-i">
                  <div class="content-box">
                     <div class="row pt-4">
                        <div class="col-sm-12">
                           @yield('content')
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="display-type"></div>
      </div>
      <script src="/vendor/lightadmin/bower_components/jquery/dist/jquery.min.js"></script>
      <script src="/vendor/lightadmin/bower_components/popper.js/dist/umd/popper.min.js"></script>
      <script src="/vendor/lightadmin/bower_components/moment/moment.js"></script>
      <script src="/vendor/lightadmin/bower_components/chart.js/dist/Chart.min.js"></script>
      <script src="/vendor/lightadmin/bower_components/select2/dist/js/select2.full.min.js"></script>
      <script src="/vendor/lightadmin/bower_components/jquery-bar-rating/dist/jquery.barrating.min.js"></script>
      <script src="/vendor/lightadmin/bower_components/bootstrap-validator/dist/validator.min.js"></script>
      <script src="/vendor/lightadmin/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
      <script src="/vendor/lightadmin/bower_components/ion.rangeSlider/js/ion.rangeSlider.min.js"></script>
      <script src="/vendor/lightadmin/bower_components/dropzone/dist/dropzone.js"></script>
      <script src="/vendor/lightadmin/bower_components/editable-table/mindmup-editabletable.js"></script>
      <script src="/vendor/lightadmin/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
      <script src="/vendor/lightadmin/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
      <script src="/vendor/lightadmin/bower_components/fullcalendar/dist/fullcalendar.min.js"></script>
      <script src="/vendor/lightadmin/bower_components/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js"></script>
      <script src="/vendor/lightadmin/bower_components/tether/dist/js/tether.min.js"></script>
      <script src="/vendor/lightadmin/bower_components/slick-carousel/slick/slick.min.js"></script>
      <script src="/vendor/lightadmin/bower_components/bootstrap/js/dist/util.js"></script>
      <script src="/vendor/lightadmin/bower_components/bootstrap/js/dist/alert.js"></script>
      <script src="/vendor/lightadmin/bower_components/bootstrap/js/dist/button.js"></script>
      <script src="/vendor/lightadmin/bower_components/bootstrap/js/dist/carousel.js"></script>
      <script src="/vendor/lightadmin/bower_components/bootstrap/js/dist/collapse.js"></script>
      <script src="/vendor/lightadmin/bower_components/bootstrap/js/dist/dropdown.js"></script>
      <script src="/vendor/lightadmin/bower_components/bootstrap/js/dist/modal.js"></script>
      <script src="/vendor/lightadmin/bower_components/bootstrap/js/dist/tab.js"></script>
      <script src="/vendor/lightadmin/bower_components/bootstrap/js/dist/tooltip.js"></script>
      <script src="/vendor/lightadmin/bower_components/bootstrap/js/dist/popover.js"></script>
      <script src="/vendor/lightadmin/js/demo_customizerce5a.js?version=4.4.1"></script>
      <script src="/vendor/lightadmin/js/maince5a.js?version=4.4.1"></script>
      <script src="http://cdn.ckeditor.com/4.6.2/full-all/ckeditor.js"></script>
      <script>
         CKEDITOR.replace( 'post_content', {
         height: 300,
         filebrowserUploadUrl: "upload.php"
         });
      </script>
      <script>
         CKEDITOR.replace( 'tata_cara', {
         height: 300,
         filebrowserUploadUrl: "upload.php"
         });
      </script>
      <script>
         CKEDITOR.replace( 'news_deskripsi', {
         height: 300,
         filebrowserUploadUrl: "upload.php"
         });
      </script>
      <script>
         function readURLIMG(input) {
            if (input.files && input.files[0]) {
               var reader = new FileReader();
               reader.onload = function(e) {
                  $('#img-pre').attr('src', e.target.result);
               }
               
               reader.readAsDataURL(input.files[0]); // convert to base64 string
            }
         }

         $("#imgInp").change(function() {
         readURLIMG(this);
         });
      </script>
      <script>
         function readURL(input) {
            if (input.files && input.files[0]) {
               var reader = new FileReader();
               reader.onload = function(e) {
                  document.getElementById("pdf-embed").innerHTML = "";
               }
               reader.readAsDataURL(input.files[0]); // convert to base64 string
            }
         }

         $("#fileInp").change(function() {
            readURL(this);
         });
      </script>
   </body>
   <!-- Mirrored from light.pinsupreme.com/apps_support_dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 Apr 2019 18:12:47 GMT -->
</html>