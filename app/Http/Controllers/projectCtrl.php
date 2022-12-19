<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class projectCtrl extends Controller
{
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

        return redirect("addProject");

    }

    function ListAllProject()
    {
        $proj = Project::all();

        return view('Project.projectList', ['project'=> $proj]);
    }

    function DeleteStudent($id)
    {
        $proj = Project::find($req->id);
        $proj->delete();
        return view('Project.projectList');
    }
}
