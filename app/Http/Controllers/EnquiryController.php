<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Enquiry;

class EnquiryController extends Controller
{
    public function store(Request $request)
    {
        // dd('hii');
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'mobile' => 'required|numeric',
            'file' => 'nullable|file|mimes:jpg,png,pdf|max:2048',
            'description' => 'nullable|string',
        ]);

        // Handle file upload
        $filePath = null;
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $filePath = $file->store('enquiry', 'public');
        }

        // Create the form submission record
        Enquiry::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'mobile' => $request->input('mobile'),
            'file_path' => $filePath,
            'description' => $request->input('description'),
        ]);

        return redirect()->back(['message' => 'Form submitted successfully!'], 200);
    }
}
