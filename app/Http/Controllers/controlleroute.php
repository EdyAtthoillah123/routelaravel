<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controlleroute extends Controller
{
    
        function routecontroller(){
            return view('routecontroller');
        }
    
        public function index(){
            return "Ini Adalah Halaman Index Menggunakan Controller";
        }

        public function create(){
            return "Halaman ini nantinya digunakan untuk meanampilkan form untuk menambah data user";
        }

        public function store(){
            return "Halaman ini nantinya digunakan untuk menciptakan data user baru";
        }
      
        public function show($id){
            return "Halaman ini nantinya digunakan untuk mengambil satu data user dengan id = ". $id;
        }

        public function edit($id){
            return "Halaman ini nantinya digunakan untuk menampilkan form untuk mengubah data edit dengan id = ". $id;
        }

        public function update(Request $request, $id ){
            return "Halaman ini nantinya digunakan untuk mengubah data user dengan id = ". $id;
        }

        public function destroy( $id){
            return "Halaman ini nantinya digunakan untuk menghapus data user dengan id = ". $id;
        }
      
    
        public function controlcobapost(Request $request){
            dd($request->all());
        }
}
