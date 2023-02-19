<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controlleroute extends Controller
{
    
        function routecontroller(){
            return view('routecontroller');
        }
    
      
    
        public function controlcobapost(Request $request){
            dd($request->all());
        }
}
