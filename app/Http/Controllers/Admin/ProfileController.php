<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Interfaces\ProfileInterface;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    private $profile;
    public function __construct(ProfileInterface $profile){
        $this->profile = $profile;
    }

    public function index()
    {
        return view('admin.profile.index', [
            'profile' => $this->profile->getProfile(),
        ]);
    }

    public function update(Request $request)
    {
        $this->profile->update($request->all());
        return redirect()->route('admin.profile.index')->with('success', 'Profile updated successfully');
    }

}
