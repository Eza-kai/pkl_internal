@extends('layouts.frontend')
@section('content')
<div class="herobanner">
                <div class=" container-fluid hero__fullwidth__spacing">

                    <div class="herobanner__inner">


                            <div class="container herobannerarea__slider  slider__default__arrow slider__default__dot">
                                <div class="herobannerarea__slider__single">
                                    <div class="row align-items-center">
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-12 herobanner__text__side">
                                            <div class="herobanner__text__wraper ltn__slide-animation">
                                                <h1 class="herobanner__title herobanner__title__color animated">Men Collection</h1>
                                                <div class="herobanner__text herobanner__text__color  animated">
                                                    <p>Enchanting Styles for Dreamy Souls.</p>
                                                </div>
                                                <div class="herobanner__button herobanner__button__color  animated">
                                                    <a href="#" class="default__button" tabindex="0">Shop Now</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-12 herobanner__img__side">
                                            <div class="herobanner__img">
                                                <img src="img/herobanner/main_herobanner__2.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="herobannerarea__slider__single">
                                    <div class="row align-items-center">
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-12 herobanner__text__side">
                                            <div class="herobanner__text__wraper ltn__slide-animation">
                                                <h1 class="herobanner__title herobanner__title__color animated">Women Collection</h1>
                                                <div class="herobanner__text herobanner__text__color  animated">
                                                    <p>Enchanting Styles for Dreamy Souls.</p>
                                                </div>
                                                <div class="herobanner__button herobanner__button__color  animated">
                                                    <a href="#" class="default__button" tabindex="0">Shop Now</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-12 herobanner__img__side">
                                            <div class="herobanner__img">
                                                <img src="img/herobanner/main_herobanner__1.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="herobannerarea__slider__single">
                                    <div class="row align-items-center">
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-12 herobanner__text__side">
                                            <div class="herobanner__text__wraper ltn__slide-animation">
                                                <h1 class="herobanner__title herobanner__title__color animated">Kids Collection</h1>
                                                <div class="herobanner__text herobanner__text__color  animated">
                                                    <p>Enchanting Styles for Dreamy Souls.</p>
                                                </div>
                                                <div class="herobanner__button herobanner__button__color  animated">
                                                    <a href="#" class="default__button" tabindex="0">Shop Now</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-12 herobanner__img__side">
                                            <div class="herobanner__img">
                                                <img src="img/herobanner/main_herobanner__3.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                                    
                     </div> 
                </div>
            </div>
         <!-- herobanner__end -->

         <!-- banner__section__start -->
            <div class="banner sp_top_80 sp_bottom_80">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                            <div class="banner__img">
                                <img src="img/banner/banner__1.png" alt="">
                                <div class="banner__info">
                                    <h2><a href="shop.html">Suits & Formalwear</a></h2>
                                    <div class="banner__button">
                                        <a class="default__button btn__black" href="shop.html">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                            <div class="banner__img">
                                <img src="img/banner/banner__2.png" alt="">
                                <div class="banner__info">
                                    <h2><a href="shop.html">Tops & Gowns</a></h2>
                                    <div class="banner__button">
                                        <a class="default__button btn__black" href="shop.html">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          <!-- banner__section__end -->

          <!-- best__selling__start -->
            <div class="best__selling sp_bottom_80">
                <div class="container">

                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="section__title">
                                <h2>Best Selling</h2>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="best__selling__tab">
                                <ul class="nav  best__selling__tab__wrap" id="myTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="product__tap__link active" data-bs-toggle="tab" data-bs-target="#projects__one" type="button">Man</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="product__tap__link" data-bs-toggle="tab" data-bs-target="#projects__two" type="button">Woman</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="product__tap__link" data-bs-toggle="tab" data-bs-target="#projects__three" type="button">Baby</button>
                                    </li>
                                  
        
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="tab-content " id="myTabContent">
                        <div class="tab-pane fade active show" id="projects__one" role="tabpanel" aria-labelledby="projects__one">
                            <div class="row grid__responsive">
                                @foreach ($product as $data)
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
                                    <div class="grid__wraper">
                                        <div class="grid__wraper__img">
                                            <div class="grid__wraper__img__inner">
                                                <a href="/product/{{ $data->slug }}">
                                                    <img class="primary__image" src="{{Storage::url($data->image)}}" alt="Primary Image">
                                                    <img class="secondary__image" src="{{Storage::url($data->image)}}" alt="Secondary Image">
                                                </a>
                                            </div>
                                            <div class="grid__wraper__icon">                                
                                                <ul>
                                                    <li>
                                                        <span data-bs-toggle="modal" data-bs-target="#productModal-{{ $data->slug }}">
                                                            <a class="quick__view__action" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View" data-bs-original-title="Quick View">
                                                                <i class="far fa-eye"></i>
                                                            </a>
                                                        </span>
                                                    </li>
        
                                                    <li>
                                                        <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Add To Cart" data-bs-original-title="Add To Cart">
                                                            <i class="fas fa-shopping-cart"></i>
                                                        </a>                                             
                                                    </li>                                                                                                                    
                                                </ul>   
                                            </div>
        
                                            <div class="grid__wraper__badge">
                                                <span class="new__badge">New</span>
                                                <span class="sale__badge">-15%</span>
                                            </div>
        
                                            <div class="grid__wraper__countdown" data-countdown="2026/06/01">
                                                <div class="count">
                                                    <p>422</p><span>Days</span>
                                                </div>
                                                <div class="count">
                                                    <p>23</p> <span>Hrs</span>
                                                </div>
                                                <div class="count">
                                                    <p>25</p> <span>Min</span>
                                                </div>
                                                <div class="count">
                                                    <p>01</p> <span>Sec</span>
                                                </div>
                                            </div>
        
                                        </div>
                                        <div class="grid__wraper__info">
                                            <h3 class="grid__wraper__tittle">
                                                <a href="/product/{{ $data->name }}" tabindex="0">{{ $data->name }}</a>
                                            </h3>
                                            <div class="grid__wraper__price">                    
                                                <span>Rp. {{number_format($data->price,0,'.','.')}}</span> 
                                            </div>                                            
                                        </div>                                        
                                    </div>                                                            
                                </div>
                                @endforeach
                            </div>
                        </div>                
                    </div>

                    <div class="row">
                        <div class="col-xl-12">
                            <div class="best__selling__button">
                                <a class="default__button" href="#">View All</a>
                            </div>
                        </div>
                    </div>

                 
                </div>
            </div>
           <!-- best__selling__start -->

           <!-- cowndown__banner start -->
              
            <!-- cowndown__banner end -->


            <!-- feature__section__start -->
           
            <!-- feature__section__start -->



                        <!-- feature__section__start -->




        <!-- animate__content__start -->
                        <div class="animate__content sp_bottom_100">
                            <div class="container-fluid full__width__padding">
                                <div class="animate__content__wrap">
                                    <div class="animate__content__single">
                                        <span> Returns accepted for 30 days</span>
                                    </div>
                                    <div class="animate__content__single animate__content__single--2">
                                        <span>  Free return shipping</span>
                                    </div>
                                    <div class="animate__content__single">
                                        <span> No restocking fee</span>
                                    </div>
                                    <div class="animate__content__single animate__content__single--2">
                                        <span> No final sale items</span>
                                    </div>
                                    <div class="animate__content__single">
                                        <span>  100% Payment Secure </span>
                                    </div>
                                    <div class="animate__content__single animate__content__single--2">
                                        <span>Online Support</span>
                                    </div>
                                    <div class="animate__content__single">
                                        <span> Returns accepted for 30 days</span>
                                    </div>
                                    <div class="animate__content__single animate__content__single--2">
                                        <span>  Free return shipping</span>
                                    </div>
                                    <div class="animate__content__single">
                                        <span> No restocking fee</span>
                                    </div>
                                    <div class="animate__content__single animate__content__single--2">
                                        <span> No final sale items</span>
                                    </div>
                                    <div class="animate__content__single">
                                        <span>  100% Payment Secure </span>
                                    </div>
                                    <div class="animate__content__single animate__content__single--2">
                                        <span>Online Support</span>
                                    </div>
                                </div>
                            </div>
                        </div>
        <!-- animate__content__start -->

