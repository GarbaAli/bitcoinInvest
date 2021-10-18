<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailModelController extends Controller
{
    public function index()
    {
        return view('register');
    }

    
    public function store(Request $request)
    {
        $client = $request->validate([
            'username' => 'required|min:3|max:200',
            'wallet' => 'required|min:5|max:150',
            'email' => 'required|email|max:150|',
            'amount' => 'required|numeric'
        ]);

        //Envoie de mail au user

        Mail::to($client['email'])->cc('info@bitcoin-investissement.com')->send(new SendMail($client));
        session()->flash('message', 'text');

        return redirect()->route('index');
    }
}
