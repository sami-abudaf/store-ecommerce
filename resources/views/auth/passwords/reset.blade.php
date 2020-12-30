@extends('layouts.site')


@section('content')


    <div id="wrapper-site">

        <nav data-depth="1" class="breadcrumb-bg">
            <div class="container no-index">
                <div class="breadcrumb">

                    <ol itemscope="" itemtype="http://schema.org/BreadcrumbList">
                        <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                            <a itemprop="item" href="http://demo.bestprestashoptheme.com/savemart/ar/">
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
                                هل نسيت كلمة المرور؟
                            </h1>
                        </div>




                        <section id="content" class="page-content">

                            <form action="http://demo.bestprestashoptheme.com/savemart/ar/استعادة كلمة المرور" class="forgotten-password" method="post">

                                <ul class="ps-alert-error">
                                </ul>

                                <header>
                                    <p class="send-renew-password-link">الرجاء إدخال عنوان البريد الإلكتروني الذي استخدمته للتسجيل. ستتلقى رابطا مؤقتا لإعادة تعيين كلمة المرور.</p>
                                </header>

                                <section class="form-fields mb-30">
                                    <div class="form-group center-email-fields d-flex">
                                        <label class="col-md-3 form-control-label required text-right">البريد الإلكتروني</label>
                                        <div class="col-md-5 input-group">
                                            <input type="email" name="email" id="email" class="form-control" value="" required="">
                                            <div class="input-group-append">
                                                <button class="form-control-submit" name="submit" type="submit">
                                                    إرسال رابط إعادة الضبط
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </section>

                            </form>

                        </section>



                        <footer class="page-footer">

                            <a href="http://demo.bestprestashoptheme.com/savemart/ar/الحساب الشخصي" class="account-link">
                                <i class="material-icons"></i>
                                <span>العودة إلى تسجيل الدخول</span>
                            </a>

                        </footer>


                    </div>


                </div>
            </div>
        </div>



    </div>
@stop
