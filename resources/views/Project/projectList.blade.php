<h1>Project List</h1>
<a href="/addProject">Create Project</a>
<table border="border">
<tr>
    <td>ID</td>
    <td>Name</td>
    <td>Student</td>
    <td>Supervisor</td>
    <td>Examiner 1</td>
    <td>Examiner 2</td>
    <td>Start Date</td>
    <td>End Date</td>
    <td>Project Progress</td>
    <td>Project Status</td>
    <td>Operation</td>
    <td>Operation</td>
</tr>
@foreach($project as $proj)
<tr>
    <td>{{$proj->id}}</td>
    <td>{{$proj->name}}</td>
    <td><a href="">{{$proj->Student->name ?? "None"}}</a></td>
    <td><a href="">{{$proj->Supervisor->name ?? "None"}}</a></td>
    <td><a href="">{{$proj->Examiner1->name ?? "None"}}</a></td>
    <td><a href="">{{$proj->Examiner2->name ?? "None"}}</a></td>
    <td>{{$proj['start_date']}}</td>
    <td>{{$proj['end_date']}}</td>
    <td><a href={{"updateProjForm/".$proj['id']}}>Update</a></td>
    <td><a href={{"deleteProj/".$proj['id']}}>Delete</a></td>
</tr>
@endforeach
</table>