<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;
    protected $fillable=['name','parent'];
    public function scopeParents($q){
        return $q->whereNull('parent');
    }
    public function kids(){
        return $this->hasMany(Department::class,'parent');
    }
    public function main(){
        return $this->belongsTo(Department::class,'parent');
    }
}
