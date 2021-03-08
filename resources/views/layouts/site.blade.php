<!-- begin index.tpl -->
<!doctype html>
<html lang="ar">
<head>


    <meta charset="utf-8">


    <meta http-equiv="x-ua-compatible" content="ie=edge">



    <title>Prestashop_Savemart</title>
    <meta name="description" content="المتجر مدعوم من طرف بريستاشوب">
    <meta name="keywords" content="">



    <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=yes">


    <meta name="csrf-token" content="{{ csrf_token() }}">


    <link rel="icon" type="image/vnd.microsoft.icon" href="{{asset('assets/front/img/favicon.ico')}}?1531456858">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/front/img/favicon.ico')}}?1531456858">


    <link href="{{asset('assets/front/css/css.css')}}?family=Roboto:300,400,500,600,700,900" rel="stylesheet">
    <link href="{{asset('assets/front/css/css-1.css')}}?family=Oswald:300,400,500,600,700,900" rel="stylesheet">



    <link rel="stylesheet" href="http://demo.bestprestashoptheme.com/savemart/themes/vinova_savemart/assets/cache/theme-b78c0a24.css" type="text/css" media="all">




    <script type="text/javascript">

        var prestashop = {
            "static_token": "28add935523ef131c8432825597b9928",
            "token": "cad5fe8236d849a3b4023c4e5ca6a313"
        };
    </script>

    <script type="text/javascript">
        var baseDir = "/savemart/";
        var static_token = "28add935523ef131c8432825597b9928";
    </script>



    <style type="text/css">
        #main-site {background-color: #ffffff;}
        @media (min-width: 1200px) {.container {width: 1200px;}
            #header .container {width: 1200px;}
            .footer .container {width: 1200px;}
            #index .container {width: 1200px;}}
        #popup-subscribe .modal-dialog .modal-content {background-image: url(http://demo.bestprestashoptheme.com/savemart/modules/novthemeconfig/images/newsletter_bg-1.png);}
    </style>

    @yield('styles')
</head>
<body id="index" class="lang-ar lang-rtl country-gb currency-gbp layout-full-width page-index tax-display-enabled">



<main id="main-site" class="displayhomenovone">






    @yield('slider')

    <aside id="notifications">
        <div class="container">



        </div>
    </aside>


    <div id="wrapper-site">
        <div id="content-wrapper" class="full-width">

            @yield('content')

        </div>
    </div>

    @include('front.includes.footer')
    <div class="canvas-overlay"></div>
    <div id="back-top">
  <span>
    <i class="fa fa-long-arrow-up"></i>  </span>
    </div>
</main>

<div id="mobile_top_menu_wrapper" class="hidden-md-up">
    <div class="content">
        <div id="_mobile_verticalmenu"></div>
    </div>
</div>
<div id="mobile-pagemenu" class="mobile-boxpage d-flex hidden-md-up">
    <div class="content-boxpage col">
        <div class="box-header d-flex justify-content-between align-items-center">
            <div class="title-box">Menu</div>
            <div class="close-box">Close</div>
        </div>
        <div class="box-content" style="height: 267px;">
            <div id="_mobile_top_menu" class="js-top-menu"></div>
        </div>
    </div>
</div>
<div id="mobile-blockcart" class="mobile-boxpage d-flex hidden-md-up">
    <div class="content-boxpage col">
        <div class="box-header d-flex justify-content-between align-items-center">
            <div class="title-box">Cart</div>
            <div class="close-box">Close</div>
        </div>
        <div id="_mobile_cart" class="box-content" style="height: 267px;"></div>
    </div>
</div>
<div id="mobile-pageaccount" class="mobile-boxpage d-flex hidden-md-up" data-titlebox-parent="Account">
    <div class="content-boxpage col">
        <div class="box-header d-flex justify-content-between align-items-center">
            <div class="back-box">Back</div>
            <div class="title-box">Account</div>
            <div class="close-box">Close</div>
        </div>
        <div class="box-content d-flex justify-content-center align-items-center text-center" style="height: 267px;">
            <div>
                <div id="_mobile_account_list">
                    <div class="account-list-content">
                        <div>
                            <a class="login" href="http://demo.bestprestashoptheme.com/savemart/ar/الحساب الشخصي" rel="nofollow" title="Log in to your customer account"><i class="fa fa-sign-in"></i>Sign in</a>
                        </div>
                        <div>
                            <a class="register" href="http://demo.bestprestashoptheme.com/savemart/ar/الحساب الشخصي" rel="nofollow" title="Register Account"><i class="fa fa-user"></i>Register Account</a>
                        </div>
                        <div>
                            <a class="check-out" href="http://demo.bestprestashoptheme.com/savemart/ar/طلب شراء" rel="nofollow" title="Checkout"><i class="material-icons">check_circle</i>Checkout</a>
                        </div>
                        <div class="link_wishlist">
                            <a href="http://demo.bestprestashoptheme.com/savemart/ar/module/novblockwishlist/mywishlist" title="My Wishlists">
                                <i class="fa fa-heart"></i>My Wishlists
                            </a>
                        </div>
                    </div>
                </div>
                <div class="links-currency" data-target="#box-currency" data-titlebox="Currency"><span>Currency</span><i class="zmdi zmdi-arrow-right"></i></div>
                <div class="links-language" data-target="#box-language" data-titlebox="Language"><span>Language</span><i class="zmdi zmdi-arrow-right"></i></div>
            </div>
        </div>
        <div id="box-currency" class="box-content d-flex" style="height: 267px;">
            <div class="w-100">
                <div class="item-currency current">
                    <a title="جنيه إسترليني" rel="nofollow" href="http://demo.bestprestashoptheme.com/savemart/ar/?SubmitCurrency=1&amp;id_currency=1">جنيه إسترليني: GBP</a>
                </div>
                <div class="item-currency">
                    <a title="دولار أمريكي" rel="nofollow" href="http://demo.bestprestashoptheme.com/savemart/ar/?SubmitCurrency=1&amp;id_currency=2">دولار أمريكي: USD</a>
                </div>
            </div>
        </div>

        <div id="box-language" class="box-content d-flex" style="height: 267px;">
            <div class="w-100">
                <div class="item-language">
                    <a href="http://demo.bestprestashoptheme.com/savemart/en/" class="d-flex align-items-center"><img class="img-fluid mr-2" src="/savemart/img/l/1.jpg" alt="English (English)" width="16" height="11"><span>English</span></a>
                </div>
                <div class="item-language">
                    <a href="http://demo.bestprestashoptheme.com/savemart/fr/" class="d-flex align-items-center"><img class="img-fluid mr-2" src="/savemart/img/l/2.jpg" alt="Français (French)" width="16" height="11"><span>Français</span></a>
                </div>
                <div class="item-language">
                    <a href="http://demo.bestprestashoptheme.com/savemart/es/" class="d-flex align-items-center"><img class="img-fluid mr-2" src="/savemart/img/l/3.jpg" alt="Español (Spanish)" width="16" height="11"><span>Español</span></a>
                </div>
                <div class="item-language">
                    <a href="http://demo.bestprestashoptheme.com/savemart/it/" class="d-flex align-items-center"><img class="img-fluid mr-2" src="/savemart/img/l/4.jpg" alt="Italiano (Italian)" width="16" height="11"><span>Italiano</span></a>
                </div>
                <div class="item-language">
                    <a href="http://demo.bestprestashoptheme.com/savemart/pl/" class="d-flex align-items-center"><img class="img-fluid mr-2" src="/savemart/img/l/5.jpg" alt="Polski (Polish)" width="16" height="11"><span>Polski</span></a>
                </div>
                <div class="item-language current">
                    <a href="http://demo.bestprestashoptheme.com/savemart/ar/" class="d-flex align-items-center"><img class="img-fluid mr-2" src="/savemart/img/l/6.jpg" alt="اللغة العربية (Arabic)" width="16" height="11"><span>اللغة العربية</span></a>
                </div>
            </div>
        </div>

    </div>
</div>
<div id="stickymenu_bottom_mobile" class="d-flex align-items-center justify-content-center hidden-md-up text-center" style="">
    <div class="stickymenu-item"><a href="http://demo.bestprestashoptheme.com/savemart/"><i class="zmdi zmdi-home"></i><span>Home</span></a></div>
    <div class="stickymenu-item"><a href="#" class="js-btn-search"><i class="zmdi zmdi-search"></i><span>Search</span></a></div>
    <div class="stickymenu-item"><div id="_mobile_cart_bottom" class="nov-toggle-page" data-target="#mobile-blockcart"></div></div>
    <div class="stickymenu-item"><a href="http://demo.bestprestashoptheme.com/savemart/ar/module/novblockwishlist/mywishlist"><i class="zmdi zmdi-favorite-outline"></i><span>Wishlist</span></a></div>
    <div class="stickymenu-item"><a href="#" class="nov-toggle-page" data-target="#mobile-pageaccount"><i class="zmdi zmdi-account-o"></i><span>Account</span></a></div>
</div>




<script type="text/javascript"
        src="{{asset('assets/front/themes/vinova_savemart/assets/cache/bottom-3c96ed23.js')}}"></script>

@yield('scripts')



</body>
</html>
<!-- end index.tpl -->
