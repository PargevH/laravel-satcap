<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subscribe;

class SubscribeController extends Controller
{
    public function index(){
        return view('index');
    }

    public function subscribe(Request $request){
        $this->validate($request, [
            'email' => 'required|email|max:255|unique:subscribe,email',
        ]);
        Subscribe::create(
            $request->all()
        );
        return view('index');
    }
}
