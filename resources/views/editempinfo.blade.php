
@extends('home')


@section('center')

 <form method="POST" action="/updateemp/{{$data->id}}" >
 @csrf
   
<h1>Employees Information Updation</h1>


<table class="table table-striped table-dark">

	<thead>
    <tr>
      <th scope="col">First_Name</th>
      <td><input type="text" name="fname" value={{$data->fname }}></td>
</tr>

<tr>
      
      <th scope="col">Last_Name</th>
      <td><input type="text" name="lname" value={{$data->lname }} ></td></tr>
 
 <tr>
      <th scope="col">Mobile_NO</th>
      <td><input type="text" name="mno" value={{$data->mno }}></td>
</tr>

<tr>
      <th scope="col">Email</th>
      <td><input type="email" name="email" value={{$data->email }}></td>
</tr>

   




<tr>
      <td><button type="Submit" name="send">Update</button></td>
    </tr>

		




      
  </thead>
</table>



 </form>




@endsection