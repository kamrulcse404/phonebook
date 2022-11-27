<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContactController extends Controller
{
    public function create(){
        return view('create');
    }

    public function store(Request $request){

        $formData = $request->validate([
            'name' => 'required',
            'mobile' => 'required|unique:contacts',
            'email' => 'required',
            'group' => 'required',

        ]);

        $formData['user_id'] = Auth::user()->id;

        Contact::create($formData);
        
        return redirect()->route('home');
    }
}
