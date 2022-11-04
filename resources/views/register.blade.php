@extends("layouts.layout")
@section("content")
    <div class="wrap contact-form">
        <form class="contact_form" method="post" action="{{route("register")}}">
            @csrf
            <div style="width: 100%;">
                <h2>Регистрация нового пользователя</h2>
            </div>
            <div class="input-wrap  "  style="flex-basis: 100%;">
                <div class="input-ico"><i class="fas fa-user"></i></div>
                <input class="input_name" id="name" name="name" type="text" placeholder="Имя пользователя" required>
            </div>
            <div class="input-wrap  "  style="flex-basis: 100%;">
                <div class="input-ico"><i class="fas fa-user"></i></div>
                <input class="input_name" id="name" name="email" type="email" placeholder="Адрес электронной почты" required>
            </div>
            <div class="input-wrap " style="flex-basis: 100%;">
                <div class="input-ico"><i class="fas fa-envelope"></i></div>
                <input class="input_mail" name="password" id="leds_number" type="password" placeholder="Пароль" required>
            </div>

            <button class="btn btn-active " type="submit" >Зарегистрироваться</button>
        </form>
    </div>
@endsection
