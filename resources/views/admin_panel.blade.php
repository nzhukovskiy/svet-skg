@extends("layouts.admin_layout")
@section("content")
    <header>
        <nav class="nav" style="background: white !important">
            <div class="wrap">
                <div class="logo" style="color: #515562 !important;display: flex;"><div><a style="color: #787878;" href='{{url("products")}}'><i class="fa fa-arrow-left" style="font-size:16px; padding-right: 25px;" ></i></a>	</div>	<span>SVE</span>T-SKG</div>
                <div class="toggle">
                    <div class="toggle_nav">
                        <div></div>
                        <div></div>
                        <div></div>
                    </div>
                </div>
                <div class="links" style="color: #2c3e50 !important">
                    <div class="links_wrap">
                        <hr><a class="text-decoration-none link" href="{{route("home")}}" style="color: #515562;" >Главная</a>
                        <a class="text-decoration-none link" href="{{route("about_us")}}" style="color: #515562;">О нас</a>
                        <a class="text-decoration-none link" href="{{url("products")}}" style="color: #515562;">Продукция</a>
                        <a class="text-decoration-none link" href="{{route("home")}}#work" style="color: #515562;">Работы</a>
                        <a class="text-decoration-none link" href="{{route("home")}}#service" style="color: #515562;">Возможности</a>
                        <a class="text-decoration-none link" href="{{route("home")}}#contact" style="color: #515562;">Связаться</a>
                        <a class="text-decoration-none link" href="{{route("logout")}}" style="color: #515562;"><i class="fa fa-sign-out-alt" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <div class="wrap" style="margin-top: 60px">
        <h2>Товары в системе</h2>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Название</th>
                <th scope="col">Описание</th>
                <th scope="col" style="font-size: 30px;"><a class="text-decoration-none" href="{{route("products.create")}}">+</a></th>
            </tr>
            </thead>
            <tbody>
            @foreach($products as $product)
                <tr>
                    <th scope="row">{{ $loop->index + 1}}</th>
                    <td><a href="{{route("products.show", ["product" => $product->id])}}">{{$product->name}}</a></td>
                    <td>{{$product->description}}</td>
                    <td style="display: flex;">
                        <a style="margin-right: 10px;" href="{{route("products.edit", ["product" => $product->id])}}">Редактировать</a>
                        <form method="post" action="{{route("products.destroy", ["product" => $product->id])}}">
                            @csrf
                            {{method_field('DELETE')}}
                            <button style="border: none; background-color: white; text-decoration: underline; color: #0d6efd" type="submit" >Удалить</button>
                        </form>

                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <h2>Ответы пользователей</h2>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Имя пользоватееля</th>
                <th scope="col">Адрес электронной почты</th>
                <th scope="col">Номер телефона</th>
                <th scope="col">Тип закупки</th>
                <th scope="col">Подписка на рассылку</th>
                <th scope="col">Оценка</th>
            </tr>
            </thead>
            <tbody>
            @foreach($replies as $reply)
                <tr>
                    <th scope="row">{{ $loop->index + 1}}</th>
                    <td>{{$reply->name}}</td>
                    <td>{{$reply->email}}</td>
                    <td>{{$reply->phone}}</td>
                    <td>{{$reply->type == 0 ? "Оптовая" : "Розничная"}}</td>
                    <td>{{$reply->subscription ? "Да" : "Нет"}}</td>
                    <td>{{$reply->mark}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
