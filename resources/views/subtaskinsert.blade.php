

@extends('home')


@section('center')

 <form method="POST" action="/insertsubtask" enctype="multipart/form-data">
 @csrf
   
<h1>Sub Task (Transction)</h1>


<table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">Sub Task ID</th>
      <td><input type="text" name="subtaskid"></td>
</tr>
<tr>

      <th scope="col"><a href="">Sub Task</a></th>
      <td><input type="text" name="subtask"></td>
</tr>
     
     <tr> <th scope="col"><a href="details">Details</a></th>
      <td><input type="text" name="details"></td>
</tr>


<tr>

      <th scope="col"><a href="">MainTaskId</a></th>
      <td><input type="text" name="maintaskid"></td>
</tr>

<tr>

      <th scope="col"><a href="">DeptId</a></th>
      <td><input type="text" name="deptid"></td>
</tr>

<tr>
      
      <th scope="col">Assignedto</th>
      <td><input type="text" name="empid"></td></tr>
      <tr>

       
    <tr> <th scope="col">Start Date</th>
     <td><input type="date" name="startdate"></td></tr>

    <tr> <th scope="col">End Date</th>
     <td><input type="date" name="enddate"></td></tr>

    <tr> <td>Status</td>
         <td>
        <select name="status" type="text">
        <option value="workinprogress">In Process</option>
        <option value="complete">Complete</option>
        <option value="pending">Pending</option>
        <option value="canceled">Canceled</option>
        </select>
      </td>
    </tr>
<tr>
     <th scope="col"><a href="attahcments">Attachments</a></th>
     <td><input type="file" name="attachment"></td></tr>

     <tr>
      <td><input type="submit" name="send"></td>
    </tr>

    




      
  </thead>
</table>



 </form>




@endsection