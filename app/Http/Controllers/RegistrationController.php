<?php

namespace App\Http\Controllers;


use App\Http\Requests\RegistrationForm;
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
     * @param RegistrationForm $form
     * @return RedirectResponse
     */
    public function store(RegistrationForm $form)
    {
        $form->persist();

        session()->flash('message', 'Thank so much for signing up!');
        return redirect()->home();
    }
}
