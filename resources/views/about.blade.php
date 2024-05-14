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
    // $posts = DB::select('SELECT * FROM posts ORDER BY DESC'); 
    
    //Перебор в цикле всех статей и названий из БД
    foreach($news as $val):?>
    <div class="border rounded p-2 m-4">
        <h3><?= $val->title;?></h3>
        <br><?=$val->text;?><br>
        <p>Автор : <?php $val->email;?></p>

        <!-- //form has delete one-->
        <div class="delete_main d-flex p-2 m-2">
            <form action="/posts/delete" method="get" class="p-2 mp-2">
                <button class="btn btn-danger opacity-50 " type="submit">Delete </button>
            </form>

            <!-- //form has delete_all -->

            <form action="/delete_all" method="get" class="p-2 mp-2">
                <button class="btn btn-danger opacity-50" type="submit">Delete all</button>
            </form>
        </div>
    </div>

    <?php endforeach;?>

</div>

@endsection