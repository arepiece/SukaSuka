<?php

namespace App\Http\Controllers\Api\v1;

use App\Signature;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ReportSignature extends Controller
{
    
        public function store(Signature $signature)
    {
            
            return 'zzzz';
//        $signature->flag();
//
//        return $signature;
    }
    
    public function update(Signature $signature)
    {
        $flight = Signature::find($signature->id);
        $flight->flagged_at = \Carbon\Carbon::now();
        $flight->save();
        
        return $signature;
    }
    
    public function delete(Signature $signature)
    {
        $flight = Signature::find($signature->id);
        $flight->delete();
        
        return $signature;
    }
    //
}
