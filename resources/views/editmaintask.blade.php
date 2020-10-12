
@extends('home')


@section('center')

 <form method="POST" action="/update/{{$edit->id}}" enctype="multipart/form-data">
 @csrf
   
<h1>Update Main Task (Transction)</h1>


<table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">Main Task ID</th>
      <td><input type="text" name="maintaskid" value={{$edit->maintaskid }}></td>
</tr>

<tr>
      
      <th scope="col">Date</th>
      <td><input type="date" name="startdate" value={{$edit->startdate }} ></td></tr>


     
     <tr> <th scope="col"><a href="details">Details</a></th>
          <td><input type="text" name="details" value={{$edit->details }}></td>
    </tr>

   	
		<tr>
		 <th scope="col"><a href="attahcments">Attachments</a></th>
		 <td><input type="file" name="attachment" value={{$edit->attachment }}></td></tr>

    

     <tr>
      <td><button type="Submit" name="send">Update</button></td>
    </tr>

		




      
  </thead>
</table>



 </form>




@endsection