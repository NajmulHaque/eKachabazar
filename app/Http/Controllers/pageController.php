<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class pageController extends Controller
{
    public function index()
    {
        $title='KachaBazar.com';
        return view('pages.index',compact('title'));
    }
    public function services()
    {
        $data=array(
            'title'=>'Servces',
            'services'=>['WEb Developement','Programming','SEO']
        );
        return view('pages/services')->with($data);
    }

    public function fileUpload(Request $request)
    {
        $image=$request->file('image');
        $filename=$image->getClientOriginalName();
        $destinationPath=public_path('/images');
        $image->move($destinationPath,$filename);
        return redirect('/services');
    }
  

    /*public function videoUpload(Request $request)
     {

         if(Request::hasFile('file')){

             $file = Request::file('file');
             $filename = $file->getClientOriginalName();
             $path = public_path('/videos');
             return $file->move($path, $filename);
        }
    }*/
}
