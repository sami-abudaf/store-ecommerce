@extends('layouts.site')


@section('content')

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
    <div id="wrapper-site" class="h-75">

                <nav data-depth="1" class="breadcrumb-bg">
                    <div class="container no-index">
                        <div class="breadcrumb">

                         <!--   <ol itemscope="" itemtype="http://schema.org/BreadcrumbList">
                                <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                                    <a itemprop="item" href="{{route('home')}}">
                                        <span itemprop="name">الصفحة الرئيسية</span>
                                    </a>
                                    <meta itemprop="position" content="1">
                                </li>
                            </ol>-->

                        </div>
                    </div>
                </nav>



                <div class="container no-index">
                    <div class="row">
                        <div id="content-wrapper" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">


                            <div id="main" class="col-md-9 pull-left">


                                <div class="page-header">
                                    <h1 class="page-title show-xs-up">
                                       صفحة الدخول
                                    </h1>
                                </div>




                                <section id="content" class="page-content">


                                    <section class="login-form">





                                        <form id="login-form" action="{{ route('login') }}" method="post">
                                            @csrf
                                            <section>



                                                <input type="hidden" name="back" value="my-account">




                                                <div class="form-group row no-gutters">
                                                    <label class="col-md-2 form-control-label mb-xs-5  required">
                                                        mobile:
                                                    </label>
                                                    <div class="col-md-6">

                                                        <input id="mobile"  name="mobile" type="text"
                                                               class="form-control @error('mobile') is-invalid @enderror"
                                                               value="{{ old('mobile') }}"  autocomplete="mobile" autofocus required
                                                        >
                                                        @error('mobile')
                                                        <span class="invalid-feedback text-danger" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                        @enderror


                                                    </div>

                                                    <div class="col-md-4 form-control-comment right">
                                                    </div>
                                                </div>




                                                <div class="form-group row no-gutters">
                                                    <label class="col-md-2 form-control-label mb-xs-5  required">
                                                        {{ __('Password') }}
                                                    </label>
                                                    <div class="col-md-6">

                                                        <div class="input-group js-parent-focus">
                                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"  autocomplete="current-password">
                                                            <span class="input-group-btn">
                                                <button class="btn" type="button" data-action="show-password" data-text-show="إظهار" data-text-hide="إخفاء">
                                                  إظهار
                                                </button>

                                                  </span>

                                                        </div>
                                                        @error('password')
                                                        <span  class="invalid-feedback text-danger" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                        @enderror

                                                    </div>

                                                    <div class="col-md-4 form-control-comment right">
                                                    </div>
                                                </div>

                                                <div class="row no-gutters">
                                                    <div class="col-md-10 offset-md-2">
                                                        <div class="forgot-password">
                                                            <a href="{{ route('password.request')}}" rel="nofollow">
                                                                هل نسيت كلمة المرور؟
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>


                                            <footer class="form-footer clearfix">
                                                <div class="row no-gutters">
                                                    <div class="col-md-10 offset-md-2">
                                                        <input type="hidden" name="submitLogin" value="1">

                                                        <button class="btn btn-primary" data-link-action="sign-in" type="submit">
                                                            تسجيل الدخول
                                                        </button>

                                                    </div>
                                                </div>

                                            </footer>


                                        </form>


                                    </section>



                                    <div class="row no-gutters">
                                        <div class="col-md-10 offset-md-2">
                                            <div class="no-account">
                                                <a href="{{route('register')}}" data-link-action="display-register-form">
                                                    ليس لديك حساب؟ تسجيل حساب جديد
                                                </a>
                                            </div>
                                        </div>
                                    </div>


                                </section>
                                <footer class="page-footer">

                                    <!-- Footer content -->

                                </footer>
                            </div>


                        </div>
                    </div>
                </div>






    </div>

@stop
