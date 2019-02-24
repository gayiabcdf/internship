<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\App\Student;


class StudentController extends Controller
{
    //
        //  protected $fillable = [
        // 'id', 'name','phone','email' ];
    public function first_view() {
    return view('file1');
}
public function insert_student_details(Request $request){
	Student::create([
		
		'id'=>$request['id'],
		'name'=>$request['name'],
		'phone'=>$request['phone'],
		'email'=>$request['email']
	]);
	return redirect()->back();
}
}



