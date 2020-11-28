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
    <div class="dashboard-container">
        <div class="dashboard-title" style="text-align: center;padding-top:2%;">
            <h1 style="color: #17293b;font-weight: bold;padding-bottom: 5px;font-family: 'Montserrat', sans-serif;">Dashboard</h1>
        </div>
        <div class="sort-dashboard-container">
            <div class="sort-dashboard-content">
                <form method="post">
                    @csrf
                    <div class="select-box-sort select-box">
                        <div class="options-container-sort options-container no-search">
                            <div class="option-sort option">
                                <input type="radio" class="radio" id="newest" name="category" value="newest"/>
                                <label for="newest" class="font-secondary">Newest</label>
                            </div>
                            <div class="option-sort option">
                                <input type="radio" class="radio" id="highest" name="category" value="highest"/>
                                <label for="highest" class="font-secondary">Highest</label>
                            </div>
                            <div class="option-sort option">
                                <input type="radio" class="radio" id="cheapest" name="category" value="cheapest"/>
                                <label for="cheapest" class="font-secondary">Cheapest</label>
                            </div>
                            <div class="option-sort option">
                                <input type="radio" class="radio" id="alpha-a-z" name="category" value="alpha-a-z"/>
                                <label for="alpha-a-z" class="font-secondary">Alphabet A - Z</label>
                            </div>
                            <div class="option-sort option">
                                <input type="radio" class="radio" id="alpha-z-a" name="category" value="alpha-z-a"/>
                                <label for="alpha-z-a" class="font-secondary">Alphabet Z - A</label>
                            </div>
                        </div>
                        <div class="selected-sort selected font-secondary">
                            Newest
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <section class="dashboard-search-container">
            <div class="filter-navigation">
                <h3 class="color-secondary" style="font-family: 'Montserrat', sans-serif">
                    Brand
                </h3>
                <hr style="margin-top:-10px;">
                @foreach($brand as $s)
                    <a href="" class="font-secondary" style="font-weight: bold;font-family: 'Montserrat', sans-serif;line-height: 22px;font-size: 18px">{{$s->brand_sneaker}}</a><br>
                @endforeach
                <h3 class="color-secondary" style="font-family: 'Montserrat', sans-serif">Size</h3>
                <hr style="margin-top:-10px;">
                <div class="size-container">
                    @foreach($size as $s)
                        <div class="size-content">
                            <a href="" class="font-secondary" id="size-sneaker" style="font-weight: bold;">{{$s->ukuran_sneaker}}</a>
                        </div>
                    @endforeach
                </div>
                <h3 class="color-secondary" style="font-family: 'Montserrat', sans-serif">Price</h3>
                <hr style="margin-top:-10px;">
                <div class="range-slider">
                    <p>
                        <label for="amount"></label>
                        <input type="text" class="font-primary color-secondary" id="amount" readonly style="border: 0;font-weight: bold;font-size: 18px" />
                    </p>
                    <div id="slider-range"></div>
                </div>
                <div class="button-range-slider">
                    <a href=""><button class="custom-button text-white" style="width: 100%;">OK</button></a>
                </div>
            </div>
            <div class="filter-content">
                @foreach ($sneaker as $s)
                <form action="/handleBarang" method="post">
                @csrf
                    <div class="filter-content-item" id="box">
                        <div>
                            <img src="{{asset('assets/images/sneakers/'.$s->id_sneaker.'-right.jpg')}}" alt="" id="border-image">
                        </div>
                        <div id="description-item">
                            <input type="hidden" name="id_sneaker" value="{{$s->id_sneaker}}">
                            <h5 style="font-family: 'Montserrat', sans-serif;font-size: 22px;margin-bottom: 2px">{{$s->nama_sneaker}}</h5>
                            <span style="font-family: 'Montserrat', sans-serif;font-size: 18px;">{{ 'IDR '.number_format($s->harga_sneaker, 2, ",",".") }} </span>
                            <br>
                            <button type="submit" class="custom-button text-white" value="*" name="btnWishlist" style="margin-top: 10px;" class=""><i class="fas fa-heart"></i></button>
                            <button type="submit" class="custom-button text-white" value="Detail Item" name="btnDetail" style="margin-top: 10px;" class="font-secondary">Detail Item</button>
                        </div>
                    </div>
                </form>
                @endforeach
            </div>
        </section>
    </div>
    @include('properties-import.footer')
    @include('properties-import.data-script')
    @include('properties-import.data-card-hover')
</body>
</html>
