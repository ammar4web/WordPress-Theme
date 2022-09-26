<?php
get_header();
?>

<!-- LOADER -->
<div id="preloader">
  <img class="preloader" src="images/loader.gif" alt="">
</div><!-- end loader -->
<!-- END LOADER -->

<div id="wrapper">
  <div class="collapse top-search" id="collapseExample">
    <div class="card card-block">
      <div class="newsletter-widget text-center">
        <form class="form-inline">
          <input type="text" class="form-control" placeholder="What you are looking for?">
          <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
        </form>
      </div><!-- end newsletter -->
    </div>
  </div><!-- end top-search -->

  <div class="topbar-section">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-4 col-md-6 col-sm-6 hidden-xs-down">
          <div class="topsocial">
            <a href="#" data-toggle="tooltip" data-placement="bottom" title="Facebook"><i class="fa fa-facebook"></i></a>
            <a href="#" data-toggle="tooltip" data-placement="bottom" title="Youtube"><i class="fa fa-youtube"></i></a>
            <a href="#" data-toggle="tooltip" data-placement="bottom" title="Pinterest"><i class="fa fa-pinterest"></i></a>
            <a href="#" data-toggle="tooltip" data-placement="bottom" title="Twitter"><i class="fa fa-twitter"></i></a>
            <a href="#" data-toggle="tooltip" data-placement="bottom" title="Flickr"><i class="fa fa-flickr"></i></a>
            <a href="#" data-toggle="tooltip" data-placement="bottom" title="Instagram"><i class="fa fa-instagram"></i></a>
            <a href="#" data-toggle="tooltip" data-placement="bottom" title="Google+"><i class="fa fa-google-plus"></i></a>
          </div><!-- end social -->
        </div><!-- end col -->

        <div class="col-lg-4 hidden-md-down">
          <div class="topmenu text-center">
            <ul class="list-inline">
              <li class="list-inline-item"><a href="blog-category-01.html"><i class="fa fa-star"></i> Trends</a></li>
              <li class="list-inline-item"><a href="blog-category-02.html"><i class="fa fa-bolt"></i> Hot Topics</a></li>
              <li class="list-inline-item"><a href="page-contact.html"><i class="fa fa-user-circle-o"></i> Write for us</a></li>
            </ul><!-- end ul -->
          </div><!-- end topmenu -->
        </div><!-- end col -->

        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
          <div class="topsearch text-right">
            <a data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample"><i class="fa fa-search"></i> Search</a>
          </div><!-- end search -->
        </div><!-- end col -->
      </div><!-- end row -->
    </div><!-- end header-logo -->
  </div><!-- end topbar -->

  <div class="header-section">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="logo">
            <a href="index.html"><img src="images/logo.png" alt=""></a>
          </div><!-- end logo -->
        </div>
      </div><!-- end row -->
    </div><!-- end header-logo -->
  </div><!-- end header -->

  <header class="header">
    <div class="container">
      <nav class="navbar navbar-inverse navbar-toggleable-md">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#cloapediamenu" aria-controls="cloapediamenu" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-md-center" id="cloapediamenu">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link color-pink-hover" href="index.html">Home</a>
            </li>
            <li class="nav-item dropdown has-submenu menu-large hidden-md-down hidden-sm-down hidden-xs-down">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Categories</a>
              <ul class="dropdown-menu megamenu" aria-labelledby="dropdown01">
                <li>
                  <div class="mega-menu-content clearfix">
                    <div class="tab">
                      <button class="tablinks active" onclick="openCategory(event, 'cat01')">Beauty</button>
                      <button class="tablinks" onclick="openCategory(event, 'cat02')">Fashion</button>
                      <button class="tablinks" onclick="openCategory(event, 'cat03')">Travel</button>
                      <button class="tablinks" onclick="openCategory(event, 'cat04')">Architecture</button>
                      <button class="tablinks" onclick="openCategory(event, 'cat05')">Recipes</button>
                    </div>

                    <div class="tab-details clearfix">
                      <div id="cat01" class="tabcontent active">
                        <div class="row">
                          <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                            <div class="blog-box">
                              <div class="post-media">
                                <a href="single.html" title="">
                                  <img src="upload/menu_01.jpg" alt="" class="img-fluid">
                                  <div class="hovereffect">
                                  </div><!-- end hover -->
                                  <span class="menucat">Spa</span>
                                </a>
                              </div><!-- end media -->
                              <div class="blog-meta">
                                <h4><a href="single.html" title="">Top 10+ care advice for your toenails</a></h4>
                              </div><!-- end meta -->
                            </div><!-- end blog-box -->
                          </div>

                          <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                            <div class="blog-box">
                              <div class="post-media">
                                <a href="single.html" title="">
                                  <img src="upload/menu_02.jpg" alt="" class="img-fluid">
                                  <div class="hovereffect">
                                  </div><!-- end hover -->
                                  <span class="menucat">Beauty</span>
                                </a>
                              </div><!-- end media -->
                              <div class="blog-meta">
                                <h4><a href="single.html" title="">The secret of your beauty is handmade soap</a></h4>
                              </div><!-- end meta -->
                            </div><!-- end blog-box -->
                          </div>

                          <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                            <div class="blog-box">
                              <div class="post-media">
                                <a href="single.html" title="">
                                  <img src="upload/menu_03.jpg" alt="" class="img-fluid">
                                  <div class="hovereffect">
                                  </div><!-- end hover -->
                                  <span class="menucat">Beauty</span>
                                </a>
                              </div><!-- end media -->
                              <div class="blog-meta">
                                <h4><a href="single.html" title="">Benefits of face mask made from mud</a></h4>
                              </div><!-- end meta -->
                            </div><!-- end blog-box -->
                          </div>

                          <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                            <div class="blog-box">
                              <div class="post-media">
                                <a href="single.html" title="">
                                  <img src="upload/menu_04.jpg" alt="" class="img-fluid">
                                  <div class="hovereffect">
                                  </div><!-- end hover -->
                                  <span class="menucat">Spa</span>
                                </a>
                              </div><!-- end media -->
                              <div class="blog-meta">
                                <h4><a href="single.html" title="">Relax with the unique warmth of candle flavor</a></h4>
                              </div><!-- end meta -->
                            </div><!-- end blog-box -->
                          </div>
                        </div><!-- end row -->
                      </div>
                      <div id="cat02" class="tabcontent">
                        <div class="row">
                          <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                            <div class="blog-box">
                              <div class="post-media">
                                <a href="single.html" title="">
                                  <img src="upload/menu_05.jpg" alt="" class="img-fluid">
                                  <div class="hovereffect">
                                  </div><!-- end hover -->
                                  <span class="menucat">Fashion</span>
                                </a>
                              </div><!-- end media -->
                              <div class="blog-meta">
                                <h4><a href="single.html" title="">2017 summer stamp will have design models here</a></h4>
                              </div><!-- end meta -->
                            </div><!-- end blog-box -->
                          </div>

                          <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                            <div class="blog-box">
                              <div class="post-media">
                                <a href="single.html" title="">
                                  <img src="upload/menu_06.jpg" alt="" class="img-fluid">
                                  <div class="hovereffect">
                                  </div><!-- end hover -->
                                  <span class="menucat">Collections</span>
                                </a>
                              </div><!-- end media -->
                              <div class="blog-meta">
                                <h4><a href="single.html" title="">Which color is the most suitable color for you?</a></h4>
                              </div><!-- end meta -->
                            </div><!-- end blog-box -->
                          </div>

                          <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                            <div class="blog-box">
                              <div class="post-media">
                                <a href="single.html" title="">
                                  <img src="upload/menu_07.jpg" alt="" class="img-fluid">
                                  <div class="hovereffect">
                                  </div><!-- end hover -->
                                  <span class="menucat">Fashion</span>
                                </a>
                              </div><!-- end media -->
                              <div class="blog-meta">
                                <h4><a href="single.html" title="">Subscribe to these sites to keep an eye on the fashion</a></h4>
                              </div><!-- end meta -->
                            </div><!-- end blog-box -->
                          </div>

                          <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                            <div class="blog-box">
                              <div class="post-media">
                                <a href="single.html" title="">
                                  <img src="upload/menu_08.jpg" alt="" class="img-fluid">
                                  <div class="hovereffect">
                                  </div><!-- end hover -->
                                  <span class="menucat">Trends</span>
                                </a>
                              </div><!-- end media -->
                              <div class="blog-meta">
                                <h4><a href="single.html" title="">The most trends of this year with color combination</a></h4>
                              </div><!-- end meta -->
                            </div><!-- end blog-box -->
                          </div>
                        </div><!-- end row -->
                      </div>
                      <div id="cat03" class="tabcontent">
                        <div class="row">
                          <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                            <div class="blog-box">
                              <div class="post-media">
                                <a href="single.html" title="">
                                  <img src="upload/menu_09.jpg" alt="" class="img-fluid">
                                  <div class="hovereffect">
                                  </div><!-- end hover -->
                                  <span class="menucat">Tourism</span>
                                </a>
                              </div><!-- end media -->
                              <div class="blog-meta">
                                <h4><a href="single.html" title="">I visited the architects of Istanbul for you</a></h4>
                              </div><!-- end meta -->
                            </div><!-- end blog-box -->
                          </div>

                          <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                            <div class="blog-box">
                              <div class="post-media">
                                <a href="single.html" title="">
                                  <img src="upload/menu_11.jpg" alt="" class="img-fluid">
                                  <div class="hovereffect">
                                  </div><!-- end hover -->
                                  <span class="menucat">Travel</span>
                                </a>
                              </div><!-- end media -->
                              <div class="blog-meta">
                                <h4><a href="single.html" title="">Prepared handmade dish dish in the Netherlands</a></h4>
                              </div><!-- end meta -->
                            </div><!-- end blog-box -->
                          </div>

                          <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                            <div class="blog-box">
                              <div class="post-media">
                                <a href="single.html" title="">
                                  <img src="upload/menu_12.jpg" alt="" class="img-fluid">
                                  <div class="hovereffect">
                                  </div><!-- end hover -->
                                  <span class="menucat">City Tours</span>
                                </a>
                              </div><!-- end media -->
                              <div class="blog-meta">
                                <h4><a href="single.html" title="">I recommend you visit the fairy chimneys</a></h4>
                              </div><!-- end meta -->
                            </div><!-- end blog-box -->
                          </div>

                          <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                            <div class="blog-box">
                              <div class="post-media">
                                <a href="single.html" title="">
                                  <img src="upload/menu_13.jpg" alt="" class="img-fluid">
                                  <div class="hovereffect">
                                  </div><!-- end hover -->
                                  <span class="menucat">Tourism</span>
                                </a>
                              </div><!-- end media -->
                              <div class="blog-meta">
                                <h4><a href="single.html" title="">One of the most beautiful ports in the world</a></h4>
                              </div><!-- end meta -->
                            </div><!-- end blog-box -->
                          </div>
                        </div><!-- end row -->
                      </div>
                      <div id="cat04" class="tabcontent">
                        <div class="row">
                          <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                            <div class="blog-box">
                              <div class="post-media">
                                <a href="single.html" title="">
                                  <img src="upload/menu_14.jpg" alt="" class="img-fluid">
                                  <div class="hovereffect">
                                  </div><!-- end hover -->
                                  <span class="menucat">Places</span>
                                </a>
                              </div><!-- end media -->
                              <div class="blog-meta">
                                <h4><a href="single.html" title="">A collection of the most beautiful shop designs</a></h4>
                              </div><!-- end meta -->
                            </div><!-- end blog-box -->
                          </div>

                          <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                            <div class="blog-box">
                              <div class="post-media">
                                <a href="single.html" title="">
                                  <img src="upload/menu_15.jpg" alt="" class="img-fluid">
                                  <div class="hovereffect">
                                  </div><!-- end hover -->
                                  <span class="menucat">Designs</span>
                                </a>
                              </div><!-- end media -->
                              <div class="blog-meta">
                                <h4><a href="single.html" title="">America's and Canada's most beautiful wine houses</a></h4>
                              </div><!-- end meta -->
                            </div><!-- end blog-box -->
                          </div>

                          <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                            <div class="blog-box">
                              <div class="post-media">
                                <a href="single.html" title="">
                                  <img src="upload/menu_16.jpg" alt="" class="img-fluid">
                                  <div class="hovereffect">
                                  </div><!-- end hover -->
                                  <span class="menucat">Minimalism</span>
                                </a>
                              </div><!-- end media -->
                              <div class="blog-meta">
                                <h4><a href="single.html" title="">The most professional ways to color your walls</a></h4>
                              </div><!-- end meta -->
                            </div><!-- end blog-box -->
                          </div>

                          <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                            <div class="blog-box">
                              <div class="post-media">
                                <a href="single.html" title="">
                                  <img src="upload/menu_17.jpg" alt="" class="img-fluid">
                                  <div class="hovereffect">
                                  </div><!-- end hover -->
                                  <span class="menucat">Furnishings</span>
                                </a>
                              </div><!-- end media -->
                              <div class="blog-meta">
                                <h4><a href="single.html" title="">Stylish cabinet designs and furnitures</a></h4>
                              </div><!-- end meta -->
                            </div><!-- end blog-box -->
                          </div>
                        </div><!-- end row -->
                      </div>
                      <div id="cat05" class="tabcontent">
                        <div class="row">
                          <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                            <div class="blog-box">
                              <div class="post-media">
                                <a href="single.html" title="">
                                  <img src="upload/menu_18.jpg" alt="" class="img-fluid">
                                  <div class="hovereffect">
                                  </div><!-- end hover -->
                                  <span class="menucat">Vegetables</span>
                                </a>
                              </div><!-- end media -->
                              <div class="blog-meta">
                                <h4><a href="single.html" title="">Grilled vegetable with fish prepared with fish</a></h4>
                              </div><!-- end meta -->
                            </div><!-- end blog-box -->
                          </div>

                          <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                            <div class="blog-box">
                              <div class="post-media">
                                <a href="single.html" title="">
                                  <img src="upload/menu_19.jpg" alt="" class="img-fluid">
                                  <div class="hovereffect">
                                  </div><!-- end hover -->
                                  <span class="menucat">Restaurants</span>
                                </a>
                              </div><!-- end media -->
                              <div class="blog-meta">
                                <h4><a href="single.html" title="">The world's finest and clean meat restaurants</a></h4>
                              </div><!-- end meta -->
                            </div><!-- end blog-box -->
                          </div>

                          <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                            <div class="blog-box">
                              <div class="post-media">
                                <a href="single.html" title="">
                                  <img src="upload/menu_20.jpg" alt="" class="img-fluid">
                                  <div class="hovereffect">
                                  </div><!-- end hover -->
                                  <span class="menucat">Meat foods</span>
                                </a>
                              </div><!-- end media -->
                              <div class="blog-meta">
                                <h4><a href="single.html" title="">Fried veal and vegetable dish</a></h4>
                              </div><!-- end meta -->
                            </div><!-- end blog-box -->
                          </div>

                          <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                            <div class="blog-box">
                              <div class="post-media">
                                <a href="single.html" title="">
                                  <img src="upload/menu_21.jpg" alt="" class="img-fluid">
                                  <div class="hovereffect">
                                  </div><!-- end hover -->
                                  <span class="menucat">Pastas</span>
                                </a>
                              </div><!-- end media -->
                              <div class="blog-meta">
                                <h4><a href="single.html" title="">Tasty pasta sauces and recipes</a></h4>
                              </div><!-- end meta -->
                            </div><!-- end blog-box -->
                          </div>
                        </div><!-- end row -->
                      </div>
                    </div><!-- end tab-details -->
                  </div><!-- end mega-menu-content -->
                </li>
              </ul>
            </li>
            <li class="nav-item dropdown has-submenu">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown02" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Features</a>
              <ul class="dropdown-menu" aria-labelledby="dropdown02">
                <li><a class="dropdown-item" href="single.html">Single Blog <span class="hidden-md-down hidden-sm-down hidden-xs-down"><i class="fa fa-angle-right"></i></span></a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="single.html">Single Default</a></li>
                    <li><a class="dropdown-item" href="single-fullwidth.html">Single Fullwidth</a></li>
                    <li><a class="dropdown-item" href="single-slider.html">Single Gallery</a></li>
                    <li><a class="dropdown-item" href="single-video.html">Single Video</a></li>
                    <li><a class="dropdown-item" href="single-audio.html">Single Audio</a></li>
                    <li><a class="dropdown-item" href="single-no-media.html">Single No Media</a></li>
                  </ul>
                </li>
                <li><a class="dropdown-item" href="single.html">Blog Category <span class="hidden-md-down hidden-sm-down hidden-xs-down"><i class="fa fa-angle-right"></i></span></a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="blog-category-01.html">Blog Category A</a></li>
                    <li><a class="dropdown-item" href="blog-category-02.html">Blog Category B</a></li>
                    <li><a class="dropdown-item" href="blog-category-03.html">Blog Category C</a></li>
                    <li><a class="dropdown-item" href="blog-category-04.html">Blog Category D</a></li>
                    <li><a class="dropdown-item" href="blog-category-05.html">Blog Category E</a></li>
                    <li><a class="dropdown-item" href="blog-category-06.html">Blog Category F</a></li>
                  </ul>
                </li>
                <li><a class="dropdown-item" href="blog-author.html">Blog Author</a></li>
                <li><a class="dropdown-item" href="page-contact.html">Contact Page</a></li>
                <li><a class="dropdown-item" href="page.html">Default Page</a></li>
                <li><a class="dropdown-item" href="page-fullwidth.html">Fullwidth Page</a></li>
                <li><a class="dropdown-item" href="page-404.html">Not Found Page</a></li>
                <li><a class="dropdown-item" href="page-sitemap.html">Sitemap & Archives</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link color-pink-hover" href="blog-category-01.html">Fashion</a>
            </li>
            <li class="nav-item">
              <a class="nav-link color-red-hover" href="blog-category-02.html">Food</a>
            </li>
            <li class="nav-item">
              <a class="nav-link color-aqua-hover" href="blog-category-03.html">Lifestyle</a>
            </li>
            <li class="nav-item">
              <a class="nav-link color-green-hover" href="blog-category-04.html">Travel</a>
            </li>
            <li class="nav-item">
              <a class="nav-link color-yellow-hover" href="blog-category-05.html"><i class="fa fa-play-circle-o"></i> Vlogs</a>
            </li>
            <li class="nav-item">
              <a class="nav-link color-grey-hover" href="blog-category-06.html">Health</a>
            </li>
          </ul>
        </div>
      </nav>
    </div><!-- end container -->
  </header><!-- end header -->

  <section class="section first-section">
    <div class="container-fluid">
      <div class="masonry-blog clearfix">
        <div class="left-side">
          <div class="masonry-box post-media">
            <img src="upload/blog_masonry_01.jpg" alt="" class="img-fluid">
            <div class="shadoweffect">
              <div class="shadow-desc">
                <div class="blog-meta">
                  <span class="bg-aqua"><a href="blog-category-01.html" title="">Lifestyle</a></span>
                  <h4><a href="single.html" title="">The golden rules you need to know for a positive life</a></h4>
                  <small><a href="single.html" title="">24 July, 2017</a></small>
                  <small><a href="blog-author.html" title="">by Amanda</a></small>
                </div><!-- end meta -->
              </div><!-- end shadow-desc -->
            </div><!-- end shadow -->
          </div><!-- end post-media -->
        </div><!-- end left-side -->

        <div class="center-side">
          <div class="masonry-box post-media">
            <img src="upload/blog_masonry_02.jpg" alt="" class="img-fluid">
            <div class="shadoweffect">
              <div class="shadow-desc">
                <div class="blog-meta">
                  <span class="bg-green"><a href="blog-category-01.html" title="">Travel</a></span>
                  <h4><a href="single.html" title="">5 places you should see</a></h4>
                  <small><a href="single.html" title="">24 July, 2017</a></small>
                  <small><a href="blog-author.html" title="">by Amanda</a></small>
                </div><!-- end meta -->
              </div><!-- end shadow-desc -->
            </div><!-- end shadow -->
          </div><!-- end post-media -->

          <div class="masonry-box small-box post-media">
            <img src="upload/blog_masonry_03.jpg" alt="" class="img-fluid">
            <div class="shadoweffect">
              <div class="shadow-desc">
                <div class="blog-meta">
                  <span class="bg-green"><a href="blog-category-01.html" title="">Travel</a></span>
                  <h4><a href="single.html" title="">Separate your place with exotic hotels</a></h4>
                </div><!-- end meta -->
              </div><!-- end shadow-desc -->
            </div><!-- end shadow -->
          </div><!-- end post-media -->

          <div class="masonry-box small-box post-media">
            <img src="upload/blog_masonry_04.jpg" alt="" class="img-fluid">
            <div class="shadoweffect">
              <div class="shadow-desc">
                <div class="blog-meta">
                  <span class="bg-green"><a href="blog-category-01.html" title="">Travel</a></span>
                  <h4><a href="single.html" title="">What you need to know for child health</a></h4>
                </div><!-- end meta -->
              </div><!-- end shadow-desc -->
            </div><!-- end shadow -->
          </div><!-- end post-media -->
        </div><!-- end left-side -->

        <div class="right-side hidden-md-down">
          <div class="masonry-box post-media">
            <img src="upload/blog_masonry_05.jpg" alt="" class="img-fluid">
            <div class="shadoweffect">
              <div class="shadow-desc">
                <div class="blog-meta">
                  <span class="bg-aqua"><a href="blog-category-01.html" title="">Lifestyle</a></span>
                  <h4><a href="single.html" title="">The rules you need to know for a happy union</a></h4>
                  <small><a href="single.html" title="">03 July, 2017</a></small>
                  <small><a href="blog-author.html" title="">by Jessica</a></small>
                </div><!-- end meta -->
              </div><!-- end shadow-desc -->
            </div><!-- end shadow -->
          </div><!-- end post-media -->
        </div><!-- end right-side -->
      </div><!-- end masonry -->
    </div>
  </section>

  <section class="section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
          <div class="section-title">
            <h3 class="color-aqua"><a href="blog-category-01.html" title="">Lifestyle</a></h3>
          </div><!-- end title -->

          <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <div class="blog-box">
                <div class="post-media">
                  <a href="single.html" title="">
                    <img src="upload/blog_05.jpg" alt="" class="img-fluid">
                    <div class="hovereffect">
                      <span></span>
                    </div><!-- end hover -->
                  </a>
                </div><!-- end media -->
                <div class="blog-meta big-meta">
                  <h4><a href="single.html" title="">The golden rules you need to know for a positive life</a></h4>
                  <p>Aenean interdum arcu blandit, vehicula magna non, placerat elit. Mauris et pharetratortor. Suspendissea sodales urna. In at augue elit. Vivamus enim nibh, maximus ac felis nec, maximus tempor odio.</p>
                  <small><a href="blog-category-01.html" title="">Lifestyle</a></small>
                  <small><a href="single.html" title="">24 July, 2017</a></small>
                  <small><a href="blog-author.html" title="">by Amanda</a></small>
                </div><!-- end meta -->
              </div><!-- end blog-box -->

              <hr class="invis">

              <div class="blog-box">
                <div class="post-media">
                  <a href="single.html" title="">
                    <img src="upload/blog_06.jpg" alt="" class="img-fluid">
                    <div class="hovereffect">
                      <span></span>
                    </div><!-- end hover -->
                  </a>
                </div><!-- end media -->
                <div class="blog-meta big-meta">
                  <h4><a href="single.html" title="">I have a desert visit this summer</a></h4>
                  <p>Aenean interdum arcu blandit, vehicula magna non, placerat elit. Mauris et pharetratortor. Suspendissea sodales urna. In at augue elit. Vivamus enim nibh, maximus ac felis nec, maximus tempor odio.</p>
                  <small><a href="blog-category-01.html" title="">Lifestyle</a></small>
                  <small><a href="single.html" title="">22 July, 2017</a></small>
                  <small><a href="blog-author.html" title="">by Martines</a></small>
                </div><!-- end meta -->
              </div><!-- end blog-box -->
            </div><!-- end col -->
          </div><!-- end row -->
        </div><!-- end col -->

        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
          <div class="section-title">
            <h3 class="color-pink"><a href="blog-category-01.html" title="">Fashion</a></h3>
          </div><!-- end title -->
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
              <div class="blog-box">
                <div class="post-media">
                  <a href="single.html" title="">
                    <img src="upload/blog_01.jpg" alt="" class="img-fluid">
                    <div class="hovereffect">
                      <span></span>
                    </div><!-- end hover -->
                  </a>
                </div><!-- end media -->
                <div class="blog-meta">
                  <h4><a href="single.html" title="">What is your favorite leather jacket color</a></h4>
                  <small><a href="blog-category-01.html" title="">Fashion</a></small>
                  <small><a href="blog-category-01.html" title="">21 July, 2017</a></small>
                </div><!-- end meta -->
              </div><!-- end blog-box -->

              <hr class="invis">

              <div class="blog-box">
                <div class="post-media">
                  <a href="single.html" title="">
                    <img src="upload/blog_02.jpg" alt="" class="img-fluid">
                    <div class="hovereffect">
                      <span></span>
                    </div><!-- end hover -->
                  </a>
                </div><!-- end media -->
                <div class="blog-meta">
                  <h4><a href="single.html" title="">Is summer, have you bought a cane</a></h4>
                  <small><a href="blog-category-01.html" title="">Fashion</a></small>
                  <small><a href="blog-category-01.html" title="">11 July, 2017</a></small>
                </div><!-- end meta -->
              </div><!-- end blog-box -->
            </div><!-- end col -->

            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
              <div class="blog-box">
                <div class="post-media">
                  <a href="single.html" title="">
                    <img src="upload/blog_03.jpg" alt="" class="img-fluid">
                    <div class="hovereffect">
                      <span></span>
                    </div><!-- end hover -->
                  </a>
                </div><!-- end media -->
                <div class="blog-meta">
                  <h4><a href="single.html" title="">This year's fashionable long beard</a></h4>
                  <small><a href="blog-category-01.html" title="">Fashion</a>, <a href="blog-category-01.html" title="">Man</a></small>
                  <small><a href="blog-category-01.html" title="">08 July, 2017</a></small>
                </div><!-- end meta -->
              </div><!-- end blog-box -->

              <hr class="invis">

              <div class="blog-box">
                <div class="post-media">
                  <a href="single.html" title="">
                    <img src="upload/blog_04.jpg" alt="" class="img-fluid">
                    <div class="hovereffect">
                      <span></span>
                    </div><!-- end hover -->
                  </a>
                </div><!-- end media -->
                <div class="blog-meta">
                  <h4><a href="single.html" title="">How to be more cool with clothing</a></h4>
                  <small><a href="blog-category-01.html" title="">Fashion</a>, <a href="blog-category-01.html" title="">Style</a></small>
                  <small><a href="blog-category-01.html" title="">04 July, 2017</a></small>
                </div><!-- end meta -->
              </div><!-- end blog-box -->
            </div><!-- end col -->
          </div><!-- end row -->
        </div><!-- end col -->
      </div><!-- end row -->

      <hr class="invis1">

      <div class="row">
        <div class="col-lg-10 offset-lg-1">
          <div class="banner-spot clearfix">
            <div class="banner-img">
              <img src="upload/banner_01.jpg" alt="" class="img-fluid">
            </div><!-- end banner-img -->
          </div><!-- end banner -->
        </div><!-- end col -->
      </div><!-- end row -->

      <hr class="invis1">

      <div class="row">
        <div class="col-lg-9">
          <div class="blog-list clearfix">
            <div class="section-title">
              <h3 class="color-green"><a href="blog-category-01.html" title="">Travel</a></h3>
            </div><!-- end title -->

            <div class="blog-box row">
              <div class="col-md-4">
                <div class="post-media">
                  <a href="single.html" title="">
                    <img src="upload/blog_square_01.jpg" alt="" class="img-fluid">
                    <div class="hovereffect"></div>
                  </a>
                </div><!-- end media -->
              </div><!-- end col -->

              <div class="blog-meta big-meta col-md-8">
                <h4><a href="single.html" title="">5 Beautiful buildings you need to visit without dying</a></h4>
                <p>Aenean interdum arcu blandit, vehicula magna non, placerat elit. Mauris et pharetratortor. Suspendissea sodales urna. In at augue elit. Vivamus enim nibh, maximus ac felis nec, maximus tempor odio.</p>
                <small><a href="blog-category-01.html" title="">Travel</a></small>
                <small><a href="single.html" title="">21 July, 2017</a></small>
                <small><a href="blog-author.html" title="">by Boby</a></small>
              </div><!-- end meta -->
            </div><!-- end blog-box -->

            <hr class="invis">

            <div class="blog-box row">
              <div class="col-md-4">
                <div class="post-media">
                  <a href="single.html" title="">
                    <img src="upload/blog_square_02.jpg" alt="" class="img-fluid">
                    <div class="hovereffect"></div>
                  </a>
                </div><!-- end media -->
              </div><!-- end col -->

              <div class="blog-meta big-meta col-md-8">
                <h4><a href="single.html" title="">Let's make an introduction to the glorious world of history</a></h4>
                <p>Aenean interdum arcu blandit, vehicula magna non, placerat elit. Mauris et pharetratortor. Suspendissea sodales urna. In at augue elit. Vivamus enim nibh, maximus ac felis nec, maximus tempor odio.</p>
                <small><a href="blog-category-01.html" title="">Travel</a></small>
                <small><a href="single.html" title="">20 July, 2017</a></small>
                <small><a href="blog-author.html" title="">by Samanta</a></small>
              </div><!-- end meta -->
            </div><!-- end blog-box -->

            <hr class="invis">

            <div class="blog-box row">
              <div class="col-md-4">
                <div class="post-media">
                  <a href="single.html" title="">
                    <img src="upload/blog_square_03.jpg" alt="" class="img-fluid">
                    <div class="hovereffect"></div>
                  </a>
                </div><!-- end media -->
              </div><!-- end col -->

              <div class="blog-meta big-meta col-md-8">
                <h4><a href="single.html" title="">Did you see the most beautiful sea in the world?</a></h4>
                <p>Aenean interdum arcu blandit, vehicula magna non, placerat elit. Mauris et pharetratortor. Suspendissea sodales urna. In at augue elit. Vivamus enim nibh, maximus ac felis nec, maximus tempor odio.</p>
                <small><a href="blog-category-01.html" title="">Travel</a></small>
                <small><a href="single.html" title="">19 July, 2017</a></small>
                <small><a href="blog-author.html" title="">by Jackie</a></small>
              </div><!-- end meta -->
            </div><!-- end blog-box -->
          </div><!-- end blog-list -->

          <hr class="invis">

          <div class="blog-list clearfix">
            <div class="section-title">
              <h3 class="color-red"><a href="blog-category-01.html" title="">Food</a></h3>
            </div><!-- end title -->

            <div class="blog-box row">
              <div class="col-md-4">
                <div class="post-media">
                  <a href="single.html" title="">
                    <img src="upload/blog_square_05.jpg" alt="" class="img-fluid">
                    <div class="hovereffect"></div>
                  </a>
                </div><!-- end media -->
              </div><!-- end col -->

              <div class="blog-meta big-meta col-md-8">
                <h4><a href="single.html" title="">Banana-chip chocolate cake recipe</a></h4>
                <p>Aenean interdum arcu blandit, vehicula magna non, placerat elit. Mauris et pharetratortor. Suspendissea sodales urna. In at augue elit. Vivamus enim nibh, maximus ac felis nec, maximus tempor odio.</p>
                <small><a href="blog-category-01.html" title="">Food</a></small>
                <small><a href="single.html" title="">11 July, 2017</a></small>
                <small><a href="blog-author.html" title="">by Matilda</a></small>
              </div><!-- end meta -->
            </div><!-- end blog-box -->

            <hr class="invis">

            <div class="blog-box row">
              <div class="col-md-4">
                <div class="post-media">
                  <a href="single.html" title="">
                    <img src="upload/blog_square_06.jpg" alt="" class="img-fluid">
                    <div class="hovereffect"></div>
                  </a>
                </div><!-- end media -->
              </div><!-- end col -->

              <div class="blog-meta big-meta col-md-8">
                <h4><a href="single.html" title="">10 practical ways to choose organic vegetables</a></h4>
                <p>Aenean interdum arcu blandit, vehicula magna non, placerat elit. Mauris et pharetratortor. Suspendissea sodales urna. In at augue elit. Vivamus enim nibh, maximus ac felis nec, maximus tempor odio.</p>
                <small><a href="blog-category-01.html" title="">Food</a></small>
                <small><a href="single.html" title="">10 July, 2017</a></small>
                <small><a href="blog-author.html" title="">by Matilda</a></small>
              </div><!-- end meta -->
            </div><!-- end blog-box -->

            <hr class="invis">

            <div class="blog-box row">
              <div class="col-md-4">
                <div class="post-media">
                  <a href="single.html" title="">
                    <img src="upload/blog_square_07.jpg" alt="" class="img-fluid">
                    <div class="hovereffect"></div>
                  </a>
                </div><!-- end media -->
              </div><!-- end col -->

              <div class="blog-meta big-meta col-md-8">
                <h4><a href="single.html" title="">We are making homemade ravioli</a></h4>
                <p>Aenean interdum arcu blandit, vehicula magna non, placerat elit. Mauris et pharetratortor. Suspendissea sodales urna. In at augue elit. Vivamus enim nibh, maximus ac felis nec, maximus tempor odio.</p>
                <small><a href="blog-category-01.html" title="">Food</a></small>
                <small><a href="single.html" title="">09 July, 2017</a></small>
                <small><a href="blog-author.html" title="">by Matilda</a></small>
              </div><!-- end meta -->
            </div><!-- end blog-box -->
          </div><!-- end blog-list -->
        </div><!-- end col -->

        <div class="col-lg-3">
          <div class="section-title">
            <h3 class="color-yellow"><a href="blog-category-01.html" title="">Vlogs</a></h3>
          </div><!-- end title -->

          <div class="blog-box">
            <div class="post-media">
              <a href="single.html" title="">
                <img src="upload/blog_10.jpg" alt="" class="img-fluid">
                <div class="hovereffect">
                  <span class="videohover"></span>
                </div><!-- end hover -->
              </a>
            </div><!-- end media -->
            <div class="blog-meta">
              <h4><a href="single.html" title="">We are guests of ABC Design Studio - Vlog</a></h4>
              <small><a href="blog-category-01.html" title="">Videos</a></small>
              <small><a href="blog-category-01.html" title="">21 July, 2017</a></small>
            </div><!-- end meta -->
          </div><!-- end blog-box -->

          <hr class="invis">

          <div class="blog-box">
            <div class="post-media">
              <a href="single.html" title="">
                <img src="upload/blog_11.jpg" alt="" class="img-fluid">
                <div class="hovereffect">
                  <span class="videohover"></span>
                </div><!-- end hover -->
              </a>
            </div><!-- end media -->
            <div class="blog-meta">
              <h4><a href="single.html" title="">Nostalgia at work</a></h4>
              <small><a href="blog-category-01.html" title="">Videos</a></small>
              <small><a href="blog-category-01.html" title="">20 July, 2017</a></small>
            </div><!-- end meta -->
          </div><!-- end blog-box -->

          <hr class="invis">

          <div class="blog-box">
            <div class="post-media">
              <a href="single.html" title="">
                <img src="upload/blog_12.jpg" alt="" class="img-fluid">
                <div class="hovereffect">
                  <span class="videohover"></span>
                </div><!-- end hover -->
              </a>
            </div><!-- end media -->
            <div class="blog-meta">
              <h4><a href="single.html" title="">How to become a good vlogger</a></h4>
              <small><a href="blog-category-01.html" title="">Beauty</a></small>
              <small><a href="blog-category-01.html" title="">20 July, 2017</a></small>
            </div><!-- end meta -->
          </div><!-- end blog-box -->

          <hr class="invis">

          <div class="section-title">
            <h3 class="color-grey"><a href="blog-category-01.html" title="">Health</a></h3>
          </div><!-- end title -->

          <div class="blog-box">
            <div class="post-media">
              <a href="single.html" title="">
                <img src="upload/blog_07.jpg" alt="" class="img-fluid">
                <div class="hovereffect">
                  <span></span>
                </div><!-- end hover -->
              </a>
            </div><!-- end media -->
            <div class="blog-meta">
              <h4><a href="single.html" title="">Opened the doors of the Istanbul spa center</a></h4>
              <small><a href="blog-category-01.html" title="">Spa</a></small>
              <small><a href="blog-category-01.html" title="">21 July, 2017</a></small>
            </div><!-- end meta -->
          </div><!-- end blog-box -->

          <hr class="invis">

          <div class="blog-box">
            <div class="post-media">
              <a href="single.html" title="">
                <img src="upload/blog_08.jpg" alt="" class="img-fluid">
                <div class="hovereffect">
                  <span></span>
                </div><!-- end hover -->
              </a>
            </div><!-- end media -->
            <div class="blog-meta">
              <h4><a href="single.html" title="">2017 trends in health tourism</a></h4>
              <small><a href="blog-category-01.html" title="">Health</a></small>
              <small><a href="blog-category-01.html" title="">20 July, 2017</a></small>
            </div><!-- end meta -->
          </div><!-- end blog-box -->

          <hr class="invis">

          <div class="blog-box">
            <div class="post-media">
              <a href="single.html" title="">
                <img src="upload/blog_09.jpg" alt="" class="img-fluid">
                <div class="hovereffect">
                  <span></span>
                </div><!-- end hover -->
              </a>
            </div><!-- end media -->
            <div class="blog-meta">
              <h4><a href="single.html" title="">Experience the effects of miraculous stones</a></h4>
              <small><a href="blog-category-01.html" title="">Beauty</a></small>
              <small><a href="blog-category-01.html" title="">20 July, 2017</a></small>
            </div><!-- end meta -->
          </div><!-- end blog-box -->
        </div><!-- end col -->
      </div><!-- end row -->

      <hr class="invis1">

      <div class="row">
        <div class="col-lg-10 offset-lg-1">
          <div class="banner-spot clearfix">
            <div class="banner-img">
              <img src="upload/banner_02.jpg" alt="" class="img-fluid">
            </div><!-- end banner-img -->
          </div><!-- end banner -->
        </div><!-- end col -->
      </div><!-- end row -->
    </div><!-- end container -->
  </section>

  <footer class="footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
          <div class="widget">
            <h2 class="widget-title">Recent Posts</h2>
            <div class="blog-list-widget">
              <div class="list-group">
                <a href="single.html" class="list-group-item list-group-item-action flex-column align-items-start">
                  <div class="w-100 justify-content-between">
                    <img src="upload/blog_square_01.jpg" alt="" class="img-fluid float-left">
                    <h5 class="mb-1">5 Beautiful buildings you need to before dying</h5>
                    <small>12 Jan, 2016</small>
                  </div>
                </a>

                <a href="single.html" class="list-group-item list-group-item-action flex-column align-items-start">
                  <div class="w-100 justify-content-between">
                    <img src="upload/blog_square_02.jpg" alt="" class="img-fluid float-left">
                    <h5 class="mb-1">Let's make an introduction for creative life</h5>
                    <small>11 Jan, 2016</small>
                  </div>
                </a>

                <a href="single.html" class="list-group-item list-group-item-action flex-column align-items-start">
                  <div class="w-100 last-item justify-content-between">
                    <img src="upload/blog_square_03.jpg" alt="" class="img-fluid float-left">
                    <h5 class="mb-1">Did you see the most beautiful sea in the world?</h5>
                    <small>07 Jan, 2016</small>
                  </div>
                </a>
              </div>
            </div><!-- end blog-list -->
          </div><!-- end widget -->
        </div><!-- end col -->

        <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
          <div class="widget">
            <h2 class="widget-title">Popular Posts</h2>
            <div class="blog-list-widget">
              <div class="list-group">
                <a href="single.html" class="list-group-item list-group-item-action flex-column align-items-start">
                  <div class="w-100 justify-content-between">
                    <img src="upload/blog_square_04.jpg" alt="" class="img-fluid float-left">
                    <h5 class="mb-1">Banana-chip chocolate cake recipe with customs</h5>
                    <span class="rating">
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                    </span>
                  </div>
                </a>

                <a href="single.html" class="list-group-item list-group-item-action flex-column align-items-start">
                  <div class="w-100 justify-content-between">
                    <img src="upload/blog_square_07.jpg" alt="" class="img-fluid float-left">
                    <h5 class="mb-1">10 practical ways to choose organic vegetables</h5>
                    <span class="rating">
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                    </span>
                  </div>
                </a>

                <a href="single.html" class="list-group-item list-group-item-action flex-column align-items-start">
                  <div class="w-100 last-item justify-content-between">
                    <img src="upload/blog_square_06.jpg" alt="" class="img-fluid float-left">
                    <h5 class="mb-1">We are making homemade ravioli, nice and good</h5>
                    <span class="rating">
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                    </span>
                  </div>
                </a>
              </div>
            </div><!-- end blog-list -->
          </div><!-- end widget -->
        </div><!-- end col -->

        <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
          <div class="widget">
            <h2 class="widget-title">Popular Categories</h2>
            <div class="link-widget">
              <ul>
                <li><a href="#">Fahsion <span>(21)</span></a></li>
                <li><a href="#">Lifestyle <span>(15)</span></a></li>
                <li><a href="#">Art & Design <span>(31)</span></a></li>
                <li><a href="#">Health Beauty <span>(22)</span></a></li>
                <li><a href="#">Clothing <span>(66)</span></a></li>
                <li><a href="#">Entertaintment <span>(11)</span></a></li>
                <li><a href="#">Food & Drink <span>(87)</span></a></li>
              </ul>
            </div><!-- end link-widget -->
          </div><!-- end widget -->
        </div><!-- end col -->
      </div><!-- end row -->

      <hr class="invis1">

      <div class="row">
        <div class="col-lg-8 offset-lg-2">
          <div class="widget">
            <div class="footer-text text-center">
              <a href="index.html"><img src="images/flogo.png" alt="" class="img-fluid"></a>
              <p>Cloapedia is a personal blog for handcrafted, cameramade photography content, fashion styles from independent creatives around the world.</p>
              <div class="social">
                <a href="#" data-toggle="tooltip" data-placement="bottom" title="Facebook"><i class="fa fa-facebook"></i></a>
                <a href="#" data-toggle="tooltip" data-placement="bottom" title="Twitter"><i class="fa fa-twitter"></i></a>
                <a href="#" data-toggle="tooltip" data-placement="bottom" title="Instagram"><i class="fa fa-instagram"></i></a>
                <a href="#" data-toggle="tooltip" data-placement="bottom" title="Google Plus"><i class="fa fa-google-plus"></i></a>
                <a href="#" data-toggle="tooltip" data-placement="bottom" title="Pinterest"><i class="fa fa-pinterest"></i></a>
              </div>

              <hr class="invis">

              <div class="newsletter-widget text-center">
                <form class="form-inline">
                  <input type="text" class="form-control" placeholder="Enter your email address">
                  <button type="submit" class="btn btn-primary">Subscribe <i class="fa fa-envelope-open-o"></i></button>
                </form>
              </div><!-- end newsletter -->
            </div><!-- end footer-text -->
          </div><!-- end widget -->
        </div><!-- end col -->
      </div>
      <div class="row">
        <div class="col-md-12 text-center">
          <br>
          <div class="copyright">&copy; Cloapedia. Design: <a href="http://html.design">HTML Design</a>.</div>
        </div>
      </div>
    </div><!-- end container -->
  </footer><!-- end footer -->

  <div class="dmtop">Scroll to Top</div>

</div><!-- end wrapper -->

<?php
get_footer();
?>