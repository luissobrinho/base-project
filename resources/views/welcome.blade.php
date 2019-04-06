<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="no-js">
<head>
    <meta charset="utf-8">
    <title>{{ config('app.name', 'Laravel') }} | Home</title>
    <meta name="description" content="Comming soon page - Able 7.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Developed Software">
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}">
    <link rel="stylesheet" href="{{ asset('css/style-v2.css') }}" />
    <!-- Modernizr runs quickly on page load for detecting features -->
    <script src="{{ asset('js/modernizr.custom.js') }}"></script>
    <meta name="google-site-verification" content="{{ env('GOOGLE_VALIDATE') }}" />
</head>

<body>
<!-- Loading overlay -->
<div id="loading" class="dark-back">
    <div class="loading-bar"></div>
    <span class="loading-text opacity-0">Estão animado?</span>
</div>
<!-- Informations bar on top of the screen -->
<div class="info-bar bar-intro opacity-0">
    <div class="row">
        <div class="col-xs-12 col-sm-6 col-lg-6 info-bar-left">
            <p>Inauguração da homologação em <span id="countdown"></span></p>
        </div>
        <div class="col-xs-12 col-sm-6 col-lg-6 info-bar-right">
            <a href="{{ route('login') }}" class="action-btn trigger">Login</a>
        </div>
    </div>
