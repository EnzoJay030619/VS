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
        $image=$r->file('student-image');
        $image->move('images',$image->getClientOriginalName());   //images is the location  
        $imageStudent=$image->getClientOriginalName(); 
        $addCategory=myStudent::create([    //step 3 bind data
            'id'=>$r->ID, //add on
            'studentid'=>$r->studentid,
            'name'=>$r->name, //fullname from HTML
            'email'=>$r->email,
            'address'=>$r->address,
            'phonenumber'=>$r->phonenumber,
            'image'=>$imageStudent,
            
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
    public function edit($id){
       
        $myStudents =myStudent::all()->where('id',$id);
        //select * from products where id='$id'
        
        return view('editStudent')->with('myStudents',$myStudents);
    }
    public function update(){
        $r=request();//retrive submited form data
        $myStudents =myStudent::find($r->ID);  //get the record based on product ID      
        if($r->file('student-image')!=''){
            $image=$r->file('student-image');        
            $image->move('images',$image->getClientOriginalName());   //images is the location  
            $imageStudent=$image->getClientOriginalName();
            $myStudents->image=$imageStudent;
            }         
        $myStudents->name=$r->name;
        $myStudents->studentid=$r->studentid;
        $myStudents->email=$r->email;
        $myStudents->address=$r->address;
        $myStudents->phonenumber=$r->phonenumber;
        $myStudents->save(); //run the SQL update statment
        return redirect()->route('showStudent');
    }
}
