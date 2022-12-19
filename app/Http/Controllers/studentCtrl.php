<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Project;

class studentCtrl extends Controller
{
    function AddStudentPage()
    {
        $stud = new Student();

        $stud->name = $req->name;
        $stud->save();

        return redirect("/studentList");
    }

    function AddStudent(Request $req)
    {
        $stud = new Student();

        $stud->name = $req->name;
        $stud->save();

        return redirect("/studentList");
    }

    function ListAllStudent()
    {
        $stud = Student::all();

        return view('Student.studentList', ['student'=> $stud]);
    }

    function ListStudent()
    {
        $stud = Student::all();

        return view('Student.studentList', ['student'=> $stud]);
    }

    function DeleteStudent($id)
    {
        $stud = Student::find($id);
        $stud->delete();
        return redirect('/studentList');
    }

    function GetProject($id)
    {
        $proj = Student::find($id)->Project ?? 'None';
        return $proj;
    }
}
