<?php

namespace app\Http\Controllers;

use app\Http\Requests;
use app\Http\Controllers\Controller;
use App\Student;
use Illuminate\Http\Request;

class DashboardController extends Controller {

    public function Index() {
        return view('dashboard.index');
    }

   
}