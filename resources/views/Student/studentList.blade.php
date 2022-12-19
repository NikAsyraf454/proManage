<h1>Student List</h1>
<a href="/addStudent">Add Student</a>
<table border="border">
<tr>
    <td>ID</td>
    <td>Name</td>
    <td>Project</td>
    <td>Operation</td>
    <td>Operation</td>
</tr>
@foreach($student as $stud)
<tr>
    <td>{{$stud->id}}</td>
    <td><a href="">{{$stud->name ?? "None"}}</a></td>
    <td><a href="">{{$stud->Project->name ?? "None"}}</a></td>
    <td><a href={{"updateStudForm/".$stud['id']}}>Update</a></td>
    <td><a href={{"deleteStud/".$stud['id']}}>Delete</a></td>
</tr>
@endforeach
</table>