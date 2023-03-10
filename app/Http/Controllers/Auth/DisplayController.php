<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Document;



class DisplayController extends Controller
{
  

    function viewUpload($id)
    {
      $doc = Document::find($id);
      if(!$doc) abort(404);
      $images = $doc->images;
     
      return view('Admin.Importation.viewUpload',compact('doc','images'));
      
    }
}