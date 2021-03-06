
@extends('layouts.site')

@section('content')


<div id="wrapper-site">

            <nav data-depth="3" class="breadcrumb-bg">
  <div class="container no-index">
    <div class="breadcrumb">

    <ol itemscope="" itemtype="http://schema.org/BreadcrumbList">
              <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
          <a itemprop="item" href="{{Route('home')}}">
            <span itemprop="name">الصفحة الرئيسية</span>
          </a>
          <meta itemprop="position" content="1">
        </li>
              <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
          <a itemprop="item" href="">
            <span itemprop="name">Smartphone &amp; Tablet</span>
          </a>
          <meta itemprop="position" content="2">
        </li>
              <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
          <a itemprop="item" href="http://demo.bestprestashoptheme.com/savemart/ar/smartphone-tablet/3-95-the-best-is-yet-to-come-framed-poster.html#/الحجم-ص/اللون_-برتقالي">
            <span itemprop="name">{{$product->name}}</span>
          </a>
          <meta itemprop="position" content="3">
        </li>
          </ol>

    </div>
  </div>
</nav>



<div class="no-index">
  <div id="content-wrapper">

      <section id="main" itemscope="" itemtype="https://schema.org/Product">
        <meta itemprop="url" content="http://demo.bestprestashoptheme.com/savemart/ar/smartphone-tablet/3-95-the-best-is-yet-to-come-framed-poster.html#/1-الحجم-ص/13-اللون_-برتقالي">
        <div class="product-detail-top">
          <div class="container">



            <div class="row main-productdetail" data-product_layout_thumb="list_thumb" style="position: relative;">
              <div class="col-lg-5 col-md-4 col-xs-12 box-image">

                  <section class="page-content" id="content">

                      <div class="images-container list_thumb">

                          <div class="product-cover">
                              <img class="js-qv-product-cover img-fluid" src="{{$product ->images[0]->photo ?? ''}}" alt="" title="" style="width:100%; padding: 5%;" itemprop="image">
                              <div class="layer hidden-sm-down  " data-toggle="modal" data-target="#product-modal"   >

                                  <i class="fa fa-expand"></i>
                              </div>




                          </div>



                          <div class="js-qv-mask mask only-product">
                              <div class="row">
                                  <div class="item thumb-container col-md-6 col-xs-12 pt-30">
                                      <img class="img-fluid thumb js-thumb  selected " data-image-medium-src="{{$product->images[0]->photo ?? ''}}" data-image-large-src="{{$product->images[0]->photo ?? ''}}" src="{{$product->images[0]->photo ?? ''}}" alt="" title="" itemprop="image">
                                  </div>
                                  <div class="item thumb-container col-md-6 col-xs-12 pt-30">
                                      <img class="img-fluid thumb js-thumb " data-image-medium-src="{{$product->images[1]->photo ?? ''}}" data-image-large-src="{{$product->images[1]->photo ?? ''}}" src="{{$product->images[1]->photo ?? ''}}" alt="" title="" itemprop="image">
                                  </div>
                                  <div class="item thumb-container col-md-6 col-xs-12 pt-30">
                                      <img class="img-fluid thumb js-thumb " data-image-medium-src="{{$product->images[2]->photo ?? ''}}" data-image-large-src="{{$product->images[2]->photo ?? ''}}" src="{{$product->images[2]->photo ?? ''}}" alt="" title="" itemprop="image">
                                  </div>
                                  <div class="item thumb-container col-md-6 col-xs-12 pt-30">
                                      <img class="img-fluid thumb js-thumb " data-image-medium-src="{{$product->images[3]->photo ?? ''}}" data-image-large-src="{{$product->images[3]->photo ?? ''}}" src="{{$product->images[3]->photo ?? ''}}" alt="" title="" itemprop="image">
                                  </div>
                                  <div class="item thumb-container col-md-6 col-xs-12 pt-30">
                                      <img class="img-fluid thumb js-thumb " data-image-medium-src="{{$product->images[4]->photo ?? ''}}" data-image-large-src="{{$product->images[4]->photo ?? ''}}" src="{{$product->images[4]->photo ?? ''}}" alt="" title="" itemprop="image">
                                  </div>
                              </div>
                          </div>

                      </div>



                  </section>

              </div>

              <div class="col-lg-7 col-md-8 col-xs-12 mt-sm-20">
                <div class="product-information">
                  <div class="product-actions">

                      <form action="http://demo.bestprestashoptheme.com/savemart/ar/عربة التسوق" method="post" id="add-to-cart-or-refresh" class="row">
                        <input type="hidden" name="token" value="1c1b041fc4f61f63909a66bab7761cd4">
                        <input type="hidden" name="id_product" value="3" id="product_page_product_id">
                        <input type="hidden" name="id_customization" value="0" id="product_customization_id">
                        <div class="productdetail-right col-12 col-lg-6 col-md-6">
                          <div class="product-reviews">
                             <div id="product_comments_block_extra">

	<div class="comments_note">
		<span>Review: </span>
		<div class="star_content clearfix">
									<div class="star star_on"></div>
												<div class="star star_on"></div>
												<div class="star star_on"></div>
												<div class="star star_on"></div>
												<div class="star star_on"></div>
							</div>
	</div>


	<div class="comments_advices">
				<a href="#" class="comments_advices_tab"><i class="fa fa-comments"></i>Read reviews (2)</a>
						<a class="open-comment-form" data-toggle="modal" data-target="#new_comment_form" href="#"><i class="fa fa-edit"></i>Write your review</a>
			</div>
</div>


<!--  /Module NovProductComments -->

                          </div>

                          <h1 class="detail-product-name" itemprop="name">{{$product->name}}</h1>



                          <div class="group-price d-flex justify-content-start align-items-center">

                                <div class="product-prices">


      <div class="product-price " itemprop="offers" itemscope="" itemtype="https://schema.org/Offer">
        <link itemprop="availability" href="https://schema.org/InStock">
        <meta itemprop="priceCurrency" content="GBP">

        <div class="current-price">

          <span itemprop="price" class="price" content="30">{{$product->special_price ?? $product->price}}</span>

            @if($product ->special_price)
                <span  class="regular-price">{{$product->price}}</span>
            @endif
      </div>



      </div>


    <div class="tax-shipping-delivery-label">
              شامل للضريبة


    </div>
  </div>

  </div>





                          <div class="in_border end">

                                                        <div class="sku">
                                <label class="control-label">Sku:</label>
                                <span itemprop="sku"
                                      content="demo_6">{{$product->sku ?? '--'}}</span>
                            </div>
                                <div class="pro-cate">
                                <label class="control-label">Categories:</label>
                                    @isset($product ->categories)
                                        <div>
                                            @foreach($product-> categories as $category)
                                                <span><a href="{{Route('category' , $category->slug)}}" title="الصفحة الرئيسية">{{$category->name}}</a></span>

                                            @endforeach


                                        </div>
                                    @endif

                                </div>
                                    <div class="pro-tag">
                                <label class="control-label">Tags:</label>

                                 @isset($product ->tags)

                                <div>
                                          @foreach($product->tags as $tag)
                                    <span><a href="">{{$tag->name}}</a></span>
                                    @endforeach
                                </div>
                                @endisset
                            </div>
                                                  </div>


                          <div id="_desktop_productcart_detail">
                              <div class="product-add-to-cart in_border">
    <div class="add">
        <button class="btn btn-primary add-to-cart" data-button-action="add-to-cart" type="submit">
            <div class="icon-cart">
                <i class="shopping-cart"></i>
            </div>
            <span>أضف للسلة</span>
        </button>
    </div>

      <a class="addToWishlist wishlistProd_3" href="#"
         data-product-id ="{{$product->id}}"
      >
          <i class="fa fa-heart"></i>
          <span>Add to Wishlist</span>
      </a>

    <div class="clearfix"></div>

    <div id="product-availability" class="info-stock mt-20">
                    <label class="control-label">Availability:</label>
                        {{$product-> in_stock ? 'in stock': 'out of stock'}}
                            <i class="fa fa-check-square-o" aria-hidden="true"></i>
                        </div>


    <p class="product-minimal-quantity mt-20">
            </p>

