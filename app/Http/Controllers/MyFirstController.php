<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class MyFirstController extends Controller
{
    public function getPosts(){
        return view('posts') ;  
    }

    public function index(){
        // $post = Post::find(2);
        // dd($post);
        // echo $post->title;
        // dd($post->content);
        // dd($post->like);
        
        // $posts = Post::all();
        // foreach(Post::all() as $val){
            //     echo $val->title . "<br>";
            // }
            // dd($post);
            
            foreach(Post::all() as $val){
                echo $val->content . "<br>";
            }
            
    }
    
  //2 =====================================

    public function create()
    {
        $postsArr = [
            [
                'title' => '6 Post',
                'content' => 'Метод updateожидает массив пар столбцов и значений, представляющих столбцы, которые следует обновить. Метод updateвозвращает количество затронутых строк.',
                'like' => '11',
                'is_publshed' => '0'
            ],
            [
                'title' => '7 Post',
                'content' => 'Eloquent предоставляет методы isDirty, isCleanи wasChangedдля проверки внутреннего состояния вашей модели и определения того, как изменились ее атрибуты с момента первоначального извлечения модели.',
                'like' => '110',
                'is_publshed' => '0'
            ]
            
            ];
            // Post::create([
            //     'title' => '6 Post',
            //         'content' => 'Метод updateожидает массив пар столбцов и значений, представляющих столбцы, которые следует обновить. Метод updateвозвращает количество затронутых строк.',
            //         'like' => '11',
            //         'is_publshed' => '0'
            // ]);
            
        foreach($postsArr as $item){
            Post::create($item);            
        }
        dd('new record created');
    }
    
    //update function

    public function update(){
        $post = Post::find(30);
        
        // dd($post->title);
        
        $post->update([
            'title' => '6 Post - updated',
            'content' => 'Если вам просто нужно получить одну строку из таблицы базы данных, вы можете использовать метод DBфасада first. Этот метод вернет один stdClassобъект:',
            'like' => '1122',
            'is_publshed' => '1'
        ]);
        dd('Data is update');
    }

    // delete function
    
    public function delete(){
        $post = Post::where("id", "<=", "370")->orderBy("id", "DESC")->take(1);
        $post->delete();
        return redirect('/about');
        }
}