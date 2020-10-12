@extends('home')


@section('center')
<form method="POST" action="insertdeptrecord">
  @csrf
<h1>Department Table</h1>
<table class="table table-striped table-dark">
  
    <tr>
      <th scope="col">Department ID</th>
      <td><input type="text" name="deptid"></td>
    </tr>
     <tr> 
      <th scope="col">Department_Name</th>
      <td><input type="text" name="deptname"></td>
      
    </tr>

<tr>
      <td><input type="submit" name="send"></td>
    </tr>

  
</table>
</form>

@endsection