<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function index()
    {
        $data["friends"] = User::whereNot("id", auth()->user()->id)->get();

        return view("chat", $data);
    }
}
