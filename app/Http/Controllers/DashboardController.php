<?php 
// app/Http/Controllers/DashboardController.php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Inertia;

class DashboardController extends Controller
{
    public function index()
    {
        $users = User::all();
        return Inertia::render('Dashboard', [
            'auth' => auth()->user(),
            'users' => $users
        ]);
    }
}