</div>
                          </div>


                            <input class="product-refresh ps-hidden-by-js" name="refresh" type="submit" value="تحديث" style="display: none;">

                        </div>
                        <div class="productdetail-left col-12 col-lg-6 col-md-6">


                              <div class="product-quantity">
                                <span class="control-label">الكميَّة :{{$product->qty}} </span>
                                <div class="qty">
                                  <div class="input-group bootstrap-touchspin"><span class="input-group-addon bootstrap-touchspin-prefix" style="display: none;"></span><input type="text" name="qty" id="quantity_wanted" value="1" class="input-group form-control" min="1" style="display: block;"><span class="input-group-addon bootstrap-touchspin-postfix" style="display: none;"></span><span class="input-group-btn-vertical"><button class="btn btn-touchspin js-touchspin bootstrap-touchspin-up" type="button"><i class="material-icons touchspin-up"></i></button><button class="btn btn-touchspin js-touchspin bootstrap-touchspin-down" type="button"><i class="material-icons touchspin-down"></i></button></span></div>
                                </div>
                              </div>




              <div class="product-variants in_border">
                  @if(isset($product_attributes) && count($product_attributes)>0)
                      @foreach( $product_attributes as $attribute)
                          <div class="product-variants-item">
                              <span class="control-label">:{{$attribute->name}} </span>
                              @if(isset($attribute->options)&& count($attribute->options)> 0)
                                  <select id="group_1" data-product-attribute="1"
                                          name="{{$attribute->name}}">
                                      @foreach($attribute-> options as $option)
                                          <option value="1" title="ص"
                                                  selected="selected">
                                              {{$option->name}}
                                          </option>
                                      @endforeach
                                  </select>
                              @endif
                          </div>
                      @endforeach
                  @endif




          </div>




                          <div id="_mobile_productcart_detail"></div>

                          <div class="productbuttons">
                                <div class="tabs">
        <h4 class="buttons_bottom_block">
            Information of seller
        </h4>
        <div class="seller_info">
            <span class="seller_name">
                Taylor Jonson
            </span>
                            <div class="average_rating">
                    <a href="http://demo.bestprestashoptheme.com/savemart/ar/jmarketplace/2_taylor-jonson/comments" title="View comments about Taylor Jonson">
                                                                                    <div class="star"></div>
                                                                                                                <div class="star"></div>
                                                                                                                <div class="star"></div>
                                                                                                                <div class="star"></div>
                                                                                                                <div class="star"></div>
                                                    (0)
                    </a>
                </div>
                    </div>
        <div class="seller_links">
                            <p class="link_seller_profile">
                    <a title="View seller profile" href="http://demo.bestprestashoptheme.com/savemart/ar/jmarketplace/2_taylor-jonson/">
                        <i class="icon-user fa fa-user"></i>
                        View seller profile
                    </a>
                </p>
                                        <p class="link_contact_seller">
                    <a title="Contact seller" href="http://demo.bestprestashoptheme.com/savemart/ar/module/jmarketplace/contactseller?id_seller=2&amp;id_product=3">
                        <i class="fa fa-comment"></i>
                        Contact seller
                    </a>
                </p>
                                        <p class="link_seller_favorite">
                    <a title="Add to favorite seller" href="http://demo.bestprestashoptheme.com/savemart/ar/module/jmarketplace/favoriteseller?id_seller=2&amp;id_product=3">
                        <i class="icon-heart fa fa-heart"></i>
                        Add to favorite seller
                    </a>
                </p>
                        <p class="link_seller_products">
                <a title="View more products of this seller" href="http://demo.bestprestashoptheme.com/savemart/ar/jmarketplace/2_taylor-jonson/products">
                    <i class="icon-list fa fa-list"></i>
                    View more products of this seller
                </a>
            </p>
        </div>
    </div>
<script type="text/javascript">
var PS_REWRITING_SETTINGS = "1";
</script>


    <div class="dropdown social-sharing">
    <button class="btn btn-link" type="button" id="social-sharingButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <span><i class="fa fa-share-alt" aria-hidden="true"></i>Share With :</span>
    </button>
    <div class="dropdown-menu" aria-labelledby="social-sharingButton">
                        <a class="dropdown-item" href="http://www.facebook.com/sharer.php?u=http://demo.bestprestashoptheme.com/savemart/ar/smartphone-tablet/3-the-best-is-yet-to-come-framed-poster.html" title="مشاركة" target="_blank"><i class="fa fa-facebook"></i>Facebook</a>
                                <a class="dropdown-item" href="https://twitter.com/intent/tweet?text=Mauris molestie porttitor diam http://demo.bestprestashoptheme.com/savemart/ar/smartphone-tablet/3-the-best-is-yet-to-come-framed-poster.html" title="تغريدة" target="_blank"><i class="fa fa-twitter"></i>تغريدة</a>
                                <a class="dropdown-item" href="https://plus.google.com/share?url=http://demo.bestprestashoptheme.com/savemart/ar/smartphone-tablet/3-the-best-is-yet-to-come-framed-poster.html" title="جوجل +" target="_blank"><i class="fa fa-google-plus"></i>جوجل +</a>
                                <a class="dropdown-item" href="http://www.pinterest.com/pin/create/button/?media=http://demo.bestprestashoptheme.com/savemart/34/the-best-is-yet-to-come-framed-poster.jpg&amp;url=http://demo.bestprestashoptheme.com/savemart/ar/smartphone-tablet/3-the-best-is-yet-to-come-framed-poster.html" title="بنترست" target="_blank"><i class="fa fa-pinterest"></i>بنترست</a>
                  </div>
  </div>


                            <a class="btn btn-link" href="javascript:print();">
                              <span><i class="fa fa-print" aria-hidden="true"></i>Print</span>
                            </a>
                          </div>
                        </div>
                      </form>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="product-detail-middle">
          <div class="container">
            <div class="row">
                            <div class="tabs col-lg-9 col-md-7 ">
                <ul class="nav nav-tabs">
                                    <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#description">الوصف</a>
                  </li>
                                    <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#product-details">Product Detail</a>
                  </li>
                                                      <li class="nav-item">
  <a class="nav-link" data-toggle="tab" href="#reviews">Write Your Own Review<span class="count-comment"> (2)</span></a>
</li>
                                      <li class="nav-item">
                      <a class="nav-link" data-toggle="tab" href="#tab-custom">Custom Tab</a>
                    </li>

                </ul>

                <div class="tab-content" id="tab-content">
                   <div class="tab-pane fade in active" id="description">

                       <div class="product-description">
                           <p>{!!$product->short_description!!}</p>
<h3>Lorem ipsum dolor sit amet</h3>
<div class="image-des">
    <a href="#"><img class="img-fluid" src="{{$product->images[0]->photo ?? ''}}" alt="#" ></a>
</div>
<p>{!!$product->description!!}</p>
<div class="image-des">
    <a href="#"><img class="img-fluid" src="{{$product->images[1]->photo ?? ''}}" alt="#"></a>
