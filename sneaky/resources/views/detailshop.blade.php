<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Our Daily Sneak</title>
    @include('properties-import.data-logo-icon')
    <!-- import link rel -->
    @include('properties-import.data-link')
</head>
<body>
    @include('properties-import.navbar')
    <!-- isi -->
    <!-- Swiper -->
    <div class="detail-title" style="text-align: center;padding:1%">
        <h1 style="color: #17293b;font-weight: bold;font-family: 'Montserrat', sans-serif;">Detail</h1>
    </div>
    <div class="combine-detail">
        <div class="detail-container">
            <div class="swiper-container swiper-container-detail gallery-top gallery-top-detail">
                <div class="swiper-wrapper">
                    <div class="swiper-slide swiper-slide-detail swiper-slide-detail-top" style="background-image:url({{asset('assets/images/sneakers/'.$sneaker->id_sneaker.'-right.jpg')}})">
                    </div>
                    <div class="swiper-slide swiper-slide-detail swiper-slide-detail-top" style="background-image:url({{asset('assets/images/sneakers/'.$sneaker->id_sneaker.'-left.jpg')}})">
                    </div>
                    <div class="swiper-slide swiper-slide-detail swiper-slide-detail-top" style="background-image:url({{asset('assets/images/sneakers/'.$sneaker->id_sneaker.'-top.jpg')}})">
                    </div>
                </div>
            </div>
            <div class="swiper-container swiper-container-detail gallery-thumbs gallery-thumbs-detail">
                <div class="swiper-wrapper">
                    <div class="swiper-slide swiper-slide-detail" style="background-image:url({{asset('assets/images/sneakers/'.$sneaker->id_sneaker.'-right.jpg')}});background-position: bottom;">
                    </div>
                    <div class="swiper-slide swiper-slide-detail" style="background-image:url({{asset('assets/images/sneakers/'.$sneaker->id_sneaker.'-left.jpg')}});background-position: center;">
                    </div>
                    <div class="swiper-slide swiper-slide-detail" style="background-image:url({{asset('assets/images/sneakers/'.$sneaker->id_sneaker.'-top.jpg')}});background-position: center;">
                    </div>
                </div>
            </div>
        </div>
        <section class="detail-content">
            <h1 class="font-primary color-secondary" style="margin: 0;">{{$sneaker->nama_sneaker}}</h1>
            <h2 class="font-primary color-secondary" style="margin: 0;">{{ 'IDR '.number_format($sneaker->harga_sneaker, 2, ",",".") }}</h2>
        </section>
    </div>
    @include('properties-import.footer')
    @include('properties-import.data-script')
    @include('properties-import.data-card-hover')
</body>
</html>
