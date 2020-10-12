@extends('home')


@section('center')


<h1 align="center">Subtask</h1>
<button><a href="addsubtask">Add Sub Task</a></button>
<table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">Sub Task ID</th>
      <th scope="col">Sub Task</th>
      <th scope="col">Details</th>
      <th scope="col">Main Task ID</th>
      <th scope="col">DeptID</th>
      
    

		 <th scope="col">Assigned To</th>


		 <th scope="col">Start Date</th>

		 <th scope="col">End Date</th>

		 <th scope="col">Status</th>

		 <th scope="col"><a href="">Attachments</a></th>
      <th scope="col">Download</th>
		 <th>Edit</th>
     <th>Delete</th>


      </tr>



  </thead>

  <tbody>
    

       @foreach($data as $d)
<tr>
        <td>{{$d->subtaskid}}</td>
         <td>{{$d->subtask}}</td>
          <td>{{$d->details}}</td>
           <td>{{$d->maintaskid}}</td>
           <td>{{$d->deptid}}</td>
            <td>{{$d->empid}}</td>
             <td>{{ $d->startdate }}</td>
              <td>{{ $d->enddate}}</td>
               <td>{{ $d->status }}</td>
               <td>{{ $d->attachment}}</td>
               <td><a href="attach/{{ $d->id}}">Download</td>
                <td><a href="editsubt/{{ $d->id}}">Edit</a></td>
               <td><a href="deletest/{{$d->id}}">Delete</a></td>
</tr>

      @endforeach
 


    
</tbody>
</table>
 





@endsection