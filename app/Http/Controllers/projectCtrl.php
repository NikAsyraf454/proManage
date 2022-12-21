<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Student;
use App\Models\User;

class projectCtrl extends Controller
{
    function Homepage()
    {
        $stud = Student::all();
        $user = User::all();
        $proj = Project::all();
        return view('User.home', ['students'=> $stud, 'users' => $user, 'projects' => $proj]);
    }

    function AddProjectPage()
    {
        $stud = Student::all();
        $user = User::all();
        return view('Project.addProjectForm', ['students'=> $stud, 'users' => $user]);
    }

    function AddProject(Request $req)
    {
        $proj = new Project();

        $proj->name = $req->name;
        // $proj->student_id = empty($req->student_id) ? null : $req->student_id;
        $proj->project_type = empty($req->project_type) ? null : $req->project_type;
        $proj->supervisor_id = empty($req->supervisor_id) ? null : $req->supervisor_id;
        $proj->examiner1_id = empty($req->examiner1_id) ? null : $req->examiner1_id;
        $proj->examiner2_id = empty($req->examiner2_id) ? null : $req->examiner2_id;
        $proj->start_date = empty($req->start_date) ? null : $req->start_date;
        $proj->duration = empty($req->duration) ? null : $req->duration;
        $proj->end_date = empty($req->end_date) ? null : $req->end_date;
        $proj->progress = empty($req->progress) ? null : $req->progress;
        $proj->status = empty($req->status) ? null : $req->status;
        $proj->save();

        if(!empty($req->student_id))
        {
            $stud = Student::find($req->student_id);
            $stud->project_id = $proj->id;
            $stud->save();
        }

        return redirect("/home");

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
        $proj->project_type = empty($req->project_type) ? null : $req->project_type;
        // $proj->student_id = empty($req->student_id) ? null : $req->student_id;
        $proj->supervisor_id = empty($req->supervisor_id) ? null : $req->supervisor_id;
        $proj->examiner1_id = empty($req->examiner1_id) ? null : $req->examiner1_id;
        $proj->examiner2_id = empty($req->examiner2_id) ? null : $req->examiner2_id;
        $proj->start_date = empty($req->start_date) ? null : $req->start_date;
        $proj->end_date = empty($req->end_date) ? null : $req->end_date;
        $proj->duration = empty($req->duration) ? null : $req->duration;
        $proj->progress = empty($req->progress) ? null : $req->progress;
        $proj->status = empty($req->status) ? null : $req->status;
        $proj->save();

        if(!empty($req->student_id))
        {
            if(!empty($proj->Student->id))
            {
                $stud = Student::find($proj->Student->id);
                $stud->project_id = NULL;
                $stud->save();
            }
            $stud = Student::find($req->student_id);
            $stud->project_id = $proj->id;
            $stud->save();
        }

        return redirect('/home');
    }

    function DeleteProject($id)
    {
        $proj = Project::find($id);
        $proj->delete();
        return redirect('/home');
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
