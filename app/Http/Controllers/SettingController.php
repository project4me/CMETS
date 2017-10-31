<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Setting;

class SettingController extends Controller
{
    public function about(Request $request) {
        Setting::where('key', $request->input('key'))->update([
            'display_name' => $request->input('display_name'),
            'value' => $request->input('value')
        ]);

        return back()->with('alert', 'Updated successfully.');
    }

    public function contact(Request $request) {
        Setting::where('key', $request->input('key'))->update([
            'display_name' => $request->input('display_name'),
            'value' => $request->input('value')
        ]);

        return back()->with('alert', 'Updated successfully.');
    }
}
