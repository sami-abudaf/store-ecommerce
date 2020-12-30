@extends('layouts.site')

@section('content')
    <div id="wrapper-site">

        <nav data-depth="1" class="breadcrumb-bg">
            <div class="container no-index">
                <div class="breadcrumb">

                    <ol itemscope="" itemtype="http://schema.org/BreadcrumbList">
                        <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                            <a itemprop="item" href="{{route('home')}}">
                                <span itemprop="name">الصفحة الرئيسية</span>
                            </a>
                            <meta itemprop="position" content="1">
                        </li>
                    </ol>

                </div>
            </div>
        </nav>



        <div class="container no-index">
            <div class="row">
                <div id="content-wrapper" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">


                    <div id="main">


                        <div class="page-header">
                            <h1 class="page-title hidden-xs-up">
                                {{ __('Register') }}
                            </h1>
                        </div>

                        <section id="content" class="page-content">



                            <section class="register-form">
                                <p>لديك حساب بالفعل؟ <a href="{{route('login')}}">سجل الدخول بدلا من ذلك!</a></p>




                                <form action="{{ route('register') }}" id="customer-form" class="js-customer-form" method="POST">

                                    @csrf
                                    <section>
                                        <input type="hidden" name="id_customer" value="">

                                        <div class="form-group row no-gutters">
                                            <label class="col-md-2 form-control-label mb-xs-5 required">
                                                {{ __('Name') }}
                                            </label>
                                            <div class="col-md-6">

                                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>





                                            </div>
                                            @error('name')
                                            <span class="invalid-feedback " role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                            <div class="col-md-4 form-control-comment right">
                                            </div>
                                        </div>




                                        <div class="form-group row no-gutters">
                                            <label class="col-md-2 form-control-label mb-xs-5 required">
                                                {{ __('E-Mail Address') }}
                                            </label>
                                            <div class="col-md-6">

                                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                                @error('email')
                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                @enderror



                                            </div>

                                            <div class="col-md-4 form-control-comment right">
                                            </div>
                                        </div>

                                        <div class="form-group row no-gutters">
                                            <label class="col-md-2 form-control-label mb-xs-5 required">
                                                {{ __('Password') }}
                                            </label>
                                            <div class="col-md-6">

                                                <div class="input-group js-parent-focus">
                                                    <input id="password" class="form-control @error('password') is-invalid @enderror" name="password" type="password" value="" pattern=".{5,}" required="">
                                    <span class="input-group-btn">
                                    <button class="btn" type="button" data-action="show-password" data-text-show="إظهار" data-text-hide="إخفاء">
                                      إظهار
                                    </button>

                                        </span>
                                                </div>
                                                @error('password')
                                                <span class="invalid-feedback text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                @enderror

                                            </div>

                                            <div class="col-md-4 form-control-comment right">
                                            </div>
                                        </div>
                                        <div class="form-group row no-gutters">
                                            <label for="password-confirm" class="col-md-2 form-control-label mb-xs-5 required">
                                                {{ __('Confirm Password') }}
                                            </label>
                                            <div class="col-md-6">

                                                <div class="input-group js-parent-focus">
                                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                                    <span class="input-group-btn">
                                    <button class="btn" type="button" data-action="show-password" data-text-show="إظهار" data-text-hide="إخفاء">
                                      إظهار
                                    </button>

                                        </span>


                                                </div>


                                            </div>

                                            <div class="col-md-4 form-control-comment right">
                                            </div>
                                        </div>

                                    </section>


                                    <footer class="form-footer clearfix">
                                        <div class="row no-gutters">
                                            <div class="col-md-10 offset-md-2">
                                                <input type="hidden" name="submitCreate" value="1">

                                                <button class="btn btn-primary form-control-submit mb-20" data-link-action="save-customer" type="submit">
                                                    {{ __('Register') }}
                                                </button>

                                            </div>
                                        </div>
                                    </footer>
                                    <footer class="form-footer clearfix">
                                        <div class="row no-gutters">
                                            <div class="col-md-10 offset-md-2">

                                                @if (Route::has('password.request'))
                                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                                        {{ __('Forgot Your Password?') }}
                                                    </a>
                                                @endif
                                            </div>
                                        </div>
                                    </footer>

                                </form>


                            </section>


                        </section>



                        <footer class="page-footer">

                            <!-- Footer content -->

                        </footer>


                    </div>


                </div>
            </div>
        </div>



    </div>
@endsection
