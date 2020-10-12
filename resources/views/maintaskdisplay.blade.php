@extends('home')


@section('center')

 




<h1 align="center">Main Task (Transction)</h1>
<button><a href="addtask">Add Main Task</a></button>
<table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">Main Task ID</th>
      <th scope="col"><a>Main Task</a></th>
      <th scope="col"><a >Details</a></th>
      <th scope="col">Created on</th>
       <th scope="col">Department ID</th>

		 <th scope="col">Owner</th>

		 <th scope="col">Related To</th>

		 <th scope="col">Start Date</th>

		 <th scope="col">End Date</th>

		 <th scope="col">Status</th>

		 <th scope="col">Attachments</th>
     
    
       <th scope="col">Download</th>

		 <th>Edit</th>
     <th>Delete</th>
      </tr>
  </thead>

 

  <tbody>


    @foreach($data as $d)
    <tr>
      
      <td>{{ $d->maintaskid }}</td>
       <td>{{ $d->maintask }}</td>
        <td>{{ $d->details }}</td>
        
         <td>{{ $d->createdon }}</td>
          <td>{{ $d->deptid }}</td>
           <td>{{ $d->empid }}</td>
            <td>{{ $d->partyid }}</td>
             <td>{{ $d->startdate }}</td>
              <td>{{ $d->enddate}}</td>
               <td>{{ $d->status }}</td>
               <td>{{$d->attachment}}</td>
             
             <td><a href="attached/{{ $d->id}}">Download</td>
                <td><a href="edit/{{ $d->id}}">Edit</a></td>
               <td><a href="delete/{{$d->id}}">Delete</a></td>

      

    </tr>
@endforeach

  </tbody>
</table>








@endsection