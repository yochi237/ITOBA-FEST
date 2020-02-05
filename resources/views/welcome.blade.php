<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Basic Page Needs
    ================================================== -->
    <title>ITobaFest </title>
    
    <!-- Favicons
    ================================================== -->
    <link rel="shortcut icon" href="{{ asset('file/favicon.ico') }}">
    <!-- Bootstrap -->
    <link href="{{ asset('css/bootstrap.css') }}" type="text/css"  rel="stylesheet">
    <link  href="{{ asset('fonts/font-awesome/css/font-awesome.css') }}" rel="stylesheet" type="text/css">

    <link href="{{ asset('css/sb-admin-2.css') }}" rel="stylesheet">
    <!-- Nivo Lightbox
    ================================================== -->
    <link href="{{ asset('css/nivo-lightbox.css') }}" rel="stylesheet"  >
    <link href="{{ asset('css/nivo_lightbox_themes/default/default.css') }}" rel="stylesheet" >

    <!-- Slider
    ================================================== -->
    <link href="{{ asset('css/owl.carousel.css') }}" rel="stylesheet" media="screen">
    <link href="{{ asset('css/owl.theme.css') }}" rel="stylesheet" media="screen">

    <!-- Stylesheet
    ================================================== -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css"  >
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet" type="text/css" >

    <!-- Google Fonts
    ================================================== -->
    <!---
    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
    -->
    <script type="text/javascript" src="{{ ('js/modernizr.custom.js') }}"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

    <!-- Main Navigation 
    ================================================== -->
    <nav id="tf-menu" class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#"><img src="img/logo-1.png" alt="..."></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav navbar-right">
                <li><a href="#tf-home" class="scroll">Beranda</a></li>
                <li><a href="#tf-features" class="scroll">Kategori Lomba</a></li>
                <li><a href="#tf-about" class="scroll">Tentang</a></li>             
                <li><a href="#tf-team" class="scroll">Jadwal</a></li>     
                <li><a href="#tf-contact" class="scroll">Kontak</a></li>
                 @if(Auth::guest() )
                    <li><a href="{{url('/register')}}" class="scroll">Register</a></li>
                @else
                    <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                </ul>
                            </li>
                @endif

                @if(Auth::guest() )
                    <li><a href="{{url('/login')}}" class="scroll">Login</a></li>
                @else
                    <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>   
                                        <a href="{{ url('/profil') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('profil-form').submit();">
                                            Profile
                                        </a>
                                        <form id="profil-form" action="{{ url('/profil') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>

                                        <a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>                                        
                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                @endif
                
              </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>

    <!-- Home Section
    ================================================== -->
    <div id="tf-home">
        <div class="overlay"> <!-- Overlay Color -->
            <div class="container"> <!-- container -->
                <div class="content-heading text-center"> <!-- Input Your Home Content Here -->
                    <h1>ITobaFest Competition</h1>
                    <h2><span ><b>Excellence Starts Here</b></span></h2>
                       <div class="row">
                            <div class="col-lg-4 col-md-6">
                                <div class="panel panel-red">
                                    <div class="panel-heading">
                                        <div class="row">
                                            <div class="col-xs-3">
                                                <i class="fa fa-list-alt fa-5x"></i>
                                            </div>
                                            <div class="col-xs-9 text-right">
                                                <div class="huge"><br/></div>
                                                <div>Rundown Acara Final</div>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="{{ url('download/rundownAcara') }}">
                                        <div class="panel-footer">
                                            <span class="pull-left">View Details</span>
                                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                            <div class="clearfix"></div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="panel panel-yellow">
                                    <div class="panel-heading">
                                        <div class="row">
                                            <div class="col-xs-3">
                                                <i class="fa fa-info fa-5x"></i>
                                            </div>
                                            <div class="col-xs-9 text-right">
                                                <div class="huge"><br/></div>
                                                <div>Info Penginapan</div>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="{{ url('download/infoPenginapan') }}">
                                        <div class="panel-footer">
                                            <span class="pull-left">View Details</span>
                                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                            <div class="clearfix"></div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="panel panel-green">
                                    <div class="panel-heading">
                                        <div class="row">
                                            <div class="col-xs-3">
                                                <i class="fa fa-info fa-5x"></i>
                                            </div>
                                            <div class="col-xs-9 text-right">
                                                <div class="huge"><br/></div>
                                                <div>Info Transportasi</div>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="{{ url('download/infoTransportasi')}}">
                                        <div class="panel-footer">
                                            <span class="pull-left">View Details</span>
                                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                            <div class="clearfix"></div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        <div class="row">
                                            <div class="col-xs-3">
                                                <i class="fa fa-briefcase fa-5x"></i>
                                            </div>
                                            <div class="col-xs-9 text-right">
                                                <div class="huge">10</div>
                                                <div>Business Plan</div>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="#">
                                        <div class="panel-footer">
                                            <span class="pull-left">View Details</span>
                                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                            <div class="clearfix"></div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        <div class="row">
                                            <div class="col-xs-3">
                                                <i class="fa fa-pencil-square-o fa-5x"></i>
                                            </div>
                                            <div class="col-xs-9 text-right">
                                                <div class="huge">10</div>
                                                <div>UI/UX</div>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="{{ url('download/finalisDesign') }}">
                                        <div class="panel-footer">
                                            <span class="pull-left">View Details</span>
                                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                            <div class="clearfix"></div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        <div class="row">
                                            <div class="col-xs-3">
                                                <i class="fa fa-code fa-5x"></i>
                                            </div>
                                            <div class="col-xs-9 text-right">
                                                <div class="huge">30</div>
                                                <div>Competitive Programming</div>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="{{ url('download/finalisProgramming') }}">
                                        <div class="panel-footer">
                                            <span class="pull-left">View Details</span>
                                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                            <div class="clearfix"></div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        <div class="row">
                                            <div class="col-xs-3">
                                                <i class="fa fa-lock fa-5x"></i>
                                            </div>
                                            <div class="col-xs-9 text-right">
                                                <div class="huge">10</div>
                                                <div>Capture the Flag</div>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="{{ url('download/finalisSecurity') }}">
                                        <div class="panel-footer">
                                            <span class="pull-left">View Details</span>
                                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                            <div class="clearfix"></div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        <div class="row">
                                            <div class="col-xs-3">
                                                <i class="fa fa-support fa-5x"></i>
                                            </div>
                                            <div class="col-xs-9 text-right">
                                                <div class="huge">10</div>
                                                <div>Robotic</div>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="#">
                                        <div class="panel-footer">
                                            <span class="pull-left">View Details</span>
                                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                            <div class="clearfix"></div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        <div class="row">
                                            <div class="col-xs-3">
                                                <i class="fa fa-support fa-5x"></i>
                                            </div>
                                            <div class="col-xs-9 text-right">
                                                <div class="huge">10</div>
                                                <div>Essay</div>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="#">
                                        <div class="panel-footer">
                                            <span class="pull-left">View Details</span>
                                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                            <div class="clearfix"></div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    
                </div><!-- End Input Your Home Content Here -->
            </div> <!-- end container -->
        </div><!-- End Overlay Color -->
    </div>

    <!-- Intro Section
    ================================================== -->
    <div id="tf-intro">
        <div class="container"> <!-- container -->
            <div class="row"> <!-- row -->

                <div class="col-md-8 col-md-offset-2"> 
                    <img src="img/coba-n.png" class="intro-logo img-responsive" alt="free-template"> <!-- Your company logo in white -->
                    <p>IToba Festival atau IToba Fest merupakan suatu kompetisi bertaraf Nasional yang diselenggarakan oleh Institut Teknologi Del yang terbuka secara umum bagi mahasiswa/i  Perguruan Tinggi yang terdapat di Indonesia. Seperti kompetisi pada umumnya, IToba Fest membuka 5 kategori yang akan dipertandingan, yaitu: Programming, Design, Robotic, Security, dan Business Plan. Setiap kategori tersebut memiliki keunikan tersendiri tergantung deskripsi kategori yang akan dipertandingkan</p>
                </div>
                
            </div><!-- end row -->
        </div><!-- end container -->
    </div>

    <!-- Service Section
    ================================================== -->
     <div id="tf-features">

        <div class="container">
             <div class="section-header">
                <h2>Kategori Lomba <span class="highlight"><strong>ITobaFest</strong></span></h2>
                <h5><em>Berikut 5 Kategori Lomba yang akan diadakan</em></h5>
               
            </div>        </div>

        <div id="feature" class="gray-bg"> <!-- fullwidth gray background -->
            <div class="container"> <!-- container -->
                <div class="row" role="tabpanel"> <!-- row -->
                    <div class="col-md-3 col-md-offset-1"> <!-- tab menu col 4 -->

                        <ul class="features nav nav-pills nav-stacked" role="tablist">
                            <li role="presentation" class="active">  <!-- feature tab menu #1 -->
                                <a href="#f1" aria-controls="f1" role="tab" data-toggle="tab">
                                    <span class="fa fa-desktop"></span>
                                    Competitive Programming<br>
                                </a>
                            </li>
                            <li role="presentation"> <!-- feature tab menu #2 -->
                                <a href="#f2" aria-controls="f2" role="tab" data-toggle="tab">
                                    <span class="fa fa-lock"></span>
                                    Capture the Flag<br>
                                </a>
                            </li>
                            <li role="presentation"> <!-- feature tab menu #3 -->
                                <a href="#f3" aria-controls="f3" role="tab" data-toggle="tab">
                                     <span class="fa fa-automobile "></span>
                                    Robotic<br>
                                </a>
                            </li>
                            <li role="presentation"> <!-- feature tab menu #4 -->
                                <a href="#f4" aria-controls="f4" role="tab" data-toggle="tab">
                                    <span class="fa fa-pencil "></span>
                                    UI/UX<br>
                                </a>
                            </li>
                            <li role="presentation"> <!-- feature tab menu #5 -->
                                <a href="#f5" aria-controls="f5" role="tab" data-toggle="tab">
                                    <span class="fa fa-institution"></span>
                                    Bussines Plan<br>
                                </a>
                            </li>
                            <li role="presentation"> <!-- feature tab menu #6 -->
                                <a href="#f6" aria-controls="f6" role="tab" data-toggle="tab">
                                    <span class="fa fa-institution"></span>
                                    Essay<br>
                                </a>
                            </li>
                        </ul>

                    </div><!-- end tab menu col 4 -->

                    <div class="col-md-8"> <!-- right content col 6 -->
                        <!-- Tab panes -->
                        <div class="tab-content features-content"> <!-- tab content wrapper -->
                            <div role="tabpanel" class="tab-pane fade in active" id="f1"> <!-- feature #1 content open -->
                                <h4>Programming</h4>
                                <p class="text-justify">Competitive Programming Contest IToba Festival merupakan kompetisi pemrograman berskala nasional yang diselenggarakan oleh Institut Teknologi Del. Competitive Programming Contest ini diperuntukkan untuk mahasiswa (Diploma, atau S1) perguruan tinggi diseluruh wilayah Indonesia. Competitive Programming Contest bertujuan untuk menguji kemampuan berpikir logis dari setiap mahasiswa secara individu dalam menyelesaikan persoalan-persoalan komputasional dengan menggunakan implementasi algoritma-algoritma kedalam bahasa pemrograman C, C++, atau Java sehingga dapat menyelesaikan persoalan sesuai dengan batasan tertentu (seperti waktu, keabsahan code, limit memory dan lainnya).</p>
                               <a href="{{ url('downloadRulebook/rbProgramming') }}" class="btn btn-primary my-btn4" align="pull-right">
                     
                               <span class="fa fa-download"/> &nbsp Download Rulebook </a>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="f2"> <!-- feature #2 content -->
                                <h4>Security</h4>
                                <p class="text-justify">Perlombaan pada bidang Information security dibagi menjadi 2 tahap, yaitu: Tahap Penyisihan (Tahap I) dan Tahap SemiFinal(Tahap II). Perlombaan dibidang ini akan dilakukan per-tim, dimana satu tim dapat beranggotakan minimal 1 orang dan maksimal 3 orang. </p>
                                

                               <a href="{{ url('downloadRulebook/rbSecurity') }}" class="btn btn-primary my-btn4" align="pull-right">
                             <span class="fa fa-download"/> &nbsp Download Rulebook</a>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="f3"> <!-- feature #3 content -->
                                <h4>Robotic</h4>
                                <p class="text-justify">Robotic Competition IToba Fest merupakan kompetisi robotik yang diadakan oleh Institut Teknologi Del dalam bidang Robotika dan mengusung Line Follower untuk diperlombakan. Adapun tujuannya adalah untuk melatih motorik Mahasiswa, Melatih Kreatifitas Mahasiswa, Merangsang Logika Berpikir, Meningkatkan Kemampuan dalam Bidang Teknologi automasi, Melatih Kemampuan Berkompetisi dan Menumbuhkan Jiwa Sportifitas. Line Follower Robotic Competition merupakan lomba adu cepat robot Line Follower (robot pengikut garis) dalam menyelesaikan lintasan yang diikuti oleh Mahasiswa dari Seluruh Perguruan Tinggi di Sumatera Utara. Garis akan dibentuk menjadi sebuah lintasan untuk dilalui sampai batas akhir yang ditentukan dengan beberapa checkpoint. Perlombaan yang diadakan adalah sistem battle dimana peserta akan dihadapkan dengan peserta lain (Duel Head to Head) untuk mengetahui robot mana yang tercepat di lintasan. Perlombaan ini akan dilaksanakan dalam waktu satu hari, dimana terdapat babak penyisihan dengan sistem gugur dan babak final. </p>
                                
                                  <a href="{{ url('downloadRulebook/rbRobotic') }}" class="btn btn-primary my-btn4" align="pull-right">
                             <span class="fa fa-download"/> &nbsp Download Rulebook</a>
                            
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="f4"> <!-- feature #4 content -->
                                <h4>Design</h4>
                                <p class="text-justify">Design Competition merupakan kompetisi yang mengandalkan kemampuan seni dan penggunaan tools grafis. Kompetisi yang akan diadakan pada IToba Fest adalah kompetisi membuat infografis dengan tema yang telah ditentukan. Kegiatan tahap pertama ini akan dilakukan secara online. Pada tahap kedua akan dilaksanakan di Institut Teknologi Del oleh 10 finalis. Pada tahap kedua ini, akan dilakukan lomba membuat infografis dengan tema yang berbeda pada tahap pertama. Kemudian hasil infografis pada tahap pertama akan dipublish ke media sosial (Instagram ITobaFest). Jumlah penyuka (likers) terbanyak akan menjadi juara terfavorit.</p>  
								<a href="{{ url('downloadRulebook/rbDesign') }}" class="btn btn-primary my-btn4" align="pull-right">
                             <span class="fa fa-download"/> &nbsp Download Rulebook</a>
                             <a href="{{ url('downloadRulebook/loDesign') }}" class="btn btn-primary my-btn4" align="pull-right">
                             <span class="fa fa-download"/> &nbsp Lembar Orisinalitas</a>
                            
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="f5"> <!-- feature #5 content -->
                                <h4>Bussines Plan</h4>
                                <p class="text-justify">
                                    Business Plan Competition merupakan kompetisi pembuatan rancangan bisnis dalam bentuk proposal bisnis. Rancangan bisnis ini harus berkaitan dengan tema yang telah ditentukan oleh panitia. Kompetisi ini dilakukan secara berkelompok yang beranggotakan 2 atau 3 orang setiap tim.  Dalam tahapan seleksi, para peserta akan mengirimkan proposal bisnis ke panitia. Pada tahap seleksi, yang akan dinilai adalah kreatifitas, original ide, dan bagaimana peserta dapat mengalokasikan modal yang telah ditentukan, dan bagaimana cara untuk memperoleh pemasukan.  Tahap final, peserta akan mempresentasikan rancangan bisnis di hadapan tim juri di lokasi yang telah ditentukan oleh panitia. Pada presentasi tahap final, akan dinilai cara penyampaian ide, susunan pemaparan ide, dan kerja sama tim. Tahap final hanya untuk 10 tim terbaik dan setiap anggota tim harus hadir dalam tahap final.</p>
                                 <a href="{{ url('downloadRulebook/rbBusinessPlan') }}" class="btn btn-primary my-btn4" align="pull-right">
                             <span class="fa fa-download"/> &nbsp Download Rulebook</a>
                            
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="f6"> <!-- feature #6 content -->
                                <h4>Essay</h4>
                                <p class="text-justify">Perlombaan pada bidang Information security dibagi menjadi 2 tahap, yaitu: Tahap Penyisihan (Tahap I) dan Tahap SemiFinal(Tahap II). Perlombaan dibidang ini akan dilakukan per-tim, dimana satu tim dapat beranggotakan minimal 1 orang dan maksimal 3 orang. </p>
                                

                               <a href="{{ url('downloadRulebook/rbSecurity') }}" class="btn btn-primary my-btn4" align="pull-right">
                             <span class="fa fa-download"/> &nbsp Download Rulebook</a>
                            </div>
                        </div> <!-- end tab content wrapper -->
                    </div><!-- end right content col 6 -->

                </div> <!-- end row -->
            </div> <!-- end container -->
        </div><!-- end fullwidth gray background -->
    </div>

    <!-- About Us Section
    ================================================== -->
    <div id="tf-about">
        <div class="container"> <!-- container -->
            <div class="section-header">
                <h2>What To Know About <span class="highlight"><strong>ITobaFest</strong></span></h2>
                </div>
        </div><!-- end container -->

        <div class="gray-bg"> <!-- fullwidth gray background -->

            <div class="container"><!-- container -->
                <div class="row"> <!-- row -->

                    <div class="col-md-6"> <!-- left content col 6 -->
                        <div class="about-left-content text-center">
                            <div class="img-wrap"> <!-- profile image wrap -->
                                <div class="profile-img"> <!-- company profile details -->
                                    <img src="img/bg/Toba5.jpg" class="img-responsive" alt="Image"> <!-- change link to your image for your company profile -->
                                    <ul class="list-inline social"> 
                                        <li><a href="https://www.facebook.com/ITobaFest2017/?fref=ts" class="fa fa-facebook"></a></li> <!-- facebook link here -->
                                        <li><a href="https://www.instagram.com/itobafest2017" class="fa fa-instagram"></a></li> <!-- twitter link here -->
                                    </ul>
                                </div>
                            </div><!-- end profile image wrap -->
                            </div>
                    </div><!-- end left content col 6 -->

                    <div class="col-md-6"><!-- right content col 6 -->
                        <div class="about-right-content"> <!-- right content wrapper -->

                            <h4><strong>ITobaFest</strong></h4>
                            <p class="text-justify">IToba Festival merupakan kompetisi perdana yang diadakan oleh Institut Teknologi Del. 
                                Institut Teknologi Del sendiri merupakan Perguruan Tinggi swasta yang berlokasi di Jl. Sisingamangaraja Sitoluama – Laguboti - Toba Samosir, 
                                Sumatera Utara – Indonesia. 
                            IT Toba Festival atau ITobaFest merupakan suatu kompetisi bertaraf Nasional yang dilakukan oleh Institut Teknologi Del yang 
                            terbuka secara umum bagi mahasiswa/i  Perguruan Tinggi yang terdapat di seluruh Indonesia. Seperti kompetisi pada umumnya, 
                            IToba Fest membuka 5 kategori yang akan dipertandingkan, yaitu: Programming, Design, Robotic, Security, dan Business Plan. 
                            Setiap kategori tersebut memiliki keunikan tersendiri tergantung deskripsi kategori yang akan dipertandingkan.
                            IToba Fest adalah Kompetisi Teknik Informatika dan Pengetahuan Umum yang dilakukan didaerah Kabupaten Toba Samosir yang bertujuan 
                            untuk meningkatkan kemampuan mahasiswa/i Perguruan Tinggi khususnya yang berada di kawasan Sumatera Utara. .</p>
                            
                        </div><!-- end right content wrapper -->
                    </div><!-- end right content col 6 -->

                </div> <!-- end row -->
            </div><!-- end container -->

        </div> <!-- end fullwidth gray background -->
    </div>


    <!-- Team Section
    ================================================== -->
    <div id="tf-team">
        <div class="container"> <!-- container -->
            <div class="section-header">
                <h2>Jadwal Pendaftaran  <span class="highlight"><strong>ITobaFest</strong></span></h2>
                <h5><em>Informasi Seputar Jadwal Pendaftaran ITobaFest Perkategori</em></h5>
               
            </div>

        </div>
         <div class="gray-bg"> <!-- fullwidth gray background -->
            <div class="container"><!-- container -->
                
                <div id="process" class="row"> <!-- row -->

                    <div class="col-md-10 col-md-offset-1">

                        <table>
                            <tr>
                                <td>
                                    <div class="media process">
                                       <div class="media-right media-middle">
                                            <i class="fa fa-desktop"></i>
                                        </div>
                                        <div class="media-body">
                                            <h4 class="media-heading">Programming</h4>
                                             <p>Pendaftaran : 20 April 2017</p>
                                             <p>Penutupan   : 11  mei 2017</p>                                            
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="media process">
                                        <div class="media-right media-middle">
                                            <i class="fa fa-pencil"></i>
                                        </div>
                                        <div class="media-body">
                                            <h4 class="media-heading">Design</h4>
                                            <p>Pendaftaran : 20 April 2017</p>
                                            <p>Penutupan   : 13  mei 2017</p>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="media process">
                                        <div class="media-right media-middle">
                                            <i class="fa fa-lock"></i>
                                        </div>
                                        <div class="media-body">
                                            <h4 class="media-heading">Security</h4>
                                                <p>Pendaftaran : 20 April 2017</p>
                                                <p>Penutupan   : 11  mei 2017</p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="media process">
                                        <div class="media-right media-middle">
                                            <i class="fa fa-automobile" ></i>
                                        </div>
                                        <div class="media-body">
                                            <h4 class="media-heading">Robotic</h4>
                                            <p>Pendaftaran : 20 April 2017</p>
                                            <p>Penutupan   : 14  mei 2017</p>
                                        
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="media process">    
                                        <div class="media-right media-middle">
                                            <i class="fa fa-institution"></i>
                                        </div>
                                        <div class="media-body">
                                            <h4 class="media-heading">Business Plan</h4>
                                             <p>Pendaftaran : 20 April 2017</p>
                                            <p>Penutupan    : 11  mei 2017</p>
                                        
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </table>

                    </div>

                </div> <!-- end row -->
            </div><!-- end container -->
        </div>  <!-- end fullwidth gray background --> <!-- container -->
    </div>

    <!-- Sposor Section
    ================================================== -->
   <div id="tf-team">
        <div class="container"> <!-- container -->
            <div class="section-header col-md-10">
                <h2><span class="highlight"><strong>Sponsor By : </strong></span></h2>               
            </div>
           
        </div>
         <div class="gray-bg"> <!-- fullwidth gray background -->
            <div class="container"><!-- container -->
                
                <div id="process" class="row"> <!-- row -->
                    <div class="col-md-4 ">
                        <img src="img/inalum_logo.jpg"   class="img-responsive"></img>
                    </div>
                    <div class="col-md-4 ">
                        <img src="img/bni_logo.png"  class="img-responsive"></img>
                    </div>
                    <div class="col-md-4 ">
                        <img src="img/mandiri_logo.png"  class="img-responsive"></img>
                    </div>    
                    <div class="col-md-4 ">
                        <img src="img/tpl_logo.png" class="img-responsive"></img>
                    </div> 
                    <div class="col-md-4 ">
                        <img src="img/tanoto.png"  class="img-responsive"></img>
                    </div>                
                    <div class="col-md-4 ">
                        <img src="img/bri_logo.jpg"   class="img-responsive"></img>
                    </div>
                    <div class="col-md-4 ">
                        <img src="img/telkomsel.png"  class="img-responsive"></img>
                    </div>
                    <div class="col-md-4 ">
                        <img src="img/iadel.jpg"  class="img-responsive"></img>
                    </div>
                    <div class="col-md-4 ">
                        <img src="img/ibt_logo.png"  class="img-responsive"></img>
                    </div>
                </div> <!-- end row -->
            </div><!-- end container -->
        </div>  <!-- end fullwidth gray background --> <!-- container -->
    </div>

    <!-- Media Partner Section
    ================================================== -->
    <div id="tf-team">
        <div class="container"> <!-- container -->
            <div class="section-header col-md-10">
                <h2><span class="highlight"><strong>Media Partner : </strong></span></h2>               
            </div>
           
        </div>
         <div class="gray-bg"> <!-- fullwidth gray background -->
            <div class="container"><!-- container -->
                
                <div id="process" class="row"> <!-- row -->

                    <div class="col-md-10 col-md-offset-1">

                        <table>
                            <tr>
                                <td>
                                    <div class="col-md-2">
                                        <img src="img/codepolitan.png" width="300" height="150"></img>
                                    </div>
                                </td>                               
                            </tr>                            
                        </table>

                    </div>

                </div> <!-- end row -->
            </div><!-- end container -->
        </div>  <!-- end fullwidth gray background --> <!-- container -->
    </div>

    
    <!-- Contact Section
    ================================================== -->
    <div id="tf-contact">

        <div class="container"> <!-- container -->
            <div class="section-header">
                <h2><span class="highlight"><strong>Hubungi Kami</strong></span></h2>
                     </div>
        </div>
        <div class="container"><!-- container -->
            <div class="row"> <!-- outer row -->
                <div class="col-md-10 col-md-offset-1"> <!-- col 10 with offset 1 to centered -->
                    <div class="row"> <!-- nested row -->

                        <!-- contact detail using col 5 -->
                        <div class="col-md-2">  
                            <div class="contact-detail">
                                <i class="fa fa-map-marker" align="left"></i>
                                <h6 align="center">Jl.Sisingamangaraja</h6>
                                <h6>Sitoluama - Laguboti</h6>
                                <h6>Toba Samosir 
                                Sumatera Utara</h6> 
                                <h6> Indonesia. </h6> <!-- address -->
                            </div>
                        </div>
                        <!-- contact detail using col 4 -->
                        <div class="col-md-2">
                            <div class="contact-detail">
                                <i class="fa fa-envelope-o"></i>
                                <h6>itobafest@gmail.com</h6><!-- email add -->
                            </div>
                        </div>

                        <!-- contact detail using col 4 -->
                        <div class="col-md-2">
                            <div class="contact-detail">
                                <i class="fa fa-phone"></i>
                                <h6>081343204215</h6> 
                                <h6>Monica Tambun</h6>
                                <!-- phone no. -->
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="contact-detail">
                                <a href="https://www.facebook.com/ITobaFest2017/?fref=ts"><i class="fa fa-facebook"></i>
                                <h6>Facebook</h6></div>
                        
                    </div>
                     <div class="col-md-2">
                            <div class="contact-detail">
                                    <a href="https://www.instagram.com/itobafest2017"><i class="fa fa-instagram"></i>
                               <h6>Instagram</h6>
                                </div>
                        <!-- end nested row -->
                </div> <!-- end col 10 with offset 1 to centered -->
            </div><!-- end outer row -->
