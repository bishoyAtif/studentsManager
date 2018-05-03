<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;

/**
 * Class HomeController.
 *
 * @package namespace App\Http\Controllers\Dashboard;
 */
class HomeController extends Controller
{
    /**
     * Display the home page for the dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.home');
    }
}
