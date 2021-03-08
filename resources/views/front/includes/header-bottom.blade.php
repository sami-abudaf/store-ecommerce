
<div class="header-bottom hidden-sm-down">
    <div class="container">
        <div class="row d-flex align-items-center">
            <div class="contentsticky_verticalmenu verticalmenu-main col-md-3 col-lg-3 d-flex" >
                <div class="toggle-nav d-flex align-items-center justify-content-start">
                    <span class="btnov-lines"></span>
                    <span>Shop By Categories</span>
                    <span class="caret-circle"></span>
                </div>
                <div class="verticalmenu-content has-showmore ">
                    <div id="_desktop_verticalmenu" class="nov-verticalmenu block" data-count_showmore="4">
                        <div class="box-content block_content">
                            <div id="verticalmenu" class="verticalmenu" role="navigation">
                                <ul class="menu level">
                                    @isset($categories)
                                        @foreach($categories as $category)
                                            <li class="item  parent group">
                                                <a href="{{route('category',$category -> slug )}}" title="{{$category -> name}}">

                                                    <img  class="hasicon nov-icon" src="{{$category->photo}}" alt="{{$category -> name}}">
                                                   {{$category -> name}}</a>

                                                @isset($category -> childrens)

                                                    <span
                                                        class="show-sub fa-active-sub"></span>
                                                    <div class="dropdown-menu" style="width:222px">
                                                        <ul>
                                                            @foreach($category -> childrens as $childern)

                                                                <li class="item  parent group" style="text-align: right;">

                                                                    <a href="{{route('category',$childern -> slug )}}"
                                                                       title="{{$childern -> name}}">
                                                                        <img  class="hasicon nov-icon" src="{{$childern->photo}}" alt="{{$childern -> name}}">
                                                                        {{$childern -> name}}</a>
                                                                    @isset($childern -> childrens )
                                                                        <span class="show-sub fa-active-sub"></span>
                                                                        <div class="dropdown-menu">
                                                                            <ul>
                                                                                @foreach($childern -> childrens  as $_childern)
                                                                                    <li class="item " style="text-align: right;">
                                                                                        <a href="{{route('category',$_childern -> slug )}}"
                                                                                           title="{{$_childern -> name}}">
                                                                                            <img  class="hasicon nov-icon" src="{{$_childern->photo}}" alt="">
                                                                                            {{$_childern -> name}}
                                                                                        </a>
                                                                                    </li>
                                                                                @endforeach
                                                                            </ul>
                                                                        </div>
                                                                    @endisset
                                                                </li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                @endisset
                                            </li>
                                        @endforeach
                                    @endisset


                                    <li class="item  parent group">
                                        <a href="#" title="Electronics">
                                            <i class="hasicon nov-icon" style="background:url('http://demo.bestprestashoptheme.com/savemart/themes/vinova_savemart/assets/img/modules/novverticalmenu/icon/Electronic.png') no-repeat scroll center center;">

                                            </i>Electronics</a>
                                        <span class="show-sub fa-active-sub"></span>
                                        <span class="menu-sub-title">Blender , iron, Vacuum cleaner ...</span>
                                        <div class="dropdown-menu" style="width: 922px; top: -73px;">
                                            <ul>
                                                <li class="item group-list-category">
                                                    <div class="menu-content">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-12">
                                                                <p class="title-category">Houseware</p>
                                                                <ul>
                                                                    <li><a href="#">Fridge</a></li>
                                                                    <li><a href="#">Air conditioning</a></li>
                                                                    <li><a href="#">Electric Fan</a></li>
                                                                    <li><a href="#">Spray Mist Fan</a></li>
                                                                    <li><a href="#">Vacuum Cleanr</a></li>
                                                                    <li><a href="#">Washing Machine</a></li>
                                                                    <li><a href="#">Cooker</a></li>
                                                                    <li><a href="#">Television</a></li>
                                                                    <li><a href="#">Heater</a></li>
                                                                    <li><a href="#">Water purifier</a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-lg-3 col-12">
                                                                <p class="title-category">Kitchen equipment</p>
                                                                <ul>
                                                                    <li><a href="#">Cooker</a></li>
                                                                    <li><a href="#">Microwave</a></li>
                                                                    <li><a href="#">Dishwasher</a></li>
                                                                    <li><a href="#">Dryer</a></li>
                                                                    <li><a href="#">Kitchen infrared</a></li>
                                                                    <li><a href="#">Gas stove</a></li>
                                                                    <li><a href="#">Oven</a></li>
                                                                    <li><a href="#">Water boiler</a></li>
                                                                    <li><a href="#">Blender</a></li>
                                                                    <li><a href="#">Fruit presses</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>





                                    <li class="item  parent group"><a href="#" title="Audio &amp; Sound Devices"><i class="hasicon nov-icon" style="background:url('http://demo.bestprestashoptheme.com/savemart/themes/vinova_savemart/assets/img/modules/novverticalmenu/icon/audio-sound.png') no-repeat scroll center center;"></i>Audio &amp; Sound Devices</a><span class="show-sub fa-active-sub"></span><span class="menu-sub-title">Speaker, Headphone, Soundcard ...</span><div class="dropdown-menu" style="width: 922px; top: -143px;"><ul><li class="item group-list-category-1"><div class="menu-content"><div class="row">
                                                            <div class="col-lg-3 col-12">
                                                                <p class="title-category">Speaker</p>
                                                                <ul>
                                                                    <li class="item "><a href="#" title="Lansing Products">Lansing Products</a></li>
                                                                    <li class="item  parent"><a href="#" title="UFi Products">UFi Products</a></li>
                                                                    <li class="item "><a href="#" title="Edifier Products">Edifier Products</a></li>
                                                                    <li class="item "><a href="#" title="Sarotech Products">Sarotech Products</a></li>
                                                                    <li class="item "><a href="#" title="Plantronics Products">Plantronics Products</a></li>
                                                                    <li class="item "><a href="#" title="Sennheiser Products">Sennheiser Products</a></li>
                                                                    <li class="item "><a href="#" title="Mionix Products">Mionix Products</a></li>
                                                                    <li class="item "><a href="#" title="Libratone Products">Libratone Products</a></li>
                                                                    <li class="item "><a href="#" title="LehmannAudio Products">LehmannAudio Products</a></li>
                                                                    <li class="item "><a href="#" title="Amphion LoudSpeaker">Amphion LoudSpeaker</a></li>
                                                                    <li class="item "><a href="#" title="Tangent Audio">Tangent Audio</a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-lg-3 col-12">
                                                                <p class="title-category">HeadPhone</p>
                                                                <ul>
                                                                    <li class="item "><a href="#" title="Lansing Products">Lansing Products</a></li>
                                                                    <li class="item  parent"><a href="#" title="UFi Products">UFi Products</a></li>
                                                                    <li class="item "><a href="#" title="Edifier Products">Edifier Products</a></li>
                                                                    <li class="item "><a href="#" title="Sarotech Products">Sarotech Products</a></li>
                                                                    <li class="item "><a href="#" title="Plantronics Products">Plantronics Products</a></li>
                                                                    <li class="item "><a href="#" title="Sennheiser Products">Sennheiser Products</a></li>
                                                                    <li class="item "><a href="#" title="Mionix Products">Mionix Products</a></li>
                                                                    <li class="item "><a href="#" title="Libratone Products">Libratone Products</a></li>
                                                                    <li class="item "><a href="#" title="LehmannAudio Products">LehmannAudio Products</a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-lg-3 col-12">
                                                                <p class="title-category">HeadPhone</p>
                                                                <ul>
                                                                    <li class="item "><a href="#" title="Lansing Products">Lansing Products</a></li>
                                                                    <li class="item  parent"><a href="#" title="UFi Products">UFi Products</a></li>
                                                                    <li class="item "><a href="#" title="Edifier Products">Edifier Products</a></li>
                                                                    <li class="item "><a href="#" title="Sarotech Products">Sarotech Products</a></li>
                                                                    <li class="item "><a href="#" title="Plantronics Products">Plantronics Products</a></li>
                                                                    <li class="item "><a href="#" title="Sennheiser Products">Sennheiser Products</a></li>
                                                                    <li class="item "><a href="#" title="Mionix Products">Mionix Products</a></li>
                                                                </ul>
                                                            </div>
                                                        </div></div></li></ul></div></li>
                                    <li class="item  parent group"><a href="#" title="Smartphone &amp; Tablets"><i class="hasicon nov-icon" style="background:url('http://demo.bestprestashoptheme.com/savemart/themes/vinova_savemart/assets/img/modules/novverticalmenu/icon/tablet.png') no-repeat scroll center center;"></i>Smartphone &amp; Tablets</a><span class="show-sub fa-active-sub"></span><span class="menu-sub-title">Iphone, OPPO, SamSung, SONY ...</span><div class="dropdown-menu" style="width: 922px; top: -215px;"><ul><li class="item group-list-category-2"><div class="menu-content"><div class="row">
                                                            <div class="col-lg-3 col-12">
                                                                <p class="title-category">IPhone</p>
                                                                <ul>
                                                                    <li class="item "><a href="#" title="iPhone X">iPhone X</a></li>
                                                                    <li class="item  parent"><a href="#" title="iPhone 7 / 7 Plus">iPhone 7 / 7 Plus</a></li>
                                                                    <li class="item "><a href="#" title="iPhone 6s / 6s Plus">iPhone 6s / 6s Plus</a></li>
                                                                    <li class="item "><a href="#" title="Accesories">Accesories</a></li>
                                                                </ul>
                                                                <p class="title-category mt-23">TABLET</p>
                                                                <ul>
                                                                    <li class="item "><a href="#" title="iPad">iPad</a></li>
                                                                    <li class="item  parent"><a href="#" title="Samsung">Samsung</a></li>
                                                                    <li class="item "><a href="#" title="Lenovo">Lenovo</a></li>
                                                                    <li class="item "><a href="#" title="Huawei">Huawei</a></li>
                                                                    <li class="item "><a href="#" title="Asus">Asus</a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-lg-3 col-12">
                                                                <p class="title-category">Android phone</p>
                                                                <ul>
                                                                    <li class="item "><a href="#" title="SamSung Galaxy">SamSung Galaxy</a></li>
                                                                    <li class="item  parent"><a href="#" title="Samsung ">Samsung </a></li>
                                                                    <li class="item "><a href="#" title="OPPO ">OPPO </a></li>
                                                                    <li class="item "><a href="#" title="Sony">Sony</a></li>
                                                                    <li class="item "><a href="#" title="Xiaomi ">Xiaomi </a></li>
                                                                    <li class="item "><a href="#" title="Huawei ">Huawei </a></li>
                                                                    <li class="item "><a href="#" title="Nokia ">Nokia </a></li>
                                                                    <li class="item "><a href="#" title="Motorola ">Motorola</a></li>
                                                                    <li class="item "><a href="#" title="Asus (Zenfone)">Asus (Zenfone)</a></li>
                                                                    <li class="item "><a href="#" title="HTC">HTC</a></li>
                                                                    <li class="item "><a href="#" title="Mobiistar">Mobiistar</a></li>
                                                                </ul>
                                                            </div>
                                                        </div></div></li></ul></div></li>
                                    <li class="item "><a href="#" title="Gaming Gear"><i class="hasicon nov-icon" style="background:url('http://demo.bestprestashoptheme.com/savemart/themes/vinova_savemart/assets/img/modules/novverticalmenu/icon/game.png') no-repeat scroll center center;"></i>Gaming Gear</a><span class="menu-sub-title">Mouse, Headphone, Console ...</span></li>
                                    <li class="item "><a href="#" title="Smart Watches "><i class="hasicon nov-icon" style="background:url('http://demo.bestprestashoptheme.com/savemart/themes/vinova_savemart/assets/img/modules/novverticalmenu/icon/smart-watch.png') no-repeat scroll center center;"></i>Smart Watches </a><span class="menu-sub-title">Lorem ipsum dolor sit amet quam</span></li>
                                    <li class="item  toggleable" style="display: none;"><a href="#" title="Camera"><i class="hasicon nov-icon" style="background:url('http://demo.bestprestashoptheme.com/savemart/themes/vinova_savemart/assets/img/modules/novverticalmenu/icon/camera.png') no-repeat scroll center center;"></i>Camera</a><span class="menu-sub-title">Lorem ipsum dolor sit amet quam</span></li>
                                    <li class="item  toggleable" style="display: none;"><a href="#" title="Monitor &amp; Television"><i class="hasicon nov-icon" style="background:url('http://demo.bestprestashoptheme.com/savemart/themes/vinova_savemart/assets/img/modules/novverticalmenu/icon/monitor.png') no-repeat scroll center center;"></i>Monitor &amp; Television</a><span class="menu-sub-title">Sony BRAVIA, SamSung, TV 4K ...</span></li>
                                    <li class="more extra">Show More</li></ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-9 col-md-9 header-menu d-flex align-items-center justify-content-end">
                <div class="data-contact d-flex align-items-center hidden-md-down">
                    <div class="title-icon"><i class="icon-support icon-address"></i></div>
                    <div class="content-data-contact">
                        <div class="support">Call customer services :</div>
                        <div class="phone-support">
                            1234 567 899
                        </div>
                    </div>
                </div>
                <div id="_desktop_search" class="contentsticky_search">
                    <!-- block seach mobile -->
                    <!-- Block search module TOP -->
                    <div id="desktop_search_content" data-id_lang="6" data-ajaxsearch="1" data-novadvancedsearch_type="top" data-instantsearch="" data-search_ssl="" data-link_search_ssl="http://demo.bestprestashoptheme.com/savemart/ar/بحث" data-action="http://demo.bestprestashoptheme.com/savemart/ar/module/novadvancedsearch/result">
                        <form method="get" action="http://demo.bestprestashoptheme.com/savemart/ar/module/novadvancedsearch/result" id="searchbox" class="form-novadvancedsearch">
                            <input type="hidden" name="fc" value="module">
                            <input type="hidden" name="module" value="novadvancedsearch">
                            <input type="hidden" name="controller" value="result">
                            <input type="hidden" name="orderby" value="position">
                            <input type="hidden" name="orderway" value="desc">
                            <input type="hidden" name="id_category" class="id_category" value="0">
                            <div class="input-group">
                                <input type="text" id="search_query_top" class="search_query ui-autocomplete-input form-control ac_input" name="search_query" value="" placeholder="Search" novautocomplete="off">

                                <div class="input-group-btn nov_category_tree hidden-sm-down">
                                    <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" value="" aria-expanded="false">
                                        CATEGORIES
                                    </button>
                                    <ul class="dropdown-menu list-unstyled">
                                        <li class="dropdown-item active" data-value="0"><span>All Categories</span></li>
                                        <li class="dropdown-item " data-value="2"><span>الصفحة الرئيسية</span></li>
                                        <ul class="list-unstyled pl-5">
                                            <li class="dropdown-item" data-value="3">
                                                <span>Computer &amp; Networking</span>
                                            </li>
                                            <li class="dropdown-item" data-value="10">
                                                <span>-- USB</span>
                                                <ul class="list-unstyled">
                                                    <li class="dropdown-item" data-value="11">
                                                        <span>---- USB Kingston</span>
                                                    </li>
                                                    <li class="dropdown-item" data-value="12">
                                                        <span>---- USB Sandisk</span>
                                                    </li>
                                                    <li class="dropdown-item" data-value="13">
                                                        <span>---- USB Samsung</span>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown-item" data-value="14">
                                                <span>-- Hard Disk</span>
                                                <ul class="list-unstyled">
                                                    <li class="dropdown-item" data-value="19">
                                                        <span>---- Hard Disk Drive</span>
                                                    </li>
                                                    <li class="dropdown-item" data-value="20">
                                                        <span>---- Solid State Drives</span>
                                                    </li>
                                                    <li class="dropdown-item" data-value="21">
                                                        <span>---- SATA</span>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown-item" data-value="15">
                                                <span>-- Modem WIFI</span>
                                            </li>
                                            <li class="dropdown-item" data-value="16">
                                                <span>-- Keyboard</span>
                                                <ul class="list-unstyled">
                                                    <li class="dropdown-item" data-value="22">
                                                        <span>---- Keyboard 1</span>
                                                    </li>
                                                    <li class="dropdown-item" data-value="23">
                                                        <span>---- Keyboard 2</span>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown-item" data-value="17">
                                                <span>-- Mouse</span>
                                            </li>
                                            <li class="dropdown-item" data-value="18">
                                                <span>-- Monitor</span>
                                            </li>
                                            <li class="dropdown-item" data-value="6">
                                                <span>Laptop &amp; Accessories</span>
                                            </li>
                                            <li class="dropdown-item" data-value="7">
                                                <span>-- Laptop 1</span>
                                            </li>
                                            <li class="dropdown-item" data-value="8">
                                                <span>-- Laptop 2</span>
                                            </li>
                                            <li class="dropdown-item" data-value="9">
                                                <span>Smartphone &amp; Tablet</span>
                                            </li>
                                            <li class="dropdown-item" data-value="24">
                                                <span>-- Apple</span>
                                            </li>
                                            <li class="dropdown-item" data-value="25">
                                                <span>-- Samsung</span>
                                            </li>
                                            <li class="dropdown-item" data-value="26">
                                                <span>-- Motorola</span>
                                            </li>
                                            <li class="dropdown-item" data-value="27">
                                                <span>-- Chargers</span>
                                            </li>
                                            <li class="dropdown-item" data-value="4">
                                                <span>Home Appliance</span>
                                            </li>
                                            <li class="dropdown-item" data-value="5">
                                                <span>Camera &amp; Photo</span>
                                            </li>
                                            <li class="dropdown-item" data-value="28">
                                                <span>-- Camera 1</span>
                                            </li>
                                            <li class="dropdown-item" data-value="29">
                                                <span>-- Camera 2</span>
                                            </li>
                                            <li class="dropdown-item" data-value="30">
                                                <span>-- Photo 1</span>
                                            </li>
                                            <li class="dropdown-item" data-value="31">
                                                <span>-- Photo 2</span>
                                            </li>
                                            <li class="dropdown-item" data-value="32">
                                                <span>Audio</span>
                                            </li>
                                            <li class="dropdown-item" data-value="33">
                                                <span>-- Headphone</span>
                                            </li>
                                            <li class="dropdown-item" data-value="34">
                                                <span>-- Wireless Speaker</span>
                                            </li>
                                            <li class="dropdown-item" data-value="35">
                                                <span>-- Bluetooth Speaker</span>
                                            </li>
                                            <li class="dropdown-item" data-value="36">
                                                <span>-- Mini Speaker</span>
                                            </li>
                                            <li class="dropdown-item" data-value="37">
                                                <span>-- Sound Card</span>
                                            </li>
                                            <li class="dropdown-item" data-value="38">
                                                <span>-- إكسسوارات</span>
                                            </li>
                                            <li class="dropdown-item" data-value="39">
                                                <span>-- Earbuds and  In-ear</span>
                                            </li>
                                        </ul>
                                    </ul>
                                </div>

                                <span class="input-group-btn">
				 <button class="btn btn-secondary" type="submit" name="submit_search"><i class="material-icons">search</i></button>
			</span>
                            </div>

                        </form>
                    </div>
                    <!-- /Block search module TOP -->

                </div>
            </div>
        </div>
    </div>
</div>
