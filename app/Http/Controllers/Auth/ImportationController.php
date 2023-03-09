<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Document;
use App\Models\Image;
use Illuminate\Http\Request;

class ImportationController extends Controller
{
    //

    public function index(){
        $document =  Document::all();
        return view('Admin.PageImportImage',compact('document'));
    }

    public function store(Request $request){

   
        $data = $request->validate([
            'titre' => 'required',
            'description' => 'required',
            
        ]);
        $txt = date("Y-m-d H:i:s");
        $new_doc = Document::create([
            'titre' => $request->titre,
            'description' => $request->description,
            'datePublication' => $txt
        ]);
        
        if ($request->has('images')) {
            foreach ($request->file('images') as $image) 
            {
                $imageName = $data['titre'].'-image-'.time().rand(1,1000).'.'.$image->extension();
                $image->move(public_path('Documents_images'),$imageName); 
                Image::create([
                  'document_id' => $new_doc->id,
                  'image' => $imageName,
                ]);
            }
        }  
        
        
      
        return redirect()->back()->with('success','Ajout avec success');
    }

    function deleteImage($id){
        Document::destroy($id);
        return redirect()->back()->with('success','Documents supprimer avec succes');

    }
}