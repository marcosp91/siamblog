<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShowPostsController extends Controller
{
  	public function store() {
       
        return view('posts.exames-essenciais-para-dieta-exercícios-físicos');

    }

    public function index() {
       
        return view('posts.o-que-é-efeito-sanfona');

    }
}
