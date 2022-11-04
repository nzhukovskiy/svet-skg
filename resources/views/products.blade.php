@extends("layouts.layout")
@section("content")
<header>
    <nav class="nav" style="background: white !important">
        <div class="wrap">
            <div class="logo" style="color: #515562 !important;display: flex;"><div><a href='{{route("home")}}'><i class="fa fa-arrow-left" style="font-size:16px; padding-right: 25px;" ></i></a>	</div>	<span>SVE</span>T-SKG</div>
            <div class="toggle">
                <div class="toggle_nav">
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </div>
            <div class="links" style="color: #2c3e50 !important">
                <div class="links_wrap">
                    <hr><a class=" link" href="{{route("home")}}" style="color: #515562;" >Главная</a>
                    <a class=" link" href="{{route("about_us")}}" style="color: #515562;">О нас</a>
                    <a class=" link" href="{{url("products")}}" style="color: #515562;">Продукция</a>
                    <a class=" link" href="{{route("home")}}#work" style="color: #515562;">Работы</a>
                    <a class=" link" href="{{route("home")}}#service" style="color: #515562;">Возможности</a>
                    <a class=" link" href="{{route("home")}}#contact" style="color: #515562;">Связаться</a>
                </div>
            </div>
        </div>
    </nav>
</header>
<div class="wrap" style="margin-top: 40px">
    <div class="section_title">
        <h2>Наша продукция.</h2>
        <div class="section_title_text">Ознакомьтесь с каталогом нашей продукции.</div>
    </div>
</div>
<div class="wrap">
    <div class="input-wrap  " >
        <input class="input_name" name="name" type="text" placeholder="Введите запрос">
        <div class="search-icon"><i class="fas fa-search"></i></div>
    </div>
    <div class="products-items-grid">
        @foreach($products as $product)
            <div class="product_col products-items-grid_col">
                <a href="{{route("products.show", ["product" => $product->id])}}" class="products-items-grid_col_wrap">

                    <div class="product_img">
                        @if ($product->images->count() > 0)
                            <img src="{{Storage::url($product->images[0]->name)}}">
                        @else
                            <img src="{{ Vite::asset('resources/images/products/1.jpg') }}">
                        @endif
                    </div>
                    <div class="product_title title">{{$product->name}}</div>
                    <div class="product_text">
                        {{$product->description}}
                    </div>
                </a>
            </div>
        @endforeach
    </div>

    <!--<div class="products-items-grid">
        <div class="product_col products-items-grid_col">
            <a href="./product.html" class="products-items-grid_col_wrap">

                <div class="product_img"><img src="{{ Vite::asset('resources/images/products/1.jpg') }}"></div>
                <div class="product_title title">AVENUE K- 50.</div>
                <div class="product_text">
                    Уличный светильник.
                    Мощность <span>50ватт</span>
                </div>
            </a>
        </div>
        <div class="product_col products-items-grid_col">
            <a href="./product.html" class="products-items-grid_col_wrap">
                <div class="product_img"><img src="{{ Vite::asset('resources/images/products/2.jpg') }}"></div>
                <div class="bage bage-accent bage-right-top">
                    Лучший выбор
                </div>
                <div class="product_title title">AVENUE K- 100.</div>
                <div class="product_text">
                    Уличный светильник.
                    Мощность <span>100ватт</span>
                </div>
            </a>
        </div>
        <div class="product_col products-items-grid_col">
            <a href="./product.html" class="products-items-grid_col_wrap">

                <div class="product_img"><img src="{{ Vite::asset('resources/images/products/3.jpg') }}"></div>
                <div class="product_title title">AVENUE K- 200.</div>
                <div class="product_text">
                    Уличный светильник.
                    Мощность <span>200ватт</span>
                </div>
            </a>
        </div>
        <div class="product_col products-items-grid_col">
            <a href="./product.html" class="products-items-grid_col_wrap">

                <div class="product_img"><img src="{{ Vite::asset('resources/images/products/4.jpg') }}"></div>
                <div class="product_title title">INDUSTRY  50.</div>
                <div class="product_text">
                    Промышленный светильник.
                    Мощность <span>50ватт</span>
                </div>
            </a>
        </div>
        <div class="product_col products-items-grid_col">
            <a href="./product.html" class="products-items-grid_col_wrap">

                <div class="product_img"><img src="{{ Vite::asset('resources/images/products/5.jpg') }}"></div>
                <div class="product_title title">INDUSTRY 100.</div>
                <div class="bage bage-accent bage-right-top">
                    Лучший выбор
                </div>
                <div class="product_text">
                    Промышленный светильник.
                    Мощность <span>100ватт</span>
                </div>
            </a>
        </div>
        <div class="product_col products-items-grid_col">
            <a href="./product.html" class="products-items-grid_col_wrap">

                <div class="product_img"><img src="{{ Vite::asset('resources/images/products/2.jpg') }}"></div>
                <div class="product_title title">INDUSTRY 200.</div>
                <div class="product_text">
                    Промышленный светильник.
                    Мощность <span>200ватт</span>
                </div>
            </a>
        </div>
        <div class="product_col products-items-grid_col">
            <a href="./product.html" class="products-items-grid_col_wrap">

                <div class="product_img"><img src="{{ Vite::asset('resources/images/products/2.jpg') }}"></div>
                <div class="product_title title">AVENUE 200L.</div>
                <div class="bage bage-accent bage-right-top">
                    Лучший выбор
                </div>
                <div class="product_text">
                    Промышленный светильник.
                    Мощность <span>200ватт</span>
                </div>
            </a>
        </div>
        <div class="product_col products-items-grid_col">
            <a href="./product.html" class="products-items-grid_col_wrap">
                <div class="product_img"><img src="{{ Vite::asset('resources/images/products/1.jpg') }}"></div>
                <div class="product_title title">INDUSTRY 150.</div>
                <div class="product_text">
                    Промышленный светильник.
                    Мощность <span>150ватт</span>
                </div>
            </a>
        </div>

    </div>-->
    <div class="pagination">
        <div class="pagination-item selected">1</div>
        <div class="pagination-item">2</div>
        <div class="pagination-item">3</div>
    </div>
</div>
@endsection
