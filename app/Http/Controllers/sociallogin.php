<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use App\Providers\RouteServiceProvider;
use Exception;

class sociallogin extends Controller
{
    public function gotogoogle()
    {
        return Socialite::driver('google')->redirect();
    }
    public function googleinfostore()
    {
        try {
            $googleUser = Socialite::driver('google')->user();
            $findUser = User::where('socialId', $googleUser->id)->first();
            if ($findUser) {
                Auth::login($findUser);
                return redirect()->intended(RouteServiceProvider::HOME);
            } else {
                $tabbleField = new User();
                $tabbleField->fname = 'Google User';
                $tabbleField->name = $googleUser->name;
                $tabbleField->email = $googleUser->email;
                $tabbleField->role = '3';
                $tabbleField->socialId = $googleUser->id;
                $tabbleField->password = encrypt($googleUser->id);
                $tabbleField->save();
                return redirect()->intended(RouteServiceProvider::HOME);
            }
        } catch (Exception $error) {
            dd($error->getMessage());
        }
    }
}