</div>
<p>{!!$product->description!!}</p></div>

                   </div>

                     <div class="tab-pane fade" id="product-details" data-product="{&quot;id_shop_default&quot;:&quot;1&quot;,&quot;id_manufacturer&quot;:&quot;2&quot;,&quot;id_supplier&quot;:&quot;0&quot;,&quot;reference&quot;:&quot;demo_6&quot;,&quot;is_virtual&quot;:&quot;0&quot;,&quot;delivery_in_stock&quot;:&quot;&quot;,&quot;delivery_out_stock&quot;:&quot;&quot;,&quot;id_category_default&quot;:&quot;9&quot;,&quot;on_sale&quot;:&quot;0&quot;,&quot;online_only&quot;:&quot;0&quot;,&quot;ecotax&quot;:0,&quot;minimal_quantity&quot;:&quot;1&quot;,&quot;low_stock_threshold&quot;:null,&quot;low_stock_alert&quot;:&quot;0&quot;,&quot;price&quot;:&quot;30.00\u00a0UK\u00a3&quot;,&quot;unity&quot;:&quot;&quot;,&quot;unit_price_ratio&quot;:&quot;0.000000&quot;,&quot;additional_shipping_cost&quot;:&quot;0.00&quot;,&quot;customizable&quot;:&quot;0&quot;,&quot;text_fields&quot;:&quot;0&quot;,&quot;uploadable_files&quot;:&quot;0&quot;,&quot;redirect_type&quot;:&quot;404&quot;,&quot;id_type_redirected&quot;:&quot;0&quot;,&quot;available_for_order&quot;:&quot;1&quot;,&quot;available_date&quot;:null,&quot;show_condition&quot;:&quot;0&quot;,&quot;condition&quot;:&quot;new&quot;,&quot;show_price&quot;:&quot;1&quot;,&quot;indexed&quot;:&quot;1&quot;,&quot;visibility&quot;:&quot;both&quot;,&quot;cache_default_attribute&quot;:&quot;95&quot;,&quot;advanced_stock_management&quot;:&quot;0&quot;,&quot;date_add&quot;:&quot;2018-07-13 03:39:59&quot;,&quot;date_upd&quot;:&quot;2018-08-29 04:19:09&quot;,&quot;pack_stock_type&quot;:&quot;3&quot;,&quot;meta_description&quot;:&quot;&quot;,&quot;meta_keywords&quot;:&quot;&quot;,&quot;meta_title&quot;:&quot;&quot;,&quot;link_rewrite&quot;:&quot;the-best-is-yet-to-come-framed-poster&quot;,&quot;name&quot;:&quot;Mauris molestie porttitor diam&quot;,&quot;description&quot;:&quot;<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.<\/p>\r\n<h3>Lorem ipsum dolor sit amet<\/h3>\r\n<div class=\&quot;image-des\&quot;><a href=\&quot;#\&quot;><img class=\&quot;img-fluid\&quot; src=\&quot;http:\/\/images.vinovathemes.com\/prestashop_savemart\/image-product-1.jpg\&quot; alt=\&quot;#\&quot; \/><\/a><\/div>\r\n<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. <br \/> Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Lorem ipsum dolor sit amet, consectetuer adipiscing elit.<\/p>\r\n<div class=\&quot;image-des\&quot;><a href=\&quot;#\&quot;><img class=\&quot;img-fluid\&quot; src=\&quot;http:\/\/images.vinovathemes.com\/prestashop_savemart\/image-product-2.jpg\&quot; alt=\&quot;#\&quot; \/><\/a><\/div>\r\n<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. <br \/> Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Lorem ipsum dolor sit amet, consectetuer adipiscing elit.<br \/> Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Lorem ipsum dolor sit amet, consectetuer adipiscing elit.<\/p>&quot;,&quot;description_short&quot;:&quot;<p>Mauris molestie porttitor diam, a vehicula metus bibendum et. Aliquam erat volutpat. Etiam malesuada tempor scelerisque. Donec non pharetra sapien, ac tempor velit. Cras sed sapien eget augue interdum condimentum id id dolor. In varius, diam et mattis lacinia, metus sapien vehicula enim, volutpat varius nulla neque et ligula. Aenean ut fringilla arcu.<\/p>&quot;,&quot;available_now&quot;:&quot;in stock&quot;,&quot;available_later&quot;:&quot;out stock&quot;,&quot;id&quot;:3,&quot;id_product&quot;:3,&quot;out_of_stock&quot;:2,&quot;new&quot;:1,&quot;id_product_attribute&quot;:95,&quot;quantity_wanted&quot;:1,&quot;extraContent&quot;:[],&quot;allow_oosp&quot;:0,&quot;category&quot;:&quot;smartphone-tablet&quot;,&quot;category_name&quot;:&quot;Smartphone &amp; Tablet&quot;,&quot;link&quot;:&quot;http:\/\/demo.bestprestashoptheme.com\/savemart\/ar\/smartphone-tablet\/3-the-best-is-yet-to-come-framed-poster.html&quot;,&quot;attribute_price&quot;:0,&quot;price_tax_exc&quot;:25,&quot;price_without_reduction&quot;:30,&quot;reduction&quot;:0,&quot;specific_prices&quot;:[],&quot;quantity&quot;:177,&quot;quantity_all_versions&quot;:3973,&quot;id_image&quot;:&quot;ar-default&quot;,&quot;features&quot;:[],&quot;attachments&quot;:[],&quot;virtual&quot;:0,&quot;pack&quot;:0,&quot;packItems&quot;:[],&quot;nopackprice&quot;:0,&quot;customization_required&quot;:false,&quot;attributes&quot;:{&quot;1&quot;:{&quot;id_attribute&quot;:&quot;1&quot;,&quot;id_attribute_group&quot;:&quot;1&quot;,&quot;name&quot;:&quot;\u0635&quot;,&quot;group&quot;:&quot;\u0627\u0644\u062d\u062c\u0645&quot;,&quot;reference&quot;:&quot;&quot;,&quot;ean13&quot;:&quot;&quot;,&quot;isbn&quot;:&quot;&quot;,&quot;upc&quot;:&quot;&quot;},&quot;2&quot;:{&quot;id_attribute&quot;:&quot;13&quot;,&quot;id_attribute_group&quot;:&quot;2&quot;,&quot;name&quot;:&quot;\u0628\u0631\u062a\u0642\u0627\u0644\u064a&quot;,&quot;group&quot;:&quot;\u0627\u0644\u0644\u0648\u0646:&quot;,&quot;reference&quot;:&quot;&quot;,&quot;ean13&quot;:&quot;&quot;,&quot;isbn&quot;:&quot;&quot;,&quot;upc&quot;:&quot;&quot;}},&quot;rate&quot;:20,&quot;tax_name&quot;:&quot;VAT UK 20%&quot;,&quot;ecotax_rate&quot;:0,&quot;unit_price&quot;:&quot;&quot;,&quot;customizations&quot;:{&quot;fields&quot;:[]},&quot;id_customization&quot;:0,&quot;is_customizable&quot;:false,&quot;show_quantities&quot;:true,&quot;quantity_label&quot;:&quot;\u0639\u0646\u0627\u0635\u0631&quot;,&quot;quantity_discounts&quot;:[],&quot;customer_group_discount&quot;:0,&quot;images&quot;:[{&quot;bySize&quot;:{&quot;cart_default&quot;:{&quot;url&quot;:&quot;http:\/\/demo.bestprestashoptheme.com\/savemart\/34-cart_default\/the-best-is-yet-to-come-framed-poster.jpg&quot;,&quot;width&quot;:125,&quot;height&quot;:125},&quot;small_default&quot;:{&quot;url&quot;:&quot;http:\/\/demo.bestprestashoptheme.com\/savemart\/34-small_default\/the-best-is-yet-to-come-framed-poster.jpg&quot;,&quot;width&quot;:150,&quot;height&quot;:150},&quot;medium_default&quot;:{&quot;url&quot;:&quot;http:\/\/demo.bestprestashoptheme.com\/savemart\/34-medium_default\/the-best-is-yet-to-come-framed-poster.jpg&quot;,&quot;width&quot;:210,&quot;height&quot;:210},&quot;home_default&quot;:{&quot;url&quot;:&quot;http:\/\/demo.bestprestashoptheme.com\/savemart\/34-home_default\/the-best-is-yet-to-come-framed-poster.jpg&quot;,&quot;width&quot;:600,&quot;height&quot;:600},&quot;large_default&quot;:{&quot;url&quot;:&quot;http:\/\/demo.bestprestashoptheme.com\/savemart\/34-large_default\/the-best-is-yet-to-come-framed-poster.jpg&quot;,&quot;width&quot;:600,&quot;height&quot;:600}},&quot;small&quot;:{&quot;url&quot;:&quot;http:\/\/demo.bestprestashoptheme.com\/savemart\/34-cart_default\/the-best-is-yet-to-come-framed-poster.jpg&quot;,&quot;width&quot;:125,&quot;height&quot;:125},&quot;medium&quot;:{&quot;url&quot;:&quot;http:\/\/demo.bestprestashoptheme.com\/savemart\/34-medium_default\/the-best-is-yet-to-come-framed-poster.jpg&quot;,&quot;width&quot;:210,&quot;height&quot;:210},&quot;large&quot;:{&quot;url&quot;:&quot;http:\/\/demo.bestprestashoptheme.com\/savemart\/34-large_default\/the-best-is-yet-to-come-framed-poster.jpg&quot;,&quot;width&quot;:600,&quot;height&quot;:600},&quot;legend&quot;:&quot;&quot;,&quot;cover&quot;:&quot;1&quot;,&quot;id_image&quot;:&quot;34&quot;,&quot;position&quot;:&quot;1&quot;,&quot;associatedVariants&quot;:[&quot;95&quot;]},{&quot;bySize&quot;:{&quot;cart_default&quot;:{&quot;url&quot;:&quot;http:\/\/demo.bestprestashoptheme.com\/savemart\/35-cart_default\/the-best-is-yet-to-come-framed-poster.jpg&quot;,&quot;width&quot;:125,&quot;height&quot;:125},&quot;small_default&quot;:{&quot;url&quot;:&quot;http:\/\/demo.bestprestashoptheme.com\/savemart\/35-small_default\/the-best-is-yet-to-come-framed-poster.jpg&quot;,&quot;width&quot;:150,&quot;height&quot;:150},&quot;medium_default&quot;:{&quot;url&quot;:&quot;http:\/\/demo.bestprestashoptheme.com\/savemart\/35-medium_default\/the-best-is-yet-to-come-framed-poster.jpg&quot;,&quot;width&quot;:210,&quot;height&quot;:210},&quot;home_default&quot;:{&quot;url&quot;:&quot;http:\/\/demo.bestprestashoptheme.com\/savemart\/35-home_default\/the-best-is-yet-to-come-framed-poster.jpg&quot;,&quot;width&quot;:600,&quot;height&quot;:600},&quot;large_default&quot;:{&quot;url&quot;:&quot;http:\/\/demo.bestprestashoptheme.com\/savemart\/35-large_default\/the-best-is-yet-to-come-framed-poster.jpg&quot;,&quot;width&quot;:600,&quot;height&quot;:600}},&quot;small&quot;:{&quot;url&quot;:&quot;http:\/\/demo.bestprestashoptheme.com\/savemart\/35-cart_default\/the-best-is-yet-to-come-framed-poster.jpg&quot;,&quot;width&quot;:125,&quot;height&quot;:125},&quot;medium&quot;:{&quot;url&quot;:&quot;http:\/\/demo.bestprestashoptheme.com\/savemart\/35-medium_default\/the-best-is-yet-to-come-framed-poster.jpg&quot;,&quot;width&quot;:210,&quot;height&quot;:210},&quot;large&quot;:{&quot;url&quot;:&quot;http:\/\/demo.bestprestashoptheme.com\/savemart\/35-large_default\/the-best-is-yet-to-come-framed-poster.jpg&quot;,&quot;width&quot;:600,&quot;height&quot;:600},&quot;legend&quot;:&quot;&quot;,&quot;cover&quot;:null,&quot;id_image&quot;:&quot;35&quot;,&quot;position&quot;:&quot;2&quot;,&quot;associatedVariants&quot;:[&quot;95&quot;,&quot;86&quot;,&quot;96&quot;]},{&quot;bySize&quot;:{&quot;cart_default&quot;:{&quot;url&quot;:&quot;http:\/\/demo.bestprestashoptheme.com\/savemart\/36-cart_default\/the-best-is-yet-to-come-framed-poster.jpg&quot;,&quot;width&quot;:125,&quot;height&quot;:125},&quot;small_default&quot;:{&quot;url&quot;:&quot;http:\/\/demo.bestprestashoptheme.com\/savemart\/36-small_default\/the-best-is-yet-to-come-framed-poster.jpg&quot;,&quot;width&quot;:150,&quot;height&quot;:150},&quot;medium_default&quot;:{&quot;url&quot;:&quot;http:\/\/demo.bestprestashoptheme.com\/savemart\/36-medium_default\/the-best-is-yet-to-come-framed-poster.jpg&quot;,&quot;width&quot;:210,&quot;height&quot;:210},&quot;home_default&quot;:{&quot;url&quot;:&quot;http:\/\/demo.bestprestashoptheme.com\/savemart\/36-home_default\/the-best-is-yet-to-come-framed-poster.jpg&quot;,&quot;width&quot;:600,&quot;height&quot;:600},&quot;large_default&quot;:{&quot;url&quot;:&quot;http:\/\/demo.bestprestashoptheme.com\/savemart\/36-large_default\/the-best-is-yet-to-come-framed-poster.jpg&quot;,&quot;width&quot;:600,&quot;height&quot;:600}},&quot;small&quot;:{&quot;url&quot;:&quot;http:\/\/demo.bestprestashoptheme.com\/savemart\/36-cart_default\/the-best-is-yet-to-come-framed-poster.jpg&quot;,&quot;width&quot;:125,&quot;height&quot;:125},&quot;medium&quot;:{&quot;url&quot;:&quot;http:\/\/demo.bestprestashoptheme.com\/savemart\/36-medium_default\/the-best-is-yet-to-come-framed-poster.jpg&quot;,&quot;width&quot;:210,&quot;height&quot;:210},&quot;large&quot;:{&quot;url&quot;:&quot;http:\/\/demo.bestprestashoptheme.com\/savemart\/36-large_default\/the-best-is-yet-to-come-framed-poster.jpg&quot;,&quot;width&quot;:600,&quot;height&quot;:600},&quot;legend&quot;:&quot;&quot;,&quot;cover&quot;:null,&quot;id_image&quot;:&quot;36&quot;,&quot;position&quot;:&quot;3&quot;,&quot;associatedVariants&quot;:[&quot;95&quot;,&quot;96&quot;,&quot;97&quot;]},{&quot;bySize&quot;:{&quot;cart_default&quot;:{&quot;url&quot;:&quot;http:\/\/demo.bestprestashoptheme.com\/savemart\/37-cart_default\/the-best-is-yet-to-come-framed-poster.jpg&quot;,&quot;width&quot;:125,&quot;height&quot;:125},&quot;small_default&quot;:{&quot;url&quot;:&quot;http:\/\/demo.bestprestashoptheme.com\/savemart\/37-small_default\/the-best-is-yet-to-come-framed-poster.jpg&quot;,&quot;width&quot;:150,&quot;height&quot;:150},&quot;medium_default&quot;:{&quot;url&quot;:&quot;http:\/\/demo.bestprestashoptheme.com\/savemart\/37-medium_default\/the-best-is-yet-to-come-framed-poster.jpg&quot;,&quot;width&quot;:210,&quot;height&quot;:210},&quot;home_default&quot;:{&quot;url&quot;:&quot;http:\/\/demo.bestprestashoptheme.com\/savemart\/37-home_default\/the-best-is-yet-to-come-framed-poster.jpg&quot;,&quot;width&quot;:600,&quot;height&quot;:600},&quot;large_default&quot;:{&quot;url&quot;:&quot;http:\/\/demo.bestprestashoptheme.com\/savemart\/37-large_default\/the-best-is-yet-to-come-framed-poster.jpg&quot;,&quot;width&quot;:600,&quot;height&quot;:600}},&quot;small&quot;:{&quot;url&quot;:&quot;http:\/\/demo.bestprestashoptheme.com\/savemart\/37-cart_default\/the-best-is-yet-to-come-framed-poster.jpg&quot;,&quot;width&quot;:125,&quot;height&quot;:125},&quot;medium&quot;:{&quot;url&quot;:&quot;http:\/\/demo.bestprestashoptheme.com\/savemart\/37-medium_default\/the-best-is-yet-to-come-framed-poster.jpg&quot;,&quot;width&quot;:210,&quot;height&quot;:210},&quot;large&quot;:{&quot;url&quot;:&quot;http:\/\/demo.bestprestashoptheme.com\/savemart\/37-large_default\/the-best-is-yet-to-come-framed-poster.jpg&quot;,&quot;width&quot;:600,&quot;height&quot;:600},&quot;legend&quot;:&quot;&quot;,&quot;cover&quot;:null,&quot;id_image&quot;:&quot;37&quot;,&quot;position&quot;:&quot;4&quot;,&quot;associatedVariants&quot;:[&quot;95&quot;,&quot;86&quot;,&quot;96&quot;,&quot;97&quot;]},{&quot;bySize&quot;:{&quot;cart_default&quot;:{&quot;url&quot;:&quot;http:\/\/demo.bestprestashoptheme.com\/savemart\/38-cart_default\/the-best-is-yet-to-come-framed-poster.jpg&quot;,&quot;width&quot;:125,&quot;height&quot;:125},&quot;small_default&quot;:{&quot;url&quot;:&quot;http:\/\/demo.bestprestashoptheme.com\/savemart\/38-small_default\/the-best-is-yet-to-come-framed-poster.jpg&quot;,&quot;width&quot;:150,&quot;height&quot;:150},&quot;medium_default&quot;:{&quot;url&quot;:&quot;http:\/\/demo.bestprestashoptheme.com\/savemart\/38-medium_default\/the-best-is-yet-to-come-framed-poster.jpg&quot;,&quot;width&quot;:210,&quot;height&quot;:210},&quot;home_default&quot;:{&quot;url&quot;:&quot;http:\/\/demo.bestprestashoptheme.com\/savemart\/38-home_default\/the-best-is-yet-to-come-framed-poster.jpg&quot;,&quot;width&quot;:600,&quot;height&quot;:600},&quot;large_default&quot;:{&quot;url&quot;:&quot;http:\/\/demo.bestprestashoptheme.com\/savemart\/38-large_default\/the-best-is-yet-to-come-framed-poster.jpg&quot;,&quot;width&quot;:600,&quot;height&quot;:600}},&quot;small&quot;:{&quot;url&quot;:&quot;http:\/\/demo.bestprestashoptheme.com\/savemart\/38-cart_default\/the-best-is-yet-to-come-framed-poster.jpg&quot;,&quot;width&quot;:125,&quot;height&quot;:125},&quot;medium&quot;:{&quot;url&quot;:&quot;http:\/\/demo.bestprestashoptheme.com\/savemart\/38-medium_default\/the-best-is-yet-to-come-framed-poster.jpg&quot;,&quot;width&quot;:210,&quot;height&quot;:210},&quot;large&quot;:{&quot;url&quot;:&quot;http:\/\/demo.bestprestashoptheme.com\/savemart\/38-large_default\/the-best-is-yet-to-come-framed-poster.jpg&quot;,&quot;width&quot;:600,&quot;height&quot;:600},&quot;legend&quot;:&quot;&quot;,&quot;cover&quot;:null,&quot;id_image&quot;:&quot;38&quot;,&quot;position&quot;:&quot;5&quot;,&quot;associatedVariants&quot;:[&quot;95&quot;,&quot;96&quot;,&quot;97&quot;]}],&quot;cover&quot;:{&quot;bySize&quot;:{&quot;cart_default&quot;:{&quot;url&quot;:&quot;http:\/\/demo.bestprestashoptheme.com\/savemart\/34-cart_default\/the-best-is-yet-to-come-framed-poster.jpg&quot;,&quot;width&quot;:125,&quot;height&quot;:125},&quot;small_default&quot;:{&quot;url&quot;:&quot;http:\/\/demo.bestprestashoptheme.com\/savemart\/34-small_default\/the-best-is-yet-to-come-framed-poster.jpg&quot;,&quot;width&quot;:150,&quot;height&quot;:150},&quot;medium_default&quot;:{&quot;url&quot;:&quot;http:\/\/demo.bestprestashoptheme.com\/savemart\/34-medium_default\/the-best-is-yet-to-come-framed-poster.jpg&quot;,&quot;width&quot;:210,&quot;height&quot;:210},&quot;home_default&quot;:{&quot;url&quot;:&quot;http:\/\/demo.bestprestashoptheme.com\/savemart\/34-home_default\/the-best-is-yet-to-come-framed-poster.jpg&quot;,&quot;width&quot;:600,&quot;height&quot;:600},&quot;large_default&quot;:{&quot;url&quot;:&quot;http:\/\/demo.bestprestashoptheme.com\/savemart\/34-large_default\/the-best-is-yet-to-come-framed-poster.jpg&quot;,&quot;width&quot;:600,&quot;height&quot;:600}},&quot;small&quot;:{&quot;url&quot;:&quot;http:\/\/demo.bestprestashoptheme.com\/savemart\/34-cart_default\/the-best-is-yet-to-come-framed-poster.jpg&quot;,&quot;width&quot;:125,&quot;height&quot;:125},&quot;medium&quot;:{&quot;url&quot;:&quot;http:\/\/demo.bestprestashoptheme.com\/savemart\/34-medium_default\/the-best-is-yet-to-come-framed-poster.jpg&quot;,&quot;width&quot;:210,&quot;height&quot;:210},&quot;large&quot;:{&quot;url&quot;:&quot;http:\/\/demo.bestprestashoptheme.com\/savemart\/34-large_default\/the-best-is-yet-to-come-framed-poster.jpg&quot;,&quot;width&quot;:600,&quot;height&quot;:600},&quot;legend&quot;:&quot;&quot;,&quot;cover&quot;:&quot;1&quot;,&quot;id_image&quot;:&quot;34&quot;,&quot;position&quot;:&quot;1&quot;,&quot;associatedVariants&quot;:[&quot;95&quot;]},&quot;has_discount&quot;:false,&quot;discount_type&quot;:null,&quot;discount_percentage&quot;:null,&quot;discount_percentage_absolute&quot;:null,&quot;discount_amount&quot;:null,&quot;discount_amount_to_display&quot;:null,&quot;price_amount&quot;:30,&quot;unit_price_full&quot;:&quot;&quot;,&quot;show_availability&quot;:true,&quot;availability_date&quot;:null,&quot;availability_message&quot;:&quot;in stock&quot;,&quot;availability&quot;:&quot;available&quot;}">

          <div class="product-manufacturer">
                  <a href="http://demo.bestprestashoptheme.com/savemart/ar/2_vivamus-aliquet">
            <img src="http://demo.bestprestashoptheme.com/savemart/img/m/2.jpg" class="img img-thumbnail manufacturer-logo">
          </a>
              </div>
              <div class="product-reference">
        <label class="label">المرجع </label>
        <span itemprop="sku">demo_6</span>
      </div>



          <div class="product-quantities">
        <label class="label">المتوفر في المخزن</label>
        <span>177 عناصر</span>
      </div>






    <div class="product-out-of-stock">

    </div>






          <section class="product-features">
        <h3>مراجع محددة</h3>
          <dl class="data-sheet">
                      </dl>
      </section>




