
@extends('home')


@section('center')

 <form method="POST" action="insertparty">
 @csrf
   
<h1>Customer Information</h1>


<table class="table table-striped table-dark">
  <thead>
  	<tr>

      <th scope="col"><a href="maintask">Customer_Id</a></th>
      <td><input type="text" name="partyid"></td>
</tr>
   
<tr>

      <th scope="col"><a href="maintask">Customer_Name</a></th>
      <td><input type="text" name="partyname"></td>
</tr>
   

    <tr>
      <td><input type="submit" name="send"></td>
    </tr>


      
  </thead>
</table>



 </form>




@endsection