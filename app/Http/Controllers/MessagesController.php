<?php

namespace App\Http\Controllers;

use App\Models\Messages;
use Illuminate\Http\Request;

class MessagesController extends Controller
{
    public function index() {

        return view('msgcreate');
        
    }

    public function store(Request $request) {
        $msg = new Messages ;
        $msg->nom = $request->nom;
        $msg->mail = $request->mail;
        $msg->numero = $request->Adresse;
        $msg->msg = $request->msg;
       

        $msg->save();

        return view('msgstore', compact('msg'));

    }
}
