
@extends('home')


@section('center')

<form method="POST" action="/updatesubt/{{$data->id}}" 
  enctype="multipart/form-data">
 @csrf
   
<h1>Update Sub Task (Transction)</h1>


<table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">Sub Task ID</th>
      <td><input type="text" name="subtaskid" value={{$data->subtaskid }}></td>
</tr>

<tr>
      
      <th scope="col">UpdateDate</th>
      <td><input type="Date" name="startdate" value={{$data->startdate }} ></td></tr>


     
     <tr> <th scope="col"><a href="details">Details</a></th>
          <td><input type="text" name="details" value={{$data->details }}></td>
    </tr>
  

  


      <tr> <td>Status</td>
         <td>
        <select name="status" type="text"  value={{$data->status }}>
        <option value="workinprogress">WorkinProgress</option>
        <option value="complete">Complete</option>
        <option value="pending">Pending</option>
        <option value="canceled">Canceled</option>
        </select>
      </td>
    </tr>
   	
		<tr>
		 <th scope="col"><a href="attahcments">Attachments</a></th>
		 <td><input type="file" name="attachment" value={{$data->attachment }}></td></tr>

     <tr>
      <td><button type="Submit" name="send">Update</button></td>
    </tr>

		




      
  </thead>
</table>



 </form>




@endsection