</div>





                                     <script type="text/javascript">
var novproductcomments_controller_url = 'http://demo.bestprestashoptheme.com/savemart/ar/module/novproductcomments/default';
var confirm_report_message = 'Are you sure that you want to report this comment?';
var secure_key = 'c0d88cffbca7857951c1805219eba7c2';
var novproductcomments_url_rewrite = '1';
var productcomment_added = 'Your comment has been added!';
var productcomment_added_moderation = 'Your comment has been submitted and will be available once approved by a moderator.';
var productcomment_title = 'New comment';
var productcomment_ok = 'OK';
var moderation_active = 1;
</script>

<div class="tab-pane fade in" id="reviews">
		<div id="product_comments_block_tab">
								<div class="comment clearfix">
				<div class="comment_author">
					<span>Grade&nbsp;</span>
					<div class="star_content clearfix">
																					<div class="star star_on"></div>
																												<div class="star star_on"></div>
																												<div class="star star_on"></div>
																												<div class="star star_on"></div>
																												<div class="star"></div>
																		</div>
					<div class="comment_author_infos">
						<div class="user-comment"><i class="fa fa-user-o"></i>  Harry Makle</div>
						<div class="date-comment">2018-08-28</div>
					</div>
				</div>
				<div class="comment_details">
					<h4>Lupanh</h4>
					<p>Mauris molestie porttitor diam, a vehicula metus bibendum et. Aliquam erat volutpat. Etiam malesuada tempor scelerisque. Donec non pharetra sapien, ac tempor velit.</p>
					<ul>
																										<li>Was this comment useful to you?<button class="usefulness_btn yes" data-is-usefull="1" data-id-product-comment="3">نعم</button><button class="usefulness_btn no" data-is-usefull="0" data-id-product-comment="3">لا</button></li>
																					<li><span class="report_btn" data-id-product-comment="3"><i class="fa fa-exclamation" aria-hidden="true"></i> Report</span></li>
																		</ul>
				</div>
			</div>
											<div class="comment clearfix">
				<div class="comment_author">
					<span>Grade&nbsp;</span>
					<div class="star_content clearfix">
																					<div class="star star_on"></div>
																												<div class="star star_on"></div>
																												<div class="star star_on"></div>
																												<div class="star star_on"></div>
																												<div class="star star_on"></div>
																		</div>
					<div class="comment_author_infos">
						<div class="user-comment"><i class="fa fa-user-o"></i>  Harry Makle</div>
						<div class="date-comment">2018-08-28</div>
					</div>
				</div>
				<div class="comment_details">
					<h4>verry good</h4>
					<p>Cras sed sapien eget augue interdum condimentum id id dolor. In varius, diam et mattis lacinia, metus sapien vehicula enim, volutpat varius nulla neque et ligula. Aenean ut fringilla arcu</p>
					<ul>
																										<li>Was this comment useful to you?<button class="usefulness_btn yes" data-is-usefull="1" data-id-product-comment="2">نعم</button><button class="usefulness_btn no" data-is-usefull="0" data-id-product-comment="2">لا</button></li>
																					<li><span class="report_btn" data-id-product-comment="2"><i class="fa fa-exclamation" aria-hidden="true"></i> Report</span></li>
																		</ul>
				</div>
			</div>
						</div>
			<p class="text-center mt-10">
			<a id="new_comment_tab_btn" class="open-comment-form btn btn-default" data-toggle="modal" data-target="#new_comment_form" href="#">Write your review !</a>
		</p>

