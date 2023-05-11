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
      $document = Document::all();
    
        return view('Admin.Importation.PageImportImage',compact('document'));
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
                $imageName = $data['titre'].'-image-'.time().rand(1,5000).'.'.$image->extension();
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
    public function indexPage()
    {
         $documents = Document::paginate(9);
         return view('FontEnd.indexF',compact('documents'));

    }
   
        public function search(Request $request)
        {
          $output = '';
          $documents = Document::where('titre','Like','%'.$request->search.'%')
                                ->orWhere('description','Like','%'.$request->search.'%')->get();
                                
              foreach ($documents as $document) 
                {
                    $output.=   
                    ' <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 ">
                        <div class="card-style-2 mb-30">
                          <div class="card-image">
                            <a href="#0">
                              <img
                                src="'.$document->images->value(1).'"
                                alt=""
                              />
                            </a>
                          </div>
                          <div class="card-content">
                              <h4><a href="#">'.$document->titre.'</a></h4>
                              <p>
                                '.$document->description.'
                              </p>
                              <p>'.$document->datePublication.' </p>
                                <a class="main-btn deactive-btn  w-100 text-center square-btn btn-hover mt-1" href="'. url("/viewID/".$document->id ).'"type="submit">Visualiser </a>
                          </div>
                        </div>
                      </div>';
                      
                      
                }
               
                
                return response($output);
        }

        function displayImage()
        {
          return view('FontEnd.displayImage');
        }
        public function viewImg($id)
        {
          
          return view('Admin.Importation.viewImage');
        }
        function PageImportExcel(){

          return view('Admin.Importation.PageImportExcel');
        }
       
        function viewImageId($id)
        { 
          // dd($id);
          $doc = Document::find($id);
          if(!$doc) abort(404);
          $images = $doc->images;
          return view('FontEnd.displayImage',compact('doc','images'));
        }
    
}
