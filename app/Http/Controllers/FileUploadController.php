<?php

namespace App\Http\Controllers;

use App\Models\uploadfile;
use Illuminate\Http\Request;

class FileUploadController extends Controller
{
    public function index(){

        return view('HalamanUpload');
    }
    public function upload(Request $request)
    {
        //validate the request...
        $request->validate([
            'file1' => 'required|file|mimes:txt|max:1024',
            'file2' => 'required|file|mimes:txt|max:1024',
        ]);

        // dd($request->file1, $request->file2);
        // dd($request->all());
        //store the file...
        if($request->file('file1')->isValid() && $request->file('file2')->isValid()) {
        //    $filename1= $request->file('file1')->storeAs('public/uploads', $request->file('file1')->getClientOriginalName());
        //    $filename2= $request->file('file2')->storeAs('public/uploads', $request->file('file2')->getClientOriginalName());
            $filename1= $request->file('file1')->storeAs('public/uploads/', "file1.txt");
            $filename2= $request->file('file2')->storeAs('public/uploads/', "file2.txt");
        }

        // store to database
        // $uploadfile = new uploadfile();
        // $uploadfile->filename1 = $filename1;
        // $uploadfile->filename2 = $filename2;
        // $uploadfile->save();

        // redirect
        return redirect('/halamanupload');

    }
}
