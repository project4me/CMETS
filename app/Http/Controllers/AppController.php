<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Mail\ContactReply;
use Mail;

use Auth;
use Validator;
use App\User;
use App\Contact;

class AppController extends Controller
{
    public function signin(Request $request) {
        $remember = $request->has('remember') ? true : false;
        if (Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')], $remember)) {

            return redirect('/');
        }
        return back()->with('error', 'Email and password do not match.');
    }

    public function signup(Request $request) {
        $validator = Validator::make($request->all(), [
            'email' => 'unique:users',
        ],
        [
            'unique' => 'The :attribute has already been taken.',
        ]);

        if ($validator->fails()) {
            return back()
                      ->withErrors($validator)
                      ->withInput();
        }

        $user = new User;
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        $user->save();

        Auth::login($user);

        return redirect('/');
    }

    public function profile(Request $request) {
        Auth::user()->update($request->all());

        return back()->with('alert', 'Updated successfully.');
    }

    public function signout() {
        Auth::logout();

        return redirect('/');
    }

    public function contact() {
        /* $content = [
            'subject'=> $request->input('subject'), 
            'message'=> $request->input('message'),
            'answer' => $request->input('answer')
        ];
        Mail::to($request->input('email'))->send(new ContactReply($content));

        dd('mail send successfully'); */
        if (Auth::check()) {
            $contacts = Contact::where('user_id', Auth::user()->id)->orderBy('status', 'DESC')->paginate(5);
        } else {
            $contacts = array();
        }
        return view('contact', ['contacts' => $contacts]);
    }
}
