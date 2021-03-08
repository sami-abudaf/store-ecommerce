
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
