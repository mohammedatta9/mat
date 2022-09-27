<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Traits\JodaResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    use JodaResource;
    public $rules=[
        'type'=>'required',
        'membership'=>'required',
        'city_id'=>'required',
        'first_name'=>'required',
        'second_name'=>'required',
        'third_name'=>'required',
        'last_name'=>'required',
        'phone'=>['required','unique:users,phone'],
        'id_number'=>['required','unique:users,id_number'],
        'email'=>['required','unique:users,email'],
        'password'=>'required',
        'gender'=>'required',
        'photo'=>'nullable',
        'company_number'=>'nullable',
        'company_name'=>'nullable',
        'country_id'=>'required',
    ];

    
    public function query($query)
    {
        return $query->with(['city','country'])->latest()->paginate(10);
    }

    public function beforeStore ()
    {
        request()->merge(['password'=>Hash::make(request('password')),'photo'=>store_file(request('image'),'users')]);
        
    }

    public function beforeUpdate($user)
    {
        $this->rules['email'] = 'required|unique:users,email,' . $user->id . ',id';
        $this->rules['phone'] = 'required|unique:users,phone,' . $user->id . ',id';
        $this->rules['id_number'] = 'required|unique:users,id_number,' . $user->id . ',id';
        $this->rules['password'] = 'sometimes';
        
        request()->merge(['password'=>request('password')?Hash::make(request('password')):$user->password]);
        if(request('image')){
            delete_file($user->photo);
            request()->merge(['photo'=>store_file(request('image'),'users')]);
        }
    }


}
