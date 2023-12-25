<header id="header" id="home">
    <div class="header-top">
        <div class="container">
            <div class="row align-items-center">
                <div class="logo col-lg-6 col-sm-6 col-4 header-top-left no-padding">
                    <a href="/home"><img src="/assets/img/logo.png" alt="" title="" /></a>
                </div>
                <div class="col-lg-6 col-sm-6 col-8 header-top-right no-padding">
                  <a href="/home"><img src="/assets/img/user.png" alt="" title="" /></a>
                  <div class="dropdown">
                    <button class="btn btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    </button>
                    <ul class="dropdown-menu dropdown-menu-dark">
                      <li><a class="dropdown-item active" href="#">Login</a></li>
                      <li><a class="dropdown-item" href="#">Sign Up</a></li>
                    </ul>
                  </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container main-menu">
        <div class="row align-items-center justify-content-between d-flex">
            <nav id="nav-menu-container">
                <ul class="nav-menu">
                    <li><a href="/rekomendasi">Beranda</a></li> 
                    {{-- <li><a href="opening-hour.html">Berita</a></li> --}}
                    <li class="menu-has-children"><a href="/berita">Berita</a>
                        <ul>
                            <li><a href="blog-home.html">Diabetes</a></li>
                            <li><a href="blog-single.html">Asam Urat</a></li>
                            <li class="menu-has-children"><a href="">Level 2</a>
                                <ul>
                                    <li><a href="#">Item One</a></li>
                                    <li><a href="#">Item Two</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="services.html">Jadwal</a></li>
                    {{-- <li><a href="pricing.html">Pricing</a></li>
                    <li><a href="elements.html">Elements</a></li>
                    <li><a href="contact.html">Contact</a></li> --}}
                </ul>
            </nav><!-- #nav-menu-container -->
            <div class="menu-social-icons">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a>

            </div>
        </div>
    </div>
</header><!-- #header -->

