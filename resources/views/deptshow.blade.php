@extends('home')


@section('center')

<h1 align="center">Department Table</h1>
<button><a href="department">Add Department</a></button>

<table class="table table-striped table-dark">
  
<tr>
      <th scope="col">Department_ID</th>
      <th scope="col"><a>Department_Name</a></th>

		 <th>Edit</th>
     <th>Delete</th>
</tr>


    @foreach($data as $d)
    <tr>
      
      <td>{{ $d->deptid }}</td>
       <td>{{ $d->deptname }}</td>
       <td><a href="editd/{{ $d->id}}">Edit</a></td>
        <td><a href="deptdel/{{$d->id}}">Delete</a></td>

      

    </tr>
@endforeach





</table>


@endsection