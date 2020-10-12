

@extends('home')


@section('center')

 <form method="POST" action="/insert" enctype="multipart/form-data">
 @csrf
   
<h1>Main Task (Transction)</h1>


<table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">Main Task ID</th>
      <td><input type="text" name="maintaskid"></td>
</tr>
<tr>

      <th scope="col"><a href="maintask">Main Task</a></th>
      <td><input type="text" name="maintask"></td>
</tr>
     
     <tr> <th scope="col"><a href="details">Details</a></th>
      <td><input type="text" name="details"></td>
</tr>
<tr>
      
      <th scope="col">Created on</th>
      <td><input type="date" name="createdon"></td></tr>
      <tr>

       <th scope="col">Department ID</th>
       <td><input type="text" name="deptid"></td></tr>

		<tr> <th scope="col">Owner</th>
		 <td><input type="text" name="empid"></td></tr>

		<tr> <th scope="col">Related To</th>
		 <td><input type="text" name="partyid"></td></tr>

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

<tr> <th scope="col">Attachment</th>
     <td><input type="file" name="attachment"></td></tr>


     <tr>
      <td><input type="submit" name="send"></td>
    </tr>

		




      
  </thead>
</table>



 </form>




@endsection