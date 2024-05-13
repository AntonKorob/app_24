@extends('layout')

@section('title')
Отзывы
@endsection

@section('main_content')
<div class="container">
    <div>
        <h1 class="ms-4">Форма добавления отзыва</h1>
    </div>

    @if($errors->any())

    <!-- Вывод ошибок на экран -->
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>

    @endif

    <div>
        <form action="/review/check" method="post" class="form-control w-50 p-3 m-3">
            @csrf
            <!-- @method('put') -->
            <input type="email" name="email" id="email" class="form-control m-2" placeholder="Введите email" required>

            <input type="title" name="title" id="title" class="form-control m-2" placeholder="Введите тему" required>

            <textarea rows="10" type="message" name="text" id="subject" class="form-control m-2"
                placeholder="Введите отзыв"></textarea>
            <br>
            <button type="submit" class="btn btn-success m-2 p-2">Отправить</button>
        </form>

    </div>
    <div style="height: 400px;"></div>

</div>

@endsection