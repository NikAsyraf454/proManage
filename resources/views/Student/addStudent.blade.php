<form action="/addStud" method="POST">
    @csrf
<input type="text" name="name" placeholder="Insert Student Name"><br>
<input type="text" name="student_id" placeholder="Insert Student ID"><br>
<!-- <input type="number" name="amount" placeholder="Insert Book Quantity"><br> -->

<button type="submit">Submit</buttom>
<button type="cancel">Cancel</button>
</form>