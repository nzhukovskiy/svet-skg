@extends("layouts.layout")
@section("content")
<header>
    <nav class="nav" style="background: white !important">
        <div class="wrap">
            <div class="logo" style="color: #515562 !important;display: flex;"><div><a href='./index.html'><i class="fa fa-arrow-left" style="font-size:16px; padding-right: 25px;" ></i></a>	</div>	<span>SVE</span>T-SKG</div>
            <div class="toggle">
                <div class="toggle_nav">
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </div>
            <div class="links" style="color: #2c3e50 !important">
                <div class="links_wrap">
                    <hr><a class=" link" href="./index.html" style="color: #515562;" >Главная</a>
                    <a class=" link" href="./index.html#about" style="color: #515562;">О нас</a>
                    <a class=" link" href="./index.html#products" style="color: #515562;">Продукция</a>
                    <a class=" link" href="./index.html#work" style="color: #515562;">Работы</a>
                    <a class=" link" href="./index.html#service" style="color: #515562;">Возможности</a>
                    <a class=" link" href="./index.html#contact" style="color: #515562;">Связаться</a>
                </div>
            </div>
        </div>
    </nav>
</header>
<div class="wrap main-wrap" style="margin-top: 0;">
    <div class="products-items-grid products-items-grid-work">
        <div class="product_col products-items-grid_col">

            <div class="product_img">
                <img src="{{ Vite::asset('resources/images/products-work/4.jpg') }}" class="work-img" data-full="{{ Vite::asset('resources/images/products-work/4.jpg') }}">
                <div class="product_bg_title">
                    Инициативная 54А. Освещение придомовой территории.
                </div>
            </div>


        </div>

        <div class="product_col products-items-grid_col">

            <div class="product_img">
                <img src="{{ Vite::asset('resources/images/products-work/8.jpg') }}" class="work-img" data-full="{{ Vite::asset('resources/images/products-work/8.jpg') }}">
                <div class="product_bg_title">
                    Светильник 50 Ватт у частного дома.
                </div>
            </div>

        </div>

        <div class="product_col products-items-grid_col">

            <div class="product_img">
                <img src="{{ Vite::asset('resources/images/products-work/7.jpg') }}" class="work-img" data-full="{{ Vite::asset('resources/images/products-work/7.jpg') }}" >
                <div class="product_bg_title">
                    Монтаж светильника 50 Ватт для ТСЖ.
                </div>
            </div>

        </div>

        <div class="product_col products-items-grid_col">

            <div class="product_img">
                <img src="{{ Vite::asset('resources/images/products-work/AM/2spec.jpg') }}" class="work-img" data-full="{{ Vite::asset('resources/images/products-work/AM/2spec.jpg') }}">
                <div class="product_bg_title">
                    Освещение центральной площади Андреево-Мелентьево.
                </div>
            </div>

        </div>

        <div class="product_col products-items-grid_col">

            <div class="product_img">
                <img src="{{ Vite::asset('resources/images/products-work/16.jpg') }}" class="work-img" data-full="{{ Vite::asset('resources/images/products-work/16.jpg') }}">
                <div class="product_bg_title">
                    Освещение придомовой территории Дзержинского 177.
                </div>
            </div>

        </div>

        <div class="product_col products-items-grid_col">

            <div class="product_img">
                <img src="{{ Vite::asset('resources/images/products-work/AM/10.jpg') }}" class="work-img" data-full="{{ Vite::asset('resources/images/products-work/AM/10.jpg') }}">
                <div class="product_bg_title">
                    Освещение улиц Победы и Магистральной.
                </div>
            </div>

        </div>
        <div class="product_col products-items-grid_col">

            <div class="product_img">
                <img src="{{ Vite::asset('resources/images/products-work/21.jpg') }}" class="work-img" data-full="{{ Vite::asset('resources/images/products-work/21.jpg') }}">
                <div class="product_bg_title">
                    Придомовая территория Шило 212/1.
                </div>
            </div>

        </div>
        <div class="product_col products-items-grid_col">

            <div class="product_img">
                <img src="{{ Vite::asset('resources/images/products-work/18.jpg') }}" class="work-img" data-full="{{ Vite::asset('resources/images/products-work/18.jpg') }}">
                <div class="product_bg_title">
                    Придомовая территория Урицкого 20.
                </div>
            </div>

        </div>
        <div class="product_col products-items-grid_col">

            <div class="product_img">
                <img src="{{ Vite::asset('resources/images/products-work/22.jpg') }}" class="work-img" data-full="{{ Vite::asset('resources/images/products-work/22.jpg') }}">
                <div class="product_bg_title">
                    Ростовская область. Замена освещения в сельских поселениях.
                </div>
            </div>

        </div>

    </div>
</div>
<div class="modal-view">
    <div class="modal-view__overlay">

    </div>
    <div class="image-view">
        <a class="image-link" target="_blank">
            <img>
        </a>
        <div class="image-view__close">
            <i class="fas fa-times"></i>
        </div>
    </div>
</div>
@endsection
