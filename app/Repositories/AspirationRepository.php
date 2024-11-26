<?php

namespace App\Repositories;
use App\Models\Aspiration;
use App\Services\RecaptchaService;
use App\Interfaces\AspirationInterface;
use Illuminate\Support\Facades\Storage;

class AspirationRepository implements AspirationInterface
{
    private $aspiration;
    protected $recaptchaService;

    public function __construct(Aspiration $aspiration, RecaptchaService $recaptchaService)
    {
        $this->recaptchaService = $recaptchaService;
        $this->aspiration = $aspiration;
    }

    public function getAll()
    {
        return $this->aspiration->orderBy('created_at', 'desc')->get();
    }

    public function getLast30Days()
    {
        return $this->aspiration->where('created_at', '>=', now()->subDays(30))->orderBy('created_at', 'desc')->get();
    }

    public function getById($id)
    {
        return $this->aspiration->find($id);
    }

    public function store($data)
    {
        if (!$this->recaptchaService->verify($data['recaptcha_aspiration_token'])) {
            return response()->json(['error' => 'reCAPTCHA verification failed.'], 422);
        }

        return $this->aspiration->create($data);
    }

    public function update($id, $data)
    {
        $aspiration = $this->aspiration->find($id);
        $aspiration->update($data);
        return $aspiration;
    }

    public function delete($id)
    {
        $aspiration = $this->aspiration->find($id);
        $aspiration->delete();
        return $aspiration;
    }
}