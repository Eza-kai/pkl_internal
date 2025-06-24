<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Index | Minimalin eCommerce Bootstrap 5 Template.</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="{{asset('assets/frontend/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontend/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontend/css.magnific-popup.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.cdnfonts.com/css/futura-std-4">
    <link rel="stylesheet" href="{{asset('assets/frontend/css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontend/css/style.css')}}">



</head>


<body>


    <main class="main_wrapper body__overlay overflow__hidden">

        <!-- header__topbar__start -->
        @include('layouts.component-frontend.navbar')
        <!-- header__topbar__end -->

        <!-- content -->
        @yield('content')
        <!-- endcontent -->

        <!-- herobanner__start -->
        
   <!-- instagram__end -->


   
<!-- footer__section__start -->
  <div class="footer ">
    <div class="footer__inner sp_top_80">
    <div class="container sp_bottom_60">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="footer__widget">
                    <h4 class="footer__title">About Us.</h4>
                    <div class="footer__content">
                        <p>Minimal E-Commerce is a dynamic and innovative online retail platform that offers a wide range of products to customers worldwide.</p>
                    </div>
                    <div class="footer__social__icon">
                        <ul>
                            <li><a target="_blank" title="Facebook-f" href="https://www.facebook.com/shopify"><i class="fab fa-facebook-f"></i></a></li>     
                            
                            
                            <li><a target="_blank" title="Twitter" href="https://twitter.com/shopify"><i class="fab fa-twitter"></i></a></li>       
                               
                            
                            
                            <li><a target="_blank" title="Youtube" href="https://www.youtube.com/user/shopify"><i class="fab fa-youtube"></i></a></li>       
                            
                            
                            <li><a target="_blank" title="Instagram" href="https://www.instagram.com/shopify/"><i class="fab fa-instagram"></i></a></li>       
                            
                            
                            <li><a target="_blank" title="Tiktok" href="https://www.tiktok.com/@shopify"><i class="fab fa-tiktok"></i></a></li>       
                            
                            
                            </ul>
                    </div>
                    <div class="footer__bottom">
<h5>Guaranteed safe checkout</h5>
                            <div class="footer__img">
                                <ul>
                                    <li>
                                        <img src="img/footer/footer__1.svg" alt="">
                                    </li>
                                    <li>
                                        <img src="img/footer/footer__2.svg" alt="">
                                    </li>
                                    <li>
                                        <img src="img/footer/footer__3.svg" alt="">
                                    </li>
                                    <li>
                                        <img src="img/footer/footer__4.svg" alt="">
                                    </li>
                                    <li>
                                        <img src="img/footer/footer__5.svg" alt="">
                                    </li>
                                    <li>
                                        <img src="img/footer/footer__6.svg" alt="">
                                    </li>
                                </ul>
                            </div>
                </div>
                </div>
            </div>

            <div class="col-xl-2 col-lg-2 col-md-6 col-sm-4 col-6">
                <div class="footer__widget">
                    <h4 class="footer__title">Quick Link</h4>
                    <div class="footer__menu">
                    <ul>
                        <li><a href="/account">My Account</a></li>
                        <li><a href="/cart">My Cart</a></li>
                        <li><a href="/pages/wishlist">Wishlist</a></li>
                        <li><a href="/">Gift Card</a></li>
                        <li><a href="/pages/contact">Need Help?</a></li>
                    </ul>
                  </div>
                </div>
            </div>


            <div class="col-xl-2 col-lg-2 col-md-6 col-sm-4 col-6">
                <div class="footer__widget">
                    <h4 class="footer__title">Information</h4>
                    <div class="footer__menu">
                    <ul>
                        <li><a href="/account">About us</a></li>
                        <li><a href="/cart">Contact</a></li>
                        <li><a href="/pages/wishlist">Blogs</a></li>
                        <li><a href="/">Gift Card</a></li>
                        <li><a href="/pages/contact">Size Chart</a></li>
                    </ul>
                  </div>
                </div>
            </div>

            <div class="col-xl-2 col-lg-2 col-md-6 col-sm-4 col-6">
                <div class="footer__widget">
                    <h4 class="footer__title">Policies</h4>
                    <div class="footer__menu">
                    <ul>
                        <li><a href="/account">Privacy Policy</a></li>
                        <li><a href="/cart">Refund Policy</a></li>
                        <li><a href="/pages/wishlist">Terms of Service</a></li>
                        <li><a href="/">Gift Card</a></li>
                        <li><a href="/pages/contact">Shipping Policy</a></li>
                    </ul>
                  </div>
                </div>
            </div>



        </div>
    </div>
