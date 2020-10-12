@extends('home')


@section('center')

         <h1 align="center">Project Workdetails</h1>
       
       <table class="table table-striped table-dark">
      

        <tr>
              <td>Maintask:</td>
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
            <td><?php echo $jupiters[6]; ?></td>
        </tr>
      
       
       </table>
       
       <h3>Jupiters Infrastructures </h3>
  
  


   
  </tbody>
</table>


@endsection