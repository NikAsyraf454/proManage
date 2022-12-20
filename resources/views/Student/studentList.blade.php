<h1>Student List</h1>
<a href="/addStudent">Add Student</a> <a href="/projectList">Project List</a>
<table border="border">
<tr>
    <td>ID</td>
    <td>Name</td>
    <td>Student ID</td>
    <td>Project</td>
    <td>Operation</td>
    <td>Operation</td>
</tr>
@foreach($student as $stud)
<tr>
    <td>{{$stud->id}}</td>
    <td>{{$stud->name ?? ""}}</td>
    <td>{{$stud->student_id ?? ""}}</td>
    <td>{{$stud->Project->name ?? ""}}</td>
    <td><a href={{"updateStudForm/".$stud['id']}}>Update</a></td>
    <td><a href={{"deleteStud/".$stud['id']}}>Delete</a></td>
</tr>
@endforeach
</table>