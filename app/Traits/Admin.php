<?php


namespace App\Traits;


use Illuminate\Support\Facades\Auth;

trait Admin
{
    public static function isAdmin(){
        if(Auth::user()) {
            $email = Auth::user()->email;
            $admin = \App\Models\Admin::first();
            if ($email == $admin->email)
                return true;
        }
        return false;
    }
}
