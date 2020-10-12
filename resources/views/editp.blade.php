
@extends('home')


@section('center')

 <form method="POST" action="/updatep/{{$data->id}}" >
 @csrf
   
<h1>Custmoer</h1>


<table class="table table-striped table-dark">

	<thead>
    
<tr>
      
      <th scope="col">Customer_Id</th>
      <td><input type="text" name="partyid" value={{$data->partyid }} ></td></tr>
<tr>
<tr>
      
      <th scope="col">Customer_Name</th>
      <td><input type="text" name="partyname" value={{$data->partyname }} ></td></tr>
<tr>
      <td><button type="Submit" name="send">Update</button></td>
    </tr>

		




      
  </thead>
</table>



 </form>




@endsection