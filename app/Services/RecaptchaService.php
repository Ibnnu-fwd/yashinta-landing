<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class RecaptchaService
{
    protected $secretKey;

    public function __construct()
    {
        $this->secretKey = config('services.recaptcha.secret');
    }

    public function verify($token)
    {
        $response = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
            'secret' => $this->secretKey,
            'response' => $token,
        ]);

        return $response->json()['success'] ?? false;
    }
}