</div>

    <div class="copyright">
    <div class="container">
        <div class="row">
          <div class="col-12 text-center">
            <div class="copyright__text">
                
                <p>© 2024 <strong>Minimalin</strong>. All rights reserved.</p>
           
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
 <!-- footer__section__end -->




<!-- modal__section__start -->
<div class="grid__quick__view__modal modalarea modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            <div class="modal-body">
                <div class="row align-items-center">
              
                    <div class="col-xl-6 col-lg-6 col-md-6">
    
                     <div class="grid__quick__img">
                        <img src="img/grid/grid__1.png" alt="">
                     </div>
    
    
                    </div>
    
                    <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                      <div class="grid__quick__content">
                        <h3>W. Men Formal T-shirt</h3>
                        <div class="quick__price">
                            <del>$99.00</del> $120.00
                        </div>
                        <p>we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensuel...</p>


                        <div class="selector__wrapper">
                            <select class="single-option-selector select--wd" data-option="option1" id="product-select-qv-option-0">
                                <option value="White">White</option>
                                <option value="Gold">Gold</option><option value="l">l</option>
                                <option value="Grey">Grey</option>
                                <option value="Maroon">Maroon</option>
                                <option value="Magenta">Magenta</option>
                            </select>
                        </div>


                        <div class="featurearea__quantity">
                            <div class="qty-container">
                                <button class="qty-btn-minus btn-qty" type="button"><i class="fa fa-minus"></i></button>
                                <input type="text" name="qty" value="1" class="input-qty">
                                <button class="qty-btn-plus btn-qty" type="button"><i class="fa fa-plus"></i></button>
                            </div>
                            <a class="default__button" href="#">Add to cart</a>
                        
                        </div>

                      </div>
                    </div>
    
                </div>
            </div>
        </div>
    </div>
</div>



</main>


    <!-- JS here -->
    <script src="{{asset('assets/frontend/js/vendor/modernizr-3.5.0.min.js') }} "></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script src="{{asset('assets/frontend/js/popper.min.js')}} "></script>
    <script src="{{asset('assets/frontend/js/bootstrap.min.js')}} "></script>
    <script src="{{asset('assets/frontend/js/isotope.pkgd.min.js')}} "></script>
    <script src="{{asset('assets/frontend/js/one-page-nav-min.js')}} "></script>
    <script src="{{asset('assets/frontend/js/slick.min.js')}} "></script>
    <script src="{{asset('assets/frontend/js/jquery.meanmenu.min.js')}} "></script>
    <script src="{{asset('assets/frontend/js/ajax-form.js')}} "></script>
    <script src="{{asset('assets/frontend/js/wow.min.js')}} "></script>
    <script src="{{asset('assets/frontend/js/jquery.scrollUp.min.js')}} "></script>
    <script src="{{asset('assets/frontend/js/imagesloaded.pkgd.min.js')}} "></script>
    <script src="{{asset('assets/frontend/js/jquery.magnific-popup.min.js')}} "></script>
    <script src="{{asset('assets/frontend/js/waypoints.min.js')}} "></script>
    <script src="{{asset('assets/frontend/js/jquery.counterup.min.js')}} "></script>
    <script src="{{asset('assets/frontend/js/fontawesome.min.js')}} "></script>
    <script src="{{asset('assets/frontend/js/plugins.js')}} "></script>
    <script src="{{asset('assets/frontend/js/main.js')}} "></script>

</body>

</html>