<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;
use App\User;
use DB;

class MessageController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }
  //affichage des messages
  public function index()
  {
      $messages = Message::all();
      return view('messages', ['messages' => $messages]);
    }
}
