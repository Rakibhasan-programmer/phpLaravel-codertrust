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
    // edit
    public function edit($id)
    {
        $contact = PhoneBook::find($id);
        return view('edit', compact('contact'));
    }
    // update
    public function update(Request $request, $id)
    {
        // validation
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|unique:phone_books,email',
            'contact' => 'required'
        ]);
        // update
        $contact = PhoneBook::find($id);
        $contact->update([
            'name' => $request->name,
            'email' => $request->email,
            'contact' => $request->contact
        ]);
        return redirect('/')->with('message', 'Data updated successfully');
    }
    // delete
    public function delete($id)
    {
        $contact = PhoneBook::find($id);
        $contact->delete();
        return redirect('/')->with('message', 'Data Deleted successfully');
    }


}
