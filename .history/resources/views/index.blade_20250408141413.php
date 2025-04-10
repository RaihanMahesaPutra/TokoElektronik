<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Anime Template">
    <meta name="keywords" content="Anime, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Popcorn Pixels</title>
    <link rel="icon" href="logo.png" type="image/icon type">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/elegant-icons.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/plyr.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/nice-select.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/slicknav.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="header__logo">
                        <a href="{{ route('homepage')}}">
                            <img src="{{asset('img/logo.png')}}" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="header__nav">
                        <nav class="header__menu mobile-menu">
                            <ul>
                            <li class="active"><a href="{{ route('homepage') }}">Homepage</a></li>
                                <li class=""><a href="{{ route('categories') }}">Categories <span class="arrow_carrot-down"></span></a>
                                    <ul class="dropdown">
                                        <li><a href="{{ route('categories-animation') }}">Animation</a></li>
                                        <li><a href="{{ route('categories-action') }}">Action</a></li>
                                        <li><a href="{{ route('categories-history') }}">History</a></li>
                                        <li><a href="{{ route('categories-horror') }}">Horror</a></li>
                                        <li><a href="{{ route('categories-sf') }}">Science Fiction</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{ route('blog') }}">Our Blog</a></li>
                                <li><a href="">Contacts</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="header__right">
                        {{--  <a href="#" class="search-switch"><span class="icon_search"></span></a>  --}}
                        {{--  <a href="{{ route('login') }}"><span class="icon_profile"></span></a>  --}}



                        <ul class="navbar-nav ms-auto">
                            <!-- Authentication Links -->
                            @guest
                                @if (Route::has('login'))
                                    {{--  <li class="">
                                        <a class="nav-link" href="{{ route('login') }}">Login </a>
                                    </li>  --}}



                                        <button class="btn btn-primary px-4 ms-3" type="submit"><a class="nav-link" href="{{ route('login') }}">Sign Up!</a></button>

                                @endif

                                @if (Route::has('register'))
                                    <li class="">
                                        <a class="nav-link" href="{{ route('register') }}">Regiter</a>
                                    </li>
                                @endif
                            @else
                                <li class="dropdown">
                                    <a id="navbarDropdown" class="nav-link" href="{{ ('profile') }}" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        Hello {{ Auth::user()->username }} !  <span class="icon_profile ml-2"></span>
                                    </a>


                                </li>
                            @endguest
                        </ul>


                    </div>
                </div>
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>
    <!-- Header End -->

    <!-- Hero Section Begin -->
    <section class="hero">
        <div class="container">
            <div class="hero__slider owl-carousel">
                <div class="hero__items set-bg" data-setbg="img/hero/hero-1.jpg">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="hero__text">
                                <a href="./SF-category.html"><div class="label">Science Fiction</div></a>
                                <h2>Suzume no Tojimari <br> 8 March 2023</h2>
                                <p>Suzume's journey begins in a quiet town in Kyushu....</p>
                                <a href="w/suzume.html"><span>Watch Now</span> <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hero__items set-bg" data-setbg="img/hero/hero-2.jpg">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="hero__text">
                                <a href="A-category.html"><div class="label">Action</div></a>
                                <h2>Spider-man No Way Home <br>17 December 2021 </h2>
                                <p>the true identity of this friendly hero has been revealed....</p>
                                <a href="w/SNWH.html"><span>Watch Now</span> <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hero__items set-bg" data-setbg="img/hero/hero-3.jpg">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="hero__text">
                                <a href="H-category.html"></a><div class="label">History</div>
                                <h2>Oppenheimer <br> 19 July 2023</h2>
                                <p>The story of an American physicist named J. Robert Oppenheimer.....</p>
                                <a href="w/Oppenheimer.html"><span>Watch Now</span> <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Product Section Begin -->
    <section class="product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="trending__product">
                        <div class="row">
                            <div class="col-lg-8 col-md-8 col-sm-8">
                                <div class="section-title">
                                    <h4>Recently Added</h4>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <div class="btn__all">
                                    <a href="categories.html" class="primary-btn">View All <span class="arrow_right"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="img/category/His-1.jpg">
                                        <div class="ep">Complete</div>
                                        <div class="comment"><i class="fa fa-star"></i> 11</div>
                                        <div class="view"><i class="fa fa-clock-o"></i> 9141</div>
                                    </div>
                                    <div class="product__item__text">
                                        <ul>
                                            <li>History</li>
                                        </ul>
                                        <h5><a href="w/Rustin.html">Rustin</a></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="img/category/His-2.jpg">
                                        <div class="ep">Complete</div>
                                        <div class="comment"><i class="fa fa-comments"></i> 11</div>
                                        <div class="view"><i class="fa fa-eye"></i> 9141</div>
                                    </div>
                                    <div class="product__item__text">
                                        <ul>
                                            <li>Active</li>
                                            <li>Movie</li>
                                        </ul>
                                        <h5><a href="w/Oppenheimer.html">Oppenheimer</a></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="img/category/anim-4.jpg">
                                        <div class="ep">Complete</div>
                                        <div class="comment"><i class="fa fa-star"></i> 11</div>
                                        <div class="view"><i class="fa fa-clock-o"></i> 9141</div>
                                    </div>
                                    <div class="product__item__text">
                                        <ul>
                                            <li>Active</li>
                                            <li>Movie</li>
                                        </ul>
                                        <h5><a href="w/NTMM.html">Ninja Turtles : Mutant Mayhem</a></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="img/category/Hor-1.jpg">
                                        <div class="ep">Complete</div>
                                        <div class="comment"><i class="fa fa-star"></i> 11</div>
                                        <div class="view"><i class="fa fa-clock-o"></i> 9141</div>
                                    </div>
                                    <div class="product__item__text">
                                        <ul>
                                            <li>History</li>
                                            <li></li>
                                        </ul>
                                        <h5><a href="w/Qodrat.html">Qodrat</a></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="img/category/ScF-2.jpg">
                                        <div class="ep">Complete</div>
                                        <div class="comment"><i class="fa fa-star"></i> 11</div>
                                        <div class="view"><i class="fa fa-clock-o"></i> 9141</div>
                                    </div>
                                    <div class="product__item__text">
                                        <ul>
                                            <li>History</li>
                                            <li></li>
                                        </ul>
                                        <h5><a href="w/TaE.html">The Avengers : Endgame</a></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="img/category/ScF-1.jpg">
                                        <div class="ep">Complete</div>
                                        <div class="comment"><i class="fa fa-star"></i> 11</div>
                                        <div class="view"><i class="fa fa-clock-o"></i> 9141</div>
                                    </div>
                                    <div class="product__item__text">
                                        <ul>
                                            <li>History</li>
                                            <li></li>
                                        </ul>
                                        <h5><a href="w/TRTB.hmtml">Transformers : Rise of The Beast</a></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-4 col-md-6 col-sm-8">
                    <div class="product__sidebar">
                        <div class="product__sidebar__view">
                            <div class="section-title">
                                <h5>Top Views</h5>
                            </div>
                            <ul class="filter__controls">
                                <li class="active" data-filter="*">Day</li>
                                <li data-filter=".week">Week</li>
                                <li data-filter=".month">Month</li>
                                <li data-filter=".years">Years</li>
                            </ul>
                            <div class="filter__gallery">
                                <div class="product__sidebar__view__item set-bg mix day years"
                                data-setbg="img/category/ScF-2.jpg">
                                <div class="ep">Complete</div>
                                <div class="view"><i class="fa fa-clock-o"></i> 9141</div>
                                <h5><a href="w/TaE">The Avengers : Endgame</a></h5>
                            </div>
                            <div class="product__sidebar__view__item set-bg mix month week"
                            data-setbg="img/category/ScF-1.jpg">
                            <div class="ep">Complete</div>
                            <div class="view"><i class="fa fa-clock-o"></i> 9141</div>
                            <h5><a href="w/TRTB">Transformers : Rise of The Beast</a></h5>
                        </div>
                        <div class="product__sidebar__view__item set-bg mix week years"
                        data-setbg="img/category/Hor-1.jpg">
                        <div class="ep">Complete</div>
                        <div class="view"><i class="fa fa-clock-o"></i> 9141</div>
                        <h5><a href="w/Qodrat">Qodrat</a></h5>
                    </div>
                    <div class="product__sidebar__view__item set-bg mix years month"
                    data-setbg="img/category/His-1.jpg">
                    <div class="ep">Complete</div>
                    <div class="view"><i class="fa fa-clock-o"></i> 9141</div>
                    <h5><a href="w/Rustin">Rustin</a></h5>
                </div>
                <div class="product__sidebar__view__item set-bg mix day"
                data-setbg="img/category/anim-1.jpg">
                <div class="ep">Complete</div>
                <div class="view"><i class="fa fa-clock-o"></i> 9141</div>
                <h5><a href="w/suzume.html">Suzume No Tojimari</a></h5>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
