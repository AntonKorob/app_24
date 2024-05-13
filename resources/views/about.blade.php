@extends('layout')

@section('title')
Страница про нас
@endsection

@section('main_content')
<div class="pricing-header p-3 pb-md-4 mx-auto text-center text-white">
    <h1 class="display-4 fw-normal text-body-emphasis">About us...</h1>
    <p class="fs-5 text-white">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Provident maxime vel nobis
        aspernatur quia quidem, eum eaque! Nostrum praesentium quod voluptas aliquam eum amet, fuga consectetur. Sit
        molestiae cumque rerum.</p>

    <?php
    // Запрос данных в БД и вывод их на странице. Выборка по id
    $news = DB::select('SELECT * FROM contacts');
    
    //Перебор в цикле всех статей и названий из БД
    foreach($news as $val):?>
    <div class="border rounded p-2 m-4">
        <h3><?= $val->title;?></h3>
        <br><?=$val->text;?><br>
        <p>Автор : <?php $val->email;?></p>

        <!-- //form delete_all -->
        <form action="/delete_all" method="get">
            <button class="btn btn-danger opacity-50" type="submit">Delete</button>
        </form>
    </div>

    <?php endforeach;?>

</div>

@endsection