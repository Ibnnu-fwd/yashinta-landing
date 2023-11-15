<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        return view('user.landing.index');
    }

    public function profile()
    {
        return view('user.landing.profile');
    }

    public function news()
    {
        return view('user.landing.news');
    }

    public function newsDetail($slug)
    {
        return view('user.landing.news_detail');
    }

    public function faq()
    {
        return view('user.landing.faq');
    }

    public function gallery()
    {
        return view('user.landing.gallery');
    }
}
