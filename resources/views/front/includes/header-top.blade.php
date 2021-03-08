<div class="header-top hidden-sm-down">
    <div class="container">
        <div class="content">
            <div class="row">
                <div class="header-top-left col-lg-6 col-md-6 d-flex justify-content-start align-items-center">
                    <div class="detail-email d-flex align-items-center justify-content-center">
                        <i class="icon-email"></i>
                        <p>Email :  </p>
                        <span>
                  support@gmail.com

                </span>
                    </div>
                    <div class="detail-call d-flex align-items-center justify-content-center">
                        <i class="icon-deal"></i>
                        <p>Today Deals </p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 d-flex justify-content-end align-items-center header-top-right">

                    <div class="register-out">

                            <!-- Authentication Links -->
                            @guest
                                <i class="zmdi zmdi-account"></i>

                                    <a class="login" href="{{ route('login') }}">{{ __('Login') }}</a>

                                <span class="or-text">or</span>
                                @if (Route::has('register'))

                                        <a class="register" href="{{ route('register') }}">{{ __('Register') }}</a>

                                @endif
                            @else

                                    <a   href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }}
                                    </a>

                            <i class="zmdi zmdi-account"></i>
                                        <a  href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>


                            @endguest


                    </div>
                    <div id="_desktop_currency_selector" class="currency-selector groups-selector hidden-sm-down currentcy-selector-dropdown">
                        <div class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="main">
                            <span class="expand-more">GBP</span>
                        </div>
                        <div class="currency-list dropdown-menu">
                            <div class="currency-list-content text-left">
                                <div class="currency-item current flex-first">
                                    <a title="جنيه إسترليني" rel="nofollow" href="http://demo.bestprestashoptheme.com/savemart/ar/module/novblockwishlist/mywishlist?SubmitCurrency=1&amp;id_currency=1">UK£ GBP</a>
                                </div>
                                <div class="currency-item">
                                    <a title="دولار أمريكي" rel="nofollow" href="http://demo.bestprestashoptheme.com/savemart/ar/module/novblockwishlist/mywishlist?SubmitCurrency=1&amp;id_currency=2">US$ USD</a>
                                </div>
                            </div>
                        </div>
                    </div>




                    <div id="_desktop_language_selector" class="language-selector groups-selector hidden-sm-down language-selector-dropdown">
                        <div class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="main">
                            <span class="expand-more"><img class="img-fluid" src="http://demo.bestprestashoptheme.com/savemart/img/l/6.jpg" alt="اللغة العربية" width="16" height="11"></span>
                        </div>
                        <div class="language-list dropdown-menu">
                            <div class="language-list-content text-left">
                                <div class="language-item">
                                    @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)

                                        <a class="dropdown-item" rel="alternate" hreflang="{{ $localeCode }}"
                                           href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                            {{ $properties['native'] }}
                                        </a>

                                        <div class="dropdown-divider"></div>
                                    @endforeach
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
