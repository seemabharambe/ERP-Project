<?php

namespace App\Http\Controllers;
use\App\Models\party;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PartyController extends Controller
{
     public function partyinsert(Request $r)
	{
		$data=new party;
    
    $data->partyid=$r->partyid;
		$data->partyname=$r->partyname;
		$data->save();
   //return $data;
		return redirect('partyshow');
	}


 public function displayparty()
    {
    	$data=party::all();
    	//return $data;

    	return view('partyshow',compact("data"));
  }

    public function deleteparty($rid)
    {
    	$data=party::find($rid)->delete();
    	//return $rid;
        return redirect('partyshow');
    }

        public function editparty($rid)
    {
      $data=party::find($rid);
      //return $rid;

      return view('editp',compact("data"));
    }


     public function updateparty($rid,Request $r)
    {
      $data=party::find($rid);
      //return $rid;
     $data->partyid=$r->partyid;
    $data->partyname=$r->partyname;
    $data->save();
    return redirect('partyshow');

    }

}
