<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
//use App\Http\Resources\SignatureResource;

class SignatureController extends Controller
{
    
public function index()
    {
        $signatures = Signature::latest()
            ->ignoreFlagged()
            ->paginate(20);
        return $signature;

//        return SignatureResource::collection($signatures);
    }

    /**
     * Fetch and return the signature.
     *
     * @param Signature $signature
     * @return SignatureResource
     */
    public function show(Signature $signature)
    {
//        return new SignatureResource($signature);
    }

    /**
     * Validate and save a new signature to the database.
     *
     * @param Request $request
     * @return SignatureResource
     */
    public function store(Request $request)
    {
        return 'sadsasa';
//        $signature = $this->validate($request, [
//            'name' => 'required|min:3|max:50',
//            'email' => 'required|email',
//            'body' => 'required|min:3'
//        ]);
//
//        $signature = Signature::create($signature);

//        return new SignatureResource($signature);
    }

    //
}
