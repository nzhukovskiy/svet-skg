@extends("layouts.layout")
@section("content")
    <header>
        <nav class="nav" style="background: white !important">
            <div class="wrap">
                <div class="logo" style="color: #51556280 !important;display: flex;"><div><a href='./index.html'><i class="fa fa-arrow-left" style="font-size:16px; padding-right: 25px;" ></i></a>	</div>	<span>SVE</span>T-SKG</div>
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
    <div class="wrap" style="margin-top: 60px;">
        <div>
            <a href='/products'>
            </a>
        </div>
        <div class="showcase_content">
            <div class="showcase_title title">История компании</div>
            <div class="showcase_text">Благодаря накопленному нашими специалистами опыту, мы делаем наших клиентов счастливыми, изготавливая качественные светодиодные светильники.</div>
        </div>
        <main>
            <div class="timeline">
                <p><span class="timeline__date">1990</span>Наша компания была основана</p>
                <p><span class="timeline__date">1995</span>Мы открыли свой первый офис в Таганроге</p>
                <p><span class="timeline__date">2000</span>Мы открыли офис в Ростове-на-Дону</p>
                <p><span class="timeline__date">2010</span>Мы обслужили своего первого клиента</p>
                <p><span class="timeline__date">2021</span>Мы открыли свой сайт</p>
            </div>
        </main>
        <div class="video showcase_content">
            <div class="showcase_title title">Видео о нашей компании</div>
            <video class="main-video" controls="controls">
                <source src="{{ Vite::asset('resources/videos/about_us.mp4') }}" type='video/mp4'>
                Тег video не поддерживается вашим браузером.
            </video>
        </div>


    </div>
@endsection
