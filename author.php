<?php

namespace App\Http\Controllers;
use Illuminate\support\facades\DB;

use Illuminate\Http\Request;
use App\Models\authors;
use App\Models\books;

class author extends Controller
{

    public function author(){

        $all=DB::table('authors')->get();
        return($all);
    }

    public function authorsear($id){
        $all=DB::table('authors')->where('id',$id)->get();
        return($all);

    }


    public function addauthor(Request $req){

$all=DB::table('authors')->insert([
       'tittle'=>$req->tittle

]);

}

public function upauhtor (Request $req,$id){
    $all=DB::table('authors')->where('id',$id)->update([
'tittle'=>$req->tittle

    ]);
    if($all){

       return ["data"=>"has added"];
    }else{
        return ["data"=>"not added"];
    }

}
public function delauthor($id){

    $all=DB::table('authors')->where('id',$id)->delete();
    if($all){
        return ["data"=>"has deleted"];

    }else{
        return ["data"=>"has not deleted"];
    }

}
}
