
<div id="blockcart-modal" class="modal fade in cart-model-product-{{$product->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: hidden; background-color: rgb(0 0 0 / 80%);">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-xs-center" id="myModalLabel"><i class="fa fa-check"></i>تم أضافة المنتج بنجاح إلى سلة التسوق الخاصة بك</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="material-icons close">close</i>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6 divide-right">
                        <div class="row no-gutters">
                            <div class="col-md-5">
                                <img class="product-image img-fluid" src="{{$product->images[0]->photo ?? ''}}" alt="" title="" itemprop="image">
                            </div>
                            <div class="col-md-7">
                                <div class="h5 product-name">{{$product->name}}</div>
                                <div class="product-price">{{$product->price}}&nbsp;UK£</div>

                                <span>الحجم: ص</span><br>
                                <span>: برتقالي</span><br>
                                <p>الكميَّة:&nbsp;{{$product->qty}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="cart-content">
                            <p class="cart-products-count">هناك {{ count((array) session('basket')) }}في سلتك.</p>
                            <p>إجمالي المنتجات:&nbsp;60.00&nbsp;UK£</p>
                            <p>تكلفة الشحن&nbsp;مجاناً </p>
                            <p>الإجمالي:&nbsp;60.00&nbsp;UK£ (شامل للضريبة)</p>

                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">الاستمرار في التسوق</button>
                <a href="{{Route('site.cart.index')}}" class="btn btn-primary"><i class="fa fa-check-square-o" aria-hidden="true"></i>اتمام الطلب</a>
            </div>
        </div>
    </div>
</div>

