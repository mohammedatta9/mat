<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\Country;
use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile(){
        return view('clients.profile');
    }
    public function settings(){
        $user=auth()->user()->load(['country','city']);
        $countries=Country::all();
        $cities=City::all();
        return view('clients.settings',compact('user','countries','cities'));
    }
    public function updateSettings(Request $request){
        $user=User::findOrFail($request->id);
        $data=$request->validate([
            'city_id'=>'required',
            'first_name'=>'required',
            'second_name'=>'required',
            'third_name'=>'required',
            'last_name'=>'required',
            'phone'=>['required','unique:users,phone,'.$user->id],
            'id_number'=>['required','unique:users,id_number,'.$user->id],
            'email'=>['required','unique:users,email,'.$user->id],
            'gender'=>'required',
            'company_number'=>'nullable',
            'company_name'=>'nullable',
            'country_id'=>'required',
            'address'=>'nullable',
        ]);
        if($request->image){
            delete_file($user->photo);
            $data['photo']=store_file($request->image,'users');
        }
        $user->update($data);
        return back()->with('success','تم تعديل البيانات بنجاح');
    }

    public function documents(){
        return view('clients.documents');
    }
}