</a>
</div>
            <div class="row text-center"> <!-- contact form outer row with centered text-->
                <div class="col-md-10 col-md-offset-1"> <!-- col 10 with offset 1 to centered -->
                    <form id="contact-form" class="form" name="sentMessage" novalidate> <!-- form wrapper -->

                        <div class="row"> <!-- nested inner row -->

                            <!-- Input your name -->

                            <!-- Input your email -->

                            <!-- Input your Phone no. -->
                            
                        </div><!-- end nested inner row -->

                        <!-- Message Text area -->
                       
                    </form><!-- end form wrapper -->
                </div><!-- end col 10 with offset 1 to centered -->
            </div> <!-- end contact form outer row with centered text-->

        </div><!-- end container -->

    </div>

    <!-- Footer 
    ================================================== -->
    <div id="tf-footer">
        <div class="container"><!-- container -->
            <p class="pull-left">© 2017 - ITobaFest - Institut Teknologi Del.</p> <!-- copyright text here-->
        </div><!-- end container -->
    </div>
    


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.1.11.1.js') }}"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script type="text/javascript" src="{{ asset('js/bootstrap.js') }}"></script>

    <script type="text/javascript" src="{{ asset('js/owl.carousel.js') }}"></script><!-- Owl Carousel Plugin -->

    <script type="text/javascript" src="{{ asset('js/SmoothScroll.js') }}"></script>
 
	<script type="text/javascript" src="{{ asset('js/map.js') }}"></script>

    <!-- Parallax Effects -->
    <script type="text/javascript" src="{{ asset('js/skrollr.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/imagesloaded.js') }}"></script>

    <!-- Portfolio Filter -->
    <script type="text/javascript" src="{{ asset('js/jquery.isotope.js') }}"></script>

    <!-- LightBox Nivo -->
    <script type="text/javascript" src="{{ asset('js/nivo-lightbox.min.js') }}"></script>

    <!-- Contact page-->
    <script type="text/javascript" src="{{ asset('js/jqBootstrapValidation.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/contact.js') }}"></script>

    <!-- Javascripts
    ================================================== -->
    <script type="text/javascript" src="{{ asset('js/main.js') }}"></script>

  </body>
</html>