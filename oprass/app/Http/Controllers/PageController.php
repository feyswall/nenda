<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return view('/pages/index');
    }

    public function about(){
        return view('/pages/about');
    }

    public function contact(){
        return view('/pages/contact');
    }
    public function welcome(){
        $latest = Post::select('*')->orderBy('id', 'desc')->limit(1)->get();
        $posts = Post::all();
        $six = Post::select('*')->orderBy('id', 'desc')->limit(6)->get();
        return view('welcome')
            ->withSix($six)
            ->withPosts($posts)
            ->withLatest($latest);
    }
}
