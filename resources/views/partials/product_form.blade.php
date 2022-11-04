<div class="wrap contact-form">
    <form class="contact_form" method="post" action="{{url("products")}}">
        @csrf
        <div style="width: 100%;">
            <h2 class="">Добавление нового товара</h2>
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
        <button class="btn btn-active " type="submit" >Отправить</button>
    </form>
</div>
