<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Interfaces\ProfileInterface;
use App\Interfaces\AspirationInterface;
use App\Interfaces\CommitmentInterface;
use App\Interfaces\EducationsInterface;
use App\Interfaces\ExperiencesInterface;
use App\Interfaces\FaqInterface;
use App\Interfaces\GalleryInterface;
use App\Interfaces\NewsInterface;
use App\Interfaces\OrganizationsInterface;
use App\Interfaces\SocialActivityInterface;
use App\Interfaces\SocialMediaInterface;
use App\Interfaces\TestimonialInterface;
use App\Interfaces\ProgramInterface;
use App\Interfaces\ProfileSectionInterface;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    private $profile;
    private $aspiration;
    private $commitment;
    private $gallery;
    private $news;
    private $education;
    private $experience;
    private $organization;
    private $socialActivity;
    private $faq;
    private $testimonial;
    private $program;
    private $profileSection;

    public function __construct(ProfileInterface $profile, AspirationInterface $aspiration, CommitmentInterface $commitment, GalleryInterface $gallery, NewsInterface $news, EducationsInterface $education, ExperiencesInterface $experience, OrganizationsInterface $organization, SocialActivityInterface $socialActivity, FaqInterface $faq, TestimonialInterface $testimonial, ProgramInterface $program, ProfileSectionInterface $profileSection)
    {
        $this->profile        = $profile;
        $this->aspiration     = $aspiration;
        $this->commitment     = $commitment;
        $this->gallery        = $gallery;
        $this->news           = $news;
        $this->education      = $education;
        $this->experience     = $experience;
        $this->organization   = $organization;
        $this->socialActivity = $socialActivity;
        $this->faq            = $faq;
        $this->testimonial = $testimonial;
        $this->program = $program;
        $this->profileSection = $profileSection;
    }

    public function index()
    {
        return view('user.landing.index', [
            'profile'     => $this->profile->getProfile(),
            'commitments' => $this->commitment->getAll(),
            'galleries'   => $this->gallery->getAll(),
            'news'        => $this->news->getAll(),
            'testimonials' => $this->testimonial->getAll(),
        ]);
    }

    public function profile()
    {
        return view('user.landing.profile', [
            'data'          => $this->profile->getProfile(),
            'educations'    => $this->education->getAll(),
            'profile'       => $this->profile->getProfile(),
            'experiences'   => $this->experience->getAll(),
            'organizations' => $this->organization->getAll(),
            'socials'       => $this->socialActivity->getAll(),
            'profileSections' => $this->profileSection->getAll()
        ]);
    }

    public function news()
    {
        return view('user.landing.news', [
            'news' => $this->news->getAll()
        ]);
    }

    public function newsDetail($slug)
    {
        return view('user.landing.news_detail', [
            'data'     => $this->news->getBySlug($slug),
            'relateds' => $this->news->getAll()->where('slug', '!=', $slug)
        ]);
    }

    public function faq()
    {
        return view('user.landing.faq', [
            'faqs'    => $this->faq->getAll(),
            'profile' => $this->profile->getProfile()
        ]);
    }

    public function testimonial()
    {
        return view('user.landing.testimonial', [
            'testimonials' => $this->testimonial->getAll()
        ]);
    }

    public function storeAspiration(Request $request)
    {
        $request->validate([
            'name'         => ['required'],
            'city'         => ['required'],
            'phone_number' => ['nullable'],
            'message'      => ['required']
        ]);

        try {
            $this->aspiration->store($request->all());
            return redirect()->route('user.landing.index')->with('success', 'Berhasil mengirim aspirasi');
        } catch (\Throwable $th) {
            dd($th->getMessage());
            return redirect()->route('user.landing.index')->with('error', 'Gagal mengirim aspirasi');
        }
    }

    public function commitment()
    {
        return view('user.landing.commitment', [
            'commitments' => $this->commitment->getAll(),
            'programs' => $this->program->getAll()
        ]);
    }

    public function commitmentDetail($slug)
    {
        return view('user.landing.commitment_detail', [
            'data' => $this->commitment->getBySlug($slug)
        ]);
    }
}
