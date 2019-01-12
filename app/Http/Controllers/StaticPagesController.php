<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPagesController extends Controller
{
    // 首页展示页面
    public function home()
    {
        return view('layouts.default');
    }
}
