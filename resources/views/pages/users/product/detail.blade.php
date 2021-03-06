@extends('layouts.master-user')

@section('title', 'Detail Product')

@section('css')

@endsection

@section('content')
<div class="container bgwhite p-t-35 p-b-80">
    <div class="flex-w flex-sb">
        <div class="w-size13 p-t-30 respon5">
        <div class="wrap-pic-w">
            <img class="img-detail" src="{{ asset('images/chicken.jpg') }}">
        </div>
        </div>

        <div class="w-size14 p-t-30 respon5">
        <h4 class="product-detail-name m-text16 p-b-13" id="product-name">
            Chicken
        </h4>

        <span class="m-text17">
            200.000 vnd
        </span>

        <!--  -->
        <div class="p-t-33 p-b-60">

            <div class="flex-r-m flex-w p-t-10">
            <div class="w-size16 flex-m flex-w">
                <div class="flex-w bo5 of-hidden m-r-22 m-t-10 m-b-10">
                <button class="btn-num-product-down color1 flex-c-m size7 bg8 eff2">
                    <i class="fs-12 fa fa-minus" aria-hidden="true"></i>
                </button>

                <input class="size8 m-text18 t-center num-product" name="num-product" value="1" id="quantity">

                <button class="btn-num-product-up color1 flex-c-m size7 bg8 eff2">
                    <i class="fs-12 fa fa-plus" aria-hidden="true"></i>
                </button>
                </div>

                <div class="btn-addcart-product-detail size9 trans-0-4 m-t-10 m-b-10">
                <!-- Button -->
                <button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4" id="btn-add-to-cart">
                    Add to Cart
                </button>
                </div>
            </div>
            </div>
        </div>

        <div class="p-b-45">
            <span class="s-text8">Categories: Foods</span> <br>
            Rate:
            <span class="fa fa-star checked" style="color:orange;"></span>
            <span class="fa fa-star checked" style="color:orange;"></span>
            <span class="fa fa-star checked" style="color:orange;"></span>
            <span class="fa fa-star checked" style="color:orange;"></span>
            <span class="fa fa-star"></span>
        </div>

        <!--  -->
        <div class="wrap-dropdown-content bo6 p-t-15 p-b-14 active-dropdown-content">
            <h5 class="js-toggle-dropdown-content flex-sb-m cs-pointer m-text19 color0-hov trans-0-4">
            Description
            <i class="up-mark fs-12 color1 fa fa-plus" aria-hidden="true"></i>
            </h5>

            <div class="dropdown-content dis-none p-t-15 p-b-23">
            <p class="s-text8" id="product-description">
                Chicken BBQ
            </p>
            </div>
        </div>

        <div class="wrap-dropdown-content bo7 p-t-15 p-b-14">
            <h5 class="js-toggle-dropdown-content flex-sb-m cs-pointer m-text19 color0-hov trans-0-4">
            Reviews
            <i class="up-mark fs-12 color1 fa fa-plus" aria-hidden="true"></i>
            </h5>
            <div class="dropdown-content dis-none p-t-15 p-b-23">
                Good good good
            </div>
        </div>
        </div>
    </div>
</div>
@endsection

@section('js')

@endsection
