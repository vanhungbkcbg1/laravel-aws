<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    //
    public function index(){
        dd($_ENV);
        return view("upload/index");
    }

    public function upload(Request $request){

        //we use variable inside system variable
        //it was declare in docker-compose file

        $file=$request->file("file");
        $name=time().$file->getClientOriginalName();
        $file_path="images/".$name;
        Storage::disk("s3")->put($file_path,file_get_contents($file));
        dd($file);
    }
}
