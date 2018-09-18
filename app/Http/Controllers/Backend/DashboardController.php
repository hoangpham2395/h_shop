<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Base\BackendController;

class DashboardController extends BackendController
{
    public function index()
    {
        return view('backend.dashboard.dashboard');
    }
}