</section>
<!-- Product Section End -->

<!-- Footer Section Begin -->
<footer class="footer">
    <div class="page-up">
        <a href="#" id="scrollToTopButton"><span class="arrow_carrot-up"></span></a>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="footer__logo">
                    <a href="./index.html"><img src="img/logo.png" alt=""></a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="footer__nav">
                    <ul>
                        <li class="active"><a href="./index.html">Homepage</a></li>
                        <li><a href="./categories.html">Categories</a></li>
                        <li><a href="./blog.html">Our Blog</a></li>
                        <li><a href="./contact.html">Contacts</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3">
                <p>
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script>
                    </p>

              </div>
          </div>
      </div>
  </footer>
  <!-- Footer Section End -->

  <!-- Search model Begin -->
  <div class="search-model">
    <div class="h-100 d-flex align-items-center justify-content-center">
        <div class="search-close-switch"><i class="icon_close"></i></div>
        <form class="search-model-form">
            <input type="text" id="search-input" placeholder="Search here.....">
        </form>
    </div>
</div>
<!-- Search model end -->

<!-- Js Plugins -->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/player.js"></script>
<script src="js/jquery.nice-select.min.js"></script>
<script src="js/mixitup.min.js"></script>
<script src="js/jquery.slicknav.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/main.js"></script>


</body>

</html>
