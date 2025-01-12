<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        // dd(Auth::user());
        return view('welcome');
    }

    public function services()
    {
        return view('services');
    }

    public function book(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'service' => 'required|string',
            'date' => 'required|date',
            'notes' => 'nullable|string',
        ]);

        // Here you can handle the booking logic, such as saving to the database or sending an email

        // Redirect back to the services page with a success message
        return redirect('/services')->with('success', 'Your booking has been successfully submitted!');
    }
}
