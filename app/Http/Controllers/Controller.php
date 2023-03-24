<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    public function getAllStudents(){
        // Làm việc với Model
        //3 cách: Raw Data, Query Builder và Eloquent ORM
        // $data = Student::all();
        // $data = DB::select('SELECT * FROM students');
         $data = DB::table('students')->get();
        // Làm việc với View
        return view('index', compact('data'));
    }
}
