<?php

namespace App\Http\Controllers\Admin;
//↑どこにあるかを示す。同じ場所に同じclass名のものは作れない。


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewsController extends Controller
{
      public function add()
  {
      return view('admin.news.create');
  }

    //
}
