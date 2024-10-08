<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        // Validate the form data
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        // Create a .txt file with the form contents
        $content = "Name: " . $validated['name'] . "\n";
        $content .= "Email: " . $validated['email'] . "\n";
        $content .= "Message: " . $validated['message'] . "\n";
        $filename = 'contact_form_' . time() . '.txt';

        // Save the file in the storage/app folder
        Storage::put($filename, $content);

        // Optionally redirect back with a success message
        return back()->with('success', 'Thank you for contacting us!');
    }
}
