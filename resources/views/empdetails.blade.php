@extends('home')


@section('center')

         <h1 align="center">Employee Performance Report </h1>
         

         <button><a href="emptask">Employees  Task</a></button>

        

     
       <table class="table table-striped table-dark">
   <thead>

      <tr>
              <td>Empid:</td>
            <td><?php echo $employees[0]; ?></td>
        </tr>

        <tr>
              <td>Email:</td>
            <td><?php echo $employees[1]; ?></td>
        </tr>

      
        <tr>
              <td>Maintaskid:</td>
            <td><?php echo $employees[2]; ?></td>
        </tr>

        <tr>
              <td>Maintask:</td>
            <td><?php echo $employees[3]; ?></td>
        </tr>

        <tr>
              <td>Subtaskid:</td>
            <td><?php echo $employees[4]; ?></td>
        </tr>
        
        <tr>
              <td>Subtask:</td>
            <td><?php echo$employees[5]; ?></td>
        </tr>
        

         <tr>
              <td>Details:</td>
            <td><?php echo $employees[6]; ?></td>
        </tr>



        <tr>
              <td>Startdate:</td>
            <td><?php echo$employees[7]; ?></td>
        </tr>
        
        <tr>
              <td>EndDate:</td>
            <td><?php echo$employees[8]; ?></td>
        </tr>
        
     <tr>
              <td>Status:</td>
            <td><?php echo $employees[9]; ?></td>
        </tr>
      
       
      
       
   
  </tbody>
</table>
<h3>Jupiters Infrastructures </h3>
  
  



@endsection