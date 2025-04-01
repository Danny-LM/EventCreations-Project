<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function show($section)
    {
        $viewMap = [
            'my-home' => 'partials.user.home',
            'my-events' => 'partials.user.events',
            'my-notes' => 'partials.user.notes',
            'my-schedule' => 'partials.user.schedule',

            'support' => 'partials.user.support',
            'documentation' => 'partials.user.documentation',

            'users' => 'partials.admin.users',
            'permissions' => 'partials.admin.permissions',
            'analytics' => 'partials.admin.analytics',
            'reports' => 'partials.admin.reports'
        ];

        $partial = $viewMap[$section] ?? 'partials.user.home';

        if (request()->ajax()) {
            return view($partial);
        }

        return view('dashboard', [
            'content' => $partial
        ]);
    }
}
