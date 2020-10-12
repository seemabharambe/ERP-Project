@extends('home')


@section('center')

<h1 align="center">Customer Table</h1>
<button><a href="insertparty">Add Customer</a></button>

<table class="table table-striped table-dark">
  
<tr>
      <th scope="col">Customer_Id</a></th>
      <th scope="col">Customer_Name</a></th>

		 <th>Edit</th>
     <th>Delete</th>
</tr>


    @foreach($data as $d)
    <tr>
      
      <td>{{ $d->partyid}}</td>
       <td>{{ $d->partyname}}</td>
       <td><a href="editp/{{ $d->id}}">Edit</a></td>
        <td><a href="deletep/{{$d->id}}">Delete</a></td>

      

    </tr>
@endforeach





</table>


@endsection