@extends('home')


@section('center')




  <button><a href="insertemployee">Add Employee</a></button>



<h1 align="center">Employee Table</h1>
<table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">Employee ID</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Email</th>
      <th scope="col">Mobile</th>
      <td>Edit</td>
        <td>Delete</td>

    </tr>
  </thead>
  <tbody>


    @foreach($data as $d)
    <tr>
      <td>{{ $d->empid }}</td>
      <td>{{ $d->lname }}</td>
       <td>{{ $d->fname }}</td>
       <td>{{ $d->mno }}</td>
       <td>{{ $d->email }}</td>


       <td><a href="editempinfo/{{ $d->id}}">Edit</a></td>
        <td><a href="deletee/{{$d->id}}">Delete</a></td>

      
 </tr>
  
    @endforeach
    
   
   
  </tbody>
</table>
</form>

@endsection