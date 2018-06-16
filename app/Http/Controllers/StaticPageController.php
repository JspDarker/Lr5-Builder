<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\MessageBag;

class StaticPageController extends Controller
{
    public function index()
    {
        return view('static');
    }

    public function addPost(Request $request)
    {

// 1. validate request
        $validator = $request->validate([
            'title'=> 'required|string|max:255',
            'content'=> 'required'
        ]);



        if($err = $validator->errors()) {
            return Response::json([$err]);
        }

        /*if ($validator->fails()) {

            return Response::json(array('errors'=> $validator->getMessageBag()->toarray()));

        }*/


    }
}
