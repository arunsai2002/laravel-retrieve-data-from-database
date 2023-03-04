<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\member;


class StudentController extends Controller
{
    //
    

    public function index(){
       
        $data = array(
            'list'=>DB::table('crudtable')->get()
        );
        return view('index',$data);
    }
//     public function store(Request $request){
   

//     // return $request->input();
//     $request->validate([
//         'email'=>'required',
//         'password'=>'required',
//     ]);

//     $query = DB::table('crudtable')->insert([
//         'email'=>$request->input('email'),
//         'password'=>$request->input('password'),
//     ]);

    
        
//     }
}
