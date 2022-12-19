<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Student;
use App\Models\User;

class projectCtrl extends Controller
{
    function AddProjectPage()
    {
        $stud = Student::all();
        $user = User::all();
        return view('Project.addProjectForm', ['students'=> $stud, 'users' => $user]);
    }

    function AddProject(Request $req)
    {
        $proj = new Project();
        // foreach ($proj->attributes as $key => $value) {
        //     $proj->{$key} = empty($value) ? null : $value;
        // }

        $proj->name = $req->name;
        $proj->student_id = empty($req->student_id) ? null : $req->student_id;
        $proj->supervisor_id = empty($req->supervisor_id) ? null : $req->supervisor_id;
        $proj->examiner1_id = empty($req->examiner1_id) ? null : $req->examiner1_id;
        $proj->examiner2_id = empty($req->examiner2_id) ? null : $req->examiner2_id;
        $proj->start_date = empty($req->start_date) ? null : $req->start_date;
        $proj->end_date = empty($req->end_date) ? null : $req->end_date;
        $proj->progress = empty($req->progress) ? null : $req->progress;
        $proj->status = empty($req->status) ? null : $req->status;
        $proj->save();

        return redirect("/projectList");

    }

    function ListAllProject()
    {
        $proj = Project::all();

        return view('Project.projectList', ['project'=> $proj]);
    }

    function UpdateProjectForm($id)
    {
        $proj = Project::find($id);

        $stud = Student::all();
        $user = User::all();
        return view('Project.updateProjectForm', ['students'=> $stud, 'users' => $user, 'proj' => $proj]);
    }

    function UpdateProject(Request $req)
    {
        $proj = Project::find($req->id);
        $proj->name = $req->name;
        $proj->student_id = empty($req->student_id) ? null : $req->student_id;
        $proj->supervisor_id = empty($req->supervisor_id) ? null : $req->supervisor_id;
        $proj->examiner1_id = empty($req->examiner1_id) ? null : $req->examiner1_id;
        $proj->examiner2_id = empty($req->examiner2_id) ? null : $req->examiner2_id;
        $proj->start_date = empty($req->start_date) ? null : $req->start_date;
        $proj->end_date = empty($req->end_date) ? null : $req->end_date;
        $proj->progress = empty($req->progress) ? null : $req->progress;
        $proj->status = empty($req->status) ? null : $req->status;
        $proj->save();
        return redirect('/projectList');
    }

    function DeleteProject($id)
    {
        $proj = Project::find($id);
        $proj->delete();
        return redirect('/projectList');
    }

    function GetStudent($id)
    {
        $stud = Project::find($id)->Student ?? 'None';
        // $temp = null;
        // $temp = empty($stud) ? null : $stud;
        return $stud;
    }

    function GetSupervisor($id)
    {
        $supervisor = Project::find($id)->Supervisor ?? 'None';
        return $supervisor;
    }

    function GetExaminer1($id)
    {
        $examiner1 = Project::find($id)->Examiner1 ?? 'None';
        return $examiner1;
    }

    function GetExaminer2($id)
    {
        $examiner2 = Project::find($id)->Examiner2 ?? 'None';
        return $examiner2;
    }
}
