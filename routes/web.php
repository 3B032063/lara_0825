<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    //return view('welcome');
    //$post = new Post();
    //$post -> title = 'test title';
    //$post -> content = 'test content';
    //$post -> save();

    /*
    Post::create([
        'title' =>
        'content' =>
    ])
    */

    /*
    $post = Post::find(1);
    echo '標題: '.$post->title.'<br>';
    echo '內容: '.$post->content.'<br>';
    dd($post);
    */

    /*
    $posts = Post::all(); //取出所有貼文
    //使用迴圈將所有貼文($posts)顯示出來
    foreach($posts as $post){
        echo '編號: '.$post->id.'<br>';
        echo '標題: '.$post->title.'<br>';
        echo '內容: '.$post->content.'<br>';
        echo '張貼時間: '.$post->created_at.'<br>';
    } //迴圈每轉一次，由$posts依序取出一篇貼文$post
    dd($post);
    */

    /*
    $posts = Post::where('id', '<', 10)->orderBy('id', 'DESC')->get();
    dd($posts);
    */

    /*
    $post = Post::find(1);
    $post->update([
        'title' => 'updated title',
        'content' => 'updated content'
    ]);
    */

    /*
    $post = Post::find(1);
    $post -> title = 'saved title';
    $post -> content = 'saved content';
    $post -> save();
    */

    /*
    $post = Post::find(1);
    $post -> delete();
    */

    //Post::destroy(2);
    Post::destroy(3,5,7);
});
