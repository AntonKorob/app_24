<?php
if(!isset($_POST['email'])){
    echo 'Set name ';
}else{
    DB::table('contacts')->insert([
        'email' => $_POST['email'],
        'title' => $_POST['title'], 
        'text' => $_POST['text']
     ]);
    
}
header('Location: /review'); 
exit;
    