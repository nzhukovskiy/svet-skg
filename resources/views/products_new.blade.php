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
    <div class="wrap contact-form">
        <form class="contact_form" method="post" action="{{url("products")}}">
            @csrf
            <div style="width: 100%;">
                <h2 class="anim_type  anim_type_input">Добавление нового товара</h2>
            </div>
            <div class="input-wrap  "  style="flex-basis: 100%;">
                <div class="input-ico"><i class="fas fa-user"></i></div>
                <input class="input_name" id="name" name="name" type="text" placeholder="Название товара" required>
            </div>
            <div class="input-wrap  "  style="flex-basis: 100%">
                <textarea class="input_message" id="description" name="description"  placeholder="Описание товара"></textarea>
            </div>
            <div class="input-wrap " style="flex-basis: 100%;">
                <div class="input-ico"><i class="fas fa-envelope"></i></div>
                <input class="input_mail" name="power" id="power" type="number" placeholder="Мощность" required>
            </div>
            <div class="input-wrap " style="flex-basis: 100%;">
                <div class="input-ico"><i class="fas fa-envelope"></i></div>
                <input class="input_mail" name="leds_number" id="leds_number" type="number" placeholder="Количество светодиодов" required>
            </div>
            <div class="input-wrap " style="flex-basis: 100%;">
                <div class="input-ico"><i class="fas fa-envelope"></i></div>
                <input class="input_mail" name="mounting_method" id="mounting_method" type="text" placeholder="Способ крепления" required>
            </div>
            <div class="input-wrap " style="flex-basis: 100%;">
                <div class="input-ico"><i class="fas fa-envelope"></i></div>
                <input class="input_mail" name="ripple" id="ripple" type="text" placeholder="Пульсация" required>
            </div>
            <div class="input-wrap " style="flex-basis: 100%;">
                <div class="input-ico"><i class="fas fa-envelope"></i></div>
                <input class="input_mail" name="color_temperature" id="color_temperature" type="text" placeholder="Цветовая температура" required>
            </div>
            <div class="input-wrap " style="flex-basis: 100%;">
                <div class="input-ico"><i class="fas fa-envelope"></i></div>
                <input class="input_mail" name="light_flow" id="light_flow" type="number" placeholder="Световой поток" required>
            </div>
            <div class="input-wrap " style="flex-basis: 100%;">
                <div class="input-ico"><i class="fas fa-envelope"></i></div>
                <input class="input_mail" name="color_rendering_index" id="color_rendering_index" type="text" placeholder="Индекс цветопередачи" required>
            </div>
            <div class="input-wrap " style="flex-basis: 100%;">
                <div class="input-ico"><i class="fas fa-envelope"></i></div>
                <input class="input_mail" name="protection_class" id="protection_class" type="text" placeholder="Класс защиты" required>
            </div>
            <div class="input-wrap " style="flex-basis: 100%;">
                <div class="input-ico"><i class="fas fa-envelope"></i></div>
                <input class="input_mail" name="operating_temperature" id="operating_temperature" type="text" placeholder="Температура" required>
            </div>
            <div class="input-wrap " style="flex-basis: 100%;">
                <div class="input-ico"><i class="fas fa-envelope"></i></div>
                <input class="input_mail" name="supply_voltage" id="supply_voltage" type="text" placeholder="Напряжение питания" required>
            </div>
            <div class="input-wrap " style="flex-basis: 100%;">
                <div class="input-ico"><i class="fas fa-envelope"></i></div>
                <input class="input_mail" name="guarantee" id="guarantee" type="number" placeholder="Гарантия, мес." required>
            </div>
            <div class="input-wrap " style="flex-basis: 100%;">
                <div class="input-ico"><i class="fas fa-envelope"></i></div>
                <input class="input_mail" name="length" id="length" type="number" placeholder="Длина" required>
            </div>
            <div class="input-wrap " style="flex-basis: 100%;">
                <div class="input-ico"><i class="fas fa-envelope"></i></div>
                <input class="input_mail" name="height" id="height" type="number" placeholder="Высота" required>
            </div>
            <div class="input-wrap " style="flex-basis: 100%;">
                <div class="input-ico"><i class="fas fa-envelope"></i></div>
                <input class="input_mail" name="width" id="width" type="number" placeholder="Ширина" required>
            </div>
            <!--<div class="input-wrap  " >
                <div class="input-ico"><i class="fas fa-phone"></i></div>
                <input class="input_tel" name="tel" type="tel" placeholder="Введите свой номер" required>
            </div>
            <div class="input-wrap  "  style="flex-basis: 100%">
                <textarea class="input_message" name="message"  placeholder="Введите свой вопрос"></textarea>
            </div>
            <br>
            <label for="type-select">Выберите тип закупки</label>
            <div class="input-wrap  select-wrapper"  style="flex-basis: 100%">
                <select class="nice-select" name="type-select">
                    <option>Оптовые закупки</option>
                    <option>Розничные закупки</option>
                </select>
            </div>


            <div class="switch-group">
                <label class="switch">
                    <input type="checkbox">
                    <span class="slider round"></span>
                </label>
                <label>Подписаться на рассылку</label>
            </div>

            <div class="radio-group">
                <p>Оставьте свою оценку</p>
                <div class="radio-wrap" >
                    <div class="star-group">
                        <input type="radio" id="first-star" class="radio-button" name="star">
                        <label for="first-star">Одна звезда</label>
                    </div>
                    <div class="star-group">
                        <input type="radio" id="second-star" class="radio-button" name="star">
                        <label for="second-star">Две звезды</label>
                    </div>
                    <div class="star-group">
                        <input type="radio" id="third-star" class="radio-button" name="star">
                        <label for="third-star">Три звезды</label>
                    </div>
                    <div class="star-group">
                        <input type="radio" id="fourth-star" class="radio-button" name="star">
                        <label for="fourth-star">Четыре звезды</label>
                    </div>
                    <div class="star-group">
                        <input type="radio" id="fifth-star" class="radio-button" name="star">
                        <label for="fifth-star">Пять звезд</label>
                    </div>
                </div>
            </div>



            <div class="checkbox-group">
                <div class="checkbox-wrap" >
                    <input type="checkbox" class="checkbox-input" name="captcha">
                </div>
                <label class="captcha-label" for="captcha">Я не робот</label>
            </div>-->

            <!-- <div class="g-recaptcha" data-sitekey="6LcKrGgUAAAAABir_0afQrZSiz2_XO5RpSx461FP" style="margin-top: 20px; margin-left: 5px;"></div>-->
            <button class="btn btn-active " type="submit" >Отправить</button>
        </form>
    </div>
@endsection
