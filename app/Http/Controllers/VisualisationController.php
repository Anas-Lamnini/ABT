<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Visualisation;
use PDF;
use App\imports\importStudent;
use Maatwebsite\Excel\Facades\Excel;
use DB;
use App\Student;
use App\subjects;
use App\competences;

class VisualisationController extends Controller
{
    public function index(){
        return view("Visualisation");
    }
    public function store(Request $request){

       $Visualisation = new Visualisation();

       $Visualisation->DocumentName  = $request->input('DocumentName');
       $Visualisation->Description  = $request->input('Description');

        if($request->hasfile('image')){
                $file=$request->file('image');
                $extension =$file->getClientOriginalExtension(); //getting image extension 
                $filename=time().'.'.$extension;
                $file->move('uploads/Visualisation/', $filename);
                $Visualisation->image=$filename;

        }else{
                return $request;
                $Visualisation->image ='';
        } 

         $Visualisation->save() ;
         return redirect('/displayfiles')->with('Visualisation',$Visualisation);
        }
    public function display(){
        $Visualisation = Visualisation::all(); 
        return view("VisualisationDisplay")->with('Visualisation',$Visualisation);
    }
    public function VisualizationFile($id){
        $Visualisation = Visualisation::find($id); 
         return view("Test",compact('Visualisation'));
    }
    public function downloadfile($image){
        $Visualisation = Visualisation::find($image); 

         return response() -> download('uploads/Visualisation/'.$image);
         
    }
    public function editfile($id){
        $Visualisation = Visualisation::find($id); 
        return view("VisualisationUpdate")->with('Visualisation',$Visualisation);
    }
    public function update(Request $request, $id){
        $Visualisation = Visualisation::find($id); 

       $Visualisation->DocumentName  = $request->input('DocumentName');
       $Visualisation->Description  = $request->input('Description');

        if($request->hasfile('image')){
                $file=$request->file('image');
                $extension =$file->getClientOriginalExtension(); //getting image extension 
                $filename=time().'.'.$extension;
                $file->move('uploads/Visualisation/', $filename);
                $Visualisation->image=$filename;

        } 

        $Visualisation->save() ;
        return redirect('/displayfiles')->with('Visualisation',$Visualisation);
    }
    public function delet($id){
        $Visualisation = Visualisation::find($id); 
        $Visualisation->delete();

        return redirect('/displayfiles')->with('Visualisation',$Visualisation);
    }
    public function Authentification(){
        return view("Authentification");
    }
    public function Accueil(){
        return view("Accueil");
    }
    public function Profile(){
        return view("Profile");
    }
    public function PDF(){
        // $Visualisation = Visualisation::all(); 
        $pdf = PDF::loadView('pdf');
        
        return $pdf->stream('hello.pdf');
        }
    public function PDF1(){
        $Student = Student::orderBy('created_at','DESC')->get();
        $subjects = subjects::all();
        $competences = competences::all();

            // $Visualisation = Visualisation::all(); 
            $pdf = PDF::loadView('import_excel.index',compact('Student', 'subjects', 'competences'));
            
            return $pdf->stream('hello.pdf');
            }
    public function index1(){
        $Student = Student::orderBy('created_at','DESC')->get();
        $subjects = subjects::all();
        $competences = competences::all();
        return view('import_excel.index',compact('Student', 'subjects', 'competences'));
 
    }
    public function import(Request $request){
        $request->validate([
            'import_file' => 'required'
        ]);
        Excel::import(new importStudent, request()->file('import_file'));
        return back()->with('success', 'Contacts imported successfully.');
    }
    public function Search(Request $request){
        $s =$request->input('s'); 
        $Visualisation = Visualisation::latest()
                    ->Search($s)
                    -> paginate(20);

        return view('VisualisationDisplay', compact('Visualisation','s'));
    }

    }
