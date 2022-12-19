<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class studentCtrl extends Controller
{
    function AddStudent(Request $req)
    {
        $stud = new Student();

        $stud->name = $req->name;
        $stud->save();

        return redirect("Student.addStudent");
    }

    function ListAllStudent()
    {
        $stud = Student::all();

        return view('Student.studentList', ['student'=> $stud]);
    }

    function DeleteStudent($id)
    {
        $stud = Student::find($req->id);
        $stud->delete();
        return view('Student.studentList');
    }
}
