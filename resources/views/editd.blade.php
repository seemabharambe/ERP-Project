
@extends('home')


@section('center')

 <form method="POST" action="/updated/{{$data->id}}" >
 @csrf
   
<h1>Departments</h1>


<table class="table table-striped table-dark">

	<thead>
    <tr>
      <th scope="col">Deprtment_ID</th>
      <td><input type="text" name="deptid" value={{$data->deptid }}></td>
</tr>

<tr>
      
      <th scope="col">Department_Name</th>
      <td><input type="text" name="deptname" value={{$data->deptname }} ></td></tr>
<tr>
      <td><button type="Submit" name="send">Update</button></td>
    </tr>

		




      
  </thead>
</table>



 </form>




@endsection