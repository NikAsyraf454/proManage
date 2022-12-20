<form action="/updateStud/" method="POST">
    @csrf
<input type=hidden name="id" value="{{$stud->id}}"><br>
<input type="text" name="name" placeholder="Insert Student Name" value="{{$stud->name}}" required><br>
<input type="text" name="student_id" placeholder="Insert Student ID" value="{{$stud->student_id}}" required><br>

<button type="submit">Submit</buttom>
<button type="cancel">Cancel</button>
</form>