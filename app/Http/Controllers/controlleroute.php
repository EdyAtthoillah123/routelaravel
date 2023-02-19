<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controlleroute extends Controller
{
    function index(){
        return "Farhan Abdillah";
        }
    
        function routecontroller(){
            return view('routecontroller');
        }
    
      
    
        public function dashboard(Request $request){
            dd($request->all());
        }
}
