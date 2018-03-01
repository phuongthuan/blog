<?php

namespace App\Http\Controllers;


use App\User;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class RegistrationController extends Controller
{
    /**
     * @return Factory|View
     */
    public function create()
    {
        return view('registration.create');
    }

    /**
     * Register account
     *
     * @return RedirectResponse
     */
    public function store()
    {
        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed',
        ]);
        $user = User::create([
            'name' => request('name'),
            'email' => request('email'),
            'password' => bcrypt(request('password')),
        ]);
        auth()->login($user);
        return redirect()->home();
    }
}
