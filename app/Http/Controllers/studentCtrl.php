<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Project;

class studentCtrl extends Controller
{
    function AddStudent(Request $req)
    {
        $stud = new Student();

        $stud->name = $req->name;
        $stud->student_id = $req->student_id;
        $stud->save();

        return redirect("/home");
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

    function UpdateStudentForm($id)
    {
        $stud = Student::find($id);

        return view("Student.updateStudentForm", ['stud' => $stud]);
    }

    function UpdateStudent(Request $req)
    {
        $stud = Student::find($req->id);

        $stud->name = $req->name;
        $stud->student_id = $req->student_id;
        $stud->save();

        return redirect("/home");
    }

    function DeleteStudent($id)
    {
        $stud = Student::find($id);
        $stud->delete();
        return redirect('/home');
    }

    function GetProject($id)
    {
        $proj = Student::find($id)->Project ?? 'None';
        return $proj;
    }
}
