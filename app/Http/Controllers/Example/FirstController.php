<?php

namespace App\Http\Controllers\Example;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class FirstController extends Controller
{
    public function index(){
        return view('contact');
    }

    public function studenStore(Request $request){
        dd($request->all());
    }
    public function storeDetails(Request $request){
        dd($request->all());
        return redirect()->back()->with('success','Data inserted!');
    }


    
    public function about_index(){
        //return response('HelloOOO World', 200)->header('Content-Type', 'text/plain');

        return redirect()->back()->with('success','Data inserted!');
    }
    
    public function showName(Request $request){
        $request->session()->forget('key');
        session(['up' => 'upper']);
        //return view('name',['name'=>'Sunve']);
        return view::make('name',['name'=>'Tsung']);
        
    }





    
}
