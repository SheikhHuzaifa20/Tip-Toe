@extends('main')
@section('content')
    <section>
        <!-- SECTION GET-DRESSED START -->
        <section class="Get-Dressed">
            <div class="diamondstag diamondstagHome">
                <img src="{{ url('assets/image/diamonds1.png') }}" class="img-fluid" alt="">
            </div>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <!-- <div class="GetDressedtext">
                                                   <h1 class="sentence">Get dressed in summer, light your sun!</h1>
                                                     <p class="sentence">
                                                         Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua auis ipsum suspendisse ultrices gravida.
                                                     </p>
                                                     <a href="#" class="btn btnCustom">SHOP NOW</a>
                                                   </div> -->
                        <div class="anim-text-banner" data-aos="slide-right" data-aos-duration="1500">
                            <span class="anim-text">Get dressed in </span>
                            <br>
                            <br>
                            <span class="anim-text">light your sun! </span>
                            <!-- <div class="anim-text-parent">
                                                      <span class="anim-text">Dressed.</span>
                                                      <span class="anim-text">Shaper.</span>
                                                      <span class="anim-text">Shaper.</span>
                                                      <span class="anim-text">add new line here</span>
                                                      <span class="v-bar"></span>
                                                      </div> -->
                            <br>
                        </div>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore
                            et dolore magna aliqua auis ipsum suspendisse ultrices gravida.
                        </p>
                        <a href="#" class="btn btnCustom">SHOP NOW</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- SECTION GET-DRESSED END -->
        <!-- SECTION CATEGORY START -->
        <section class="CategoryMain">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="CategoryHeading">
                            <h1 class="animation-1"><span style="animation-delay: 0s;">O</span><span
                                    style="animation-delay: 0.1s;">u</span><span style="animation-delay: 0.2s;">r</span>
                                <span style="animation-delay: 0.3s;">C</span><span
                                    style="animation-delay: 0.4s;">a</span><span
                                    style="animation-delay: 0.5s;">t</span><span
                                    style="animation-delay: 0.6s;">e</span><span
                                    style="animation-delay: 0.7s;">g</span><span
                                    style="animation-delay: 0.8s;">o</span><span
                                    style="animation-delay: 0.9s;">r</span><span style="animation-delay: 1s;">i</span><span
                                    style="animation-delay: 1.1s;">e</span><span style="animation-delay: 1.2s;">s</span>
                            </h1>
                        </div>
                    </div>
                    <div class="SliderProduct owl-carousel owl-theme owl-loaded owl-drag">
                        <div class="owl-stage-outer">
                            <div class="owl-stage"
                                style="transform: translate3d(-1437px, 0px, 0px); transition: all; width: 4600px;">
                                <div class="owl-item cloned shadow p-3 mb-5 bg-body rounded"
                                    style="width: 277.5px; margin-right: 10px;">
                                    <div class="item">
                                        <div class="categoryInner aos-init aos-animate" data-aos="fade-up"
                                            data-aos-duration="2000">
                                            <div class="categoryimages">
                                                <a href="{{ route('gold') }}">
                                                    <img src="{{ url('assets/image/acce.png') }}" class="img-fluid"
                                                        alt=""></a>
                                                <h3>Accessories</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item cloned " style="width: 277.5px; margin-right: 10px;">
                                    <div class="item">
                                        <div class="categoryInner aos-init aos-animate" data-aos="fade-down"
                                            data-aos-duration="2000">
                                            <div class="categoryimages">
                                                    <a href="{{ route('bags') }}">
                                                        <img src="{{ url('assets/image/j3.jpg') }}" class="img-fluid"
                                                            alt=""></a>
                                                <h3>HandBag</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 277.5px; margin-right: 10px;">
                                    <div class="item">
                                        <div class="categoryInner aos-init aos-animate" data-aos="fade-up"
                                            data-aos-duration="2000">
                                            <div class="categoryimages">
                                                <a href="{{ route('shoes') }}">
                                                    <img src="{{ url('assets/image/shoes-collection/shoe3.webp') }}"
                                                        class="img-fluid" alt=""></a>
                                                <h3>Shoes</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item active" style="width: 277.5px; margin-right: 10px;">
                                    <div class="item">
                                        <div class="categoryInner aos-init aos-animate" data-aos="fade-up"
                                            data-aos-duration="2000">
                                            <div class="categoryimages">
                                                <a href="{{ route('Undergarments') }}">
                                                    <img src="{{ url('assets/image/lingrie/lingrie2.jpg') }}"
                                                        class="img-fluid" alt=""></a>
                                                <h3>Lingrie</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item active" style="width: 277.5px; margin-right: 10px;">
                                    <div class="item">
                                        <div class="categoryInner aos-init aos-animate" data-aos="fade-up"
                                            data-aos-duration="2000">
                                            <div class="categoryimages">
                                                <a href="{{ route('cloth') }}">
                                                    <img src="{{ url('assets/image/royal-collection/royal1.jpg') }}"
                                                        class="img-fluid" alt=""></a>
                                                <h3>Royalty Collection</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item active" style="width: 277.5px; margin-right: 10px;">
                                    <div class="item">
                                        <div class="categoryInner aos-init aos-animate" data-aos="fade-up"
                                            data-aos-duration="2000">
                                            <div class="categoryimages">
                                                <a href="{{ route('fancy') }}">
                                                    <img src="{{ url('assets/image/plus-size/plus1.jpg') }}"
                                                        class="img-fluid" alt=""></a>
                                                <h3>Plus Size</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="owl-nav"><button type="button" role="presentation" class="owl-prev"><span
                                    aria-label="Previous">‹</span></button><button type="button" role="presentation"
                                class="owl-next"><span aria-label="Next">›</span></button></div>
                        <div class="owl-dots disabled"></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- SECTION CATEGORY END -->
        <!-- <div class="slider_nav">
                                                <button class="am-next">Next</button>
                                                <button class="am-prev">Previous</button>
                                             </div> -->
        <!-- SECTION SWINWEAR START -->
        <section class="SwimWear">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-7">
                        <div class="swimweartext" data-aos="fade-down" data-aos-duration="1500">
                            @foreach ($home as $home)
                                <h1>{{ $home->heading1 }}</h1>
                            @endforeach
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                labore et dolore magna aliqua auis ipsum suspendisse ultrices gravida.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <!-- SECTION SWINWEAR END -->
        <!-- SECTION PRODUCT START -->
        <section class="ProductMain">
            <div class="container">
                <div class="row">
                    <div class="SliderProduct owl-carousel owl-theme">
                        @foreach ($data as $key => $value)
                            <div class="item">
                                <div class="categoryInner" data-aos="fade-up" data-aos-duration="2000">
                                    <div class="categoryimages">
                                        <a href="{{ route('productdetail', ['id' => $value->id]) }}">
                                            <img src="{{ asset($value->image) }}" class="img-fluid" alt="">
                                        </a>
                                        <p>{{ $value->product_title }}</p> <!-- Dynamic product name -->
                                        <h3>${{ $value->price }}</h3>
                                        <!-- Dynamic price, formatted to 2 decimal places -->
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
        <!-- SECTION PRODUCT END -->

        <!-- SECTION SWINWEAR START -->
        <section class="AccessoriesSec SwimWear">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-7">
                        <div class="swimweartext" data-aos="fade-down" data-aos-duration="1500">
                            <h1>{{ $home->heading2 }}</h1>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                labore et dolore magna aliqua auis ipsum suspendisse ultrices gravida.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- SECTION SWINWEAR END -->
        <!-- SECTION PRODUCT START -->
        <section class="ProductMain">
            <div class="container">
                <div class="row">
                    <div class="SliderProduct owl-carousel owl-theme">
                        @foreach ($gold as $key => $value)
                            <div class="item">
                                <div class="categoryInner" data-aos="fade-up" data-aos-duration="2000">
                                    <div class="categoryimages">
                                        <a href="{{ route('productdetail', ['id' => $value->id]) }}">
                                            <img src="{{ asset($value->image) }}" class="img-fluid" alt="">
                                        </a>
                                        <p>{{ $value->product_title }}</p> <!-- Dynamic product name -->
                                        <h3>${{ $value->price }}</h3>
                                        <!-- Dynamic price, formatted to 2 decimal places -->
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
        <!-- SECTION PRODUCT END -->


        <!-- SECTION SWINWEAR START -->
        <section class="SwimWear BodyShaperMain">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-7 offset-md-5">
                        <div class="swimweartext" data-aos="slide-right" data-aos-duration="2000">
                            <h1>{{ $home->heading3 }}</h1>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                labore et dolore magna aliqua auis ipsum suspendisse ultrices gravida.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="ProductMain">
            <div class="container">
                <div class="row">
                    <div class="SliderProduct owl-carousel owl-theme">
                        @foreach ($shoes as $key => $value)
                            <div class="item">
                                <div class="categoryInner" data-aos="fade-up" data-aos-duration="2000">
                                    <div class="categoryimages">
                                        <a href="{{ route('productdetail', ['id' => $value->id]) }}">
                                            <img src="{{ asset($value->image) }}" class="img-fluid" alt="">
                                        </a>
                                        <p>{{ $value->product_title }}</p> <!-- Dynamic product name -->
                                        <h3>${{ $value->price }}</h3>
                                        <!-- Dynamic price, formatted to 2 decimal places -->
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>

        <!-- SECTION SWINWEAR END -->
        <!-- SECTION PRODUCT START -->



        <!-- SECTION PRODUCT END -->

        <!-- SECTION SWINWEAR START -->
        <section class="plusSize plus-size">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-7 offset-md-5">
                        <div class="swimweartext" data-aos="slide-right" data-aos-duration="2000">
                            <h1>{{ $home->heading4 }}</h1>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                labore et dolore magna aliqua auis ipsum suspendisse ultrices gravida.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- SECTION SWINWEAR END -->
        <!-- SECTION PRODUCT START -->
        <section class="ProductMain">
            <div class="container">
                <div class="row">
                    <div class="SliderProduct owl-carousel owl-theme">
                        @foreach ($fancy as $key => $value)
                            <div class="item">
                                <div class="categoryInner" data-aos="fade-up" data-aos-duration="2000">
                                    <div class="categoryimages">
                                        <a href="{{ route('productdetail', ['id' => $value->id]) }}">
                                            <img src="{{ asset($value->image) }}" class="img-fluid" alt="">
                                        </a>
                                        <p>{{ $value->product_title }}</p> <!-- Dynamic product name -->
                                        <h3>${{ $value->price }}</h3>
                                        <!-- Dynamic price, formatted to 2 decimal places -->
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
        <!-- SECTION PRODUCT END -->

        <!-- SECTION SWINWEAR START -->
        <section class="lingrie lingrie-size">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-7 offset-md-5">
                        <div class="swimweartext" data-aos="slide-right" data-aos-duration="2000">
                            <h1>{{ $home->heading5 }}</h1>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                labore et dolore magna aliqua auis ipsum suspendisse ultrices gravida.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- SECTION SWINWEAR END -->
        <!-- SECTION PRODUCT START -->
        <section class="ProductMain">
            <div class="container">
                <div class="row">
                    <div class="SliderProduct owl-carousel owl-theme">
                        @foreach ($Undergarments as $key => $value)
                            <div class="item">
                                <div class="categoryInner" data-aos="fade-up" data-aos-duration="2000">
                                    <div class="categoryimages">
                                        <a href="{{ route('productdetail', ['id' => $value->id]) }}">
                                            <img src="{{ asset($value->image) }}" class="img-fluid" alt="">
                                        </a>
                                        <p>{{ $value->product_title }}</p> <!-- Dynamic product name -->
                                        <h3>${{ $value->price }}</h3>
                                        <!-- Dynamic price, formatted to 2 decimal places -->
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
        <!-- SECTION PRODUCT END -->

        <!-- SECTION BODY SHRINKER START -->
        <section class="SwimWear BodyShrinker">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-7">
                        <div class="swimweartext">
                            <h1>{{ $home->heading6 }}</h1>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                labore et dolore magna aliqua auis ipsum suspendisse ultrices gravida.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- SECTION BODY SHRINKER END -->
        <!-- SECTION PRODUCT START -->
        <section class="ProductMain">
            <div class="container">
                <div class="row">
                    <div class="SliderProduct owl-carousel owl-theme">
                        @foreach ($bags as $key => $value)
                            <div class="item">
                                <div class="categoryInner" data-aos="fade-up" data-aos-duration="2000">
                                    <div class="categoryimages">
                                        <a href="{{ route('productdetail', ['id' => $value->id]) }}">
                                            <img src="{{ asset($value->image) }}" class="img-fluid" alt="">
                                        </a>
                                        <p>{{ $value->product_title }}</p> <!-- Dynamic product name -->
                                        <h3>${{ $value->price }}</h3>
                                        <!-- Dynamic price, formatted to 2 decimal places -->
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
        <!-- SECTION PRODUCT END -->
        <!-- SECTION SWINWEAR START -->
        <section class="SwimWear HairWigs">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-7 offset-md-5" data-aos="fade-up" data-aos-duration="2000">
                        <div class="swimweartext">
                            <h1>{{ $home->heading7 }}</h1>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                labore et dolore magna aliqua auis ipsum suspendisse ultrices gravida.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- SECTION SWINWEAR END -->
        <!-- SECTION PRODUCT START -->
        <section class="ProductMain">
            <div class="container">
                <div class="row">
                    <div class="SliderProduct owl-carousel owl-theme">
                        @foreach ($frock as $key => $value)
                            <div class="item">
                                <div class="categoryInner" data-aos="fade-up" data-aos-duration="2000">
                                    <div class="categoryimages">
                                        <a href="{{ route('productdetail', ['id' => $value->id]) }}">
                                            <img src="{{ asset($value->image) }}" class="img-fluid" alt="">
                                        </a>
                                        <p>{{ $value->product_title }}</p> <!-- Dynamic product name -->
                                        <h3>${{ $value->price }}</h3>
                                        <!-- Dynamic price, formatted to 2 decimal places -->
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
        <!-- SECTION PRODUCT END -->
        <!-- SECTION SWINWEAR START -->
        <section class="SwimWear HairWigs ClothingUsed">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-7 offset-md-5" data-aos="fade-up" data-aos-duration="2000">
                        <div class="swimweartext">
                            <h1>{{ $home->heading8 }}</h1>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                labore et dolore magna aliqua auis ipsum suspendisse ultrices gravida.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="ProductMain">
            <div class="container">
                <div class="row">
                    <div class="SliderProduct owl-carousel owl-theme">
                        @foreach ($frock as $key => $value)
                            <div class="item">
                                <div class="categoryInner" data-aos="fade-up" data-aos-duration="2000">
                                    <div class="categoryimages">
                                        <a href="{{ route('productdetail', ['id' => $value->id]) }}">
                                            <img src="{{ asset($value->image) }}" class="img-fluid" alt="">
                                        </a>
                                        <p>{{ $value->product_title }}</p> <!-- Dynamic product name -->
                                        <h3>${{ $value->price }}</h3>
                                        <!-- Dynamic price, formatted to 2 decimal places -->
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
        <!-- SECTION SWINWEAR END -->
        <!-- SECTION PRODUCT START -->

        <!-- SECTION PRODUCT END -->

        <!-- SECTION "COMPLIMENT" START -->
        <!-- slider -->
        <section class="best-selling" data-aos="fade-up" data-aos-duration="1500">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-8" data-aos="fade-right" data-aos-anchor-placement="top-bottom"
                        data-aos-duration="1500">
                        <div class="SecMainheadin">
                            <h1>{{ $home->heading9 }}</h1>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="carouselNew-carousel owl-carousel owl-theme ">
                        <div class="item">
                            <div class="row align-items-center text-center">
                                <div class="col-lg-12">
                                    <div class="banner-content">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                            nostrud
                                            exercitation ullamco laboris </p>
                                        <h6>VOGUE</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="row align-items-center text-center">
                                <div class="col-lg-12">
                                    <div class="banner-content ">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                            nostrud
                                            exercitation ullamco laboris </p>
                                        <h6>VOGUE</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="row align-items-center text-center">
                                <div class="col-lg-12">
                                    <div class="banner-content">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                            nostrud
                                            exercitation ullamco laboris </p>
                                        <h6>VOGUE</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="row align-items-center text-center">
                                <div class="col-lg-12">
                                    <div class="banner-content">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                            nostrud
                                            exercitation ullamco laboris </p>
                                        <h6>VOGUE</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
        <!-- slider -->
        <!-- SECTION "COMPLIMENT" END -->
        <!-- SECTION "FUN MAIL" START -->
        <section class="funemail">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center" data-aos="flip-right" data-aos-duration="1500">
                        <div class="emailheading">
                            <h2>We send fun emails. Pop yours here <br> and we'll prove it.</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt
                            </p>
                        </div>
                        <div class="row">
                            <div class="col-md-8 offset-md-2" data-aos="flip-left" data-aos-duration="1500">
                                <div class="Emailform">
                                    <div class="input-group-prepend">
                                        <input type="text" class="form-control" placeholder="Insert Your Email">
                                        <div class="input-group-text"><i class="fas fa-long-arrow-alt-right"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                            </div>
                        </div>
                    </div>
        </section>
        <!-- SECTION "FUN MAIL" START -->
    </section>
@endsection