</div>


<div class="modal fade in" id="new_comment_form" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    	<div class="modal-header">
    		<h4 class="modal-title text-xs-center"><i class="fa fa-edit"></i> Write your review</h4>
    		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <i class="material-icons close">close</i>
	        </button>
    	</div>
		<div class="modal-body">
			<form id="id_new_comment_form" action="#">
								<div class="product row no-gutters">
					<div class="product-image col-4">
						<img class="img-fluid" src="http://demo.bestprestashoptheme.com/savemart/34-medium_default/the-best-is-yet-to-come-framed-poster.jpg" height="" width="" alt="Mauris molestie porttitor diam">
					</div>
					<div class="product_desc col-8">
						<p class="product_name">Mauris molestie porttitor diam</p>
						<p>Mauris molestie porttitor diam, a vehicula metus bibendum et. Aliquam erat volutpat. Etiam malesuada tempor scelerisque. Donec non pharetra sapien, ac tempor velit. Cras sed sapien eget augue interdum condimentum id id dolor. In varius, diam et mattis lacinia, metus sapien vehicula enim, volutpat varius nulla neque et ligula. Aenean ut fringilla arcu.</p>
					</div>
				</div>
								<div class="new_comment_form_content">
					<div id="new_comment_form_error" class="error alert alert-danger">
						<ul></ul>
					</div>
											<ul id="criterions_list">
													<li>
								<label>Quality</label>
								<div class="star_content">
									<input type="hidden" name="criterion[1]" value="5"><div class="cancel"><a title="Cancel Rating"></a></div><div class="star star_on"><a title="1">1</a></div>
									<div class="star star_on"><a title="2">2</a></div>
									<div class="star star_on"><a title="3">3</a></div>
									<div class="star star_on"><a title="4">4</a></div>
									<div class="star star_on"><a title="5">5</a></div>
								</div>
								<div class="clearfix"></div>
							</li>
												</ul>
										<label for="comment_title">Title for your review<sup class="required">*</sup></label>
					<input id="comment_title" name="title" type="text" value="">

					<label for="content">Your review<sup class="required">*</sup></label>
					<textarea id="content" name="content"></textarea>


					<div id="new_comment_form_footer">
						<input id="id_product_comment_send" name="id_product" type="hidden" value="3">
						<div class="fl"><sup class="required">*</sup> Required fields</div>
						<div class="fr">
							<button id="submitNewMessage" data-dismiss="modal" aria-label="Close" class="btn btn-primary" name="submitMessage" type="submit">ارسل</button>
						</div>
					</div>
				</div>
			</form><!-- /end new_comment_form_content -->
		</div>
		</div>
	</div>
</div>


                                      <div class="tab-pane fade in" id="tab-custom">
                       <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla fringilla congue ultricies. Nam cursus velit in erat rutrum, sed ullamcorper nunc dictum. Sed volutpat, mauris ac pulvinar lobortis, felis ipsum commodo diam, nec vehicula lorem dui eu urna. Proin sodales nisi vitae diam congue, viverra congue metus iaculis. Pellentesque ultricies erat purus, ut commodo sapien imperdiet quis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas eu sagittis nibh, sed scelerisque nunc. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Sed elit tortor, scelerisque id pellentesque nec, facilisis ut urna. Etiam scelerisque eleifend eros. Donec consectetur aliquam magna ac tristique</p>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla fringilla congue ultricies. Nam cursus velit in erat rutrum, sed ullamcorper nunc dictum. Sed volutpat, mauris ac pulvinar lobortis, felis ipsum commodo diam, nec vehicula lorem dui eu urna. Proin sodales nisi vitae diam congue, viverra congue metus iaculis. Pellentesque ultricies erat purus, ut commodo sapien imperdiet quis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas eu sagittis nibh, sed scelerisque nunc. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Sed elit tortor, scelerisque id pellentesque nec, facilisis ut urna. Etiam scelerisque eleifend eros. Donec consectetur aliquam magna ac tristique</p>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla fringilla congue ultricies. Nam cursus velit in erat rutrum, sed ullamcorper nunc dictum. Sed volutpat, mauris ac pulvinar lobortis, felis ipsum commodo diam, nec vehicula lorem dui eu urna. Proin sodales nisi vitae diam congue, viverra congue metus iaculis. Pellentesque ultricies erat purus, ut commodo sapien imperdiet quis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas eu sagittis nibh, sed scelerisque nunc. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Sed elit tortor, scelerisque id pellentesque nec, facilisis ut urna. Etiam scelerisque eleifend eros. Donec consectetur aliquam magna ac tristique</p>
                    </div>
                                  </div>
              </div>
                            <div class="col-lg-3 col-md-5">

