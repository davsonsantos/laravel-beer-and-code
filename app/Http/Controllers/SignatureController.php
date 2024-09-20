<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class SignatureController extends Controller
{
    public function index()
    {
        $name = auth()->user()->nome;
        $document = Client::where('user_id', auth()->user()->id)->first()->document;
        $status = auth()->user()->client->signatures->first()->status->name;

        return view('signature', [
            'name' => $name,
            'document' => $document,
            'status' => $status
        ]);
    }
}
