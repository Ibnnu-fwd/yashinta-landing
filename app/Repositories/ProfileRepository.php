<?php

namespace App\Repositories;

use App\Models\Profile;
use App\Interfaces\ProfileInterface;
use Illuminate\Support\Facades\Storage;

class ProfileRepository implements ProfileInterface
{
    private $profile;

    public function __construct(Profile $profile){
        $this->profile = $profile;
    }

    public function getProfile(){
        $result = $this->profile->first();
        if ($result == null) {
            $result = $this->profile->create([
                'name' => 'Profile Name',
                'title_landing_page' => 'Landing Page Title',
                'title_profile_page' => 'Profile Page Title',
                'description_landing_page' => 'Description Landing Page',
                'description_profile_page' => 'Description Profile Page',
                'photo_landing_page' => null,
                'photo_profile_page' => null,
                'photo_faq_page' => null,
                'photo_socmed' => null,
                'photo_educations' => null,
                'photo_experiences' => null,
                'photo_organizations' => null,
                'photo_social_activities' => null,
            ]);
        }

        return $result;
    }

    public function update($data){
        $profile = $this->profile->first();
        
        if(isset($data['photo_landing_page'])){
            $filename = uniqid() . '.' . $data['photo_landing_page']->extension();
            $data['photo_landing_page']->storeAs('public/landing', $filename);
            $data['photo_landing_page'] = $filename;

            if ($profile->photo_landing_page != null) {
                Storage::delete('public/landing/' . $profile->photo_landing_page);
            }
        }

        if(isset($data['photo_profile_page'])){
            $filename = uniqid() . '.' . $data['photo_profile_page']->extension();
            $data['photo_profile_page']->storeAs('public/profile', $filename);
            $data['photo_profile_page'] = $filename;

            if ($profile->photo_profile_page != null) {
                Storage::delete('public/profile/' . $profile->photo_profile_page);
            }
        }

        if(isset($data['photo_faq_page'])){
            $filename = uniqid() . '.' . $data['photo_faq_page']->extension();
            $data['photo_faq_page']->storeAs('public/faq', $filename);
            $data['photo_faq_page'] = $filename;

            if ($profile->photo_faq_page != null) {
                Storage::delete('public/faq/' . $profile->photo_faq_page);
            }
        }

        if(isset($data['photo_socmed'])){
            $filename = uniqid() . '.' . $data['photo_socmed']->extension();
            $data['photo_socmed']->storeAs('public/socmed', $filename);
            $data['photo_socmed'] = $filename;

            if ($profile->photo_socmed != null) {
                Storage::delete('public/socmed/' . $profile->photo_socmed);
            }
        }

        if(isset($data['photo_educations'])){
            $filename = uniqid() . '.' . $data['photo_educations']->extension();
            $data['photo_educations']->storeAs('public/educations', $filename);
            $data['photo_educations'] = $filename;

            if ($profile->photo_educations != null) {
                Storage::delete('public/educations/' . $profile->photo_educations);
            }
        }

        if(isset($data['photo_experiences'])){
            $filename = uniqid() . '.' . $data['photo_experiences']->extension();
            $data['photo_experiences']->storeAs('public/experiences', $filename);
            $data['photo_experiences'] = $filename;

            if ($profile->photo_experiences != null) {
                Storage::delete('public/experiences/' . $profile->photo_experiences);
            }
        }

        if(isset($data['photo_organizations'])){
            $filename = uniqid() . '.' . $data['photo_organizations']->extension();
            $data['photo_organizations']->storeAs('public/organizations', $filename);
            $data['photo_organizations'] = $filename;

            if ($profile->photo_organizations != null) {
                Storage::delete('public/organizations/' . $profile->photo_organizations);
            }
        }

        if(isset($data['photo_social_activities'])){
            $filename = uniqid() . '.' . $data['photo_social_activities']->extension();
            $data['photo_social_activities']->storeAs('public/social_activities', $filename);
            $data['photo_social_activities'] = $filename;

            if ($profile->photo_social_activities != null) {
                Storage::delete('public/social_activities/' . $profile->photo_social_activities);
            }
        }

        $profile->update($data);
        return $profile;
    }
}