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
        <form class="contact_form" enctype="multipart/form-data" method="post" action="{{$product->id ? route("products.update", ["product" => $product->id]) : route("products.store")}}">
            @csrf
            {{$product->id ? method_field('PUT') : method_field('POST')}}
            <div style="width: 100%;">
                <h2 class="">Добавление нового товара</h2>
            </div>
            <div class="input-wrap  "  style="flex-basis: 100%;">
                <div class="input-ico"><i class="fas fa-user"></i></div>
                <input class="input_name" id="name" name="name" type="text" placeholder="Название товара" value="{{$product->name}}" required>
            </div>
            <div class="input-wrap  "  style="flex-basis: 100%">
                <textarea class="input_message" id="description" name="description"  placeholder="Описание товара">{{$product->description}}</textarea>
            </div>
            <div class="input-wrap " style="flex-basis: 100%;">
                <div class="input-ico"><i class="fas fa-envelope"></i></div>
                <input class="input_mail" name="power" id="power" type="number" value="{{$product->power}}" placeholder="Мощность" required>
            </div>
            <div class="input-wrap " style="flex-basis: 100%;">
                <div class="input-ico"><i class="fas fa-envelope"></i></div>
                <input class="input_mail" name="leds_number" id="leds_number" type="number" value="{{$product->leds_number}}" placeholder="Количество светодиодов" required>
            </div>
            <div class="input-wrap " style="flex-basis: 100%;">
                <div class="input-ico"><i class="fas fa-envelope"></i></div>
                <input class="input_mail" name="mounting_method" id="mounting_method" type="text" value="{{$product->mounting_method}}" placeholder="Способ крепления" required>
            </div>
            <div class="input-wrap " style="flex-basis: 100%;">
                <div class="input-ico"><i class="fas fa-envelope"></i></div>
                <input class="input_mail" name="ripple" id="ripple" type="text" placeholder="Пульсация" value="{{$product->ripple}}" required>
            </div>
            <div class="input-wrap " style="flex-basis: 100%;">
                <div class="input-ico"><i class="fas fa-envelope"></i></div>
                <input class="input_mail" name="color_temperature" id="color_temperature" type="text" value="{{$product->color_temperature}}" placeholder="Цветовая температура" required>
            </div>
            <div class="input-wrap " style="flex-basis: 100%;">
                <div class="input-ico"><i class="fas fa-envelope"></i></div>
                <input class="input_mail" name="light_flow" id="light_flow" type="number" value="{{$product->light_flow}}" placeholder="Световой поток" required>
            </div>
            <div class="input-wrap " style="flex-basis: 100%;">
                <div class="input-ico"><i class="fas fa-envelope"></i></div>
                <input class="input_mail" name="color_rendering_index" id="color_rendering_index" type="text" value="{{$product->color_rendering_index}}" placeholder="Индекс цветопередачи" required>
            </div>
            <div class="input-wrap " style="flex-basis: 100%;">
                <div class="input-ico"><i class="fas fa-envelope"></i></div>
                <input class="input_mail" name="protection_class" id="protection_class" type="text" value="{{$product->protection_class}}" placeholder="Класс защиты" required>
            </div>
            <div class="input-wrap " style="flex-basis: 100%;">
                <div class="input-ico"><i class="fas fa-envelope"></i></div>
                <input class="input_mail" name="operating_temperature" id="operating_temperature" type="text" value="{{$product->operating_temperature}}" placeholder="Температура" required>
            </div>
            <div class="input-wrap " style="flex-basis: 100%;">
                <div class="input-ico"><i class="fas fa-envelope"></i></div>
                <input class="input_mail" name="supply_voltage" id="supply_voltage" type="text" value="{{$product->supply_voltage}}" placeholder="Напряжение питания" required>
            </div>
            <div class="input-wrap " style="flex-basis: 100%;">
                <div class="input-ico"><i class="fas fa-envelope"></i></div>
                <input class="input_mail" name="guarantee" id="guarantee" type="number" value="{{$product->guarantee}}" placeholder="Гарантия, мес." required>
            </div>
            <div class="input-wrap " style="flex-basis: 100%;">
                <div class="input-ico"><i class="fas fa-envelope"></i></div>
                <input class="input_mail" name="length" id="length" type="number" value="{{$product->length}}" placeholder="Длина" required>
            </div>
            <div class="input-wrap " style="flex-basis: 100%;">
                <div class="input-ico"><i class="fas fa-envelope"></i></div>
                <input class="input_mail" name="height" id="height" type="number" value="{{$product->height}}" placeholder="Высота" required>
            </div>
            <div class="input-wrap " style="flex-basis: 100%;">
                <div class="input-ico"><i class="fas fa-envelope"></i></div>
                <input class="input_mail" name="width" id="width" type="number" value="{{$product->width}}" placeholder="Ширина" required>
            </div>
            <div class="input-wrap " style="flex-basis: 100%;">
                <input type="file" name="pictures[]" multiple>
            </div>
            <button class="btn btn-active " type="submit" >Отправить</button>
        </form>
    </div>

@endsection
