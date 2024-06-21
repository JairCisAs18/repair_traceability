<?php

namespace App\Http\Controllers;

use App\Models\ModelID;
use App\Models\Parts;
use Illuminate\Http\Request;

class PartsController extends Controller
{
   public function readParts(){
    $parts = Parts::select('RNO_ID', 'SNA')->get();
    return view('registered_parts')->with('parts', $parts);
   }
   
   public function addPart(Request $r){
      $serial = $r->sna;
      $id = substr($serial, 0, 5);
      $rno = ModelID::where('SNA_ID', $id)->first();
      $part = new Parts();
      $part->RNO_ID = $rno->id;
      $part->SNA = $serial;
      $part->save();
      return redirect('/');
   }
}
