<?php

namespace App\Repositories;
use App\Models\CitizenContact;
use App\Interfaces\CitizenContactInterface;
use App\Services\RecaptchaService;
use Illuminate\Support\Facades\Storage;

class CitizenContactRepository implements CitizenContactInterface
{
    private $citizenContact;
    protected $recaptchaService;

    public function __construct(CitizenContact $citizenContact, RecaptchaService $recaptchaService)
    {
        $this->citizenContact = $citizenContact;
        $this->recaptchaService = $recaptchaService;
    }

    public function getAll()
    {
        return $this->citizenContact->orderBy('created_at', 'desc')->get();
    }

    public function getById($id)
    {
        return $this->citizenContact->find($id);
    }

    public function store($data)
    {
        if (!$this->recaptchaService->verify($data['recaptcha_contact_token'])) {
            return response()->json(['error' => 'reCAPTCHA verification failed.']);
        }

        return $this->citizenContact->create($data);
    }

    public function update($id, $data)
    {
        $citizenContact = $this->citizenContact->find($id);
        $citizenContact->update($data);
        return $citizenContact;
    }

    public function delete($id)
    {
        $citizenContact = $this->citizenContact->find($id);
        $citizenContact->delete();
        return $citizenContact;
    }
}