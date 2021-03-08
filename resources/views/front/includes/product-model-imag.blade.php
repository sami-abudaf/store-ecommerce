

<div class="modal fade js-product-images-modal in model-product-images-{{$product->id}}" id="product-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" style="display: hidden;">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <figure>
                    <img class="js-modal-product-cover product-cover-modal" width="600" src="{{$product->images[0]->photo ?? ''}}" alt="" title="" itemprop="image">
                </figure>


                <aside id="thumbnails" class="thumbnails js-thumbnails text-xs-center">
                    <div class="js-modal-mask mask  nomargin ">
                        <ul class="product-images js-modal-product-images">
                            <li class="thumb-container">
                                <img data-image-large-src="{{$product->images[0]->photo ?? ''}}" class="thumb js-modal-thumb" src="{{$product->images[0]->photo ?? ''}}" alt="" title="" width="125" itemprop="image">
                            </li>
                            <li class="thumb-container">
                                <img data-image-large-src="{{$product->images[1]->photo ?? ''}}" class="thumb js-modal-thumb" src="{{$product->images[1]->photo ?? ''}}" alt="" title="" width="125" itemprop="image">
                            </li>
                            <li class="thumb-container">
                                <img data-image-large-src="{{$product->images[2]->photo ?? ''}}" class="thumb js-modal-thumb" src="{{$product->images[2]->photo ?? ''}}" alt="" title="" width="125" itemprop="image">
                            </li>
                            <li class="thumb-container">
                                <img data-image-large-src="{{$product->images[3]->photo ?? ''}}" class="thumb js-modal-thumb" src="{{$product->images[3]->photo ?? ''}}" alt="" title="" width="125" itemprop="image">
                            </li>
                            <li class="thumb-container">
                                <img data-image-large-src="{{$product->images[4]->photo ?? ''}}" class="thumb js-modal-thumb" src="{{$product->images[4]->photo ?? ''}}" alt="" title="" width="125" itemprop="image">
                            </li>
                        </ul>
                    </div>

                </aside>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>
