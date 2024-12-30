<div class="cart-left">
    <div class="cart-invoice">
        <div class="d-flex justify-content-between mb-3">
            <span>قیمت کالاها ({{$invoice['totalProductCount']}}) </span>
            <span>{{number_format($invoice['totalOriginalPrice'])}} تومان </span>
        </div>
        <div class="d-flex justify-content-between mb-3">
            <span>جمع سبد خرید </span>
            <span>{{number_format($invoice['totalDiscountedPrice'])}} تومان  </span>
        </div>
        <div class="d-flex justify-content-between mb-3">
            <span>سود شما از خرید </span>
            <span>{{number_format($invoice['totalDiscount'])}} تومان </span>
        </div>

        <button class="addToBasket-btn w-100 d-md-none d-sm-none">
            <a href="{{--{{route('client.shipping.index')}}--}}" class="addToBasket-btn w-50 ">
                تایید و تکمیل سفارش
            </a>
        </button>

        <div class="complete-order-mobile d-lg-none">

            <div>
                <span class="d-block">جمع سبد خرید</span>
                <span>{{number_format($invoice['totalDiscountedPrice'])}} تومان </span>
            </div>
        </div>
    </div>
</div>
