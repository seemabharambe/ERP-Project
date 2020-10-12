<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

use App\Models\Jupiter;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class JController extends Controller
{
    
//joins
	public function projectsubtasks()
	{
$jupiters=DB::table('jupiters')
	->join('subtks','jupiters.maintaskid','=','subtks.maintaskid')
	->select('jupiters.maintaskid','jupiters.maintask','subtks.subtaskid','subtks.subtask','subtks.details','subtks.startdate',
			'subtks.enddate','subtks.status')
	->get();
	
	//return $jupiters;

  $jupiters = json_decode($jupiters, true);
// print_r($jupiters); 



$actid=$jupiters['1']['maintask'];

$con=$jupiters['1']['subtaskid'];
$death=$jupiters['1']['subtask'];
$recover=$jupiters['1']['details'];
$dt=$jupiters['1']['startdate'];
$dth=$jupiters['1']['enddate'];
$status=$jupiters['1']['status'];

return view('projectsubtaskdetails',['jupiters'=>[$actid,$con,$death,$recover,$dt,$dth,$status]]);
	



    
}



 public function insertmaintask(Request $r)
 {
		$data=new Jupiter;

		$data->maintaskid=$r->maintaskid;
		$data->maintask=$r->maintask;
		$data->details=$r->details;
	
		$data->createdon=$r->createdon;
		$data->deptid=$r->deptid;
		$data->empid=$r->empid;
		$data->partyid=$r->partyid;
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

	    $data->save();

		return redirect('maintaskdisplay');

}
/*
public function attach(Request $r)
{
	$attachment=$r->file('attachment')->store();
}*/

public function maintaskdashboard()
{
	$data=Jupiter::all();


	return view('maintaskdisplay',compact("data"));
}


		public function delete($rid)
		{
		$data=Jupiter::find($rid)->delete();

			//return $data;
		return redirect('maintaskdisplay');
		}


    Public function edit($rid)
    {
    		$edit=Jupiter::find($rid);

    		//return $edit;
    	  return view('editmaintask',compact("edit"));


    }


   Public function updatemt($rid,Request $r)
   {
   //eturn $rid;
       


		$edit=Jupiter::find($rid);

      	$edit->maintaskid=$r->maintaskid;

      	
		$edit->startdate=$r->startdate;

		$edit->details=$r->details;

		 
		 $oname=$r->file('attachment')->getClientOriginalName();
		
		 $r->file('attachment')->storeAs('public',$oname);
           $path="public/".$oname;  

            //return $oname;

	
           $url=storage::url($path);
        //return $url;
    
		$edit->attachment=$url;
	  $res=$edit->save();

	if($res==1)
	  { return redirect('maintaskdisplay');

	  }
	 else
	 {
	 	echo"notupdated";
	 }

}


//attachments



  Public function stored($id,Request $r)
     { 

     	//return $id;
								

       $edt = Jupiter::where('id', $id)->firstOrFail();
       $r->attachment;
       $file = $edt->attachment;
       //return $file;
      // $r->attachment;
        $name = basename($file);
   // return  $name;
       //return response()->download($file, $name);

     return response()->download(storage_path("app/public/{$name}"));
}

/*
  Public function store($id,Request $r)
     { 

     	//return $id;
								

       $edt = Jupiter::where('id', $id)->firstOrFail();
       $r->attachment;
       $file = $edt->attachment;
       //return $file;
      // $r->attachment;
        $name = basename($file);
   // return  $name;
       //return response()->download($file, $name);

     return response()->download(storage_path("app/public/{$name}"));



   /*   $dw=Jupiter::find($rid);
  //return $dw;
  $r->file('attachment')->storeAs('public');
           $path="public/";  

            //return $oname;

	
           $url=storage::url($path);

 $file = $url;
        $name = basename($file);
        return response()->download($file, $name);
  //return $oname
          
 $headers = array(
       'Content-Type: application/octet-stream',
    );

 
 // return Storage::download('picTulips.jpg');

// $dw->attachment=$r->$fy;



<?php
namespace App\Http\Controllers;

class FileDownloadController extends Controller
{
    public function index() {
        $file = '../storage/app/uploads/1.pdf';
        $name = basename($file);
        return response()->download($file, $name);
    }
}


}
*/


}