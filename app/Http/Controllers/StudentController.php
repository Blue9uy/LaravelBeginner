<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
public function index(){
    $students=Student::all();
    return view("students.index",compact("students"));
}
public function show($id){
    $student=Student::findOrFail($id);
    return view("students.show",compact("student"));
   }
   public function sortBy($sort){
    $students=Student::orderBy($sort,"asc")->get();
    return view("students.index",compact("students"));
   }
   public function create(){
    // $student=new Student;
    // $student->name='Mg San';
    // $student->remark='He has brown hair';
    // $student->age=16;
    // $student->save();

    Student::create([
        "name"=> "Mg Kaung",
        "remark"=> "He is Professional footballer",
        "age"=> 23,
    ]);
    return redirect()->route('students.index');
   }
   public function update(){
    $student=Student::find(5);
    $student->name= 'Mg Kaung';
    $student->age=16;
    $student->save();
    return redirect()->route('students.index');
   }

   public function delete(){
    // $student = Student::find(1);
    // $student->delete();
    Student::destroy(3);
    return redirect()->route('students.index');
   }

   public function trash($id){
    Student::find($id)->delete();
        return redirect()->route('students.index');
   }

   public function trashData(){
    $students=Student::onlyTrashed()->get();
    return view("students.trash",compact("students"));
   }

   public function trashRestore($id){
    Student::withTrashed()->where('id',$id)->restore();
    return redirect()->route('students.index');
   }

   public function forceDelete($id){
    Student::find($id)->forcedelete();
        return redirect()->route('students.index');
   }
}
