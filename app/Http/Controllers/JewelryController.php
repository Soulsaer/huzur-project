<?php

namespace App\Http\Controllers;

use App\Mail\JewelryRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class JewelryController extends Controller
{
    public function showForm()
    {
        return view('jewelry.form');
    }

    public function submitForm(Request $request)
    {
        // dd($request);

        $validatedData = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'mobile' => 'required|numeric',
            'description' => 'required|string',
        ]);

        // Create an instance of the JewelryRequest Mailable class with the validated data
        $mail = new JewelryRequest(
            $validatedData['name'],
            $validatedData['email'],
            $validatedData['mobile'],
            $validatedData['description']
        );

        // Send the email
        Mail::to('mkjoshi668@gmail.com')->send($mail);

        return redirect()->back()->with('success', 'Form submitted successfully!');
    }
}
