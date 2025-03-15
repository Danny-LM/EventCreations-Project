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

    // Admin Partial Views
    public function users()
    {
        return view('partials.admin.users');
    }
    
    public function permissions()
    {
        return view('partials.admin.permissions');
    }
    
    public function analytics()
    {
        return view('partials.admin.analytics');
    }
    
    public function reports()
    {
        return view('partials.admin.reports');
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
    
    public function support()
    {
        return view('partials.user.support');
    }
    
    public function documentation()
    {
        return view('partials.user.documentation');
    }
}