<!-- blog__section__start -->

 <!-- blog__section__start -->

<!-- fetaure__section__start -->
 <div class="feature__2 sp_bottom_80">
    <div class="container">
        <div class="row">
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="feature__2__single">
                    <div class="feature__2__icon">
                        <img src="{{asset('assets/frontend/img/feature/feature__1.svg')}}" alt="">
                    </div>
                    <div class="feature__2__text">
                        <h4>Free Shipping</h4>
                        <p>On orders over <strong>$99.</strong></p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="feature__2__single">
                    <div class="feature__2__icon">
                        <img src="{{asset('assets/frontend/img/feature/feature__2.svg')}}" alt="">
                    </div>
                    <div class="feature__2__text">
                        <h4>Money Back</h4>
                        <p>Money back in 15 days..</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="feature__2__single">
                    <div class="feature__2__icon">
                        <img src="{{asset('assets/frontend/img/feature/feature__3.svg')}}" alt="">
                    </div>
                    <div class="feature__2__text">
                        <h4>Secure Checkout</h4>
                        <p>100% Payment Secure.</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="feature__2__single">
                    <div class="feature__2__icon">
                        <img src="{{asset('assets/frontend/img/feature/feature__4.svg')}}" alt="">
                    </div>
                    <div class="feature__2__text">
                        <h4>Online Support</h4>
                        <p>Ensure the product quality.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
 </div>
 <!-- fetaure__section__end -->

 <!-- instagram__start -->
 
@endsection