<div class="nov-productlist     productlist-liststyle-3  col-xl-12 col-lg-12 col-md-12 col-xs-12 no-padding">
	<div class="block block-product clearfix">
					<h2 class="title_block">
								Bestseller
			</h2>
				<div class="block_content">
							<div id="productlist18196113" class="product_list grid owl-carousel owl-theme multi-row owl-rtl owl-loaded owl-drag" data-autoplay="false" data-autoplaytimeout="6000" data-loop="false" data-margin="0" data-dots="false" data-nav="true" data-items="1" data-items_large="1" data-items_tablet="1" data-items_mobile="1">


								<div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 540px;"><div class="owl-item active lastActiveItem" style="width: 270px;"><div class="item  text-center">
			<div class="d-flex flex-wrap align-items-start product-miniature js-product-miniature  first_item" data-id-product="1" data-id-product-attribute="40" itemscope="" itemtype="http://schema.org/Product">
			<div class="col-12 col-w37 no-padding">
				<div class="thumbnail-container">

										<a href="http://demo.bestprestashoptheme.com/savemart/ar/smartphone-tablet/1-40-hummingbird-printed-t-shirt.html#/1-الحجم-ص/6-اللون_-رمادي_داكن" class="thumbnail product-thumbnail two-image">
						<img class="img-fluid image-cover" src="http://demo.bestprestashoptheme.com/savemart/24-home_default/hummingbird-printed-t-shirt.jpg" alt="" data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/24-large_default/hummingbird-printed-t-shirt.jpg" width="600" height="600">
																														<img class="img-fluid image-secondary" src="http://demo.bestprestashoptheme.com/savemart/25-home_default/hummingbird-printed-t-shirt.jpg" alt="" data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/25-large_default/hummingbird-printed-t-shirt.jpg" width="600" height="600">
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
</div>    <p class="seller_name">
        <a title="View seller profile" href="http://demo.bestprestashoptheme.com/savemart/ar/jmarketplace/1_david-james/">
            <i class="fa fa-user"></i>
            David James
        </a>
    </p>



		               <div class="product-title" itemprop="name"><a href="http://demo.bestprestashoptheme.com/savemart/ar/smartphone-tablet/1-40-hummingbird-printed-t-shirt.html#/1-الحجم-ص/6-اللون_-رمادي_داكن">Nullam sed sollicitudin mauris</a></div>

		              <div class="product-group-price">

		                  		                    <div class="product-price-and-shipping">



		                      <span itemprop="price" class="price">24.00&nbsp;UK£</span>





		                    </div>

		              </div>
		          	</div>
		          			        </div>
	    	</div>
		</div>
			<div class="d-flex flex-wrap align-items-start product-miniature js-product-miniature " data-id-product="2" data-id-product-attribute="60" itemscope="" itemtype="http://schema.org/Product">
			<div class="col-12 col-w37 no-padding">
				<div class="thumbnail-container">

										<a href="http://demo.bestprestashoptheme.com/savemart/ar/smartphone-tablet/2-60-brown-bear-printed-sweater.html#/1-الحجم-ص/11-اللون_-اسود" class="thumbnail product-thumbnail two-image">
						<img class="img-fluid image-cover" src="http://demo.bestprestashoptheme.com/savemart/29-home_default/brown-bear-printed-sweater.jpg" alt="" data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/29-large_default/brown-bear-printed-sweater.jpg" width="600" height="600">
																														<img class="img-fluid image-secondary" src="http://demo.bestprestashoptheme.com/savemart/30-home_default/brown-bear-printed-sweater.jpg" alt="" data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/30-large_default/brown-bear-printed-sweater.jpg" width="600" height="600">
											</a>

									</div>
			</div>
			<div class="col-12 col-w63 no-padding">
		        <div class="product-description">
		          	<div class="product-groups">
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



		               <div class="product-title" itemprop="name"><a href="http://demo.bestprestashoptheme.com/savemart/ar/smartphone-tablet/2-60-brown-bear-printed-sweater.html#/1-الحجم-ص/11-اللون_-اسود">Lorem ipsum dolor sit amet ege</a></div>

		              <div class="product-group-price">

		                  		                    <div class="product-price-and-shipping">



		                      <span itemprop="price" class="price">36.00&nbsp;UK£</span>





		                    </div>

		              </div>
		          	</div>
		          			        </div>
	    	</div>
		</div>
			<div class="d-flex flex-wrap align-items-start product-miniature js-product-miniature  last_item" data-id-product="3" data-id-product-attribute="95" itemscope="" itemtype="http://schema.org/Product">
			<div class="col-12 col-w37 no-padding">
				<div class="thumbnail-container">

										<a href="http://demo.bestprestashoptheme.com/savemart/ar/smartphone-tablet/3-95-the-best-is-yet-to-come-framed-poster.html#/1-الحجم-ص/13-اللون_-برتقالي" class="thumbnail product-thumbnail two-image">
						<img class="img-fluid image-cover" src="http://demo.bestprestashoptheme.com/savemart/34-home_default/the-best-is-yet-to-come-framed-poster.jpg" alt="" data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/34-large_default/the-best-is-yet-to-come-framed-poster.jpg" width="600" height="600">
																														<img class="img-fluid image-secondary" src="http://demo.bestprestashoptheme.com/savemart/35-home_default/the-best-is-yet-to-come-framed-poster.jpg" alt="" data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/35-large_default/the-best-is-yet-to-come-framed-poster.jpg" width="600" height="600">
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
</div>    <p class="seller_name">
        <a title="View seller profile" href="http://demo.bestprestashoptheme.com/savemart/ar/jmarketplace/2_taylor-jonson/">
            <i class="fa fa-user"></i>
            Taylor Jonson
        </a>
    </p>



		               <div class="product-title" itemprop="name"><a href="http://demo.bestprestashoptheme.com/savemart/ar/smartphone-tablet/3-95-the-best-is-yet-to-come-framed-poster.html#/1-الحجم-ص/13-اللون_-برتقالي">Mauris molestie porttitor diam</a></div>

		              <div class="product-group-price">

		                  		                    <div class="product-price-and-shipping">



		                      <span itemprop="price" class="price">30.00&nbsp;UK£</span>





		                    </div>

		              </div>
		          	</div>
		          			        </div>
	    	</div>
		</div>
	</div></div><div class="owl-item" style="width: 270px;"><div class="item  text-center">
			<div class="d-flex flex-wrap align-items-start product-miniature js-product-miniature  first_item" data-id-product="4" data-id-product-attribute="112" itemscope="" itemtype="http://schema.org/Product">
			<div class="col-12 col-w37 no-padding">
				<div class="thumbnail-container">

										<a href="http://demo.bestprestashoptheme.com/savemart/ar/home-appliance/4-112-the-adventure-begins-framed-poster.html#/1-الحجم-ص/9-اللون_-ابيض_مطفي" class="thumbnail product-thumbnail two-image">
						<img class="img-fluid image-cover" src="http://demo.bestprestashoptheme.com/savemart/39-home_default/the-adventure-begins-framed-poster.jpg" alt="" data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/39-large_default/the-adventure-begins-framed-poster.jpg" width="600" height="600">
																														<img class="img-fluid image-secondary" src="http://demo.bestprestashoptheme.com/savemart/43-home_default/the-adventure-begins-framed-poster.jpg" alt="" data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/43-large_default/the-adventure-begins-framed-poster.jpg" width="600" height="600">
											</a>

									</div>
			</div>
			<div class="col-12 col-w63 no-padding">
		        <div class="product-description">
		          	<div class="product-groups">
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
        <a title="View seller profile" href="http://demo.bestprestashoptheme.com/savemart/ar/jmarketplace/2_taylor-jonson/">
            <i class="fa fa-user"></i>
            Taylor Jonson
        </a>
    </p>



		               <div class="product-title" itemprop="name"><a href="http://demo.bestprestashoptheme.com/savemart/ar/home-appliance/4-112-the-adventure-begins-framed-poster.html#/1-الحجم-ص/9-اللون_-ابيض_مطفي">Maecenas vulputate ligula vel</a></div>

		              <div class="product-group-price">

		                  		                    <div class="product-price-and-shipping">



		                      <span itemprop="price" class="price">18.00&nbsp;UK£</span>





		                    </div>

		              </div>
		          	</div>
		          			        </div>
	    	</div>
		</div>
			<div class="d-flex flex-wrap align-items-start product-miniature js-product-miniature " data-id-product="5" data-id-product-attribute="134" itemscope="" itemtype="http://schema.org/Product">
			<div class="col-12 col-w37 no-padding">
				<div class="thumbnail-container">

										<a href="http://demo.bestprestashoptheme.com/savemart/ar/audio/5-134-today-is-a-good-day-framed-poster.html#/1-الحجم-ص/13-اللون_-برتقالي" class="thumbnail product-thumbnail two-image">
						<img class="img-fluid image-cover" src="http://demo.bestprestashoptheme.com/savemart/44-home_default/today-is-a-good-day-framed-poster.jpg" alt="" data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/44-large_default/today-is-a-good-day-framed-poster.jpg" width="600" height="600">
																														<img class="img-fluid image-secondary" src="http://demo.bestprestashoptheme.com/savemart/45-home_default/today-is-a-good-day-framed-poster.jpg" alt="" data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/45-large_default/today-is-a-good-day-framed-poster.jpg" width="600" height="600">
											</a>

									</div>
			</div>
			<div class="col-12 col-w63 no-padding">
		        <div class="product-description">
		          	<div class="product-groups">
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
        <a title="View seller profile" href="http://demo.bestprestashoptheme.com/savemart/ar/jmarketplace/2_taylor-jonson/">
            <i class="fa fa-user"></i>
            Taylor Jonson
        </a>
    </p>



		               <div class="product-title" itemprop="name"><a href="http://demo.bestprestashoptheme.com/savemart/ar/audio/5-134-today-is-a-good-day-framed-poster.html#/1-الحجم-ص/13-اللون_-برتقالي">Vehicula vel tempus sit amet ulte</a></div>

		              <div class="product-group-price">

		                  		                    <div class="product-price-and-shipping">



		                      <span itemprop="price" class="price">34.80&nbsp;UK£</span>





		                    </div>

		              </div>
		          	</div>
		          			        </div>
	    	</div>
		</div>
			<div class="d-flex flex-wrap align-items-start product-miniature js-product-miniature  last_item" data-id-product="6" data-id-product-attribute="0" itemscope="" itemtype="http://schema.org/Product">
			<div class="col-12 col-w37 no-padding">
				<div class="thumbnail-container">

										<a href="http://demo.bestprestashoptheme.com/savemart/ar/home-appliance/6-nullam-tempor-orci-eu-pretium.html" class="thumbnail product-thumbnail two-image">
						<img class="img-fluid image-cover" src="http://demo.bestprestashoptheme.com/savemart/49-home_default/nullam-tempor-orci-eu-pretium.jpg" alt="" data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/49-large_default/nullam-tempor-orci-eu-pretium.jpg" width="600" height="600">
																														<img class="img-fluid image-secondary" src="http://demo.bestprestashoptheme.com/savemart/50-home_default/nullam-tempor-orci-eu-pretium.jpg" alt="" data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/50-large_default/nullam-tempor-orci-eu-pretium.jpg" width="600" height="600">
											</a>

									</div>
			</div>
			<div class="col-12 col-w63 no-padding">
		        <div class="product-description">
		          	<div class="product-groups">
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
        <a title="View seller profile" href="http://demo.bestprestashoptheme.com/savemart/ar/jmarketplace/2_taylor-jonson/">
            <i class="fa fa-user"></i>
            Taylor Jonson
        </a>
    </p>



		               <div class="product-title" itemprop="name"><a href="http://demo.bestprestashoptheme.com/savemart/ar/home-appliance/6-nullam-tempor-orci-eu-pretium.html">Nullam tempor orci eu pretium</a></div>

		              <div class="product-group-price">

		                  		                    <div class="product-price-and-shipping">



		                      <span itemprop="price" class="price">14.28&nbsp;UK£</span>





		                    </div>

		              </div>
		          	</div>
		          			        </div>
	    	</div>
		</div>
	</div></div></div></div><div class="owl-nav"><div class="owl-prev disabled"><i class="fa fa-angle-left"></i></div><div class="owl-next"><i class="fa fa-angle-right"></i></div></div><div class="owl-dots disabled"></div></div>
					</div>
	</div>
