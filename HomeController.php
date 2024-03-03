<?php

namespace App\Http\Controllers;
use Illuminate\support\facades\DB;

use Illuminate\Http\Request;
use App\Models\authors;
use App\Models\books;

class HomeController extends Controller
{
    public function index(){

        $all= books::with('books')->get();
        return  compact('all');
    }


    public function Book(){

        $all=DB::table('books')->get();
        return($all);
    }

    public function Booksear($id){
        $all=DB::table('books')->where('id',$id)->get();
        return($all);

    }


    public function addbook(Request $req){

$all=DB::table('books')->insert([
       'tittle'=>$req->tittle

]);

}

public function upbook (Request $req,$id){
    $all=DB::table('books')->where('id',$id)->update([
'tittle'=>$req->tittle

    ]);
    if($all){

       return ["data"=>"has added"];
    }else{
        return ["data"=>"not added"];
    }

}
public function delbook($id){

    $all=DB::table('books')->where('id',$id)->delete();
    if($all){
        return ["data"=>"has deleted"];

    }else{
        return ["data"=>"has not deleted"];
    }

}









}



