
@extends('home')


@section('center')


<!-------

       
    <tr>
    <th scope="col">empId</th>
      <th scope="col">email</th>
      <th scope="col">MaintaskId</th>
      <th scope="col">Maintask</th>
      <th scope="col">SubtaskId</th>
      <th scope="col">Subtask</th>
      <th scope="col">Details</th>
      <th scope="col">Startdate</th>
      <th scope="col">Enddate</th>
      
      
      <th scope="col">Status</th>

    

    </tr>
  </thead>
  <tbody>


    @foreach($employees as $d)
    <tr>
     
       
       <td>{{ $d->empid}}</td>
       <td>{{ $d->email }}</td>
         <td>{{ $d->maintaskid}}</td>
         <td>{{ $d->maintask }}</td>
         <td>{{ $d->subtaskid}}</td>
       <td>{{ $d->subtask }}</td>
       <td>{{ $d->details }}</td>
      <td>{{ $d->startdate }}</td>
       <td>{{ $d->enddate}}</td>
       <td>{{ $d->status }}</td>
       



      
 </tr>
  
    @endforeach
  ---->



  

<h1>Employee Workdetails</h1> 

 <!----
<table class="table table-striped table-dark">
  <thead>
    <tr>
    
      <th scope="col">MaintaskId</th>
      <th scope="col">Maintask</th>
      <th scope="col">SubtaskId</th>
      <th scope="col">Subtask</th>
      <th scope="col">Details</th>
      <th scope="col">Startdate</th>
      <th scope="col">Enddate</th>
      
      
      <th scope="col">Status</th>

    

    </tr>
  </thead>
  <tbody>


    @foreach($jupiters as $d)
    <tr>
     
       
       <td>{{ $d->actid}}</td>
       <td>{{ $d->con }}</td>
       <td>{{ $d->recover}}</td>
       <td>{{ $d->dt }}</td>
       <td>{{ $d->startdate }}</td>
       <td>{{ $d->enddate}}</td>
       <td>{{ $d->status }}</td>
       



      
 </tr>
  
    @endforeach
  



  ===============
   <html>
    <head>
        <title>Employee Workdetails</title>
  </head>
  
  <body>
         <h1>Employee Workdetails</h1>
       
       <table border=1 align="center">
            <tr>
              <th>Parameters</th>
            <th>Count</th>
        </tr>
            
        <tr>
              <td>Maintaskid:</td>
            <td><?php echo $jupiters[0]; ?></td>
        </tr>
        
        <tr>
              <td>Subtaskid:</td>
            <td><?php echo $jupiters[1]; ?></td>
        </tr>
        
        <tr>
              <td>Subtask:</td>
            <td><?php echo $jupiters[2]; ?></td>
        </tr>
        

         <tr>
              <td>Details:</td>
            <td><?php echo $jupiters[3]; ?></td>
        </tr>



        <tr>
              <td>Startdate:</td>
            <td><?php echo$jupiters[4]; ?></td>
        </tr>
        
        <tr>
              <td>EndDate:</td>
            <td><?php echo$jupiters[5]; ?></td>
        </tr>
        
     <tr>
              <td>Status:</td>
            <td><?php echo$jupiters[6]; ?></td>
        </tr>
        
       
       </table>
       
       <h3>JupitersInfrastructure </h3>
  
  </body>


</html>
   
  </tbody>
</table>
</form>

@endsection













@foreach($jupiters as $jjupiters)

      
        <tr>
              <td>Maintaskid:</td>
            <td><?php echo $jupiters[0]; ?></td>
        </tr>
             
        <tr>
              <td>Maintask:</td>
            <td><?php echo $jupiters[1]; ?></td>
        </tr>

        <tr>
              <td>Subtaskid:</td>
            <td><?php echo $jupiters[2]; ?></td>
        </tr>
        
        <tr>
              <td>Subtask:</td>
            <td><?php echo $jupiters[3]; ?></td>
        </tr>
        

         <tr>
              <td>Details:</td>
            <td><?php echo $jupiters[4]; ?></td>
        </tr>



        <tr>
              <td>Startdate:</td>
            <td><?php echo$jupiters[5]; ?></td>
        </tr>
        
        <tr>
              <td>EndDate:</td>
            <td><?php echo$jupiters[6]; ?></td>
        </tr>
        
     <tr>
              <td>Status:</td>
            <td><?php echo $jupiters[7]; ?></td>
        </tr>
        
       
       </table>




 <!---
          <tr>
          <th scope="col">Maintask</th>
      <th scope="col">SubtaskId</th>
      <th scope="col">Subtask</th>
      <th scope="col">Details</th>

    </tr>
 @foreach($jupiters as $d)
    <tr>
     
      <td>{{ $d->actid}}</td>
       <td>{{ $d->con }}</td>
       <td>{{ $d->recover}}</td>
       <td>{{ $d->dt }}</td>
       
       </tr>
       @endforeach 
          --->
