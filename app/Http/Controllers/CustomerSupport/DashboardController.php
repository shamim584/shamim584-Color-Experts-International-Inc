<?php

namespace App\Http\Controllers\CustomerSupport;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('customer_support.dashboard');
    }
}
