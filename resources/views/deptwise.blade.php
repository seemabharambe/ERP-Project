@extends('home')


@section('center')

         <h1>Departmental Reports </h1>
         
       <table class="table table-striped table-dark">
      


        <tr>
              <td>deptid:</td>
            <td><?php echo $depts[0]; ?></td>
        </tr>

        <tr>
              <td>deptname:</td>
            <td><?php echo$depts[1]; ?></td>
        </tr>

      
       

        <tr>
              <td>Subtaskid:</td>
            <td><?php echo $depts[2]; ?></td>
        </tr>
        
        <tr>
              <td>Subtask:</td>
            <td><?php echo$depts[3]; ?></td>
        </tr>
        

         <tr>
              <td>Details:</td>
            <td><?php echo $depts[4]; ?></td>
        </tr>



        <tr>
              <td>Startdate:</td>
            <td><?php echo$depts[5]; ?></td>
        </tr>
        
        <tr>
              <td>EndDate:</td>
            <td><?php echo$depts[6]; ?></td>
        </tr>
        
        <tr>
              <td>Status:</td>
            <td><?php echo $depts[7]; ?></td>
        </tr>

          
           <tr>
              <td>Attachment:</td>
            <td><?php echo $depts[8]; ?></td>
        </tr>

      
       
       </table>
       
       <h3>Jupiters Infrastructures </h3>
  
  


   
  </tbody>
</table>


@endsection