<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class SettingsController extends Controller
{
    public function index()
    {
        return view('admin.settings.index');
    }

    public function update()
    {
        $rules = [
            'website_name' => 'required|string',
            'link' => 'required|string',
            'website_active' => 'required|boolean',
            'website_inactive_message' => 'required|string',
        ];
        setting(request()->validate($rules))->save();;
        return back()->with('success', trans('Saved.'));
    }
}