</div>
<!-- END - Informations bar on top of the screen -->
<!-- Slider Wrapper -->
<div id="slider" class="sl-slider-wrapper">
    <div class="sl-slider">
        <!-- SLIDE 1 / Home -->
        <div class="sl-slide bg-1" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
            <div class="sl-slide-inner">
                <div class="content-slide">
                    <div class="container">
                        <img src="https://icar.ddsw.com.br/img/logo.png" alt="" class="brand-logo text-intro opacity-0" />
                        <h1 class="text-intro opacity-0">Comming Soon</h1>
                        <p class="text-intro opacity-0">So Excited !!!<strong> Product Launch</strong> by Codedthemes.
                            <br> Top bar Time countdown - Chill your excitement.
                        </p>
                        <!-- Text or Icons, as you want :-) / Uncomment the part you need and comment or delete the other one -->
                        <!-- <p class="social-text text-intro opacity-0">
                                <a href="#" target="_blank">TWITTER</a> /
                                <a href="#" target="_blank">FACEBOOK</a> /
                                <a href="#" target="_blank">YOUTUBE</a>
                            </p> -->
                        <p class="social-icon text-intro opacity-0">
                            <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-youtube"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-dribbble"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-linkedin"></i></a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- END - SLIDE 1 / Home -->
        <!-- SLIDE 2 / About -->
        <div class="sl-slide bg-2" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5">
            <div class="sl-slide-inner">
                <div class="content-slide">
                    <div class="container">
                        <h2>Our great Story</h2>
                        <div class="row about-part">
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                <p>Hi, I'm WAVE and I'm ready to boost your web project by my elegance, exclusive design and animations. I'm ready-to-use, just upload me on your server, add your pictures and edit my texts. Handmade, precisely built with the famous Bootstrap Framework. Salut, je suis WAVE et je suis prêt à booster votre projet web par mon élégance, mon design et mes animations exclusives. Je suis prêt à l'emploi, il suffit de me mettre sur votre serveur.</p>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                <p>Ajoutez vos photos et éditer mes textes. Fait à la main, précisément construit avec le célèbre Framework Bootstrap. Hola, soy WAVE y estoy listo para impulsar su proyecto web con mi estilo, mi diseño y mis animaciones exclusivas. Estoy listo, me acaba de poner en su servidor, añadir sus fotos y editar mis textos. Hecho a mano, precisamente, construido con el famoso Framework Bootstrap.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END - SLIDE 2 / About -->
        <!-- SLIDE 3 / Portfolio -->
        <div class="sl-slide bg-3" data-orientation="horizontal" data-slice1-rotation="3" data-slice2-rotation="3" data-slice1-scale="2" data-slice2-scale="1">
            <div class="sl-slide-inner">
                <div class="content-slide">
                    <div class="container">
                        <h2>Our latest works</h2>
                        <p class="resume">Showcase your work brillantly with this stunning gallery. Easy-to-use, you can add projects as much as you want. Fully responsive, your portfolio page is ideal to give the best feeling to your visitors and to catch their attention.</p>
                        <!-- Projects -->
                        <div class="portfolio my-gallery" itemscope itemtype="http://schema.org/ImageGallery">
                            <!-- 1 / PICTURE -->
                            <figure class="col-xs-12 col-sm-12 col-md-6 col-lg-4 annex-img split-section" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                <a href="{{ asset('img/gallery-1.jpg') }}" class="gallery-link small" data-image="img/gallery-1.jpg" itemprop="contentUrl" data-size="1920x1280">
                                    <img src="{{ asset('img/gallery-1.jpg') }}" itemprop="thumbnail" alt="This is my work" class="img-responsive gallery-img small-square" />
                                </a>
                                <figcaption itemprop="caption description">
                                    <div class="photo-details">
                                        <h4>Get in the Game now <small>Amazing story in 1929</small></h4>
                                        <i class="icon ion-plus-circled"></i>
                                        <p>lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    </div>
                                </figcaption>
                            </figure>
                            <!-- 2 / PICTURE -->
                            <figure class="col-xs-12 col-sm-12 col-md-6 col-lg-4 annex-img split-section" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                <a href="{{ asset('img/gallery-2.jpg') }}" class="gallery-link small" data-image="img/gallery-2.jpg" itemprop="contentUrl" data-size="1920x1280">
                                    <img src="{{ asset('img/gallery-2.jpg') }}" itemprop="thumbnail" alt="This is my work" class="img-responsive gallery-img small-square" />
                                </a>
                                <figcaption itemprop="caption description">
                                    <div class="photo-details">
                                        <h4>Merveilles cachées <small>Découvrez notre projet</small></h4>
                                        <i class="icon ion-plus-circled"></i>
                                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit.</p>
                                    </div>
                                </figcaption>
                            </figure>
                            <!-- 3 / PICTURE -->
                            <figure class="col-xs-12 col-sm-12 col-md-6 col-lg-4 annex-img split-section" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                <a href="{{ asset('img/gallery-3.jpg') }}" class="gallery-link small" data-image="img/gallery-3.jpg" itemprop="contentUrl" data-size="1920x1280">
                                    <img src="{{ asset('img/gallery-3.jpg') }}" itemprop="thumbnail" alt="This is my work" class="img-responsive gallery-img small-square" />
                                </a>
                                <figcaption itemprop="caption description">
                                    <div class="photo-details">
                                        <h4>Kreativität der Zukunft <small>Alle Geheimnisse sind hier</small></h4>
                                        <i class="icon ion-plus-circled"></i>
                                        <p>lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    </div>
                                </figcaption>
                            </figure>
                            <!-- 4 / PICTURE -->
                            <figure class="col-xs-12 col-sm-12 col-md-6 col-lg-4 annex-img split-section" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                <a href="{{ asset('img/gallery-4.jpg') }}" class="gallery-link small" data-image="img/gallery-4.jpg" itemprop="contentUrl" data-size="1920x1280">
                                    <img src="{{ asset('img/gallery-4.jpg') }}" itemprop="thumbnail" alt="This is my work" class="img-responsive gallery-img small-square" />
                                </a>
                                <figcaption itemprop="caption description">
                                    <div class="photo-details">
                                        <h4>Возьмите карандаш <small>лучшее написание</small></h4>
                                        <i class="icon ion-plus-circled"></i>
                                        <p>lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    </div>
                                </figcaption>
                            </figure>
                            <!-- 5 / PICTURE -->
                            <figure class="col-xs-12 col-sm-12 col-md-6 col-lg-4 annex-img split-section" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                <a href="{{ asset('img/gallery-5.jpg') }}" class="gallery-link small" data-image="img/gallery-5.jpg" itemprop="contentUrl" data-size="1920x1280">
                                    <img src="{{ asset('img/gallery-5.jpg') }}" itemprop="thumbnail" alt="This is my work" class="img-responsive gallery-img small-square" />
                                </a>
                                <figcaption itemprop="caption description">
                                    <div class="photo-details">
                                        <h4>Apprezzare il tempo <small>Sedersi su quella sedia</small></h4>
                                        <i class="icon ion-plus-circled"></i>
                                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit.</p>
                                    </div>
                                </figcaption>
                            </figure>
                            <!-- 6 / PICTURE -->
                            <figure class="col-xs-12 col-sm-12 col-md-6 col-lg-4 annex-img split-section" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                <a href="{{ asset('img/gallery-6.jpg') }}" class="gallery-link small" data-image="img/gallery-6.jpg" itemprop="contentUrl" data-size="1920x1280">
                                    <img src="{{ asset('img/gallery-6.jpg') }}" itemprop="thumbnail" alt="This is my work" class="img-responsive gallery-img small-square" />
                                </a>
                                <figcaption itemprop="caption description">
                                    <div class="photo-details">
                                        <h4>山の頂上 <small>世界の最高の眺め</small></h4>
                                        <i class="icon ion-plus-circled"></i>
                                        <p>lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>
                        <!-- END - Projects -->
                    </div>
                </div>
            </div>
        </div>
        <!-- END - SLIDE 3 / Portfolio -->
        <!-- SLIDE 4 / Services -->
        <div class="sl-slide bg-4" data-orientation="vertical" data-slice1-rotation="-5" data-slice2-rotation="25" data-slice1-scale="2" data-slice2-scale="1">
            <div class="sl-slide-inner">
                <div class="content-slide">
                    <div class="container">
                        <h2>All new features</h2>
                        <p class="resume">The goal of a startup is to figure out the right thing to build the thing customers want and will pay for as quickly as possible. In other words, the Lean Startup is a new way of looking at the development of innovative new products that emphasizes fast iteration and customer insight, a huge vision, and great ambition, all at the same time.</p>
                        <div class="row services">
                            <!-- 1 / SERVICE -->
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 box-info">
                                <div class="box-info-light">
                                    <span class="icon"><i class="icon ion-lock-combination"></i></span>
                                    <h3>High security</h3>
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis cupidatat proident.</p>
                                </div>
                            </div>
                            <!-- 2 / SERVICE -->
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 box-info">
                                <div class="box-info-light">
                                    <span class="icon icon-clock"><i class="icon ion-android-time"></i></span>
                                    <h3>From 08:00 to 22:00</h3>
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis cupidatat proident.</p>
                                </div>
                            </div>
                        </div>
                        <div class="row services">
                            <!-- 3 / SERVICE -->
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 box-info">
                                <div class="box-info-light">
                                    <span class="icon"><i class="icon ion-chatbubbles"></i></span>
                                    <h3>Friendly support</h3>
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis cupidatat proident.</p>
                                </div>
                            </div>
                            <!-- 4 / SERVICE -->
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 box-info">
                                <div class="box-info-light">
                                    <span class="icon"><i class="icon ion-trophy"></i></span>
                                    <h3>Design winner</h3>
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis cupidatat proident.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END - SLIDE 4 / Services -->
        <!-- SLIDE 5 / Contact -->
        <div class="sl-slide bg-5" data-orientation="horizontal" data-slice1-rotation="-5" data-slice2-rotation="10" data-slice1-scale="2" data-slice2-scale="1">
            <div class="sl-slide-inner">
                <div class="content-slide">
                    <div class="container">
                        <h2>Get in touch</h2>
                        <p class="resume">We are here to help you <strong>Tuesday through Saturday</strong>, from 9:00 AM to 10:00 PM.
                            <br> Fill the next online form to get in touch with our friendly support team!</p>
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5 info-contact">
                                <h3>WAVE Service Department</h3>
                                <p>If you have any further suggestions, questions or comments, here are the best ways to connect with us!</p>
                                <br>
                                <p class="list-info">
                                    <i class="icon ion-ios-telephone"></i> Phone : (+33) 66-1254-611
                                    <br>
                                    <i class="icon ion-ios-email"></i> Email : <a href="https://colorlib.com/cdn-cgi/l/email-protection#453c2a3037682028242c2905203d24283529206b262a28" class="phone-mail-link"><span class="__cf_email__" data-cfemail="dcabbdaab99cb9a4bdb1acb0b9f2bfb3b1">[email&#160;protected]</span></a>
                                    <br>
                                    <i class="icon ion-ios-location"></i> Location : 66 Grand Central, NY 66564, USA
                                </p>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-lg-offset-1">
                                <!-- Contact Form -->
                                <form id="contact-form" name="contact-form" method="POST" data-name="Contact Form">
                                    <div class="row">
                                        <!-- Full name -->
                                        <div class="col-xs-12 col-sm-12 col-lg-6">
                                            <div class="form-group">
                                                <input type="text" id="name" class="form form-control" placeholder="Your Name*" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Name*'" name="name" data-name="Name" required>
                                            </div>
                                        </div>
                                        <!-- E-mail -->
                                        <div class="col-xs-12 col-sm-12 col-lg-6">
                                            <div class="form-group">
                                                <input type="email" id="email" class="form form-control" placeholder="Your Email*" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Email*'" name="email-address" data-name="Email Address" required>
                                            </div>
                                        </div>
                                        <!-- Subject -->
                                        <div class="col-xs-12 col-sm-12 col-lg-12">
                                            <div class="form-group">
                                                <input type="text" id="subject" class="form form-control" placeholder="Regarding..." onfocus="this.placeholder = ''" onblur="this.placeholder = 'Regarding...'" name="subject" data-name="Subject">
                                            </div>
                                        </div>
                                        <!-- Message -->
                                        <div class="col-xs-12 col-sm-12 col-lg-12 no-padding">
                                            <div class="form-group">
                                                <textarea id="text-area" class="form textarea form-control" placeholder="Your message here... 20 characters Min.*" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your message here... 20 characters Min.*'" name="message" data-name="Text Area" required></textarea>
                                            </div>
                                            <span class="sub-text">* Required fields</span>
                                        </div>
                                    </div>
                                    <!-- Button submit -->
                                    <button type="submit" id="valid-form" class="btn btn-color">Send my Message</button>
                                </form>
                                <!-- END - Contact Form -->
                                <!-- Answer for the contact form is displayed in the next div, do not remove it. -->
                                <div id="block-answer">
                                    <div id="answer"></div>
                                </div>
                                <!-- END - Answer for the contact form is displayed in the next div, do not remove it. -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END - SLIDE 5 / Contact -->
    </div>
    <!-- END - sl-slider -->
    <!-- Arrow nav -->
    <nav id="nav-arrows" class="nav-arrows">
        <span class="nav-arrow-prev">Previous</span>
        <span class="nav-arrow-next">Next</span>
    </nav>
    <!-- END - Arrow nav -->
    <!-- Bottom nav -->
    <nav id="nav-multi-square" class="nav-multi-square nav-intro opacity-0">
            <span class="nav-square-current nav-square">
					<span><i class="fa fa-home"></i>Home</span>
            </span>
        <span class="nav-square">
					<span><i class="fa fa-user-secret"></i>About</span>
            </span>
        <span class="nav-square">
					<span><i class="fa fa-briefcase"></i>Portfolio</span>
            </span>
        <span class="nav-square">
					<span><i class="fa fa-list-ol"></i>Services</span>
            </span>
        <span class="nav-square">
					<span><i class="fa fa-commenting-o"></i>Contact</span>
            </span>
    </nav>
    <!-- END - Bottom nav -->
</div>
<!-- END - Slider Wrapper -->
<!-- Root element of PhotoSwipe, the gallery. Must have class pswp. -->
<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
    <!-- Background of PhotoSwipe.
            It's a separate element as animating opacity is faster than rgba(). -->
    <div class="pswp__bg"></div>
    <!-- Slides wrapper with overflow:hidden. -->
    <div class="pswp__scroll-wrap">
        <!-- Container that holds slides.
                PhotoSwipe keeps only 3 of them in the DOM to save memory.
                Don't modify these 3 pswp__item elements, data is added later on. -->
        <div class="pswp__container">
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
        </div>
        <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
        <div class="pswp__ui pswp__ui--hidden">
            <div class="pswp__top-bar">
                <!--  Controls are self-explanatory. Order can be changed. -->
                <div class="pswp__counter"></div>
                <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
                <button class="pswp__button pswp__button--share" title="Share"></button>
                <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
                <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
                <!-- Preloader demo http://codepen.io/dimsemenov/pen/yyBWoR -->
                <!-- element will get class pswp__preloader - -active when preloader is running -->
                <div class="pswp__preloader">
                    <div class="pswp__preloader__icn">
                        <div class="pswp__preloader__cut">
                            <div class="pswp__preloader__donut"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                <div class="pswp__share-tooltip"></div>
            </div>
            <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
            </button>
            <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
            </button>
            <div class="pswp__caption">
                <div class="pswp__caption__center"></div>
            </div>
        </div>
    </div>
</div>
<!-- END - Root element of PhotoSwipe, the gallery. Must have class pswp. -->
<!-- //////////////////////\\\\\\\\\\\\\\\\\\\\\\ -->
<!-- ********** List of jQuery Plugins ********** -->
<!-- \\\\\\\\\\\\\\\\\\\\\\////////////////////// -->
<!-- * Libraries jQuery, Easing and Bootstrap - Be careful to not remove them * -->
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/jquery.easings.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<!-- SlitSlider plugin -->
<script src="{{ asset('js/jquery.ba-cond.min.js') }}"></script>
<script src="{{ asset('js/jquery.slitslider.js') }}"></script>
<!-- Newsletter plugin -->
<script src="{{ asset('js/notifyMe.js') }}"></script>
<!-- Contact form plugin -->
<script src="{{ asset('js/contact-me.js') }}"></script>
<!-- Popup Newsletter Form -->
<script src="{{ asset('js/classie.js') }}"></script>
<script src="{{ asset('js/dialogFx.js') }}"></script>
<!-- PhotoSwipe Core JS file -->
<script src="{{ asset('js/photoswipe.js') }}"></script>
<!-- PhotoSwipe UI JS file -->
<script src="{{ asset('js/photoswipe-ui-default.js') }}"></script>
<!-- Custom Scrollbar plugin -->
<script src="{{ asset('js/jquery.mCustomScrollbar.js') }}"></script>
<!-- Countdown plugin -->
<script src="{{ asset('js/jquery.countdown.js') }}"></script>
<script>
    $("#countdown")
    // Year/Month/Day Hour:Minute:Second
        .countdown("2018/12/31 12:00:00", function(event) {
            $(this).html(
                event.strftime('%D Days %Hh %Mm %Ss')
            );
        });
</script>
<!-- Main application scripts -->
<script src="{{ asset('js/main.js') }}"></script>
</body>
</html>
