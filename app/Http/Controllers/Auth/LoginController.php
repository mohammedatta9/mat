<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\PhoneRequest;
use App\Http\Requests\VerifyOtpRequest;
use App\Models\LoginCode;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function sendOtp(PhoneRequest $request)
    {
        $res = LoginCode::send($request->mobile);
        $code = LoginCode::where('phone', $request->mobile)->latest()->first()->code;
        if (isset($res['status'])) {
            return response()->json(['error' => __($res['message'])], $res['status']);
        } elseif (isset($res['accepted']) and $res['accepted'] > 0) {
            return response()->json(['success' => __('تم ارسال رمز التحقق بنجاح'), 'code' => $code], 200);
        } else {
            dd($res);

            return response()->json(['error' => __('خطأ في ارسال رمز التحقق')], 400);
        }
    }


    public function verifyOtp(VerifyOtpRequest $request)
    {
        /* $reversedOtp = array_reverse($request->otp);
        $key = '';
        foreach ($reversedOtp as $otp) {
            $key .= $otp;
        } */
        $key=$request->otp;
        if (LoginCode::attempt($key, $request->mobile)) {
            return response()->json(['success' => 'Login Successfully']);
        }
        return response()->json(['errors' => 'Otp Not Found'], 404);
    }
}
