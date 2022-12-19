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
    <td>{{$stud['id']}}</td>
    <td>{{$stud['name']}}</td>
    <td></td>
    <td><a href={{"update/".$stud['id']}}>Update</a></td>
    <td><a href={{"delete/".$stud['id']}}>Delete</a></td>
</tr>
@endforeach
</table>