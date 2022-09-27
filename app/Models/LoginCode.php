<?php

namespace App\Models;

use App\Service\Oursms;
use App\Service\Urway;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoginCode extends Model
{
    use HasFactory;
    protected $guarded = [];
    public static function send($phone){
        // send SMS Message containing the code generated
        $code = rand(10000, 99999);
        $message = "Your code is: $code";
        static::create([
            'phone' => $phone,
            'code' => $code,
            'ip_address' => request()->ip(),
        ]);
        return Oursms::send($phone, $message);
    }
    // attempt by code and phone
    public static function attempt($code, $phone){
        $loginCode = self::where('code', $code)->where('phone', $phone)->first();
        $user = User::where('phone', $phone)->first();
        if($loginCode and $user){
            $loginCode->attempted = true;
            $loginCode->save();
            auth()->loginUsingId($user->id);
            return true;
        }
        return false;
    }
}
