
@extends('layouts.site')

@section('slider')
    <header id="header" class="header-1 sticky-menu" style="height: 263px;">
        @include('front.includes.header-mobile')
        @include('front.includes.header-top')
        @include('front.includes.header-center')
        @include('front.includes.header-bottom')

    </header>

    <div id="header-sticky">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="d-flex align-items-center col-xl-3 col-md-3">
                    <div class="contentstickynew_verticalmenu"></div>
                    <div class="contentstickynew_logo"></div>
                </div>
                <div class="contentstickynew_search col-xl-7 col-md-6"></div>
                <div class="contentstickynew_group d-flex justify-content-end col-xl-2 col-md-3"></div>
            </div>
        </div>
    </div>

    <div id="displayTop" class="displaytopone">
        <div class="container">
            <div class="row">
                <div class="nov-row  nov_row-no-padding " data-nov-full-width="true" data-nov-stretch-content="true" style="position: relative; right: -74.5px; box-sizing: border-box; -webkit-box-flex: 0; flex: 0 0 1349px; max-width: 1349px;"><div class="nov-row-wrap row">    <div id="nov-slider" class="slider-wrapper theme-default col-xl-12 col-lg-12 col-md-12" data-effect="random" data-slices="15" data-animspeed="500" data-pausetime="10000" data-startslide="0" data-directionnav="false" data-controlnav="true" data-controlnavthumbs="false" data-pauseonhover="true" data-manualadvance="false" data-randomstart="false">
                            <div class="nov_preload" style="display: none;">
                                <div class="process-loading active">
                                    <div class="loader">
                                        @isset($sliders)
                                            @foreach($sliders as $slider)
                                                <div class="dot"></div>
                                            @endforeach
                                        @endisset
                                    </div>
                                </div>
                            </div>
                            <div class="nivoSlider">
                                @isset($sliders)
                                    @foreach($sliders as $slider)
                                        <a href="#" class="nivo-imageLink" style="display: none;">
                                            <img class="nivo-main-image img-fluid" src="{{$slider->photo}}" alt="" title="#htmlcaption_51" style="">
                                        </a>

                                    @endforeach
                                @endisset

                            </div>
                        </div></div><div class="nov_row-full-width clearfix w-100"></div>
                </div>
            </div>
        </div>


