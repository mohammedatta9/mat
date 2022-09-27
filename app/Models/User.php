<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $fillable = [
        'type','membership','first_name', 'second_name', 'third_name', 'last_name', 'phone', 'email', 'id_number', 'city_id', 'gender', 'address', 'photo', 'current_balance', 'suspended_balance',  'occupation_id', 'password','country_id','birthdate','company_name','company_number','is_active','notes','years_of_experience','bio'
    ];
    protected $appends = ['name'];
    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function getNameAttribute(){
        return $this->first_name.' '.$this->second_name.' '.$this->third_name.' '.$this->last_name;
    }
    public function city()
    {
        return $this->belongsTo(City::class);
    }
    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function occupation()
    {
        return $this->belongsTo(Occupation::class);
    }

    public function licenses()
    {
        return $this->hasMany(License::class);
    }

    public function commercials()
    {
        return $this->hasMany(Commercial::class);
    }

}
