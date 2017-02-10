<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;
use App\User;
use DB;

class ContactController extends Controller
{
  public function index()
  {
      return view('contact');
  }
  
  public function contactForm()
  {
      $messages = Message::all();
      return view('newMessage', ['messages' => $messages]);
    }
  //ajout dans la db d'un message
  public function newMessage(Request $request)
  {
    $message = new Message;
    $message->name = $request->name;
    $message->object = $request->object;
    $message->message = $request->message;
    $message->save();
    return redirect('/');
  }
}