@stop
@section('content')


        <section id="content" class="page-home pagehome-three">

            <div class="container">
                <div class="row">
                    <div class="nov-row spacing-30 mt-15 col-lg-12 col-xs-12">
                        <div class="nov-row-wrap row">
                            <div class="nov-image col-lg-4 col-md-4">
                                <div class="block">
                                    <div class="block_content">
                                        <div class="effect">
                                            <a href="#">
                                                <img class="img-fluid"
                                                  src="http://demo.bestprestashoptheme.com/savemart/modules/novpagemanage/img/66a96e8019b9f475262b900e1da04490.jpg"
                                                  alt="banner3-1" title="banner3-1"></a>


                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="nov-image col-lg-4 col-md-4">
                                <div class="block">
                                    <div class="block_content">
                                        <div class="effect">
                                            <a href="#"> <img class="img-fluid"
                                                              src="http://demo.bestprestashoptheme.com/savemart/modules/novpagemanage/img/022031ef3a1ecf00ebe9cc712fa17d1f.jpg"
                                                              alt="banner3-1" title="banner3-1"></a>


                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="nov-image col-lg-4 col-md-4">
                                <div class="block">
                                    <div class="block_content">
                                        <div class="effect">
                                            <a href="#"> <img class="img-fluid"
                                                              src="http://demo.bestprestashoptheme.com/savemart/modules/novpagemanage/img/deaa8eca1653ec42bc4c045875a674ca.jpg"
                                                              alt="banner3-1" title="banner3-1"></a>


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="nov-row  col-lg-12 col-xs-12">
                        <div class="nov-row-wrap row">
                            <div class="nov-productlist nov-countdown-productlist col-xl-4 col-lg-4 col-md-4  col-xs-12 col-md-12" >
                                <div class="block block-product clearfix">
                                    <h2 class="title_block">
                                        FLASH DEALS
                                    </h2>
                                    <div class="block_content">
                                        <div id="productlist1326409273"
                                             class="product_list countdown-productlist countdown-column-1 owl-carousel owl-theme"
                                             data-autoplay="false" data-autoplaytimeout="6000" data-loop="false"
                                             data-margin="30" data-dots="false" data-nav="true" data-items="1"
                                             data-items_large="1" data-items_tablet="2" data-items_mobile="1">
                                            @isset($flash_deals)
                                                @foreach($flash_deals as $product)
                                                    <div class="item item-list">
                                                        <div class="product-miniature js-product-miniature first_item"  data-id-product-attribute="232" itemscope itemtype="http://schema.org/Product">
                                                            <div class="thumbnail-container">

                                                                <a href="{{route('product.details',$product->slug)}}" class="thumbnail product-thumbnail two-image">
                                                                    <img class="img-fluid image-cover" src = "{{$product ->images[0]->photo ?? ''}}"
                                                                         alt = ""
                                                                         data-full-size-image-url = "{{$product ->images[0]->photo ?? ''}}"
                                                                         width="600"
                                                                         height="600"
                                                                    >
                                                                    <img
                                                                        class="img-fluid image-secondary"
                                                                        src = "{{$product ->images[0]->photo ?? ''}}"
                                                                        alt = ""
                                                                        data-full-size-image-url = "{{$product ->images[0]->photo ?? ''}}"
                                                                        width="600"
                                                                        height="600"
                                                                    >
                                                                </a>


                                                                <div class="product-flags discount">Sale</div>




                                                            </div>
                                                            <div class="product-description">
                                                                <div class="product-groups">

                                                                    <div class="product-title" itemprop="name"><a href="http://demo.bestprestashoptheme.com/savemart/ar/home-appliance/12-232-nam-volutpat-justo-a-vehicula.html#/1-الحجم-ص/11-اللون_-اسود">{{$product ->name}}</a></div>


                                                                    <!-- begin modules/novproductcomments/novproductcomments_reviews.tpl -->
                                                                    <div class="product-comments">
                                                                        <div class="star_content">
                                                                            <div class="star"></div>
                                                                            <div class="star"></div>
                                                                            <div class="star"></div>
                                                                            <div class="star"></div>
                                                                            <div class="star"></div>
                                                                        </div>
                                                                        <span>0 review</span>
                                                                    </div>
                                                                    <!-- end modules/novproductcomments/novproductcomments_reviews.tpl -->

                                                                    <!-- begin /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/jmarketplace/views/templates/hook/product-list.tpl -->
                                                                    <p class="seller_name">
                                                                        <a title="View seller profile" href="http://demo.bestprestashoptheme.com/savemart/ar/jmarketplace/3_harry-makle/">
                                                                            <i class="fa fa-user"></i>
                                                                            Harry Makle
                                                                        </a>
                                                                    </p>

                                                                    <!-- end /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/jmarketplace/views/templates/hook/product-list.tpl -->

                                                                    <div class="product-group-price">

                                                                        <div class="product-price-and-shipping">



                                                                            <span itemprop="price" class="price">{{$product->price}}</span>



                                                                            <span class="regular-price">{{$product->special_price ?? $product->price}}</span>




                                                                        </div>

                                                                    </div>
                                                                </div>

                                                                <div class="product-buttons d-flex justify-content-center" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                                                    <form
                                                                        action=""
                                                                        method="post" class="formAddToCart">
                                                                        @csrf
                                                                        <input type="hidden" name="id_product" value="{{$product -> id}}">
                                                                        <a class="add-to-cart cart-addition"
                                                                           data-product-id="{{$product -> id}}"
                                                                           data-product-slug="{{$product -> slug}}" href="#"
                                                                           data-button-action="add-to-cart">
                                                                            <i class="novicon-cart"></i><span>Add to cart</span></a>

                                                                    <!--<a href="{{Route('cart.add',$product->id)}}" class="add-to-cart">
                                                                    <i class="novicon-cart"></i><span>أضف للسلة</span></a>-->



                                                                    </form>

                                                                    <!-- begin /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/novblockwishlist/novblockwishlist_button.tpl -->

                                                                    <a class="addToWishlist wishlistProd_2" href="#"

                                                                       data-product-id ="{{$product->id}}"
                                                                    >
                                                                        <i class="fa fa-heart"></i>
                                                                        <span>Add to Wishlist</span>
                                                                    </a>
                                                                    <!-- end /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/novblockwishlist/novblockwishlist_button.tpl -->

                                                                    <a href="#" class="quick-view hidden-sm-down"
                                                                       data-product-id ="{{$product->id}}">
                                                                        <i class="fa fa-search"></i><span> نظرة سريعة</span>
                                                                    </a>
                                                                </div>

                                                            </div>

                                                            <!-- begin modules/novthemeconfig/views/templates/hook/countdown.tpl -->
                                                            <div class="countdownfree d-flex" data-date="2021/12/30"></div>

                                                            <!-- end modules/novthemeconfig/views/templates/hook/countdown.tpl -->

                                                        </div>

                                                    </div>

                                                @endforeach


                                            @endisset

                                        </div>
                                    </div>
                                </div>
                            </div>



                            <div class="nov-productlist  productlist-rows   col-xl-8 col-lg-8 col-md-8 col-xs-12 col-md-12" style="padding-top: 50px; ">
                                <div class="block block-product clearfix">
                                    <h2 class="title_block">
                                        NEW ARRIVALS
                                    </h2>

                                    <div class="block_content">
                                    <div id="categories-product">

                                        <div id="js-product-list" >
                                            <div class="products product_list grid row " >
                                                @isset($new_arrivals)

                                                    @foreach($new_arrivals as $product)

                                                        <div class="item  col-lg-4 col-md-6 col-xs-12 text-center no-padding">
                                                            <div class="product-miniature js-product-miniature item-one" data-id-product="2" data-id-product-attribute="60" itemscope="" itemtype="http://schema.org/Product">
                                                                <div class="thumbnail-container">

                                                                    <a href="{{route('product.details',$product->slug)}}" class="thumbnail product-thumbnail two-image">
                                                                        <img class="img-fluid image-cover" src="{{$product ->images[0]->photo ?? ''}}" alt="" data-full-size-image-url="" width="600" height="600" style="padding: 40px;">
                                                                        <img class="img-fluid image-secondary" src="{{$product ->images[0]->photo ?? ''}}" alt="" data-full-size-image-url="" width="600" height="600">
                                                                    </a>


                                                                    <div class="product-flags new">New</div>


                                                                </div>
                                                                <div class="product-description">
                                                                    <div class="product-groups">

                                                                        <div class="category-title"><a href="">{{$product->name}}</a></div>

                                                                        <div class="group-reviews">
                                                                            <div class="product-comments">
                                                                                <div class="star_content">
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                </div>
                                                                                <span>0 review</span>
                                                                            </div>    <p class="seller_name">
                                                                                <a title="View seller profile" href="http://demo.bestprestashoptheme.com/savemart/ar/jmarketplace/1_david-james/">
                                                                                    <i class="fa fa-user"></i>
                                                                                    David James
                                                                                </a>
                                                                            </p>

                                                                            <div class="info-stock ml-auto">
                                                                                <label class="control-label">Availability:</label>
                                                                                <i class="fa fa-check-square-o" aria-hidden="true"></i>
                                                                                {{$product-> in_stock ? 'in stock': 'out of stock'}}
                                                                            </div>
                                                                        </div>

                                                                        <div class="product-title" itemprop="name">
                                                                            <a href="">{{$product->name}}</a>
                                                                        </div>

                                                                        <div class="product-group-price">

                                                                            <div class="product-price-and-shipping">



                                                                                <span itemprop="price" class="price">{{$product->special_price ?? $product->price}}</span>

                                                                                @if($product ->special_price)
                                                                                    <span  class="regular-price">{{$product->price}}</span>
                                                                                @endif



                                                                            </div>

                                                                        </div>
                                                                        <div class="product-desc" itemprop="desciption">{!! $product->description !!}</div>
                                                                    </div>


                                                                    <div class="product-buttons d-flex justify-content-center" itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">
                                                                        <form
                                                                            action=""
                                                                            method="post" class="formAddToCart">
                                                                            @csrf
                                                                            <input type="hidden" name="id_product" value="{{$product -> id}}">
                                                                            <a class="add-to-cart cart-addition"
                                                                               data-product-id="{{$product -> id}}"
                                                                               data-product-slug="{{$product -> slug}}" href="#"
                                                                               data-button-action="add-to-cart">
                                                                                <i class="novicon-cart"></i><span>Add to cart</span></a>

                                                                        <!--<a href="{{Route('cart.add',$product->id)}}" class="add-to-cart">
                                                                    <i class="novicon-cart"></i><span>أضف للسلة</span></a>-->



                                                                        </form>

                                                                        <a class="addToWishlist wishlistProd_2" href="#"

                                                                           data-product-id ="{{$product->id}}"
                                                                        >
                                                                            <i class="fa fa-heart"></i>
                                                                            <span>Add to Wishlist</span>
                                                                        </a>
                                                                        <a href="#" class="quick-view hidden-sm-down"
                                                                           data-product-id ="{{$product->id}}">
                                                                            <i class="fa fa-search"></i>
                                                                            <span> نظرة سريعة</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>


                                                        @include('front.includes.product-details-model',$product)

                                                        @include('front.includes.product-cart-model',$product)
                                                    @endforeach
                                                @endisset


                                            </div>
                                        </div>

                                    </div>

                                    </div>



                                </div>
                            </div>




                        </div>
                    </div>


                    <div class="nov-row spacing-30 col-lg-12 col-xs-12">
                        <div class="nov-row-wrap row">
                            <div class="nov-image col-lg-6 col-md-6">
                                <div class="block">
                                    <div class="block_content">
                                        <div class="effect">
                                            <a href="#">
                                                <img class="img-fluid"
                                                              src="http://demo.bestprestashoptheme.com/savemart/modules/novpagemanage/img/7fdfbf16d6ffe0c99cd109bd3a886527.jpg"
                                                              alt="banner-4" title="banner-4"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="nov-image col-lg-6 col-md-6">
                                <div class="block">
                                    <div class="block_content">
                                        <div class="effect">
                                            <a href="#"> <img class="img-fluid"
                                                              src="http://demo.bestprestashoptheme.com/savemart/modules/novpagemanage/img/64cc43a522417168a8f8418b3d783545.jpg"
                                                              alt="banner-5" title="banner-5"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="nov-row  col-lg-12 col-xs-12">
                        <div class="nov-row-wrap row">
                            <div class="nov-productlist   productlist-slider      col-xl-9 col-lg-9 col-md-9 col-xs-12 col-md-12 col-lg-12">
                                <div class="block block-product clearfix">
                                    <h2 class="title_block">
                                        TRENDING NOW
                                    </h2>
                                    <div class="block_content">

                                        <div id="js-product-list"
                                             class="product_list grid owl-carousel owl-theme multi-row"
                                             data-autoplay="false" data-autoplaytimeout="6000" data-loop="false"
                                             data-margin="0" data-dots="false" data-nav="true" data-items="3"
                                             data-items_large="3" data-items_tablet="3" data-items_mobile="2">


                                            @if(isset($trending_now) && count($trending_now)>0)

                                                @foreach($trending_now as $product)

                                                        <div class="item  text-center">

                                                        <div class="product-miniature js-product-miniature item-one first_item" data-id-product="{{$product->id}}" data-id-product-attribute="40" itemscope itemtype="http://schema.org/Product">
                                                            <div class="thumbnail-container">

                                                                <a href="{{route('product.details',$product->slug)}}" class="thumbnail product-thumbnail two-image">
                                                                    <img
                                                                        class="img-fluid image-cover"
                                                                        src = "{{$product ->images[0]->photo ?? ''}}"
                                                                        alt = ""
                                                                        data-full-size-image-url = "{{$product ->images[0]->photo ?? ''}}"
                                                                        width="600"
                                                                        height="600"
                                                                    >
                                                                    <img
                                                                        class="img-fluid image-secondary"
                                                                        src = "{{$product ->images[1]->photo ?? ''}}"
                                                                        alt = ""
                                                                        data-full-size-image-url = "{{$product ->images[1]->photo ?? ''}}"
                                                                        width="600"
                                                                        height="600"
                                                                    >
                                                                </a>





                                                            </div>

                                                            <div class="product-description">
                                                                <div class="product-groups">

                                                                    <div class="category-title"><a href="http://demo.bestprestashoptheme.com/savemart/ar/smartphone-tablet/1-hummingbird-printed-t-shirt.html">Smartphone &amp; Tablet</a></div>


                                                                    <!-- begin modules/novproductcomments/novproductcomments_reviews.tpl -->
                                                                    <div class="product-comments">
                                                                        <div class="star_content">
                                                                            <div class="star star_on"></div>
                                                                            <div class="star star_on"></div>
                                                                            <div class="star star_on"></div>
                                                                            <div class="star star_on"></div>
                                                                            <div class="star star_on"></div>
                                                                        </div>
                                                                        <span>5 review</span>
                                                                    </div>
                                                                    <!-- end modules/novproductcomments/novproductcomments_reviews.tpl -->

                                                                    <!-- begin /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/jmarketplace/views/templates/hook/product-list.tpl -->
                                                                    <p class="seller_name">
                                                                        <a title="View seller profile" href="http://demo.bestprestashoptheme.com/savemart/ar/jmarketplace/1_david-james/">
                                                                            <i class="fa fa-user"></i>
                                                                            David James
                                                                        </a>
                                                                    </p>

                                                                    <!-- end /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/jmarketplace/views/templates/hook/product-list.tpl -->


                                                                    <div class="product-title" itemprop="name"><a href="">{{$product->name}}</a></div>

                                                                    <div class="product-group-price">

                                                                        <div class="product-price-and-shipping">



                                                                            <span itemprop="price" class="price">{{$product->price}}</span>





                                                                        </div>

                                                                    </div>
                                                                </div>
                                                                <div class="product-buttons d-flex justify-content-center" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                                                    <form
                                                                        action=""
                                                                        method="post" class="formAddToCart">
                                                                        @csrf
                                                                        <input type="hidden" name="id_product" value="{{$product -> id}}">
                                                                        <a class="add-to-cart cart-addition"
                                                                           data-product-id="{{$product -> id}}"
                                                                           data-product-slug="{{$product -> slug}}" href="#"
                                                                           data-button-action="add-to-cart">
                                                                            <i class="novicon-cart"></i><span>Add to cart</span></a>

                                                                    <!--<a href="{{Route('cart.add',$product->id)}}" class="add-to-cart">
                                                                    <i class="novicon-cart"></i><span>أضف للسلة</span></a>-->



                                                                    </form>
                                                                    <!-- begin /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/novblockwishlist/novblockwishlist_button.tpl -->

                                                                    <a class="addToWishlist wishlistProd_2" href="#"

                                                                       data-product-id ="{{$product->id}}"
                                                                    >
                                                                        <i class="fa fa-heart"></i>
                                                                        <span>Add to Wishlist</span>
                                                                    </a>
                                                                    <!-- end /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/novblockwishlist/novblockwishlist_button.tpl -->

                                                                    <a href="#" class="quick-view hidden-sm-down"
                                                                       data-product-id ="{{$product->id}}">
                                                                        <i class="fa fa-search"></i><span> نظرة سريعة</span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                            <div class="product-miniature js-product-miniature item-one last_item" data-id-product="{{$product->id}}" data-id-product-attribute="40" itemscope itemtype="http://schema.org/Product">
                                                            <div class="thumbnail-container">

                                                                <a href="{{route('product.details',$product->slug)}}" class="thumbnail product-thumbnail two-image">
                                                                    <img
                                                                        class="img-fluid image-cover"
                                                                        src = "{{$product ->images[0]->photo ?? ''}}"
                                                                        alt = ""
                                                                        data-full-size-image-url = "{{$product ->images[0]->photo ?? ''}}"
                                                                        width="600"
                                                                        height="600"
                                                                    >
                                                                    <img
                                                                        class="img-fluid image-secondary"
                                                                        src = "{{$product ->images[1]->photo ?? ''}}"
                                                                        alt = ""
                                                                        data-full-size-image-url = "{{$product ->images[1]->photo ?? ''}}"
                                                                        width="600"
                                                                        height="600"
                                                                    >
                                                                </a>





                                                            </div>

                                                            <div class="product-description">
                                                                <div class="product-groups">

                                                                    <div class="category-title"><a href="http://demo.bestprestashoptheme.com/savemart/ar/smartphone-tablet/1-hummingbird-printed-t-shirt.html">Smartphone &amp; Tablet</a></div>


                                                                    <!-- begin modules/novproductcomments/novproductcomments_reviews.tpl -->
                                                                    <div class="product-comments">
                                                                        <div class="star_content">
                                                                            <div class="star star_on"></div>
                                                                            <div class="star star_on"></div>
                                                                            <div class="star star_on"></div>
                                                                            <div class="star star_on"></div>
                                                                            <div class="star star_on"></div>
                                                                        </div>
                                                                        <span>5 review</span>
                                                                    </div>
                                                                    <!-- end modules/novproductcomments/novproductcomments_reviews.tpl -->

                                                                    <!-- begin /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/jmarketplace/views/templates/hook/product-list.tpl -->
                                                                    <p class="seller_name">
                                                                        <a title="View seller profile" href="http://demo.bestprestashoptheme.com/savemart/ar/jmarketplace/1_david-james/">
                                                                            <i class="fa fa-user"></i>
                                                                            David James
                                                                        </a>
                                                                    </p>

                                                                    <!-- end /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/jmarketplace/views/templates/hook/product-list.tpl -->


                                                                    <div class="product-title" itemprop="name"><a href="">{{$product->name}}</a></div>

                                                                    <div class="product-group-price">

                                                                        <div class="product-price-and-shipping">



                                                                            <span itemprop="price" class="price">{{$product->price}}</span>





                                                                        </div>

                                                                    </div>
                                                                </div>
                                                                <div class="product-buttons d-flex justify-content-center" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                                                    <form
                                                                        action=""
                                                                        method="post" class="formAddToCart">
                                                                        @csrf
                                                                        <input type="hidden" name="id_product" value="{{$product -> id}}">
                                                                        <a class="add-to-cart cart-addition"
                                                                           data-product-id="{{$product -> id}}"
                                                                           data-product-slug="{{$product -> slug}}" href="#"
                                                                           data-button-action="add-to-cart">
                                                                            <i class="novicon-cart"></i><span>Add to cart</span></a>

                                                                    <!--<a href="{{Route('cart.add',$product->id)}}" class="add-to-cart">
                                                                    <i class="novicon-cart"></i><span>أضف للسلة</span></a>-->



                                                                    </form>
                                                                    <!-- begin /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/novblockwishlist/novblockwishlist_button.tpl -->

                                                                    <a class="addToWishlist wishlistProd_2" href="#"

                                                                       data-product-id ="{{$product->id}}"
                                                                    >
                                                                        <i class="fa fa-heart"></i>
                                                                        <span>Add to Wishlist</span>
                                                                    </a>
                                                                    <!-- end /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/novblockwishlist/novblockwishlist_button.tpl -->

                                                                    <a href="#" class="quick-view hidden-sm-down"
                                                                       data-product-id ="{{$product->id}}">
                                                                        <i class="fa fa-search"></i><span> نظرة سريعة</span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        </div>
                                                @endforeach

                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="nov-productlist     productlist-liststyle-2  col-xl-3 col-lg-3 col-md-3 col-xs-12 col-md-12 col-lg-12">


                                <div class="block block-product clearfix">
                                    <h2 class="title_block">
                                        BEST SELLERS
                                    </h2>
                                    <div class="block_content">
                                        <div id="productlist72625769"
                                             class="product_list grid owl-carousel owl-theme multi-row"
                                             data-autoplay="false" data-autoplaytimeout="6000" data-loop="false"
                                             data-margin="0" data-dots="false" data-nav="true" data-items="1"
                                             data-items_large="3" data-items_tablet="2" data-items_mobile="1">
                                            <div class="item  text-center">
                                                @isset($brands)
                                                @foreach($brands as $brand)

                                                <div class="d-flex flex-wrap align-items-start product-miniature js-product-miniature  first_item"
                                                     data-id-product="1" data-id-product-attribute="40"
                                                     itemscope="" itemtype="http://schema.org/Product">
                                                    <div class="col-12 col-w37 no-padding">
                                                        <div class="thumbnail-container">

                                                            <a href=""
                                                               class="thumbnail product-thumbnail two-image">
                                                                <img class="img-fluid image-cover"
                                                                     src="{{$brand->photo}}"
                                                                     alt=""
                                                                     data-full-size-image-url="{{$brand->photo}}"
                                                                     width="600" height="600">
                                                                <img class="img-fluid image-secondary"
                                                                     src="{{$brand->photo}}"
                                                                     alt=""
                                                                     data-full-size-image-url="{{$brand->photo}}"
                                                                     width="600" height="600">
                                                            </a>

                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-w63 no-padding">
                                                        <div class="product-description">
                                                            <div class="product-groups">
                                                                <div class="product-comments">
                                                                    <div class="star_content">
                                                                        <div class="star star_on"></div>
                                                                        <div class="star star_on"></div>
                                                                        <div class="star star_on"></div>
                                                                        <div class="star star_on"></div>
                                                                        <div class="star star_on"></div>
                                                                    </div>
                                                                    <span>5 review</span>
                                                                </div>
                                                                <p class="seller_name">
                                                                    <a title="View seller profile"
                                                                       href="jmarketplace/1_david-james/index.htm">
                                                                        <i class="fa fa-user"></i>
                                                                        David James
                                                                    </a>
                                                                </p>


                                                                <div class="product-title" itemprop="name"><a
                                                                        href="smartphone-tablet/1-40-hummingbird-printed-t-shirt.html#/1-size-s/6-color-taupe">{{$brand->name}}</a></div>

                                                                <div class="product-group-price">

                                                                    <div class="product-price-and-shipping">


                                                                        <span itemprop="price" class="price"></span>


                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endforeach
                                                @endisset
                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="nov-row policy-home col-lg-12 col-xs-12">
                        <div class="nov-row-wrap row">
                            <div class="nov-html col-xl-4 col-lg-4 col-md-4">
                                <div class="block">
                                    <div class="block_content">
                                        <div class="policy-row"><i class="noviconpolicy noviconpolicy-1"></i>
                                            <div class="policy-content">
                                                <div class="policy-name">Free Delivery From $ 250</div>
                                                <div class="policy-des">Sed ut perspiciatis unde omnis iste
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="nov-html col-xl-4 col-lg-4 col-md-4">
                                <div class="block">
                                    <div class="block_content">
                                        <div class="policy-row"><i class="noviconpolicy noviconpolicy-2"></i>
                                            <div class="policy-content">
                                                <div class="policy-name">Money Back Guarantee</div>
                                                <div class="policy-des">Sed ut perspiciatis unde omnis iste
                                                    natus
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="nov-html col-xl-4 col-lg-4 col-md-4">
                                <div class="block">
                                    <div class="block_content">
                                        <div class="policy-row"><i class="noviconpolicy noviconpolicy-3"></i>
                                            <div class="policy-content">
                                                <div class="policy-name">Authenticity 100% guaranteed</div>
                                                <div class="policy-des">Sed ut perspiciatis unde omnis iste
                                                    natus
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="nov-row  col-lg-12 col-xs-12">
                        <div class="nov-row-wrap row">
                            @isset($Electrical_devices)
                                @foreach ($Electrical_devices as $category)
                            <div class="nov-productlist   productlist-liststyle    col-xl-4 col-lg-4 col-md-4 col-xs-12 col-md-12">
                                <div class="block block-product clearfix">
                                    <h2 class="title_block">
                                        {{ $category->name}}
                                    </h2>
                                    <div class="block_content">
                                        <div id="productlist178913877"
                                             class="product_list grid owl-carousel owl-theme multi-row"
                                             data-autoplay="false" data-autoplaytimeout="6000" data-loop="false"
                                             data-margin="0" data-dots="false" data-nav="true" data-items="1"
                                             data-items_large="1" data-items_tablet="2" data-items_mobile="1">
                                            @foreach ($category->products as $product)

                                                <div class="item  text-center">
                                                <div class="d-flex flex-wrap align-items-start product-miniature js-product-miniature  first_item" data-id-product="1" data-id-product-attribute="40" itemscope itemtype="http://schema.org/Product">
                                                    <div class="col-12 col-w27 no-padding">
                                                        <div class="thumbnail-container">

                                                            <a href="{{route('product.details',$product->slug)}}" class="thumbnail product-thumbnail two-image">
                                                                <img
                                                                    class="img-fluid image-cover"
                                                                    src = "{{$product ->images[0]->photo ?? ''}}"
                                                                    alt = ""
                                                                    data-full-size-image-url = "{{$product ->images[0]->photo ?? ''}}"
                                                                    width="600"
                                                                    height="600"
                                                                >
                                                                <img
                                                                    class="img-fluid image-secondary"
                                                                    src = "{{$product ->images[1]->photo ?? ''}}"
                                                                    alt = ""
                                                                    data-full-size-image-url = "{{$product ->images[1]->photo ?? ''}}"
                                                                    width="600"
                                                                    height="600"
                                                                >
                                                            </a>

                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-w73 no-padding">
                                                        <div class="product-description">
                                                            <div class="product-groups">

                                                                <!-- begin modules/novproductcomments/novproductcomments_reviews.tpl -->
                                                                <div class="product-comments">
                                                                    <div class="star_content">
                                                                        <div class="star star_on"></div>
                                                                        <div class="star star_on"></div>
                                                                        <div class="star star_on"></div>
                                                                        <div class="star star_on"></div>
                                                                        <div class="star star_on"></div>
                                                                    </div>
                                                                    <span>5 review</span>
                                                                </div>
                                                                <!-- end modules/novproductcomments/novproductcomments_reviews.tpl -->

                                                                <!-- begin /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/jmarketplace/views/templates/hook/product-list.tpl -->
                                                                <p class="seller_name">
                                                                    <a title="View seller profile" href="http://demo.bestprestashoptheme.com/savemart/ar/jmarketplace/1_david-james/">
                                                                        <i class="fa fa-user"></i>
                                                                        David James
                                                                    </a>
                                                                </p>

                                                                <!-- end /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/jmarketplace/views/templates/hook/product-list.tpl -->



                                                                <div class="product-title" itemprop="name"><a href="http://demo.bestprestashoptheme.com/savemart/ar/smartphone-tablet/1-40-hummingbird-printed-t-shirt.html#/1-الحجم-ص/6-اللون_-رمادي_داكن">{{$product->name}}</a></div>

                                                                <div class="product-group-price">

                                                                    <div class="product-price-and-shipping">



                                                                        <span itemprop="price" class="price">{{$product->price}}</span>





                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-wrap align-items-start product-miniature js-product-miniature " data-id-product="2" data-id-product-attribute="60" itemscope itemtype="http://schema.org/Product">
                                                    <div class="col-12 col-w27 no-padding">
                                                        <div class="thumbnail-container">

                                                            <a href="http://demo.bestprestashoptheme.com/savemart/ar/smartphone-tablet/2-60-brown-bear-printed-sweater.html#/1-الحجم-ص/11-اللون_-اسود" class="thumbnail product-thumbnail two-image">
                                                                <img
                                                                    class="img-fluid image-cover"
                                                                    src = "http://demo.bestprestashoptheme.com/savemart/29-home_default/brown-bear-printed-sweater.jpg"
                                                                    alt = ""
                                                                    data-full-size-image-url = "http://demo.bestprestashoptheme.com/savemart/29-large_default/brown-bear-printed-sweater.jpg"
                                                                    width="600"
                                                                    height="600"
                                                                >
                                                                <img
                                                                    class="img-fluid image-secondary"
                                                                    src = "http://demo.bestprestashoptheme.com/savemart/30-home_default/brown-bear-printed-sweater.jpg"
                                                                    alt = ""
                                                                    data-full-size-image-url = "http://demo.bestprestashoptheme.com/savemart/30-large_default/brown-bear-printed-sweater.jpg"
                                                                    width="600"
                                                                    height="600"
                                                                >
                                                            </a>

                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-w73 no-padding">
                                                        <div class="product-description">
                                                            <div class="product-groups">

                                                                <!-- begin modules/novproductcomments/novproductcomments_reviews.tpl -->
                                                                <div class="product-comments">
                                                                    <div class="star_content">
                                                                        <div class="star"></div>
                                                                        <div class="star"></div>
                                                                        <div class="star"></div>
                                                                        <div class="star"></div>
                                                                        <div class="star"></div>
                                                                    </div>
                                                                    <span>0 review</span>
                                                                </div>
                                                                <!-- end modules/novproductcomments/novproductcomments_reviews.tpl -->

                                                                <!-- begin /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/jmarketplace/views/templates/hook/product-list.tpl -->
                                                                <p class="seller_name">
                                                                    <a title="View seller profile" href="http://demo.bestprestashoptheme.com/savemart/ar/jmarketplace/1_david-james/">
                                                                        <i class="fa fa-user"></i>
                                                                        David James
                                                                    </a>
                                                                </p>

                                                                <!-- end /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/jmarketplace/views/templates/hook/product-list.tpl -->



                                                                <div class="product-title" itemprop="name"><a href="http://demo.bestprestashoptheme.com/savemart/ar/smartphone-tablet/2-60-brown-bear-printed-sweater.html#/1-الحجم-ص/11-اللون_-اسود">Lorem ipsum dolor sit amet ege</a></div>

                                                                <div class="product-group-price">

                                                                    <div class="product-price-and-shipping">



                                                                        <span itemprop="price" class="price">36.00 UK£</span>





                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-wrap align-items-start product-miniature js-product-miniature  last_item" data-id-product="3" data-id-product-attribute="95" itemscope itemtype="http://schema.org/Product">
                                                    <div class="col-12 col-w27 no-padding">
                                                        <div class="thumbnail-container">

                                                            <a href="http://demo.bestprestashoptheme.com/savemart/ar/smartphone-tablet/3-95-the-best-is-yet-to-come-framed-poster.html#/1-الحجم-ص/13-اللون_-برتقالي" class="thumbnail product-thumbnail two-image">
                                                                <img
                                                                    class="img-fluid image-cover"
                                                                    src = "http://demo.bestprestashoptheme.com/savemart/34-home_default/the-best-is-yet-to-come-framed-poster.jpg"
                                                                    alt = ""
                                                                    data-full-size-image-url = "http://demo.bestprestashoptheme.com/savemart/34-large_default/the-best-is-yet-to-come-framed-poster.jpg"
                                                                    width="600"
                                                                    height="600"
                                                                >
                                                                <img
                                                                    class="img-fluid image-secondary"
                                                                    src = "http://demo.bestprestashoptheme.com/savemart/35-home_default/the-best-is-yet-to-come-framed-poster.jpg"
                                                                    alt = ""
                                                                    data-full-size-image-url = "http://demo.bestprestashoptheme.com/savemart/35-large_default/the-best-is-yet-to-come-framed-poster.jpg"
                                                                    width="600"
                                                                    height="600"
                                                                >
                                                            </a>

                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-w73 no-padding">
                                                        <div class="product-description">
                                                            <div class="product-groups">

                                                                <!-- begin modules/novproductcomments/novproductcomments_reviews.tpl -->
                                                                <div class="product-comments">
                                                                    <div class="star_content">
                                                                        <div class="star star_on"></div>
                                                                        <div class="star star_on"></div>
                                                                        <div class="star star_on"></div>
                                                                        <div class="star star_on"></div>
                                                                        <div class="star star_on"></div>
                                                                    </div>
                                                                    <span>5 review</span>
                                                                </div>
                                                                <!-- end modules/novproductcomments/novproductcomments_reviews.tpl -->

                                                                <!-- begin /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/jmarketplace/views/templates/hook/product-list.tpl -->
                                                                <p class="seller_name">
                                                                    <a title="View seller profile" href="http://demo.bestprestashoptheme.com/savemart/ar/jmarketplace/2_taylor-jonson/">
                                                                        <i class="fa fa-user"></i>
                                                                        Taylor Jonson
                                                                    </a>
                                                                </p>

                                                                <!-- end /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/jmarketplace/views/templates/hook/product-list.tpl -->



                                                                <div class="product-title" itemprop="name"><a href="http://demo.bestprestashoptheme.com/savemart/ar/smartphone-tablet/3-95-the-best-is-yet-to-come-framed-poster.html#/1-الحجم-ص/13-اللون_-برتقالي">Mauris molestie porttitor diam</a></div>

                                                                <div class="product-group-price">

                                                                    <div class="product-price-and-shipping">



                                                                        <span itemprop="price" class="price">30.00 UK£</span>





                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                        </div>
                                            @endforeach

                                        </div>
                                    </div>
                                </div>
                            </div>
                                @endforeach
                            @endisset

                            @isset($smart_Phone)
                                @foreach ($smart_Phone as $category)
                            <div class="nov-productlist   productlist-liststyle    col-xl-4 col-lg-4 col-md-4 col-xs-12 col-md-12">
                                <div class="block block-product clearfix">
                                    <h2 class="title_block">
                                        {{$category->name}}
                                    </h2>
                                    <div class="block_content">
                                        <div id="productlist1204648266"
                                             class="product_list grid owl-carousel owl-theme multi-row"
                                             data-autoplay="false" data-autoplaytimeout="6000" data-loop="false"
                                             data-margin="0" data-dots="false" data-nav="true" data-items="1"
                                             data-items_large="1" data-items_tablet="2" data-items_mobile="1">
                                            @foreach ($category->products as $product)
                                                <div class="item  text-center">
                                                    <div class="d-flex flex-wrap align-items-start product-miniature js-product-miniature  first_item" data-id-product="1" data-id-product-attribute="40" itemscope itemtype="http://schema.org/Product">
                                                        <div class="col-12 col-w27 no-padding">
                                                            <div class="thumbnail-container">

                                                                <a href="{{route('product.details',$product->slug)}}" class="thumbnail product-thumbnail two-image">
                                                                    <img
                                                                        class="img-fluid image-cover"
                                                                        src = "{{$product ->images[0]->photo ?? ''}}"
                                                                        alt = ""
                                                                        data-full-size-image-url = "{{$product ->images[0]->photo ?? ''}}"
                                                                        width="600"
                                                                        height="600"
                                                                    >
                                                                    <img
                                                                        class="img-fluid image-secondary"
                                                                        src = "{{$product ->images[1]->photo ?? ''}}"
                                                                        alt = ""
                                                                        data-full-size-image-url = "{{$product ->images[1]->photo ?? ''}}"
                                                                        width="600"
                                                                        height="600"
                                                                    >
                                                                </a>

                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-w73 no-padding">
                                                            <div class="product-description">
                                                                <div class="product-groups">

                                                                    <!-- begin modules/novproductcomments/novproductcomments_reviews.tpl -->
                                                                    <div class="product-comments">
                                                                        <div class="star_content">
                                                                            <div class="star star_on"></div>
                                                                            <div class="star star_on"></div>
                                                                            <div class="star star_on"></div>
                                                                            <div class="star star_on"></div>
                                                                            <div class="star star_on"></div>
                                                                        </div>
                                                                        <span>5 review</span>
                                                                    </div>
                                                                    <!-- end modules/novproductcomments/novproductcomments_reviews.tpl -->

                                                                    <!-- begin /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/jmarketplace/views/templates/hook/product-list.tpl -->
                                                                    <p class="seller_name">
                                                                        <a title="View seller profile" href="http://demo.bestprestashoptheme.com/savemart/ar/jmarketplace/1_david-james/">
                                                                            <i class="fa fa-user"></i>
                                                                            David James
                                                                        </a>
                                                                    </p>

                                                                    <!-- end /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/jmarketplace/views/templates/hook/product-list.tpl -->



                                                                    <div class="product-title" itemprop="name"><a href="http://demo.bestprestashoptheme.com/savemart/ar/smartphone-tablet/1-40-hummingbird-printed-t-shirt.html#/1-الحجم-ص/6-اللون_-رمادي_داكن">{{$product->name}}</a></div>

                                                                    <div class="product-group-price">

                                                                        <div class="product-price-and-shipping">



                                                                            <span itemprop="price" class="price">{{$product->price}}</span>





                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex flex-wrap align-items-start product-miniature js-product-miniature " data-id-product="2" data-id-product-attribute="60" itemscope itemtype="http://schema.org/Product">
                                                        <div class="col-12 col-w27 no-padding">
                                                            <div class="thumbnail-container">

                                                                <a href="http://demo.bestprestashoptheme.com/savemart/ar/smartphone-tablet/2-60-brown-bear-printed-sweater.html#/1-الحجم-ص/11-اللون_-اسود" class="thumbnail product-thumbnail two-image">
                                                                    <img
                                                                        class="img-fluid image-cover"
                                                                        src = "http://demo.bestprestashoptheme.com/savemart/29-home_default/brown-bear-printed-sweater.jpg"
                                                                        alt = ""
                                                                        data-full-size-image-url = "http://demo.bestprestashoptheme.com/savemart/29-large_default/brown-bear-printed-sweater.jpg"
                                                                        width="600"
                                                                        height="600"
                                                                    >
                                                                    <img
                                                                        class="img-fluid image-secondary"
                                                                        src = "http://demo.bestprestashoptheme.com/savemart/30-home_default/brown-bear-printed-sweater.jpg"
                                                                        alt = ""
                                                                        data-full-size-image-url = "http://demo.bestprestashoptheme.com/savemart/30-large_default/brown-bear-printed-sweater.jpg"
                                                                        width="600"
                                                                        height="600"
                                                                    >
                                                                </a>

                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-w73 no-padding">
                                                            <div class="product-description">
                                                                <div class="product-groups">

                                                                    <!-- begin modules/novproductcomments/novproductcomments_reviews.tpl -->
                                                                    <div class="product-comments">
                                                                        <div class="star_content">
                                                                            <div class="star"></div>
                                                                            <div class="star"></div>
                                                                            <div class="star"></div>
                                                                            <div class="star"></div>
                                                                            <div class="star"></div>
                                                                        </div>
                                                                        <span>0 review</span>
                                                                    </div>
                                                                    <!-- end modules/novproductcomments/novproductcomments_reviews.tpl -->

                                                                    <!-- begin /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/jmarketplace/views/templates/hook/product-list.tpl -->
                                                                    <p class="seller_name">
                                                                        <a title="View seller profile" href="http://demo.bestprestashoptheme.com/savemart/ar/jmarketplace/1_david-james/">
                                                                            <i class="fa fa-user"></i>
                                                                            David James
                                                                        </a>
                                                                    </p>

                                                                    <!-- end /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/jmarketplace/views/templates/hook/product-list.tpl -->



                                                                    <div class="product-title" itemprop="name"><a href="http://demo.bestprestashoptheme.com/savemart/ar/smartphone-tablet/2-60-brown-bear-printed-sweater.html#/1-الحجم-ص/11-اللون_-اسود">Lorem ipsum dolor sit amet ege</a></div>

                                                                    <div class="product-group-price">

                                                                        <div class="product-price-and-shipping">



                                                                            <span itemprop="price" class="price">36.00 UK£</span>





                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex flex-wrap align-items-start product-miniature js-product-miniature  last_item" data-id-product="3" data-id-product-attribute="95" itemscope itemtype="http://schema.org/Product">
                                                        <div class="col-12 col-w27 no-padding">
                                                            <div class="thumbnail-container">

                                                                <a href="http://demo.bestprestashoptheme.com/savemart/ar/smartphone-tablet/3-95-the-best-is-yet-to-come-framed-poster.html#/1-الحجم-ص/13-اللون_-برتقالي" class="thumbnail product-thumbnail two-image">
                                                                    <img
                                                                        class="img-fluid image-cover"
                                                                        src = "http://demo.bestprestashoptheme.com/savemart/34-home_default/the-best-is-yet-to-come-framed-poster.jpg"
                                                                        alt = ""
                                                                        data-full-size-image-url = "http://demo.bestprestashoptheme.com/savemart/34-large_default/the-best-is-yet-to-come-framed-poster.jpg"
                                                                        width="600"
                                                                        height="600"
                                                                    >
                                                                    <img
                                                                        class="img-fluid image-secondary"
                                                                        src = "http://demo.bestprestashoptheme.com/savemart/35-home_default/the-best-is-yet-to-come-framed-poster.jpg"
                                                                        alt = ""
                                                                        data-full-size-image-url = "http://demo.bestprestashoptheme.com/savemart/35-large_default/the-best-is-yet-to-come-framed-poster.jpg"
                                                                        width="600"
                                                                        height="600"
                                                                    >
                                                                </a>

                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-w73 no-padding">
                                                            <div class="product-description">
                                                                <div class="product-groups">

                                                                    <!-- begin modules/novproductcomments/novproductcomments_reviews.tpl -->
                                                                    <div class="product-comments">
                                                                        <div class="star_content">
                                                                            <div class="star star_on"></div>
                                                                            <div class="star star_on"></div>
                                                                            <div class="star star_on"></div>
                                                                            <div class="star star_on"></div>
                                                                            <div class="star star_on"></div>
                                                                        </div>
                                                                        <span>5 review</span>
                                                                    </div>
                                                                    <!-- end modules/novproductcomments/novproductcomments_reviews.tpl -->

                                                                    <!-- begin /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/jmarketplace/views/templates/hook/product-list.tpl -->
                                                                    <p class="seller_name">
                                                                        <a title="View seller profile" href="http://demo.bestprestashoptheme.com/savemart/ar/jmarketplace/2_taylor-jonson/">
                                                                            <i class="fa fa-user"></i>
                                                                            Taylor Jonson
                                                                        </a>
                                                                    </p>

                                                                    <!-- end /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/jmarketplace/views/templates/hook/product-list.tpl -->



                                                                    <div class="product-title" itemprop="name"><a href="http://demo.bestprestashoptheme.com/savemart/ar/smartphone-tablet/3-95-the-best-is-yet-to-come-framed-poster.html#/1-الحجم-ص/13-اللون_-برتقالي">Mauris molestie porttitor diam</a></div>

                                                                    <div class="product-group-price">

                                                                        <div class="product-price-and-shipping">



                                                                            <span itemprop="price" class="price">30.00 UK£</span>





                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            @endforeach

                                        </div>
                                    </div>
                                </div>
                            </div>
                                @endforeach
                            @endisset
                            @isset($furniture)
                                @foreach ($furniture as $category)
                            <div class="nov-productlist   productlist-liststyle    col-xl-4 col-lg-4 col-md-4 col-xs-12 col-md-12">
                                <div class="block block-product clearfix">
                                    <h2 class="title_block">
                                        {{$category->name}}
                                    </h2>
                                    <div class="block_content">
                                        <div id="productlist76744079"
                                             class="product_list grid owl-carousel owl-theme multi-row"
                                             data-autoplay="false" data-autoplaytimeout="6000" data-loop="false"
                                             data-margin="0" data-dots="false" data-nav="true" data-items="1"
                                             data-items_large="1" data-items_tablet="2" data-items_mobile="1">
                                            @foreach ($category->products as $product)
                                                <div class="item  text-center">
                                                    <div class="d-flex flex-wrap align-items-start product-miniature js-product-miniature  first_item" data-id-product="1" data-id-product-attribute="40" itemscope itemtype="http://schema.org/Product">
                                                        <div class="col-12 col-w27 no-padding">
                                                            <div class="thumbnail-container">

                                                                <a href="{{route('product.details',$product->slug)}}" class="thumbnail product-thumbnail two-image">
                                                                    <img
                                                                        class="img-fluid image-cover"
                                                                        src = "{{$product ->images[0]->photo ?? ''}}"
                                                                        alt = ""
                                                                        data-full-size-image-url = "{{$product ->images[0]->photo ?? ''}}"
                                                                        width="600"
                                                                        height="600"
                                                                    >
                                                                    <img
                                                                        class="img-fluid image-secondary"
                                                                        src = "{{$product ->images[1]->photo ?? ''}}"
                                                                        alt = ""
                                                                        data-full-size-image-url = "{{$product ->images[1]->photo ?? ''}}"
                                                                        width="600"
                                                                        height="600"
                                                                    >
                                                                </a>

                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-w73 no-padding">
                                                            <div class="product-description">
                                                                <div class="product-groups">

                                                                    <!-- begin modules/novproductcomments/novproductcomments_reviews.tpl -->
                                                                    <div class="product-comments">
                                                                        <div class="star_content">
                                                                            <div class="star star_on"></div>
                                                                            <div class="star star_on"></div>
                                                                            <div class="star star_on"></div>
                                                                            <div class="star star_on"></div>
                                                                            <div class="star star_on"></div>
                                                                        </div>
                                                                        <span>5 review</span>
                                                                    </div>
                                                                    <!-- end modules/novproductcomments/novproductcomments_reviews.tpl -->

                                                                    <!-- begin /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/jmarketplace/views/templates/hook/product-list.tpl -->
                                                                    <p class="seller_name">
                                                                        <a title="View seller profile" href="http://demo.bestprestashoptheme.com/savemart/ar/jmarketplace/1_david-james/">
                                                                            <i class="fa fa-user"></i>
                                                                            David James
                                                                        </a>
                                                                    </p>

                                                                    <!-- end /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/jmarketplace/views/templates/hook/product-list.tpl -->



                                                                    <div class="product-title" itemprop="name"><a href="http://demo.bestprestashoptheme.com/savemart/ar/smartphone-tablet/1-40-hummingbird-printed-t-shirt.html#/1-الحجم-ص/6-اللون_-رمادي_داكن">{{$product->name}}</a></div>

                                                                    <div class="product-group-price">

                                                                        <div class="product-price-and-shipping">



                                                                            <span itemprop="price" class="price">{{$product->price}}</span>





                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex flex-wrap align-items-start product-miniature js-product-miniature " data-id-product="2" data-id-product-attribute="60" itemscope itemtype="http://schema.org/Product">
                                                        <div class="col-12 col-w27 no-padding">
                                                            <div class="thumbnail-container">

                                                                <a href="http://demo.bestprestashoptheme.com/savemart/ar/smartphone-tablet/2-60-brown-bear-printed-sweater.html#/1-الحجم-ص/11-اللون_-اسود" class="thumbnail product-thumbnail two-image">
                                                                    <img
                                                                        class="img-fluid image-cover"
                                                                        src = "http://demo.bestprestashoptheme.com/savemart/29-home_default/brown-bear-printed-sweater.jpg"
                                                                        alt = ""
                                                                        data-full-size-image-url = "http://demo.bestprestashoptheme.com/savemart/29-large_default/brown-bear-printed-sweater.jpg"
                                                                        width="600"
                                                                        height="600"
                                                                    >
                                                                    <img
                                                                        class="img-fluid image-secondary"
                                                                        src = "http://demo.bestprestashoptheme.com/savemart/30-home_default/brown-bear-printed-sweater.jpg"
                                                                        alt = ""
                                                                        data-full-size-image-url = "http://demo.bestprestashoptheme.com/savemart/30-large_default/brown-bear-printed-sweater.jpg"
                                                                        width="600"
                                                                        height="600"
                                                                    >
                                                                </a>

                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-w73 no-padding">
                                                            <div class="product-description">
                                                                <div class="product-groups">

                                                                    <!-- begin modules/novproductcomments/novproductcomments_reviews.tpl -->
                                                                    <div class="product-comments">
                                                                        <div class="star_content">
                                                                            <div class="star"></div>
                                                                            <div class="star"></div>
                                                                            <div class="star"></div>
                                                                            <div class="star"></div>
                                                                            <div class="star"></div>
                                                                        </div>
                                                                        <span>0 review</span>
                                                                    </div>
                                                                    <!-- end modules/novproductcomments/novproductcomments_reviews.tpl -->

                                                                    <!-- begin /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/jmarketplace/views/templates/hook/product-list.tpl -->
                                                                    <p class="seller_name">
                                                                        <a title="View seller profile" href="http://demo.bestprestashoptheme.com/savemart/ar/jmarketplace/1_david-james/">
                                                                            <i class="fa fa-user"></i>
                                                                            David James
                                                                        </a>
                                                                    </p>

                                                                    <!-- end /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/jmarketplace/views/templates/hook/product-list.tpl -->



                                                                    <div class="product-title" itemprop="name"><a href="http://demo.bestprestashoptheme.com/savemart/ar/smartphone-tablet/2-60-brown-bear-printed-sweater.html#/1-الحجم-ص/11-اللون_-اسود">Lorem ipsum dolor sit amet ege</a></div>

                                                                    <div class="product-group-price">

                                                                        <div class="product-price-and-shipping">



                                                                            <span itemprop="price" class="price">36.00 UK£</span>





                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex flex-wrap align-items-start product-miniature js-product-miniature  last_item" data-id-product="3" data-id-product-attribute="95" itemscope itemtype="http://schema.org/Product">
                                                        <div class="col-12 col-w27 no-padding">
                                                            <div class="thumbnail-container">

                                                                <a href="http://demo.bestprestashoptheme.com/savemart/ar/smartphone-tablet/3-95-the-best-is-yet-to-come-framed-poster.html#/1-الحجم-ص/13-اللون_-برتقالي" class="thumbnail product-thumbnail two-image">
                                                                    <img
                                                                        class="img-fluid image-cover"
                                                                        src = "http://demo.bestprestashoptheme.com/savemart/34-home_default/the-best-is-yet-to-come-framed-poster.jpg"
                                                                        alt = ""
                                                                        data-full-size-image-url = "http://demo.bestprestashoptheme.com/savemart/34-large_default/the-best-is-yet-to-come-framed-poster.jpg"
                                                                        width="600"
                                                                        height="600"
                                                                    >
                                                                    <img
                                                                        class="img-fluid image-secondary"
                                                                        src = "http://demo.bestprestashoptheme.com/savemart/35-home_default/the-best-is-yet-to-come-framed-poster.jpg"
                                                                        alt = ""
                                                                        data-full-size-image-url = "http://demo.bestprestashoptheme.com/savemart/35-large_default/the-best-is-yet-to-come-framed-poster.jpg"
                                                                        width="600"
                                                                        height="600"
                                                                    >
                                                                </a>

                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-w73 no-padding">
                                                            <div class="product-description">
                                                                <div class="product-groups">

                                                                    <!-- begin modules/novproductcomments/novproductcomments_reviews.tpl -->
                                                                    <div class="product-comments">
                                                                        <div class="star_content">
                                                                            <div class="star star_on"></div>
                                                                            <div class="star star_on"></div>
                                                                            <div class="star star_on"></div>
                                                                            <div class="star star_on"></div>
                                                                            <div class="star star_on"></div>
                                                                        </div>
                                                                        <span>5 review</span>
                                                                    </div>
                                                                    <!-- end modules/novproductcomments/novproductcomments_reviews.tpl -->

                                                                    <!-- begin /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/jmarketplace/views/templates/hook/product-list.tpl -->
                                                                    <p class="seller_name">
                                                                        <a title="View seller profile" href="http://demo.bestprestashoptheme.com/savemart/ar/jmarketplace/2_taylor-jonson/">
                                                                            <i class="fa fa-user"></i>
                                                                            Taylor Jonson
                                                                        </a>
                                                                    </p>

                                                                    <!-- end /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/jmarketplace/views/templates/hook/product-list.tpl -->



                                                                    <div class="product-title" itemprop="name"><a href="http://demo.bestprestashoptheme.com/savemart/ar/smartphone-tablet/3-95-the-best-is-yet-to-come-framed-poster.html#/1-الحجم-ص/13-اللون_-برتقالي">Mauris molestie porttitor diam</a></div>

                                                                    <div class="product-group-price">

                                                                        <div class="product-price-and-shipping">



                                                                            <span itemprop="price" class="price">30.00 UK£</span>





                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach

                                        </div>
                                    </div>
                                </div>
                            </div>
                                @endforeach
                            @endisset
                        </div>
                    </div>
                </div>
            </div>
        </section>



            @include('front.includes.not-logged')
            @include('front.includes.alert')
            @include('front.includes.alert2')

        @stop


        @section('scripts')



            <script>
                $(document).on('click' ,'.quick-view',function (){
                    $('.quickview-model-product-details-'+$(this).attr('data-product-id')).css("display","block");

                });
                $(document).on('click' ,'.close',function () {
                    $('.quickview-model-product-details-' + $(this).attr('data-product-id')).css("display", "none");

                    $('.not-loggedin-model').css("display","none");
                    $('.alert-model').css("display","none");
                    $('.alert-model2').css("display","none");

                    $('.modal').css("display","none");


                });
                $.ajaxSetup({
                    headers:{
                        'x-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });


                $(document).on('click','.addToWishlist', function(e){
                    e.preventDefault();
                    @guest()
                    $('.not-loggedin-model').css('display','block');
                    @endauth

                    @auth()
                    $.ajax({

                        type: 'post',
                        //enctype: 'multipart/form-data',

                        url:"{{ route('wishlist-store') }}",

                        data:{
                            'productId' : $(this).attr('data-product-id'),
                        },
                        success:function (data){
                            if(data.wished)
                                $('.alert-model').css('display','block');
                            else
                                $('.alert-model2').css('display','block');
                        }
                    });

                    @endauth
                });


                $(document).on('click', '.cart-addition', function (e) {
                    e.preventDefault();

                    $('.cart-model-product-'+$(this).attr('data-product-id')).css("display","block");
                    $.ajax({
                        type: 'post',
                        url: "{{Route('site.cart.add')}}",
                        data: {
                            'product_id': $(this).attr('data-product-id'),
                            'product_slug' : $(this).attr('data-product-slug'),
                        },
                        success: function (data) {

                        }
                    });
                });


            </script>


@stop
