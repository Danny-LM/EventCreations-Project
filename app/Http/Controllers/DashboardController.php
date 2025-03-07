<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    // Method to load the dashboard view
    public function dashboard()
    {
        return view('dashboard', ['partial' => 'partials.user.home']);
    }

    // methods to load the partial views
    public function home()
    {
        return view('partials.user.home');
    }

    public function events()
    {
        return view('partials.user.events');
    }

    public function notes()
    {
        return view('partials.user.notes');
    }

    public function schedule()
    {
        return view('partials.user.schedule');
    }

    public function settings()
    {
        return view('partials.user.settings');
    }
}