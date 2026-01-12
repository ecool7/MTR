<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ContactsController extends Controller
{
    public function index()
    {
        return view('contacts');
    }

    public function submit(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|max:2000',
        ]);

        if ($validator->fails()) {
            return redirect()->route('contacts')
                ->withErrors($validator)
                ->withInput();
        }

        // Here you would typically send an email or save to database
        // For now, we'll just return with success message

        return redirect()->route('contacts')
            ->with('success', 'Thank you for your message! We will get back to you soon.');
    }
}



