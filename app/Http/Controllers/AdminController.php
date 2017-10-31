<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Setting;

class AdminController extends Controller
{
    public function dashboard() {
        return view('admin.dashboard');
    }

    public function about() {
        $about = Setting::where('key', 'site.about')->first();
        
        return view('admin.about', ['about' => $about]);
    }

    public function contact() {
        $contact = Setting::where('key', 'site.contact')->first();

        return view('admin.contact', ['contact' => $contact]);
    }
}
