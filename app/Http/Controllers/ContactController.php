<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequst;
use App\Mail\ContactMessageCreated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{

    public function show()
    {
        return view('contact');
    }
    //validate implicite avec les FormRequest
    public function store(ContactRequst $request){

        $mailablle=new ContactMessageCreated($request->name,$request->Email,$request->Message);
        Mail::to('eude@gmail.com')->send($mailablle);
        return 'done';
    }
}