</div>

<div class="nov-productlist     productlist-liststyle-3  col-xl-12 col-lg-12 col-md-12 col-xs-12 no-padding">
	<div class="block block-product clearfix">
					<h2 class="title_block">
								TRENDING NOW
			</h2>
				<div class="block_content">
							<div id="productlist156234376" class="product_list grid owl-carousel owl-theme multi-row owl-rtl owl-loaded owl-drag" data-autoplay="false" data-autoplaytimeout="6000" data-loop="false" data-margin="0" data-dots="false" data-nav="true" data-items="1" data-items_large="1" data-items_tablet="1" data-items_mobile="1">


								<div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 540px;"><div class="owl-item active lastActiveItem" style="width: 270px;"><div class="item  text-center">
			<div class="d-flex flex-wrap align-items-start product-miniature js-product-miniature  first_item" data-id-product="1" data-id-product-attribute="40" itemscope="" itemtype="http://schema.org/Product">
			<div class="col-12 col-w37 no-padding">
				<div class="thumbnail-container">

										<a href="http://demo.bestprestashoptheme.com/savemart/ar/smartphone-tablet/1-40-hummingbird-printed-t-shirt.html#/1-الحجم-ص/6-اللون_-رمادي_داكن" class="thumbnail product-thumbnail two-image">
						<img class="img-fluid image-cover" src="http://demo.bestprestashoptheme.com/savemart/24-home_default/hummingbird-printed-t-shirt.jpg" alt="" data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/24-large_default/hummingbird-printed-t-shirt.jpg" width="600" height="600">
																														<img class="img-fluid image-secondary" src="http://demo.bestprestashoptheme.com/savemart/25-home_default/hummingbird-printed-t-shirt.jpg" alt="" data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/25-large_default/hummingbird-printed-t-shirt.jpg" width="600" height="600">
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
</div>    <p class="seller_name">
        <a title="View seller profile" href="http://demo.bestprestashoptheme.com/savemart/ar/jmarketplace/1_david-james/">
            <i class="fa fa-user"></i>
            David James
        </a>
    </p>



		               <div class="product-title" itemprop="name"><a href="http://demo.bestprestashoptheme.com/savemart/ar/smartphone-tablet/1-40-hummingbird-printed-t-shirt.html#/1-الحجم-ص/6-اللون_-رمادي_داكن">Nullam sed sollicitudin mauris</a></div>

		              <div class="product-group-price">

		                  		                    <div class="product-price-and-shipping">



		                      <span itemprop="price" class="price">24.00&nbsp;UK£</span>





		                    </div>

		              </div>
		          	</div>
		          			        </div>
	    	</div>
		</div>
			<div class="d-flex flex-wrap align-items-start product-miniature js-product-miniature " data-id-product="2" data-id-product-attribute="60" itemscope="" itemtype="http://schema.org/Product">
			<div class="col-12 col-w37 no-padding">
				<div class="thumbnail-container">

										<a href="http://demo.bestprestashoptheme.com/savemart/ar/smartphone-tablet/2-60-brown-bear-printed-sweater.html#/1-الحجم-ص/11-اللون_-اسود" class="thumbnail product-thumbnail two-image">
						<img class="img-fluid image-cover" src="http://demo.bestprestashoptheme.com/savemart/29-home_default/brown-bear-printed-sweater.jpg" alt="" data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/29-large_default/brown-bear-printed-sweater.jpg" width="600" height="600">
																														<img class="img-fluid image-secondary" src="http://demo.bestprestashoptheme.com/savemart/30-home_default/brown-bear-printed-sweater.jpg" alt="" data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/30-large_default/brown-bear-printed-sweater.jpg" width="600" height="600">
											</a>

									</div>
			</div>
			<div class="col-12 col-w63 no-padding">
		        <div class="product-description">
		          	<div class="product-groups">
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



		               <div class="product-title" itemprop="name"><a href="http://demo.bestprestashoptheme.com/savemart/ar/smartphone-tablet/2-60-brown-bear-printed-sweater.html#/1-الحجم-ص/11-اللون_-اسود">Lorem ipsum dolor sit amet ege</a></div>

		              <div class="product-group-price">

		                  		                    <div class="product-price-and-shipping">



		                      <span itemprop="price" class="price">36.00&nbsp;UK£</span>





		                    </div>

		              </div>
		          	</div>
		          			        </div>
	    	</div>
		</div>
			<div class="d-flex flex-wrap align-items-start product-miniature js-product-miniature  last_item" data-id-product="3" data-id-product-attribute="95" itemscope="" itemtype="http://schema.org/Product">
			<div class="col-12 col-w37 no-padding">
				<div class="thumbnail-container">

										<a href="http://demo.bestprestashoptheme.com/savemart/ar/smartphone-tablet/3-95-the-best-is-yet-to-come-framed-poster.html#/1-الحجم-ص/13-اللون_-برتقالي" class="thumbnail product-thumbnail two-image">
						<img class="img-fluid image-cover" src="http://demo.bestprestashoptheme.com/savemart/34-home_default/the-best-is-yet-to-come-framed-poster.jpg" alt="" data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/34-large_default/the-best-is-yet-to-come-framed-poster.jpg" width="600" height="600">
																														<img class="img-fluid image-secondary" src="http://demo.bestprestashoptheme.com/savemart/35-home_default/the-best-is-yet-to-come-framed-poster.jpg" alt="" data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/35-large_default/the-best-is-yet-to-come-framed-poster.jpg" width="600" height="600">
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
</div>    <p class="seller_name">
        <a title="View seller profile" href="http://demo.bestprestashoptheme.com/savemart/ar/jmarketplace/2_taylor-jonson/">
            <i class="fa fa-user"></i>
            Taylor Jonson
        </a>
    </p>



		               <div class="product-title" itemprop="name"><a href="http://demo.bestprestashoptheme.com/savemart/ar/smartphone-tablet/3-95-the-best-is-yet-to-come-framed-poster.html#/1-الحجم-ص/13-اللون_-برتقالي">Mauris molestie porttitor diam</a></div>

		              <div class="product-group-price">

		                  		                    <div class="product-price-and-shipping">



		                      <span itemprop="price" class="price">30.00&nbsp;UK£</span>





		                    </div>

		              </div>
		          	</div>
		          			        </div>
	    	</div>
		</div>
	</div></div><div class="owl-item" style="width: 270px;"><div class="item  text-center">
			<div class="d-flex flex-wrap align-items-start product-miniature js-product-miniature  first_item" data-id-product="4" data-id-product-attribute="112" itemscope="" itemtype="http://schema.org/Product">
			<div class="col-12 col-w37 no-padding">
				<div class="thumbnail-container">

										<a href="http://demo.bestprestashoptheme.com/savemart/ar/home-appliance/4-112-the-adventure-begins-framed-poster.html#/1-الحجم-ص/9-اللون_-ابيض_مطفي" class="thumbnail product-thumbnail two-image">
						<img class="img-fluid image-cover" src="http://demo.bestprestashoptheme.com/savemart/39-home_default/the-adventure-begins-framed-poster.jpg" alt="" data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/39-large_default/the-adventure-begins-framed-poster.jpg" width="600" height="600">
																														<img class="img-fluid image-secondary" src="http://demo.bestprestashoptheme.com/savemart/43-home_default/the-adventure-begins-framed-poster.jpg" alt="" data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/43-large_default/the-adventure-begins-framed-poster.jpg" width="600" height="600">
											</a>

									</div>
			</div>
			<div class="col-12 col-w63 no-padding">
		        <div class="product-description">
		          	<div class="product-groups">
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
        <a title="View seller profile" href="http://demo.bestprestashoptheme.com/savemart/ar/jmarketplace/2_taylor-jonson/">
            <i class="fa fa-user"></i>
            Taylor Jonson
        </a>
    </p>



		               <div class="product-title" itemprop="name"><a href="http://demo.bestprestashoptheme.com/savemart/ar/home-appliance/4-112-the-adventure-begins-framed-poster.html#/1-الحجم-ص/9-اللون_-ابيض_مطفي">Maecenas vulputate ligula vel</a></div>

		              <div class="product-group-price">

		                  		                    <div class="product-price-and-shipping">



		                      <span itemprop="price" class="price">18.00&nbsp;UK£</span>





		                    </div>

		              </div>
		          	</div>
		          			        </div>
	    	</div>
		</div>
			<div class="d-flex flex-wrap align-items-start product-miniature js-product-miniature " data-id-product="6" data-id-product-attribute="0" itemscope="" itemtype="http://schema.org/Product">
			<div class="col-12 col-w37 no-padding">
				<div class="thumbnail-container">

										<a href="http://demo.bestprestashoptheme.com/savemart/ar/home-appliance/6-nullam-tempor-orci-eu-pretium.html" class="thumbnail product-thumbnail two-image">
						<img class="img-fluid image-cover" src="http://demo.bestprestashoptheme.com/savemart/49-home_default/nullam-tempor-orci-eu-pretium.jpg" alt="" data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/49-large_default/nullam-tempor-orci-eu-pretium.jpg" width="600" height="600">
																														<img class="img-fluid image-secondary" src="http://demo.bestprestashoptheme.com/savemart/50-home_default/nullam-tempor-orci-eu-pretium.jpg" alt="" data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/50-large_default/nullam-tempor-orci-eu-pretium.jpg" width="600" height="600">
											</a>

									</div>
			</div>
			<div class="col-12 col-w63 no-padding">
		        <div class="product-description">
		          	<div class="product-groups">
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
        <a title="View seller profile" href="http://demo.bestprestashoptheme.com/savemart/ar/jmarketplace/2_taylor-jonson/">
            <i class="fa fa-user"></i>
            Taylor Jonson
        </a>
    </p>



		               <div class="product-title" itemprop="name"><a href="http://demo.bestprestashoptheme.com/savemart/ar/home-appliance/6-nullam-tempor-orci-eu-pretium.html">Nullam tempor orci eu pretium</a></div>

		              <div class="product-group-price">

		                  		                    <div class="product-price-and-shipping">



		                      <span itemprop="price" class="price">14.28&nbsp;UK£</span>





		                    </div>

		              </div>
		          	</div>
		          			        </div>
	    	</div>
		</div>
			<div class="d-flex flex-wrap align-items-start product-miniature js-product-miniature  last_item" data-id-product="7" data-id-product-attribute="155" itemscope="" itemtype="http://schema.org/Product">
			<div class="col-12 col-w37 no-padding">
				<div class="thumbnail-container">

										<a href="http://demo.bestprestashoptheme.com/savemart/ar/home-appliance/7-155-donec-non-lectus-ac-erat-sedei.html#/1-الحجم-ص/10-اللون_-احمر" class="thumbnail product-thumbnail two-image">
						<img class="img-fluid image-cover" src="http://demo.bestprestashoptheme.com/savemart/54-home_default/donec-non-lectus-ac-erat-sedei.jpg" alt="" data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/54-large_default/donec-non-lectus-ac-erat-sedei.jpg" width="600" height="600">
																														<img class="img-fluid image-secondary" src="http://demo.bestprestashoptheme.com/savemart/55-home_default/donec-non-lectus-ac-erat-sedei.jpg" alt="" data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/55-large_default/donec-non-lectus-ac-erat-sedei.jpg" width="600" height="600">
											</a>

									</div>
			</div>
			<div class="col-12 col-w63 no-padding">
		        <div class="product-description">
		          	<div class="product-groups">
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
        <a title="View seller profile" href="http://demo.bestprestashoptheme.com/savemart/ar/jmarketplace/2_taylor-jonson/">
            <i class="fa fa-user"></i>
            Taylor Jonson
        </a>
    </p>



		               <div class="product-title" itemprop="name"><a href="http://demo.bestprestashoptheme.com/savemart/ar/home-appliance/7-155-donec-non-lectus-ac-erat-sedei.html#/1-الحجم-ص/10-اللون_-احمر">Donec non lectus ac erat sedei</a></div>

		              <div class="product-group-price">

		                  		                    <div class="product-price-and-shipping">



		                      <span itemprop="price" class="price">14.28&nbsp;UK£</span>





		                    </div>

		              </div>
		          	</div>
		          			        </div>
	    	</div>
		</div>
	</div></div></div></div><div class="owl-nav"><div class="owl-prev disabled"><i class="fa fa-angle-left"></i></div><div class="owl-next"><i class="fa fa-angle-right"></i></div></div><div class="owl-dots disabled"></div></div>
					</div>
	</div>
