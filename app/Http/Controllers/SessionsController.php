<?php

namespace App\Http\Controllers;


use Illuminate\Contracts\View\Factory;
use Illuminate\View\View;

class SessionsController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'destroy']);
    }

    /**
     * Login Form
     *
     * @return Factory|View
     */
    public function create()
    {
        return view('sessions.create');
    }


    public function store()
    {
        if (! auth()->attempt(request(['email', 'password']))) {
            return back()->withErrors([
                'message' => 'fuck',
            ]);
        }
        return redirect()->home();
    }

    /**
     * Logout
     */
    public function destroy()
    {
        auth()->logout();
        return redirect()->home();
    }
}
