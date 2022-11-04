@extends("layouts.layout")
@section("content")
<header>
    <nav class="nav" style="background: white !important">
        <div class="wrap">
            <div class="logo" style="color: #515562 !important;display: flex;"><div><a href='{{url("products")}}'><i class="fa fa-arrow-left" style="font-size:16px; padding-right: 25px;" ></i></a>	</div>	<span>SVE</span>T-SKG</div>
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
<div class="wrap" style="margin-top: 60px;">
    <div>
        <a href='{{url("products")}}'>
        </a>
    </div>
    <div class="desc">
        <div class="desc_block desc_slider">

            <div class="desc_slider_wrap result_desc" style="cursor: crosshair; position: relative; background-repeat: no-repeat;">
                <div class="desc__bage bage bage-accent">
                    Лучший выбор
                </div>
                <div style="position: absolute;" class="desc_loupe"></div>
                <img src="../img/products/1.jpg" alt="" class="desc_slider_img desc_show_img" style="transition: opacity 0.4s linear">
            </div>
            <div class="desc_preview">
                <div class="desc_preview_image_wrap" style="background-image: url('../img/products/1.jpg'); cursor: pointer; border-color: #00bfd3;" data-href="../img/products/1.jpg"></div>
                <div class="desc_preview_image_wrap" style="background-image: url('../img/products/4.jpg'); cursor: pointer;" data-href="../img/products/4.jpg"></div>
                <div class="desc_preview_image_wrap" style="background-image: url('../img/products/5.jpg'); cursor: pointer;" data-href="../img/products/5.jpg"></div>
                <div class="desc_preview_image_wrap" style="background-image: url('../img/products/6.jpg'); cursor: pointer;" data-href="../img/products/6.jpg"></div>

            </div>
        </div>
        <div class="desc_block desc_text">
            <div class="product_text">
                <h1>{{$product->name}}</h1>
                <h3 class="product_text__head">
                    Общие характеристики
                </h3>
                <div class="product_text__spec">
                    <span>Мощность Вт </span> <span>{{$product->power}}</span>
                </div>
                <div class="product_text__spec">
                    <span>Кол-во светодиодов</span>  <span>{{$product->leds_number}}</span>
                </div class="product_text__spec">
                <div class="product_text__spec">
                    <span>Способ крепления</span> <span>{{$product->mounting_method}}</span>
                </div>
                <h3 class="product_text__head">
                    Световые характеристики
                </h3>
                <div class="product_text__spec">
                    <span>Пульсация</span> <span>{{$product->ripple}}</span>
                </div class="product_text__spec">
                <div class="product_text__spec">
                    <span>Цветовая температура</span> <span>{{$product->color_temperature}}</span>
                </div>
                <div class="product_text__spec">
                    <span>Световой поток</span> <span>{{$product->light_flow}}</span>
                </div class="product_text__spec">
                <div class="product_text__spec">
                    <span title="Количественная мера способности источника света верно отображать цвета освещаемых объектов в сравнении с идеальным или естественным. У качественного света для жилых помещений, Ra должен быть не менее 70-80. Наивысшее значение, Ra=100, соответствует идеальной естественной цветопередаче при солнечном свете.">Индекс цветопередачи<sup>?</sup></span> <span>{{$product->color_rendering_index}}</span>
                </div>
                <h3 class="product_text__head">
                    Эксплуатациионные характеристики
                </h3>
                <div class="product_text__spec">
                    <span title="Степень защиты от пыли и влаги">Степень защиты светильника<sup>?</sup></span> <span>{{$product->protection_class}}</span>
                </div>

                <div class="product_text__spec">
                    <span>Температура эксплуатации</span> <span>{{$product->operating_temperature}}</span>
                </div>
                <div class="product_text__spec">
                    <span>Напряжение питания</span>  <span>{{$product->suppy_voltage}}</span>
                </div>
                <div class="product_text__spec">
                    <span>Гарантия</span> <span>{{$product->guarantee}}</span>
                </div>
                <div class="product_text__spec">
                    Габаритные размеры:
                </div>
                <div class="product_text__spec">
                    <span>Длина</span> <span>{{$product->length}} мм</span>
                </div>
                <div class="product_text__spec">
                    <span>Ширина</span> <span>{{$product->width}} мм</span>
                </div>
                <div class="product_text__spec">
                    <span>Высота</span>   <span>{{$product->height}} мм</span>
                </div>

            </div>
        </div>
        <div class="desc_block desc_contacts">
            <div class="wrap contact_cols">
                <div class="contact_col ">
                    <div class="contact_title title">Таганрог</div>
                    <div class="contact_text">Контактные данные нашего основного офиса, расположенного в Таганроге.</div>
                    <div class="contact_tel contact_elem"><i class="fas fa-phone"></i>
                        <div class="contact_elem_text">+1(234)567-89-89</div>
                    </div>
                    <div class="contact_mail contact_elem"><i class="far fa-envelope"></i>
                        <div class="contact_elem_text">ooo-skg@example.com</div>
                    </div>
                </div>
                <div class="contact_col">
                    <div class="contact_title title">Ростов-на-Дону</div>
                    <div class="contact_text">Контактные данные представительства нашей организации в Ростове.</div>
                    <div class="contact_tel contact_elem"><i class="fas fa-phone"></i>
                        <div class="contact_elem_text">+1(234)567-89-89</div>
                    </div>
                    <div class="contact_mail contact_elem"><i class="far fa-envelope"></i>
                        <div class="contact_elem_text">ooo-skg@example.com</div>
                    </div>
                </div>

            </div>

        </div>
        <div class="desc_block desc_form">
            <div class="contact-form" style="margin-top: 0">
                <form class="contact_form" action="http://svet-skg.ru/mail" method="post" style="width: 100%; max-width: 100%">
                    <div style="width: 100%;">
                        <h2>Понравился светильник? Напишите нам!</h2>
                    </div>
                    <div class="input-wrap " style="flex-basis: 100%;">
                        <div class="input-ico"><i class="fas fa-user"></i></div>
                        <input class="input_name" name="name" type="text" placeholder="Введите свое имя" required>
                    </div>
                    <div class="input-wrap">
                        <div class="input-ico"><i class="fas fa-envelope"></i></div>
                        <input class="input_mail" name="mail" type="email" placeholder="Введите свой email" autocomplete="email" required>
                    </div>
                    <div class="input-wrap">
                        <div class="input-ico"><i class="fas fa-phone"></i></div>
                        <input class="input_tel" name="tel" type="tel" placeholder="Введите свой номер" required>
                    </div>
                    <div class="input-wrap  "  style="flex-basis: 100%">
                        <textarea class="input_message" name="message"  placeholder="Введите свой вопрос"></textarea>
                    </div>
                    <!--  <div class="g-recaptcha" data-sitekey="6LcKrGgUAAAAABir_0afQrZSiz2_XO5RpSx461FP" style="margin-top: 20px; margin-left: 5px;"></div>-->
                    <button class="btn btn-active " type="submit" >Отправить</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
