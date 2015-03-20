<?php

namespace app\Http\Controllers;

use app\Http\Requests;
use app\Http\Controllers\Controller;
use App\Student;

class WelcomeController extends Controller {
   

    /**
     * Show the application welcome screen to the user.
     *
     * @return Response
     */
    public function index() {
        $student = Student::all();
        return view('front.index', compact('student'));
    }

    public function show($id){
            $student = Student::find($id);
            
            return view('front.single', compact('student'));
        }
}
