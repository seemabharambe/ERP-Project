
@extends('home')


@section('center')

 <form method="POST" action="inserte">
 @csrf
   
<h1 align="center">Employee Information</h1>


<table class="table table-striped table-dark">
  <thead>
   <tr>

      <th scope="col"><a href="maintask">Employee_Id</a></th>
      <td><input type="text" name="empid"></td>
</tr>
     
<tr>

      <th scope="col"><a href="maintask">First_Name</a></th>
      <td><input type="text" name="fname"></td>
</tr>
     
     <tr> <th scope="col"><a href="details">Last_Name</a></th>
      <td><input type="text" name="lname"></td>
</tr>
<tr>
      
      <th scope="col">Mobile_NO</th>
      <td><input type="text" name="mno"></td></tr>
      <tr>

       <th scope="col">Email</th>
       <td><input type="email" name="email"></td></tr>

		 <tr>
      <td><input type="submit" name="send"></td>
    </tr>


      
  </thead>
</table>



 </form>




@endsection