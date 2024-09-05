<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Mail;

class DonateController extends Controller
{
    public function submit(Request $request)
    {
       // dd('mail send ...///./././/.');
        // Validate the form data
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
           
        ]);

        // Save the form data (you can use Eloquent to store it in the database)
        // For simplicity, we'll just use a session flash message
        session()->flash('success', 'Form data saved successfully!');

        // Send an email to admin
        $data = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'salect' => $request->input('salect'),
            'amount' => $request->input('amount'),
           
        ];

        Mail::to('joshijoshi7022@gmail.com')->send(new \App\Mail\DonateMail($data));

        // Redirect back with success message
        return redirect()->back();
    }
}