</div>
<div class="nov-html col-xl-12 col-lg-12 col-md-12 policy-product no-padding">
    <div class="block">
                <div class="block_content">
            <div class="policy-row d-flex">
<div class="icon-policy"><i class="noviconpolicy noviconpolicy-1">1</i></div>
<div class="policy-content">
<div class="policy-name">Free Delivery</div>
<div class="policy-des">From $ 250</div>
</div>
</div>
<div class="policy-row d-flex">
<div class="icon-policy"><i class="noviconpolicy noviconpolicy-2">2</i></div>
<div class="policy-content">
<div class="policy-name">Money Back</div>
<div class="policy-des">Guarantee</div>
</div>
</div>
<div class="policy-row d-flex">
<div class="icon-policy"><i class="noviconpolicy noviconpolicy-3">3</i></div>
<div class="policy-content">
<div class="policy-name">Authenticity</div>
<div class="policy-des">100% guaranteed</div>
</div>
</div>
        </div>
    </div>
</div>

              </div>
                          </div>
          </div>
        </div>




          <div class="product-detail-bottom">
              <div class="container">

                  <section class="relate-product product-accessories clearfix">
                      <h3 class="h5 title_block">Related products<span class="sub_title">Hand-picked arrivals from the best designer</span></h3>
                      <div class="products product_list grid owl-carousel owl-theme owl-rtl owl-loaded owl-drag" data-autoplay="true" data-autoplaytimeout="6000" data-loop="true" data-items="5" data-margin="0" data-nav="true" data-dots="false" data-items_mobile="2">

                        @if(isset($related_products) && count($related_products)> 0)
                            @foreach($related_products as $_product)


                          <div class="owl-item active lastActiveItem" style="width: 234px;">
                              <div class="item  text-center">
                                          <div class="product-miniature js-product-miniature item-two first_item" data-id-product="{{$_product->id}}" data-id-product-attribute="155" itemscope="" itemtype="http://schema.org/Product">
                                              <div class="product-cat-content">

                                                  <div class="category-title"><a href="">{{$_product->name}}</a></div>


                                                  <div class="product-title" itemprop="name"><a href="{{route('product.details',$_product->slug)}}">{{$_product->name}}</a></div>

                                              </div>
                                              <div class="thumbnail-container">

                                                  <a href="{{route('product.details',$_product->slug)}}" class="thumbnail product-thumbnail two-image">
                                                      <img class="img-fluid image-cover" src="{{$_product->images[0]->photo ?? ''}}" alt="" data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/54-large_default/donec-non-lectus-ac-erat-sedei.jpg" width="600" height="600">
                                                      <img class="img-fluid image-secondary" src="{{$_product->images[1]->photo ?? ''}}" alt="" data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/55-large_default/donec-non-lectus-ac-erat-sedei.jpg" width="600" height="600">
                                                  </a>





                                              </div>
                                              <div class="product-description">
                                                  <div class="product-groups">
                                                      <div class="product-group-price">

                                                          <div class="product-price-and-shipping">



                                                              <span itemprop="price" class="price">{{$_product->price}}</span>





                                                          </div>

                                                      </div>
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
                                                          <a title="View seller profile" href="http://demo.bestprestashoptheme.com/savemart/ar/jmarketplace/2_taylor-jonson/">
                                                              <i class="fa fa-user"></i>
                                                              Taylor Jonson
                                                          </a>
                                                      </p>

                                                  </div>
                                                  <div class="product-buttons d-flex justify-content-start" itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">
                                                      <form action="" method="post" class="formAddToCart">
                                                         @csrf
                                                          <input type="hidden" name="token" value="1c1b041fc4f61f63909a66bab7761cd4">
                                                          <input type="hidden" name="id_product" value="7">
                                                          <a class="add-to-cart" href="#" data-button-action="add-to-cart"><i class="novicon-cart"></i><span>أضف للسلة</span></a>
                                                      </form>

                                                      <a class="addToWishlist wishlistProd_7" href="#" data-rel="7" onclick="WishlistCart('wishlist_block_list', 'add', '7', false, 1); return false;">
                                                          <i class="fa fa-heart"></i>
                                                          <span>Add to Wishlist</span>
                                                      </a>
                                                      <a href="#" class="quick-view hidden-sm-down"
                                                         data-product-id="{{$product->id}}">
                                                          <i class="fa fa-search"></i>
                                                          <span> نظرة سريعة</span>
                                                      </a>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                          </div>



                              @endforeach
                          @endisset











                          <div class="owl-nav disabled">
                              <div class="owl-prev"><i class="fa fa-angle-left"></i>
                              </div>
                              <div class="owl-next"><i class="fa fa-angle-right"></i>
                              </div>
                          </div>
                      <div class="owl-dots disabled"></div>

                      </div>
                </section>




          </div>



</div>



          <footer class="page-footer">

              <!-- Footer content -->

          </footer>


      </section>


  </div>
</div>



      </div>



@include('front.includes.not-logged')
@include('front.includes.alert')
@include('front.includes.alert2')
@include('front.includes.product-model-imag')



@section('scripts')

@stop


        <script>
            $(document).on('click' ,'.quick-view',function (){
            $('.quickview-model-product-details-'+$(this).attr('data-product-id')).css("display","block");

        });
            $(document).on('click' ,'.close',function () {
            $('.quickview-model-product-details-' + $(this).attr('data-product-id')).css("display", "none");

            $('.not-loggedin-model').css("display","none");
            $('.alert-model').css("display","none");
            $('.alert-model2').css("display","none");

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





    </script>
@stop
