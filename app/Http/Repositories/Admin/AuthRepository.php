<?php

namespace App\Http\Repositories\Admin;

use App\Http\Interfaces\Admin\AuthInterface;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use RealRashid\SweetAlert\Facades\Alert;

class AuthRepository implements AuthInterface
{

    public function loginPage()
    {
        return view('admin.login');
    }

    public function login($request): Redirector|Application|RedirectResponse
    {
        $credentials = $request->only(['email', 'password']);

        if (Auth::attempt($credentials)) {
            Alert::success('success','Welcome Back '. Auth::user()->name);
            return redirect(route('admin.dashboard'));
        }
        return redirect()->back()->withErrors(['error' => 'You Don\'t Have Access To Login']);
    }

    public function logout($request): Redirector|Application|RedirectResponse
    {
        Session::flush();
        Auth::logout();
        return redirect(route('admin.auth'));
    }
}
