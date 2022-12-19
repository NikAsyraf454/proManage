<form action="/addProj" method="POST">
    @csrf
<input type="text" name="name" placeholder="Insert Project Name"><br>
Start Date <input type="date" id="start_date" name="start_date"><br>
End Date <input type="date" id="end_date" name="end_date"><br>
<input type="text" name="progress" placeholder="Insert Project Progress"><br>
<input type="text" name="status" placeholder="Insert Project Status"><br>
<!-- <input type="number" name="amount" placeholder="Insert Book Quantity"><br> -->

<button type="submit">Submit</buttom>
<button type="cancel">Cancel</button>
</form>