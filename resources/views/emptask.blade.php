
@extends('home')


@section('center')
     
     <form method="POST" action="taskdate">
      @csrf
      <button><input type="text" name="empid" placeholder="Employee Code"></button>

         <button><input type="date" name="" placeholder="Date"></button>


         <input name="send" type="submit">
</form>

@endsection