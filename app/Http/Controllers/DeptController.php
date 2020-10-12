<?php

namespace App\Http\Controllers;

use\App\Models\dept;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class DeptController extends Controller
{
    
 public function deptreport()
 {


        $depts=DB::table('depts')
        ->join('subtks','depts.deptid','=','subtks.deptid')
        ->select('depts.deptid','depts.deptname','subtks.subtaskid','subtks.subtask',
        'subtks.details','subtks.startdate','subtks.enddate','subtks.status','subtks.attachment')

        ->get();
        //return $depts;


 
 $depts = json_decode($depts, true);
 //print_r($depts); 


$actid=$depts['1']['deptid'];

$con=$depts['1']['deptname'];
$death=$depts['1']['subtaskid'];
$recover=$depts['1']['subtask'];

$dth=$depts['1']['details'];
$status=$depts['1']['startdate'];

$stat=$depts['1']['enddate'];

$stat1=$depts['1']['status'];


$stat2=$depts['1']['attachment'];

return view('deptwise',['depts'=>[$actid,$con,$death,$recover,$dth,$status,$stat,
$stat1,$stat2]]);






/*
 foreach($depts as $dept)

    echo "deptid:".$dept->deptid;
    echo"<br>";

    echo "deptname:".$dept->deptname;
    echo"<br>";

    echo "subtaskid:".$dept->subtaskid;
    echo"<br>";

    echo "subtask:".$dept->subtask;
    echo"<br>";


    echo "details:".$dept->details;
    echo"<br>";

    echo "startdate:".$dept->startdate;
    echo"<br>";

    echo "enddate:".$dept->enddate;
    echo"<br>";

    echo "status:".$dept->status;
    echo"<br>";*/

  }

  
  
  public function deptsubtaskreport()
  {
    $depts=DB::table('depts')->get();

    return $depts;
 
 }




	public function deptinsert(Request $r)
	{
		$data=new dept;

		$data->deptid=$r->deptid;
		$data->deptname=$r->deptname;
		$data->save();

		return redirect('deptdashboard');
	}
    

    public function displaydept()
    {
    	$data=dept::all();
    	//return $data;

    	return view('deptshow',compact("data"));
    }


    public function deletedept($rid)
    {
    	$data=dept::find($rid)->delete();
    	//return $rid;
        return redirect('deptdashboard');
    }


    public function editdept($rid)
    {
    	$data=dept::find($rid);
    	//return $rid;

    	return view('editd',compact("data"));
    }

     
    public function updatedept($rid,Request $r)
    {
    	$data=dept::find($rid);
    	//return $rid;
    	$data->deptid=$r->deptid;
		$data->deptname=$r->deptname;
		$data->save();
		return redirect('deptdashboard');

    }

}
