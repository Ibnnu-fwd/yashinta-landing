<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Interfaces\ProfileInterface;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    private $profile;

    public function __construct(ProfileInterface $profile)
    {
        $this->profile = $profile;
    }

    public function index()
    {
        return view('user.landing.index', [
            'profile' => $this->profile->getProfile(),
        ]);
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
