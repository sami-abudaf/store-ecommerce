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





                        <section id="content" class="page-content">

                            <div id="mywishlist">

                                <h1 class="page-title">My wishlists</h1>

                                <form method="post" class="std" id="form_wishlist">
                                    <fieldset>
                                        <h3>New wishlist</h3>
                                        <div class="input-group">
                                            <input type="hidden" name="token" value="a4d63594a4a6ba355980688e74fcedbe">
                                            <input type="text" id="name" name="name" placeholder="Name" class="form-control" value="">
                                            <span class="input-group-btn">
				        <button id="submitWishlist" name="submitWishlist" class="btn btn-secondary" type="submit">حفظ</button>
				    </span>
                                        </div>
                                    </fieldset>
                                </form>
                                <div id="block-history" class="block-center">
                                    <table class="std table">
                                        <thead>
                                        <tr>
                                            <th class="first_item">Name</th>
                                            <th class="item mywishlist_first">Qty</th>
                                            <th class="item mywishlist_first">Viewed</th>
                                            <th class="item mywishlist_second">Created</th>
                                            <th class="item mywishlist_second">Direct Link</th>
                                            <th class="item mywishlist_second">Default</th>
                                            <th class="last_item mywishlist_first">حذف</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr id="wishlist_22">
                                            <td style="width:200px;">
                                                <a href="javascript:;" onclick="javascript:WishlistManage('block-order-detail', '22');">My wishlist</a>
                                            </td>
                                            <td class="bold align_center">
                                                3
                                            </td>
                                            <td>0</td>
                                            <td>2021-01-05</td>
                                            <td><a href="javascript:;" onclick="javascript:WishlistManage('block-order-detail', '22');">عرض</a></td>
                                            <td class="wishlist_default">
                                                <p class="is_wish_list_default">
                                                    <i class="icon icon-check-square"></i>
                                                </p>
                                            </td>
                                            <td class="wishlist_delete">
                                                <a href="javascript:;" onclick="return (WishlistDelete('wishlist_22', '22', 'Do you really want to delete this wishlist ?'));">حذف</a>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div id="block-order-detail" style="display: block;">
                                    <div class="wishlistLinkTop" style="display: none;">
                                        <a href="#" id="hideWishlist" class="button_account" onclick="WishlistVisibility('wishlistLinkTop', 'Wishlist'); return false;" title="Close this wishlist" style="display: none;"><i class="material-icons close">close</i></a>
                                        <ul class="clearfix display_list">
                                            <li>
                                                <a href="#" id="hideBoughtProducts" class="button_account" onclick="WishlistVisibility('wlp_bought', 'BoughtProducts'); return false;" title="Hide products">Hide products</a>
                                                <a href="#" id="showBoughtProducts" class="button_account" onclick="WishlistVisibility('wlp_bought', 'BoughtProducts'); return false;" title="Show products">Show products</a>
                                            </li>
                                            <li>
                                                <a href="#" id="hideBoughtProductsInfos" class="button_account" onclick="WishlistVisibility('wlp_bought_infos', 'BoughtProductsInfos'); return false;" title="Hide products">Hide bought products' info</a>
                                                <a href="#" id="showBoughtProductsInfos" class="button_account" onclick="WishlistVisibility('wlp_bought_infos', 'BoughtProductsInfos'); return false;" title="Show products">Show bought products' info</a>
                                            </li>
                                        </ul>
                                        <p class="wishlisturl">Permalink: <input type="text" value="http://demo.bestprestashoptheme.com/savemart/ar/module/novblockwishlist/view?token=7D15E52753784314" style="width:540px;" readonly="readonly"></p>
                                        <p class="submit">
                                        </p><div id="showSendWishlist">
                                            <a href="#" class="button_account exclusive" onclick="WishlistVisibility('wl_send', 'SendWishlist'); return false;" title="Send this wishlist">Send this wishlist</a>
                                        </div>
                                        <p></p>
                                    </div>
                                    <div class="wlp_bought">
                                        <div class="clearfix row wlp_bought_list">
                                            <div id="wlp_5_0" class="col-md-3 col-sm-4 col-xs-6 address item">
                                                <a href="javascript:;" class="lnkdel" onclick="WishlistProductManage('wlp_bought', 'delete', '22', '5', '0', $('#quantity_5_0').val(), $('#priority_5_0').val());" title="حذف"><i class="material-icons close">close</i></a>
                                                <div class="clearfix">
                                                    <div class="product_image">
                                                        <a href="http://demo.bestprestashoptheme.com/savemart/ar/audio/5-today-is-a-good-day-framed-poster.html" title="Product detail">
                                                            <img class="img-fluid" src="http://demo.bestprestashoptheme.com/savemart/44-medium_default/today-is-a-good-day-framed-poster.jpg" alt="Vehicula vel tempus sit amet ulte">
                                                        </a>
                                                    </div>
                                                    <div class="product_infos">
                                                        <div id="s_title" class="product_name"><a href="http://demo.bestprestashoptheme.com/savemart/ar/audio/5-today-is-a-good-day-framed-poster.html">Vehicula vel tempus sit...</a></div>
                                                        <div class="wishlist_product_detail">
                                                            <div class="form-inline">
                                                                <label class="form-control-label">Qty:</label>
                                                                <input type="text" class="form-control quantity" id="quantity_5_0" value="1">
                                                                <label class="form-control-label">Priority:</label>
                                                                <select id="priority_5_0" class="priority custom-select">
                                                                    <option value="0">High</option>
                                                                    <option value="1" selected="selected">Medium</option>
                                                                    <option value="2">Low</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="btn_action clearfix text-center">
                                                    <a href="javascript:;" class="btn btn-default exclusive lnksave" onclick="WishlistProductManage('wlp_bought_0', 'update', '22', '5', '0', $('#quantity_5_0').val(), $('#priority_5_0').val());" title="حفظ">حفظ</a>
                                                </div>
                                            </div>
                                            <div id="wlp_6_0" class="col-md-3 col-sm-4 col-xs-6 address alternate_item">
                                                <a href="javascript:;" class="lnkdel" onclick="WishlistProductManage('wlp_bought', 'delete', '22', '6', '0', $('#quantity_6_0').val(), $('#priority_6_0').val());" title="حذف"><i class="material-icons close">close</i></a>
                                                <div class="clearfix">
                                                    <div class="product_image">
                                                        <a href="http://demo.bestprestashoptheme.com/savemart/ar/home-appliance/6-nullam-tempor-orci-eu-pretium.html" title="Product detail">
                                                            <img class="img-fluid" src="http://demo.bestprestashoptheme.com/savemart/49-medium_default/nullam-tempor-orci-eu-pretium.jpg" alt="Nullam tempor orci eu pretium">
                                                        </a>
                                                    </div>
                                                    <div class="product_infos">
                                                        <div id="s_title" class="product_name"><a href="http://demo.bestprestashoptheme.com/savemart/ar/home-appliance/6-nullam-tempor-orci-eu-pretium.html">Nullam tempor orci eu pretium</a></div>
                                                        <div class="wishlist_product_detail">
                                                            <div class="form-inline">
                                                                <label class="form-control-label">Qty:</label>
                                                                <input type="text" class="form-control quantity" id="quantity_6_0" value="1">
                                                                <label class="form-control-label">Priority:</label>
                                                                <select id="priority_6_0" class="priority custom-select">
                                                                    <option value="0">High</option>
                                                                    <option value="1" selected="selected">Medium</option>
                                                                    <option value="2">Low</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="btn_action clearfix text-center">
                                                    <a href="javascript:;" class="btn btn-default exclusive lnksave" onclick="WishlistProductManage('wlp_bought_0', 'update', '22', '6', '0', $('#quantity_6_0').val(), $('#priority_6_0').val());" title="حفظ">حفظ</a>
                                                </div>
                                            </div>
                                            <div id="wlp_7_0" class="col-md-3 col-sm-4 col-xs-6 address item">
                                                <a href="javascript:;" class="lnkdel" onclick="WishlistProductManage('wlp_bought', 'delete', '22', '7', '0', $('#quantity_7_0').val(), $('#priority_7_0').val());" title="حذف"><i class="material-icons close">close</i></a>
                                                <div class="clearfix">
                                                    <div class="product_image">
                                                        <a href="http://demo.bestprestashoptheme.com/savemart/ar/home-appliance/7-donec-non-lectus-ac-erat-sedei.html" title="Product detail">
                                                            <img class="img-fluid" src="http://demo.bestprestashoptheme.com/savemart/54-medium_default/donec-non-lectus-ac-erat-sedei.jpg" alt="Donec non lectus ac erat sedei">
                                                        </a>
                                                    </div>
                                                    <div class="product_infos">
                                                        <div id="s_title" class="product_name"><a href="http://demo.bestprestashoptheme.com/savemart/ar/home-appliance/7-donec-non-lectus-ac-erat-sedei.html">Donec non lectus ac erat sedei</a></div>
                                                        <div class="wishlist_product_detail">
                                                            <div class="form-inline">
                                                                <label class="form-control-label">Qty:</label>
                                                                <input type="text" class="form-control quantity" id="quantity_7_0" value="1">
                                                                <label class="form-control-label">Priority:</label>
                                                                <select id="priority_7_0" class="priority custom-select">
                                                                    <option value="0">High</option>
                                                                    <option value="1" selected="selected">Medium</option>
                                                                    <option value="2">Low</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="btn_action clearfix text-center">
                                                    <a href="javascript:;" class="btn btn-default exclusive lnksave" onclick="WishlistProductManage('wlp_bought_0', 'update', '22', '7', '0', $('#quantity_7_0').val(), $('#priority_7_0').val());" title="حفظ">حفظ</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <form method="post" class="wl_send std" onsubmit="return (false);" style="display: none;">
                                        <a id="hideSendWishlist" class="button_account icon" href="#" onclick="WishlistVisibility('wl_send', 'SendWishlist'); return false;" title="Close this wishlist">
                                            <i class="material-icons close">close</i>
                                        </a>
                                        <fieldset>
                                            <p class="required">
                                                <label for="email1">Email1 <sup>*</sup></label>
                                                <input type="text" class="form-control" name="email1" id="email1">
                                            </p>
                                            <p>
                                                <label for="email2">Email2</label>
                                                <input type="text" name="email2" class="form-control" id="email2">
                                            </p>
                                            <p>
                                                <label for="email3">Email3</label>
                                                <input type="text" name="email3" class="form-control" id="email3">
                                            </p>
                                            <p>
                                                <label for="email4">Email4</label>
                                                <input type="text" name="email4" class="form-control" id="email4">
                                            </p>
                                            <p>
                                                <label for="email5">Email5</label>
                                                <input type="text" name="email5" class="form-control" id="email5">
                                            </p>
                                            <p>
                                                <label for="email6">Email6</label>
                                                <input type="text" name="email6" class="form-control" id="email6">
                                            </p>
                                            <p>
                                                <label for="email7">Email7</label>
                                                <input type="text" name="email7" class="form-control" id="email7">
                                            </p>
                                            <p>
                                                <label for="email8">Email8</label>
                                                <input type="text" name="email8" class="form-control" id="email8">
                                            </p>
                                            <p>
                                                <label for="email9">Email9</label>
                                                <input type="text" name="email9" class="form-control" id="email9">
                                            </p>
                                            <p>
                                                <label for="email10">Email10</label>
                                                <input type="text" name="email10" class="form-control" id="email10">
                                            </p>
                                            <p class="submit">
                                                <input class="btn btn-default" type="submit" value="ارسل" name="submitWishlist" onclick="WishlistSend('wl_send', '22', 'email');">
                                            </p>
                                            <p class="required">
                                                <sup>*</sup> Required field
                                            </p>
                                        </fieldset>
                                    </form>
                                    <table class="wlp_bought_infos hidden std">
                                        <thead>
                                        <tr>
                                            <th class="first_item">Product</th>
                                            <th class="item">Quantity</th>
                                            <th class="item">Offered by</th>
                                            <th class="last_item">Date</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                    </table>
                                </div>

                                <div class="footer_links clearfix">
                                    <a href="http://demo.bestprestashoptheme.com/savemart/ar/الحساب الشخصي" class="btn btn-primary pull-left"><i class="material-icons">assignment_return</i><span>Back to Your Account</span></a>
                                    <a href="http://demo.bestprestashoptheme.com/savemart/" class="btn btn-secondary pull-left home"><i class="material-icons">home</i><span>الصفحة الرئيسية</span></a>
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

