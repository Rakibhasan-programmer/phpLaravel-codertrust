<?php

namespace App\Http\Controllers;

use App\Models\PhoneBook;
use Illuminate\Http\Request;

class PhoneBookController extends Controller
{
    public function index()
    {
        $allContact = PhoneBook::all();
        return view('phoneBookList', compact('allContact'));
    }
    public function create(Request $request)
    {
        // validation
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|unique:phone_books,email',
            'contact' => 'required'
        ]);
        // save value
        PhoneBook::create([
            'name' => $request->name,
            'email' => $request->email,
            'contact' => $request->contact
        ]);
        return redirect('/')->with('message', 'Data Saved successfully');
    }
}
