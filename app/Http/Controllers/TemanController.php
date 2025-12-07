<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TemanController extends Controller
{
    
   private $dt = [
        [
            "idbuku"=>1,
            "namatamu"=>"Tika",
            "alamat"=>"bali",
            "kota"=>"Gianyar",
            "wa"=>"08851265444",
    
        ],
        [
            "idbuku"=>2,
            "namatamu"=>"Mira",
            "alamat"=>"Jawa",
            "kota"=>"Genteng",
            "wa"=>"08521423695",
    
        ],
    ];
    public function index(){
        $data = $this->dt;
        return view("teman",compact('data'));
    }
    public function detail ($id){
        $data = collect($this->dt)->fristwhere('idbuku',$id);
        if (!$data){
            abotr(404,"data toidak ada yang sesuai dengan id");
        }
        return view('detailview', compact('data'));
    }
}
