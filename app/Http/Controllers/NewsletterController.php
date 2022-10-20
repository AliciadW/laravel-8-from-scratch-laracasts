<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use App\Services\Newsletter;

class NewsletterController extends Controller
{
    public function __invoke(Newsletter $newsletter)
    {
        request()->validate(['email' => 'required|email']);

        try {
            $newsletter->subscribe(request('email'));
        } catch (\Exception $exception) {
            throw ValidationException::withMessages([
                'email' => 'This email address could not be added to our list.'
            ]);
        }

        return redirect('/')
            ->with('success', 'You are now signed up to receive our newsletter!');
    }
}
