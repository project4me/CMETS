<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use Validator;
use App\User;

class AppController extends Controller
{
    public function signin(Request $request) {
      $remember = $request->has('remember') ? true : false;
      if (Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')], $remember)) {

        return redirect('/');
      }
      return redirect()->back()->with('error', 'Email and password do not match.');
    }

    public function signup(Request $request) {
      $validator = Validator::make($request->all(), [
        'email' => 'unique:users',
      ],
      [
        'unique' => 'The :attribute has already been taken.',
      ]);

      if ($validator->fails()) {
        return redirect()->back()
                    ->withErrors($validator)
                    ->withInput();
      }

      $user = new User;
      $user->name = $request->name;
      $user->email = $request->email;
      $user->password = bcrypt($request->password);
      $user->save();

      Auth::login($user);

      return redirect('/');
    }

    public function signout() { /* */
      Auth::logout();

      return redirect('/');
    }

    public function dashboard() {

      return view('admin.dashboard');
    }

    public function about() {
      
      return view('admin.about');
    }
}
