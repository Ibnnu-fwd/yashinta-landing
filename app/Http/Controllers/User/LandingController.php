<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Interfaces\ProfileInterface;
use App\Interfaces\AspirationInterface;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    private $profile;
    private $aspiration;

    public function __construct(ProfileInterface $profile, AspirationInterface $aspiration)
    {
        $this->profile = $profile;
        $this->aspiration = $aspiration;
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

    public function storeAspiration(Request $request)
    {
        $request->validate([
            'name'     => ['required'],
            'city'   => ['required'],
            'phone_number'   => ['nullable'],
            'message' => ['required']
        ]);

        try {
            $this->aspiration->store($request->all());
            return redirect()->route('user.landing.index')->with('success', 'Berhasil mengirim aspirasi');
        } catch (\Throwable $th) {
            dd($th->getMessage());
            return redirect()->route('user.landing.index')->with('error', 'Gagal mengirim aspirasi');
        }
    }
}
