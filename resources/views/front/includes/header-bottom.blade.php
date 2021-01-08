<div class="header-bottom hidden-sm-down">
    <div class="container">
        <div class="row d-flex align-items-center">
            <div class="contentsticky_verticalmenu verticalmenu-main col-md-3 col-lg-3 d-flex" data-textshowmore="Show More" data-textless="Hide" data-desktop_item="3">
                <div class="toggle-nav d-flex align-items-center justify-content-start">
                    <span class="btnov-lines"></span>
                    <span>Shop By Categories</span>
                    <span class="caret-circle"></span>
                </div>
                <div class="verticalmenu-content has-showmore">
                    <div id="_desktop_verticalmenu" class="nov-verticalmenu block" data-count_showmore="6">
                        <div class="box-content block_content">
                            <div id="verticalmenu" class="verticalmenu" role="navigation">
                                <ul class="menu level1">
                                    @isset($categories)
                                        @foreach($categories as $category)
                                    <li class="item  parent">
                                        <a href="{{Route('category',$category->slug)}}" title="Laptops &amp; Accessories">
                                            <i class="hasicon nov-icon" style="background:url('http://demo.bestprestashoptheme.com/savemart/themes/vinova_savemart/assets/img/modules/novverticalmenu/icon/laptop.png') no-repeat scroll center center;">

                                            </i>{{$category->name}}</a>
                                        <span class="show-sub fa-active-sub">

                                        </span>
                                        <span class="menu-sub-title">Dell. HP, Macbook, Alienware and etc...</span>
                                        <div class="dropdown-menu" style="width:222px">
                                            @isset($category-> childrens)
                                            <ul>
                                                @foreach($category -> childrens as $childern)
                                                <li class="item  parent">
                                                    <a href="{{Route('category',$category->slug)}}" title="Laptop Thinkpad">{{$childern->name}}</a>
                                                    <span class="show-sub fa-active-sub"></span>
                                                    <div class="dropdown-menu">
                                                        @isset($childern -> childrens)
                                                            <ul>
                                                                @foreach($childern -> childrens as $_childern)
                                                                <li class="item ">
                                                                    <a href="{{Route('category',$category->slug)}}" title="Aliquam lobortis">{{$_childern->name}}</a>
                                                                </li>
                                                                @endforeach
                                                            </ul>
                                                        @endisset
                                                    </div>
                                                </li>
                                                @endforeach
                                            </ul>

                                            @endisset
                                        </div>
                                    </li>











                                        @endforeach

                                    @endisset


                                            <li class="more extra">Show More</li>



                                </ul>
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
