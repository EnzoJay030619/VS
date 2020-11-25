<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\myStudent; 
use App\Models\Category; 
use Session;
class myStudentController extends Controller
{
    //
    public function create(){
        return view('insertStudent') ->with('categories',Category::all());;
    }
    
    public function store(){    //step 2 
        $r=request(); //step 3 get data from HTML
        $addCategory=myStudent::create([    //step 3 bind data
            'id'=>$r->ID, //add on 
            'name'=>$r->name, //fullname from HTML
            'department'=>$r->department,
            'age'=>$r->age,
            'gpa'=>$r->gpa,
            
        ]);
        Session::flash('success',"Product create succesful!");


        return redirect()->route('showStudent');
    }

    public function show(){
        $myStudents=myStudent::all();
        return view('showStudent')->with('myStudents',$myStudents);
    }
    public function delete($id){
        $myStudents=myStudent::find($id);
        $myStudents->delete();
        return redirect()->route('showStudent');
    }
}
