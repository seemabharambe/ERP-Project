@extends('home')


@section('center')


<h1>Departmentwise History of subtasks</h1>
<table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">Dept ID</th>
      <th scope="col">Dept_Name</th>
      <th scope="col">Sub Task ID</th>
      <th scope="col">Sub Task</th>
      <th scope="col">Details</th>
    

		 <th scope="col">Start Date</th>

		 <th scope="col">End Date</th>

		 <th scope="col">Status</th>

		 <th scope="col"><a href="">Attachments</a></th>

		

      </tr>



  </thead>

  <tbody>
    

       @foreach($depts as $d)
<tr>  
      <td>{{$d->deptid}}</td>
      <td>{{$d->deptname}}</td>

        <td>{{$d->subtaskid}}</td>
        
         <td>{{$d->subtask}}</td>
          <td>{{$d->details}}</td>
           
   
             <td>{{ $d->startdate }}</td>
              <td>{{ $d->enddate}}</td>
               <td>{{ $d->status }}</td>
               <td>{{ $d->attachment}}</td>
                
</tr>

      @endforeach
 


    
</tbody>
</table>
 





@endsection