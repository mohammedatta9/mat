<?php

namespace App\Http\Controllers\Admin;

use App\Models\Department;
use Illuminate\Http\Request;
use App\Traits\JodaResource;
use App\Http\Controllers\Controller;

class DepartmentController extends Controller
{
    use JodaResource;
    public $rules=[
        'parent'=>'nullable',
        'name'=>'required'
    ];
    public function query($query)
    {
        return $query->with('main')->latest()->paginate(10);
    }
}
