

<div class="container-fluid">
    <div id="displayTop" class="displaytopone">
        <div class="container">
            <div class="row">
                <div class="nov-row  col-lg-12 col-xs-12" >
                    <div class="nov-row-wrap row">
                        <!-- begin /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/novpagemanage/views/source/html.tpl -->
                        <div class="nov-html col-xl-3 col-lg-3 col-md-3">
                            <div class="block">
                                <div class="block_content">

                                </div>
                            </div>
                        </div>

                        <!-- end /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/novpagemanage/views/source/html.tpl -->

                        <!-- begin /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/novpagemanage/views/source/slider.tpl -->
                        <div id="nov-slider" class="slider-wrapper theme-default col-xl-12 col-lg-12 col-md-12 col-md-12"
                             data-effect="random"
                             data-slices="15"
                             data-animSpeed="500"
                             data-pauseTime="10000"
                             data-startSlide="0"
                             data-directionnav="false"
                             data-controlNav="true"
                             data-controlNavThumbs="false"
                             data-pauseOnHover="true"
                             data-manualAdvance="false"
                             data-randomStart="false">
                            <div class="nov_preload">
                                <div class="process-loading active">
                                    <div class="loader">
                                        <div class="dot"></div>
                                        <div class="dot"></div>
                                        <div class="dot"></div>
                                        <div class="dot"></div>
                                        <div class="dot"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="nivoSlider" style="height: 500px;">
                                @isset($sliders)
                                    @foreach($sliders as $slider)
                                        <a href="#" class="nivo-imageLink" style="display: none;">
                                            <img class="nivo-main-image" src="{{$slider->photo}}" alt="" title="#htmlcaption_51" style="">
                                        </a>

                                    @endforeach
                                @endisset
                            </div>
                            <div id="htmlcaption_42" class="nivo-html-caption">
                                <div class="nov-slider-ct">
                                    <div class="nov-center slider-none">
                                        <div class="nov-title effect-0" >
                                            Slide Home 3 01
                                        </div>
                                        <div class="nov-description effect-0" >
                                            <p>Slide Home 3 01</p>
                                        </div>
                                        <div class="nov-html effect-0">
                                            <p>Slide Home 3 01</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="htmlcaption_43" class="nivo-html-caption">
                                <div class="nov-slider-ct">
                                    <div class="nov-center slider-none">
                                        <div class="nov-title effect-0" >
                                            Slide Home 3 02
                                        </div>
                                        <div class="nov-description effect-0" >
                                            <p>Slide Home 3 02</p>
                                        </div>
                                        <div class="nov-html effect-0">
                                            <p>Slide Home 3 02</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="htmlcaption_57" class="nivo-html-caption">
                                <div class="nov-slider-ct">
                                    <div class="nov-center slider-none">
                                        <div class="nov-title effect-0" >
                                            Slider Home 3 03
                                        </div>
                                        <div class="nov-description effect-0" >
                                            <p>Slider Home 3 03</p>
                                        </div>
                                        <div class="nov-html effect-0">
                                            <p>Slider Home 3 03</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- end /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/novpagemanage/views/source/slider.tpl -->
                    </div></div>
            </div>
        </div>
    </div>

</div>
