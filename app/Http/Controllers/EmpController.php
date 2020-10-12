<?php

namespace App\Http\Controllers;

use\App\Models\employee;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmpController extends Controller
{
  
 public function empinfo()
 {
    $employees=DB::table('employees')
    ->join('jupiters','employees.empid','=','jupiters.empid')
    ->join('subtks','subtks.empid','=','jupiters.empid')
    ->select('employees.empid','employees.email','jupiters.maintaskid',
      'jupiters.maintask',
      'subtks.subtaskid','subtks.subtask','subtks.details',
      'subtks.startdate','subtks.enddate','subtks.status')

      ->get();


    // return $employees;


      $employees = json_decode($employees, true);
 //print_r($employees); 
 
//return view('empdetails',compact("employees"));

  
 

$actid=$employees['1']['empid'];

$con=$employees['1']['email'];
$death=$employees['1']['maintaskid'];
$recover=$employees['1']['maintask'];
$dt=$employees['1']['subtaskid'];
$dth=$employees['1']['subtask'];
$status=$employees['1']['details'];
$st=$employees['1']['startdate'];

$stat=$employees['1']['enddate'];

$stat1=$employees['1']['status'];



return view('empdetails',['employees'=>[$actid,$con,$death,$recover,$dt,$dth,$status,$st,$stat,
$stat1]]);


/*
        foreach($employees as $emp)

  //echo "Maintaskid".$j->maintaskid;
  
    
   //echo "Empid".$emp->empid;
    echo"<br>";
    
    echo "Email:".$emp->email;
    echo"<br>";
  
    echo "maintaskid:".$emp->maintaskid;
    echo"<br>";

    echo "maintask:".$emp->maintask;
    echo"<br>";

echo "subtask:".$emp->subtask;
    echo"<br>";


echo "details:".$emp->details;
    echo"<br>";


    
    echo "startdate:".$emp->startdate;
    echo"<br>";

    echo "enddate:".$emp->enddate;
    echo"<br>";

  echo "status:".$emp->status;
    echo"<br>";
     */
   }



   
      public function empdatework()
    {
    $employees=DB::table('employees')
              ->join('jupiters','employees.empid','=','jupiters.empid')
              ->join('subtks','subtks.empid','=','jupiters.empid')
              ->select('employees.empid','employees.email','jupiters.maintaskid','jupiters.maintask',
                  'subtks.subtaskid','subtks.subtask','subtks.details',
                  'subtks.enddate','subtks.status')

              ->get();
  //return $employees;

 $employees = json_decode($employees, true);
 //print_r($employees); 
 

$actid=$employees['1']['empid'];

$con=$employees['1']['email'];
$death=$employees['1']['maintaskid'];
$recover=$employees['1']['maintask'];
$dt=$employees['1']['subtaskid'];
$dth=$employees['1']['subtask'];
$status=$employees['1']['details'];

$stat=$employees['1']['enddate'];

$stat1=$employees['1']['status'];



return view('empworkdatedetails',['employees'=>[$actid,$con,$death,$recover,$dt,$dth,$status,$stat,
$stat1]]);




}


//emptaskdate

public function emptaskdate()
{
   $employees=DB::table('employees')
              ->join('jupiters','employees.empid','=','jupiters.empid')
              ->join('subtks','subtks.empid','=','jupiters.empid')
              ->select('employees.empid','employees.email','jupiters.maintaskid','jupiters.maintask',
                  'subtks.subtaskid','subtks.subtask','subtks.details',
                  'subtks.enddate','subtks.status')
              ->get();
              return $employees;









/*
        foreach($employees as $emp)

  //echo "Maintaskid".$j->maintaskid;
  
    
   //echo "Empid:".$emp->empid;
    echo"<br>";
    
    echo "Email:".$emp->email;
    echo"<br>";
  
    echo "maintaskid:".$emp->maintaskid;
    echo"<br>";

    echo "maintask:".$emp->maintask;
    echo"<br>";

echo "subtaskid:".$emp->subtaskid;
    echo"<br>";

echo "subtask:".$emp->subtask;
    echo"<br>";


echo "details:".$emp->details;
    echo"<br>";


    
    

    echo "enddate:".$emp->enddate;
    echo"<br>";

  echo "status:".$emp->status;
    echo"<br>";
     
*/
  }
  

   public function empinsert(Request $r)
	{
		$data=new employee;
    $data->empid=$r->empid;

		$data->fname=$r->fname;
		$data->lname=$r->lname;
		$data->mno=$r->mno;
		$data->email=$r->email;
		$data->save();
      //return $data;
		return redirect('emp');
	}
      

    public function displayemp()
    {
    	$data=employee::all();
    	//return $data;

    	return view('emp',compact("data"));
    }

 public function deleteemp($rid)
    {
    	$data=employee::find($rid)->delete();
    	//return $rid;

    	return redirect('emp');
	
    }

     public function editemp($rid)
    {
    	$data=employee::find($rid);
    	//return $rid;

    	return view('editempinfo',compact("data"));
    }

  public function empupdate($rid,Request $r)
  {
		$data=employee::find($rid);
    	//return $rid;
    	$data->fname=$r->fname;
		$data->lname=$r->lname;
		$data->mno=$r->mno;
		$data->email=$r->email;
		$data->save();
		return redirect('emp');
  }

 
}
