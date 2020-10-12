<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\subtk;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class JsubtaskController extends Controller
{
    

 public function insertsubtask(Request $r)
 {
		$data=new subtk;

		$data->subtaskid=$r->subtaskid;
		$data->subtask=$r->subtask;
		$data->details=$r->details;
	
		$data->maintaskid=$r->maintaskid;
		$data->deptid=$r->deptid;
		$data->empid=$r->empid;
		$data->startdate=$r->startdate;
		$data->enddate=$r->enddate;
		$data->status=$r->status;

		
		
		$oname=$r->file('attachment')->getClientOriginalName();
		
		 $r->file('attachment')->storeAs('public',$oname);
           $path="public/".$oname;  

            //return $oname;

	
           $url=storage::url($path);
        //return $url;
    
		$data->attachment=$url;
	   $res=$data->save();

//return $data;

	   if($res==1)
	   {
	   return redirect('subtask');
	   }
	    else
	    {
	    	echo"not inserted";
	    }
		

}


public function subtaskdashboard()
{
	$data=subtk::all();

	//return $data;

	return view('subtask',compact("data"));
}


public function deletesubtask($rid)

{

	$data=subtk::find($rid)->delete();
	//return $rid;
	return redirect('subtask');
}


public function editsubtask($rid)
{
	$data=subtk::find($rid);
	//return $rid;
     
    return view('editsubtk',compact("data"));

}


public function updatesubtask($rid,Request $r)
{
	//return $rid;

	$data=subtk::find($rid);
   
    $data->subtaskid=$r->subtaskid;
      $data->details=$r->details;
      $data->startdate=$r->startdate;

		
		$data->status=$r->status;

		
	    $oname=$r->file('attachment')->getClientOriginalName();
		
		 $r->file('attachment')->storeAs('public',$oname);
           $path="public/".$oname;  

            //return $oname;

	
           $url=storage::url($path);
        //return $url;
    
		$data->attachment=$url;
	   $res=$data->save();

return redirect('subtask');


		

}




  Public function store($id,Request $r)
     { 

     	//return $id;
								

       $edt = subtk::where('id', $id)->firstOrFail();
       $r->attachment;
       $file = $edt->attachment;
       //return $file;
      // $r->attachment;
        $name = basename($file);
   // return  $name;
       //return response()->download($file, $name);

     return response()->download(storage_path("app/public/{$name}"));
}


}
