<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PagesController extends Controller
{
    public function about() {

        return view('pages.about');

    }

    public function index() {

        $posts = Post::all();

        return view('pages.index', ['posts' => $posts]);

    }
}
