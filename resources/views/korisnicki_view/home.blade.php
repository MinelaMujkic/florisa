@extends('layouts.master')
@section('content')

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <img id="baner" src="https://t3.ftcdn.net/jpg/02/51/39/68/360_F_251396894_nYPMalOgYfjN5A9zT5mY1idTzai8RZw4.jpg">
            </div>
        </div>
        <div class="row">
            <div class=" col-md-12">
                <h2>Sedmična ponuda</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-12 col-sm-12">
                <img width="300" height="300" src="https://sopek.si/wp-content/uploads/2019/06/sopek-kale-1.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" srcset="https://sopek.si/wp-content/uploads/2019/06/sopek-kale-1.jpg 300w,https://sopek.si/wp-content/uploads/2019/06/sopek-kale-1.jpg 150w, https://sopek.si/wp-content/uploads/2019/06/sopek-kale-1.jpg 100w" sizes="(max-width: 300px) 100vw, 300px">
                <h2 class="woocommerce-loop-product__title"><a href="#">Kale</a></h2>
                <span class="price"><span class="woocommerce-Price-amount amount">8.00&nbsp;<span class="woocommerce-Price-currencySymbol">KM</span></span></span>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12">
                <img width="300" height="300" src="https://stil.kurir.rs/data/images/2018/04/20/15/152489_profimedia0104052911_ls.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" srcset="https://cfcdn.zulily.com/images/cache/product/452x1000/285228/zu54723581_main_tm1517328598.jpg 300w,https://cfcdn.zulily.com/images/cache/product/452x1000/285228/zu54723581_main_tm1517328598.jpg 150w, https://cfcdn.zulily.com/images/cache/product/452x1000/285228/zu54723581_main_tm1517328598.jpg100w" sizes="(max-width: 300px) 100vw, 300px">
                <h2 class="woocommerce-loop-product__title"><a href="#">Orhideje</a></h2>
                <span class="price"><span class="woocommerce-Price-amount amount">16.00&nbsp;<span class="woocommerce-Price-currencySymbol">KM</span></span></span>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12">
                <img width="300" height="300" src="https://a1c9fd6e407b46044151-ccb4f7d4d6f45dfb3ad745c5c1495007.ssl.cf1.rackcdn.com/v4/images_flowers/thumbs/384.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" srcset="https://a1c9fd6e407b46044151-ccb4f7d4d6f45dfb3ad745c5c1495007.ssl.cf1.rackcdn.com/v4/images_flowers/thumbs/384.jpg 300w,https://a1c9fd6e407b46044151-ccb4f7d4d6f45dfb3ad745c5c1495007.ssl.cf1.rackcdn.com/v4/images_flowers/thumbs/384.jpg 150w, https://a1c9fd6e407b46044151-ccb4f7d4d6f45dfb3ad745c5c1495007.ssl.cf1.rackcdn.com/v4/images_flowers/thumbs/384.jpg 100w" sizes="(max-width: 300px) 100vw, 300px">
                <h2 class="woocommerce-loop-product__title"><a href="#">Aranžmani</a></h2>
                <span class="price"><span class="woocommerce-Price-amount amount">25.00&nbsp;<span class="woocommerce-Price-currencySymbol">KM</span></span></span>
            </div>
        </div>
    </div>

    <style>
        #baner{
        background-size:cover;
        height: 300px;
        width: 100%;
        }

        h2{
            text-align: center;
            margin-top: 30px;
            margin-bottom: 30px;
        }
    </style>

@endsection