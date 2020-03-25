<?php

namespace App\Http\Controllers;

use App\Applications;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // Index 50 applicants at once
        $applications = Applications::paginate(50);

        return view('admin.dashboard', [
            'applications' => $applications
        ]);
    }
}
