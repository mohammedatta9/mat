<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Notification;
use App\Traits\JodaResource;
use Illuminate\Http\Request;
use Illuminate\Notifications\DatabaseNotification;

class NotificationController extends Controller
{
    public function index()
    {
        $notifications = DatabaseNotification::where('notifiable_type', 'App\Models\User')->paginate(10);
        return view('admin.notification.index',compact('notifications'));
    }

}
