<?php

namespace App\Livewire\Client\Auth;

use App\Notifications\Channels\SmsChannel;
use App\Notifications\SendSmsNotification;
use App\Repository\client\auth\ClientAuthRepository;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Validator;
use Laravel\Socialite\Facades\Socialite;
use Livewire\Component;

class Index extends Component
{
    public function sendSms($formData)
    {
        $validator = Validator::make($formData, [
            'mobile' => ['required', 'regex:/^09\d{9}$/'],
        ],
        [
            'required'=>'شماره موبایل الزامی است!',
            'regex'=>'شماره موبایل نامعتبر است',
        ]
        );
        $validator->validate();
        $this->resetValidation();

        $activeCode = mt_rand(1000,9999);

        Notification::route(SmsChannel::class,'sms')
        ->notify(new SendSmsNotification($formData['mobile'],'sendOtpSms',$activeCode));

    }

    public function redirectToProvider()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleProviderCallback()
    {
        $repository = new ClientAuthRepository();

        $gmailUser = Socialite::driver('google')->stateless()->user();

        $repository->checkUser($gmailUser);

        return redirect()->route('home');
    }

    public function render()
    {
        return view('livewire.client.auth.index')->layout('layouts.client.app');
    }
}
