<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignatureController extends Controller
{
    
    public function index()
    {
        return view('admin.signatures.index');
    }
    
      public function search()
    {
          
          
        return view('admin.search.index');
    }
    
        public function fileupload()
    {
          
          
        return view('admin.fileupload.index');
    }
    //
}
